<?php
      class A{
		  public $name;
		  public $age;
		  public $mob;
		  
	  }
       $obj = new A();
	   $obj->name="Guhan";
	   $obj->age=27;
	   $obj->mob=979181;
	   
	   //echo json_encode($obj);
	   
	   $x=  json_encode($obj);
	   
	   /*
	   foreach($x as $value)
	   {
		   echo $value."<br>";
	   }
	                 //   Invalid argument supplied for foreach()  bcz it is json data
					 // {"name":"Guhan","age":27,"mob":979181}
	   */
	   
	   print_r($x);
	   
	   echo "<br><br>";
	   
	   $y=json_decode($x);
	   
	   //print_r($y);
	   
	   
	   foreach($y as $value)
	   {
		   echo $value."<br>";
	   }
?>