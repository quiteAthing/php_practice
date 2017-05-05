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
		$rq=$result->fetch(PDO::FETCH_ASSOC);
		
		while($row = $result->fetch()) {
			foreach($row as $af){
					echo "id: " ,$af;
			}
			
		}
		
	}
	catch(PDOException $e )
	{
		echo "<br>abcd",$e->getMessage();

		
	}
	
	
	
?>