<?php  

      $host="localhost";
	  $user="root";
	  $pass="";
	  mysql_connect($host,$user,$pass);
	  mysql_select_db("payilagam");
	  $q=mysql_query("select name from data");
	  
	  while($row=mysql_fetch_object($q))
	  {    
        $x= $row->name;
	  }
	  
	  $y = json_encode($x);
	 
	  
	  echo $y;
      


?> 