<?php 

class Calculation {

	public $a, $b, $c;

	public function sum()
	{
		$this->c = $this->a + $this->b;
		return $this->c;
	}
	public function sub()
	{
		$this->c = $this->a - $this->b;
		return $this->c;
	}

}

$c1 = new Calculation();
$c1->a = 20;
$c1->b = 30;
$c2 = new Calculation();
$c2->a = 40;
$c2->b = 30;

echo "the value of sum : ".$c1->sum()."\n";
echo "the value of sub : ".$c2->sub();


 ?>