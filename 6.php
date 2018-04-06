<?php
      $host="localhost";
	  $user="root";
	  $pass="";
	  mysql_connect($host,$user,$pass);
	  mysql_select_db("payilagam");
	  $q=mysql_query("select * from data");
	  
	  
	  
	    $data = array();
		while($row = mysql_fetch_assoc($q))
		{
			$data[] = $row;
		}
		
		$x = json_encode($data);
	  
	    echo $x;
		
		
		
		//print_r($data);
	  /*
	  $row=mysql_fetch_object($q);
	  
	  print_r($row);
	  /*
	  foreach($row as $row->name)
	  {
		  echo $row->name;
	  }
	 
	  
	 
	  
	  while($row=mysql_fetch_object($q))
      {
		  echo $row->name;
	  }
    
	   
      /*
	  $x = json_encode($row);
	  
	  echo $x;
      */
?>
