<!DOCTYPE html>
<?php
	$stmt="select article,title,userid,submitted,lastupdate from article where articleid=:articleid";
	$pstmt=$conn->prepqre($stmt);
	$articleid=$_GET("articleid");
	$pstmt->bindParams(":articleid",$articleid);
	$content=$pstmt->execute()->fetch();
	

?>

<html>
	<head>
		<meta charset="utf-8">
		<title>xblog edit article</title>
		<script>
			function createArticle(){
				
				
				
			}
			function sendEdit(){
				sendRequest(false);
			}
			
			function sendRequest(create){
				var content={
					article:document.getElementById("article").innerHTML,
					articleid=document.getElementById("articleid").innerHTML,
					title=document.getElementById("title").innerHTML
				}
				
				var xhr=new XMLHttpRequest();
				xhr.onreadystatechange=function(resp){
					switch(this.readyState){
						case 1 : xhr.send(JSON.stringify(content));break;
						case 4 : if(xhr.status==200){
							var rst=JSON.parse(xhr.responseText);
								if(rst.articleid==-1){
									alert("操作失敗，請稍後再試");
								}else{
									window.location="http://localhost:8888/article.php?articleid="+rst.articleid.toString();
								}
						}break;
					}
				}
				
				xhr.open("POST","http://localhost:8888/php_prac_dep/article_edit?create="+create.toString(),true);
			}
		</script>
	</head>
	<p id="articleid" style="display:none"><?php $content["articleid"]?></p>
	<input id="title" value="<?php $content["title"]?>"<br>
	<textarea id="article"><?php $content["article"]?></textarea><br>
	<?php if(articleid==-1){?>
	<input  type="button" value="發文" onclick="createArticle()">
	<?php }else{?>
	<input type="button" value="送出編輯" onclick="sendEdit()">
	<?php }?>
	<body>
		
	</body>
</html>