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


class Employee
{
	private Person $person;

	public function __construct(Person $person)
	{
		$this->person = $person;
	}

	public function getName(): string
	{
		return $this->person->getName();
	}

	public function getAge(): int
	{
		return $this->person->getAge();
	}

	public function getGrade(): string
	{
		return $this->person->getGrade();
	}
}

// Client（実行 = php Composition.php）
$person = new Person('宮脇', 23, 'J1');
$miyawaki = new Employee($person);
echo '名前：' . $miyawaki->getName() . PHP_EOL;
echo '年齢：' . $miyawaki->getAge() . PHP_EOL;
echo 'グレード：' . $miyawaki->getGrade() . PHP_EOL;