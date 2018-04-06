<?php
class A {
	public $name="Guhan";
	public $age=34;
	public $city="ramnad";
}
$Obj=new A();
/*
$Obj->name = "Guhan";
$Obj->age = 30;
$Obj->mob = 97987;
*/
$x = json_encode($Obj);

echo $x;
?>

