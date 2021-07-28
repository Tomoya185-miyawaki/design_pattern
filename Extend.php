<?php

declare(strict_types=1);

class Person
{
	private string $name;
	private int $age;
	private string $grade;
	/**
	 * Personクラスに性別（Gender）も取得する変更が入ったとする
	 */
	private string $gender;

	public function __construct(string $name, int $age, string $grade, string $gender)
	{
		$this->name = $name;
		$this->age = $age;
		$this->grade = $grade;
		// 変更箇所
		$this->gender = $gender;
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

	// 変更箇所
	public function getGender(): string
	{
		return $this->gender;
	}
}


class Employee extends Person
{
	// 変更箇所（子クラスも変更が必要になる → Personを継承しているクラスだけ変更が必要になってしまう）
	public function __construct(string $name, int $age, string $grade, string $gender)
	{
			parent::__construct($name, $age, $grade, $gender);
	}
}

// Client （実行 = php Extend.php）
$miyawaki = new Employee('宮脇', 23, 'J1', '男性');
echo '名前：' . $miyawaki->getName() . PHP_EOL;
echo '年齢：' . $miyawaki->getAge() . PHP_EOL;
echo 'グレード：' . $miyawaki->getGrade() . PHP_EOL;