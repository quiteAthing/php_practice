<?php
#insert test
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username='root';
	$password='';
	$stmt="insert into articles(userid,article,title,submitted) values(:userid,:article,:title,now())";
	
	try{
		$conn=new PDO("mysql:host=$host_name;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pstmt=$conn->prepare($stmt);
	    $pstmt->bindParam(':userid', $userid);
	    $pstmt->bindParam(':article', $article);
	    $pstmt->bindParam(':title', $title);
		
		$userid=1;
		$article="asfjksgskldfjkgbsdjklfgbsdjkl你好，這是麥當勞歡樂送，habe oasdfwsejthgblsdfnsdfgnsdfgnsk;dfjgns";
		$title="new article 1";
		
		$pstmt->execute();
		
		$result = $conn->query("select * from articles");
		
		while($row = $result->fetch(PDO::FETCH_ASSOC)) {
				echo "title: " ,)$row["title"],"<br>";
		}
		$conn->db=null;
		

		
	}
	catch(PDOException $e )
	{
		echo "<br>abcd",$e->getMessage();

		
	}
	
	
	
?>