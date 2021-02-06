<?php 
class base {
	// public $name;
	protected $name;
	public function __construct($n)
	{
		$this->name = $n;

	}
	public function show()
	{
		echo "my Name is : ".$this->name;
	}
}

$obj = new base("javed khan");
// $obj->name = "khan javed"; // overide the same variable due to global scope being dealred as a public variable 
$obj->show();


 ?>