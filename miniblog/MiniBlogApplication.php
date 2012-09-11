<?php

class MiniBlogApplication extends Application
{
    protected $login_action = array('account', 'signin');

    public function getRootDir()
    {
        // 上位クラスでabstractで定義されているので必須
        return dirname(__FILE__);
    }

    protected function registerRoutes()
    {
        // 上位クラスでabstractで定義されているので必須
        return array(
            '/'
              => array('controller' => 'status', 'action' => 'index'),
            '/status/post'
              => array('controller' => 'status', 'action' => 'post'),
            // StatusContrllerの他のルーティング
            '/user/:user_name'
              => array('controller' => 'status', 'action' => 'user'),
            '/user/:user_name/status/:id'
              => array('controller' => 'status', 'action' => 'show'),
            '/account'
              => array('controller' => 'account', 'action' => 'index'),
            '/account/:action'
              => array('controller' => 'account'),
            );
    }

    protected function configure()
    {
        // データベースの接続設定を定義する
        $this->db_manager->connect('master', array(
            'dsn' => 'mysql:unix_socket=/opt/local/var/run/mysql5/mysqld.sock;dbname=mini_blog',
            'user' => 'root',
            'password' => ''
        ));
    }
}
