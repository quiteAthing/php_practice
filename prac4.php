<?php
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username="root";
	$password="phppractice";
	
	try{
		$conn=new PDO('mysql:host=$host_name;dbname=$dbname',$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRORMODE,PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e )
	{
		echo "<br>abcd",$e->getMessage();

		
	}
	
	
	
?>