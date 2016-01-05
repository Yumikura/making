<?php
	session_start();
	
	$name = $_SESSION["post"]["name"];
	$email = $_SESSION["post"]["email"];
	$comment = $_SESSION["post"]["comment"];
	
	var_dump($name);
	
	
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<title>送信完了</title>
</head>
<body>
	<div class="container">
		<h1 class="main_title">送信完了</h1>
		<div class="content">
			<h3 class="subtitle">メッセージが送信されました</h3>
			<p>お問い合わせありがとうございました。</p>
		</div>
			<button onClick="location.href='../index.html'">戻る</botton>
	</div>
</body>
</html>