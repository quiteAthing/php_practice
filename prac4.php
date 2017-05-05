<?php
	echo "Hello";
	
	$host_name="127.0.0.1";
	$dbname="xblog";
	$username="prac";
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