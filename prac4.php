<?php
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username="prac";
	$password="phppractice";
	
	try{
	$conn=new PDO("mysql:host=$host_name;dbname=$dbname",$username,$password);
	}
	catch(PDOException $e )
	{
		echo "<br>",$e->getMessage();
		
	}
	$result=$conn->query("select * from members where id=1");
	echo "result ",$result->fetch();
	
	$conn->db=null;
?>