<?php
      $host="localhost";
	  $user="root";
	  $pass="";
	  mysql_connect($host,$user,$pass);
	  mysql_select_db("payilagam");
	  $q=mysql_query("select name from data");
	  
	  
	  
	    $data = array();
		while($row = mysql_fetch_row($q))
		{
			$data[] = $row;
		}
		
		$x = json_encode($data);
	  
	    echo $x;
		
		
		/*
		if ---mysql_fetch_assoc($q)
		
	    $x= [  {"name":"Guhan"},
		       {"name":"test"},
		       {"name":"Manikandan"}
		 
		   ]
		
		*/
		
		/*  if --  mysql_fetch_array($q))
		 
		    [{"0":"Guhan","name":"Guhan"},{"0":"test","name":"test"},{"0":"Manikandan","name":"Manikandan"}]
			
			*/
		
		/*
		     if    mysql_fetch_object($q))
			 
			 
			 [{"name":"Guhan"},{"name":"test"},{"name":"Manikandan"}]
			 
		
		*/
		
		/*
		     if -- mysql_fetch_row($q)
			 
			 [["Guhan"],["test"],["Manikandan"]]
		*/
		
		
?>