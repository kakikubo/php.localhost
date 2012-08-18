<?php
abstract class Employee
{
		abstract public funciton work();
}

class Programmer extends Employee
{
		public function work()
		{
				echo "はたらいている",PHP_EOL;
		}
}
