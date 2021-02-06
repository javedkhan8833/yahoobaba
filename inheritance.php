<?php 
class employee{
	public $name;
	public $age;
	public $salary;
	public function __construct($n,$a,$s){

		$this->name = $n;
		$this->age = $a;
		$this->salary = $s;

	}
	public function info()
	{
			echo "<h1>Employee Profile</h1>";
		echo $this->name."<br>";
		echo $this->age."<br>";
		echo $this->salary;
	}
}
class manager extends employee{
	public $ta = 1000;
	public $phone = 200;
	public $totsalary;
	public function info()
	{

		echo "<h1>Manager Profile</h1>";
		$this->totsalary = $this->ta + $this->phone;
		echo $this->name."<br>";
		echo $this->age."<br>";
		echo $this->totsalary;
	}

}

$e1 = new employee("javed khan",3,2000);
$e2 = new manager("bashir ahmad",30,300000);
$e1->info();
$e2->info();



 ?>