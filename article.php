<!DOCTYPE html>

<?php
	
	require_once("/control_pages/db_connection.php");
	$isauthor=false;
	$stmt="select article,title,userid,submitted,lastupdate from article where articleid=:articleid";
	$pstmt=$conn->prepqre($stmt);
	$articleid=$_GET("articleid");
	$pstmt->bindParams(":articleid",$articleid);
	$content=$pstmt->execute()->fetch();
	
	

?>

<html>
	<head>
		<meta charset="utf-8">
		<title>XBLOG   <?php $content["title"] ?></title>
	</head>
	
	<body>
		<div style="background:gray;">
			<p>userid<?php $content["userid"]?></p>
			<p>lastupdate<?php $content["lastupdate"]?></p>
			<p>submitted<?php $content["submitted"]?></p>
		</div>
		<textarea readonly="readonly" style="resize:none;border:0;"><?php$content["article"] ?></textarea>
		<?php if(isauthor){		?>
		<a href="http://localhost:8888/php_prac_dep/article_make.php?articleid=<?php $contetent["articleid"] ?>&">編輯文章</a>
		<?php?>
	</body>

</html>

