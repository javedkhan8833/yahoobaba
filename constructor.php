<?php 

class person{

	public $name = "no Name availabe";
	public $ag4 = "0";
	public function show(){
		
		echo "my name is : ".$this->name."<br>";
		echo "my age is : ".$this->age;
	}
}

$obj = new person();
// $obj->name = "javed khan shinwari";
$obj->age = "but age is = "."30";
echo $obj->show();

// public $name;
// public function __constructor($n){
// 	$this->name = $n;
// }
// $obj = new person("Yahoo bAba channel ");

// }

 ?>