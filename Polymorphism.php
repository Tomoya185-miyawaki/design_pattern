<?php

declare(strict_types=1);

/* 従業員インターフェース */
interface Employee {
	function getName():string;
	function getSalary():int;
}

/* エンジニアクラス */
class Engineer implements Employee {
	private int $salary = 20;
	private string $name = 'エンジニア';

	public function getName(): string
	{
		return $this->name;
	}
	public function getSalary(): int
	{
		return $this->salary;
	}
}

/* デザイナークラス */
class Designer implements Employee {
	private int $salary = 25;
	private string $name = 'デザイナー';

	public function getName(): string
	{
		return $this->name;
	}
	public function getSalary(): int
	{
		return $this->salary;
	}
}

/* ディレクタークラス */
class Director implements Employee {
	private int $salary = 30;
	private string $name = 'ディレクター';

	public function getName(): string
	{
		return $this->name;
	}
	public function getSalary(): int
	{
		return $this->salary;
	}
}

// Client （実行 = php Polymorphism.php）
$engineer = new Engineer();
$designer = new Designer();
$director = new Director();
$employees = array($engineer, $designer, $director);
foreach($employees as $employee) {
	echo $employee->getName() . 'の給料は' . $employee->getSalary() . "万円です。" . PHP_EOL;
}
