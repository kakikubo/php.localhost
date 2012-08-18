<?php
require_once './Employee.php';
class Programmer extends Employee
{
		public function __construct($name, $type)
		{
				parent::__construct($name,$type);
		
		}

		public function work($how = 'コンピュータで')
		{
				echo $how, 'プログラムを書いています', PHP_EOL;
		}

		public function getSalary()
		{
				return $salary * 2;// parentでfinalなのでダメー
		}
}
$kakikubo = new Programmer('柿久保', Employee::REGULAR);
var_dump($kakikubo);
// $how = 'お家で';
$kakikubo->work();
