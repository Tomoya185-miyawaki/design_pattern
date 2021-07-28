<?php

declare(strict_types=1);

class Person
{
	private string $name;
	private int $age;
	private string $grade;

	public function __construct(string $name, int $age, string $grade)
	{
		$this->name = $name;
		$this->age = $age;
		$this->grade = $grade;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function getAge(): int
	{
		return $this->age;
	}

	public function getGrade(): string
	{
		return $this->grade;
	}
}


class Employee extends Person
{
	public function __construct(string $name, int $age, string $grade)
	{
		parent::__construct($name, $age, $grade);
	}
}

// Client （実行 = php Extend.php）
$miyawaki = new Employee('宮脇', 23, 'J1');
echo '名前：' . $miyawaki->getName() . PHP_EOL;
echo '年齢：' . $miyawaki->getAge() . PHP_EOL;
echo 'グレード：' . $miyawaki->getGrade() . PHP_EOL;