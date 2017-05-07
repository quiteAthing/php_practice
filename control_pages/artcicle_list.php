<?php
#delete row
	echo "Hello";
	
	$host_name="localhost";
	$dbname="xblog";
	$username='root';
	$password='';
	$stmt="select articleid,title,article,submitted,lastupdate from articles order by articleid desc limit 10";
	
	
	
	
	
	
?>

<?php while(true){?>

	<a href="http://localhost:8888/php_prac_dep?articleid=<?php $article["aricleid"]?>">
	<span>文章完成</span><span><?php $article["submitted"]?><span>
	<span>最後更新</span><span><?php $article["lastupdate"]?><span>
	
<?php }?>