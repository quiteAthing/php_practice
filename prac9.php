<?php
#insert test
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username='root';
	$password='';
	$stmt="insert into articles(userid,article,title,submitted) values(:userid,:article,:title,now())";
	$stmt2="update articles set article=:u_article,title=:u_title,lastupdate=now() where userid=1";
	
	try{
		$conn=new PDO("mysql:host=$host_name;dbname=$dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$pstmt=$conn->prepare($stmt);
	    $pstmt->bindParam(':userid', $userid);
	    $pstmt->bindParam(':article', $article);
	    $pstmt->bindParam(':title', $title);
		
		$userid=2;
		$article="l l lorem ipsum oasdfwsejthgblsdfnsdfgnsdfgnsk;dfjgns";
		$title="new article 2";
		
		$pstmt->execute();
		
		
		$pstmt=$conn->prepare($stmt2);
		
		$pstmt->bindParam(":u_article",$u_article);
		$pstmt->bindParam(":u_title",$u_title);
		
		$u_article="這是內容 from php";
		$u_title="UPDATE from php2223";
		
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