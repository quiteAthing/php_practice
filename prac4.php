<?php
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username="root";
	$password="";
	
	try{
		$conn=new PDO("mysql:host=$host_name;dbname=$dbname",$username,$password);
		$result=$conn->query("select * from members where id=1");
		echo "result ",(string)$result->rowCount();
		
	}
	catch(PDOException $e )
	{
		echo "<br>",$e->getMessage();
		echo (string)$conn,"<br>";
		
	}
	
	
	
?>