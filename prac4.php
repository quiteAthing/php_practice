<?php
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username="root";
	$password="";
	
	try{
		$conn=new PDO("mysql:host=$host_name;dbname=$dbname",$username,$password);
		$result=$conn->query("select * from members where id=1");
		echo "result ",$result->fetch();
		echo (string)$conn,"<br>";
	}
	catch(PDOException $e )
	{
		echo "<br>",$e->getMessage();
		echo (string)$conn,"<br>";
		
	}
	
	
	
?>