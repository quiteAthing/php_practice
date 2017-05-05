<?php
#delete row
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username='root';
	$password='';
	$stmt="delete from articles where articleid=:articleid";
	
	try{
		$conn=new PDO("mysql:host=$host_name;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pstmt=$conn->prepare($stmt);
	    $pstmt->bindParam(':articleid', $articleid);
		

		$articleid=4;
		
		$pstmt->execute();
		
		$result = $conn->query("select title from articles");
		
		while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo "title: " ,$row["title"],"<br>";
		}
		$conn->db=null;
		

		
	}
	catch(PDOException $e )
	{
		echo "<br>abcd",$e->getMessage();

		
	}
	
	
	
?>