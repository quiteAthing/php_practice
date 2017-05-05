<?php
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username="root";
	$password="";
	
	try{
		$conn=new PDO('mysql:host=$host_name;dbname=$dbname',$username,$password);
		$stmt=$conn->prepare("select * from members where id=1");
		$stmt->execute();
		    // set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result->fetchAll();
		
		
	}
	catch(PDOException $e )
	{
		echo "<br>",$e->getMessage();
		echo (string)$conn,"<br>";
		
	}
	
	
	
?>