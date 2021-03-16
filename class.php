<?php
class calci
{
    public function add($a,$b){
        return $a+$b;
    }
    public function sub($a,$b){
        return $a-$b;
    }
}
$addition = new calci();
echo $addition->sub(5,2);
echo"<br>";
 echo $addition->add(3,5);
 echo"<br>";

 //

 class Nums  
{
    private $a = 7;
    private $b = 8;

    public function sum() 
    {
        return $this->a + $this->b;
    }

}

$obj = new Nums();
$c = $obj->sum();
echo $c;
echo"<br>";
//
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo"<br>";
//
$cars = array("hello"=>"Volvo", "BMW", "Toyota"); 
echo   $cars["hello"]. $cars[0] ;
echo "<br>";
//
$cars = array("Volvo", "BMW", "Toyota",3,4,"true");
$arrlength = count($cars);

for($x = 0; $x <$arrlength; $x++) {
  echo $cars[$x]."<br>";
 
}


$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";

echo $cars[1],$cars[2];

 ?>