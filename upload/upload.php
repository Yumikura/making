<?php
	include_once ("./functions.php");
	$stmt = $dbh->prepare('INSERT INTO news_posts VALUES(:title, :content, :image)');
	$stmt->bindParam(':title', $title);
 	$stmt->bindParam(':content', $content);
 	$stmt->bindParam(':image', $iamge);
	$stmt->execute();
	$dbh = null;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>内容確認画面</title>
</head>
<body>
	<div class="container">
		<h1 class="main_title">内容確認画面</h1>
		<div class="content">
							<form action="./admin/confirm.php" method="post">
					<p><label for="nam">お名前　</label><br>
					<input type="text" name="name" size="30" id="num" placeholder="お名前をご記入下さい" required>
					<p><label for="mail">email　</label><br>
					<input type="text" name="email" size="30" id="mail" placeholder="emailアドレスをご記入下さい" required>
					<p><label for="com">お問い合わせ内容記入欄</label><br>
					<textarea name="comment" rows="5" cols="50" placeholder="お問い合わせ内容をご記入下さい" id="com" required></textarea></p>
					<input type="submit" value="送信">
				</form>
		</div>
			<button onClick="location.href='./done.php'">送信</button>
			<button onClick="histry.back();'">入力画面に戻る</botton>
	</div>
</body>
</html>