<?php
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username="prac@localhost";
	$password="phppractice";
	
	try{
	$conn=new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
	}
	catch(PDOException $e )
	{
		echo "<br>",$e->getMessage();
		
	}
	$result=$conn->query("select * from members where id=1");
	echo "result ",$result;
	
	$conn->close();
?>