<?php
class Employee
{
		const PARTTIME = 0x01; //アルバイト
		const REGULAR  = 0x02; //正社員
		const CONTRACT = 0x04; //契約社員
		private $name; // 名前
		private $type; // 雇用形態
		private $state = '働いている';
		private static $company = '技術評論社';
		public $salary = 20;

		public function __construct($name, $type)
		{
				$this->name = $name;
				$this->type = $type;
		}

		public static function getCompany()
		{
				return self::$company; //Employee::$companyと同義
				// return $this->$company; //これは誤り?らしい FIXME
		}

		public static function setCompany($value)
		{
				self::$company = $value;
		}

		public function getState()
		{
				return $this->state;
		}

		public function setState($state)
		{
				$this->state = $state;
		}

		public function getName()
		{
				return $this->name;
		}

		public function work()
		{
				echo '書類を整理しています', PHP_EOL;
		}

		public final function getSalary()
		{
				return $this->salary;
		}
}

// $yamada = new Employee('山田', Employee::REGULAR);
// echo $yamada->getName(), PHP_EOL;

#$yamada = new Employee();
#$yamada->name = '山田';
#$yamada->setState('休憩している');
#echo $yamada->getState(), $yamada->name, 'さん';
#$yamada->work();
#$yamada->job = 'プログラマ'; //突然プロパティを突っ込む事もできるが、
#echo $yamada->job,PHP_EOL;   // 他の人が見た時にわからなくなるので非推奨
// $suzuki = $yamada; // 参照を代入
// $suzuki = clone $yamada; // 複製を代入

// echo '従業員はみんな', Employee::$company, 'に務めています', PHP_EOL;
// echo $yamada->getCompany(), PHP_EOL;

// echo Employee::CONTRACT, PHP_EOL;

#echo Employee::getCompany(), PHP_EOL;
#Employee::setCompany('SRA');
#echo Employee::getCompany(), PHP_EOL;
