<?php

class DbManager
{
    protected $connections = array();
    protected $repository_connection_map = array();
    protected $repositories = array();

    // p.420 のマジックメソッドを実装(__isset(),__unset())
    public function __isset($name)
    {
        return isset($this->repositories[$name]);
    }

    public function __unset($name)
    {
        unset($this->repositories[$name]);
        // 削除されては困る場合は例外を投げるようにする
        // throw new BadMethodCallException('__unset() is not supported');
    }
    // callメソッドを浸かって ->get('User')を->getUser()で行えるようにする
    public function __call($method, $args)
    {
        if ('get' === substr($method, 0, 3)){
            $name = substr($method, 3); // getUserならUserが返る

            return $this->get($name);
        }
        throw new BadMethodCallException('Call to undefined method ' . $method);
    }

    public function connect($name, $params)
    {
        $params = array_merge(array(
            'dsn' => null,
            'user' => '',
            'password' => '',
            'options' => array(),
        ),$params);

        $con = new PDO(
            $params['dsn'],
            $params['user'],
            $params['password'],
            $params['options']
        );

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->connections[$name] = $con;
    }

    public function getConnection($name = null)
    {
        if (is_null($name)) {
            return current($this->connections);
        }
        return $this->connections[$name];
    }

    public function setRepositoryConnectionMap($repository_name, $name)
    {
        $this->repository_connection_map[$repository_name] = $name;
    }

    public function getConnectionForRepository($repository_name)
    {
        if (isset($this->repository_connection_map[$repository_name])){
            $name = $this->repository_connection_map[$repository_name];
            $con  = $this->getConnection($name);
        } else {
            $con  = $this->getConnection();
        }
        return $con;
    }

    public function get($repository_name)
    {
        if (!isset($this->repositories[$repository_name])){
            $repository_class = $repository_name . 'Repository';
            $con = $this->getConnectionForRepository($repository_name);

            $repository = new $repository_class($con);

            $this->repositories[$repository_name] = $repository;
        }
        return $this->repositories[$repository_name];
    }

    public function __destruct()
    {
        foreach ($this->repositories as $repository){
            unset($repository);
        }

        foreach ($this->connections as $con){
            unset($con);
        }
    }
}


