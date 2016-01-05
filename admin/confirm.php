<?php
	var_dump($_POST);
	$name = $_post["name"];
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
			<p>以下の内容でよろしければ送信下さい</p>
			<h3 class="subtitle">あなたのお名前</h3>
			<p></p>
			<h3 class="subtitle">emailアドレス</h3>
			<p></p>
			<h3 class="subtitle">お問い合わせ内容</h3>
			<p></p>
		</div>
			<button onClick="location.href='./done.php'">送信</button>
			<button onClick="location.href='../index.html'">入力画面に戻る</botton>
	</div>
</body>
</html>