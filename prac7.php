<?php
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username='root';
	$password='';
	
	try{
		$conn=new PDO("mysql:host=$host_name;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		
		$result = $conn->query("select * from members");
		
		while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo "id: " ,$row["email"],"<br>";
		}
		$conn->db=null;
	}
	catch(PDOException $e )
	{
		echo "<br>abcd",$e->getMessage();

		
	}
	
	
	
?>