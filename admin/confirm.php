<?php
	session_start();
	include_once ("./functions.php");
	var_dump($_POST["name"]);
	$name = h($_POST["name"]);
	$email = h($_POST["email"]);
	$come = h($_POST["comment"]);
	$comment_before = nl2br($come);
	$comment = strip_tags($comment_before,"<br>");
	
	$_SESSION["post"]["name"] = $name;
	$_SESSION["post"]["email"] = $email;
	$_SESSION["post"]["comment"] = $comment;
	
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
			<h3 class="subtitle">あなたのお名前</h3>
			<p>『<?php echo $name; ?>』</p>
			<h3 class="subtitle">emailアドレス</h3>
			<p>『<?php echo $email; ?>』</p>
			<h3 class="subtitle">お問い合わせ内容</h3>
			<p>『<?php echo $comment; ?>』</p>
			<p>以上の内容を送信します。<br>
			よろしければ「送信」ボタンを、修正する場合は「入力画面に戻る」<br>
			ボタンをクリックしてください。</p>
		</div>
			<button onClick="location.href='./done.php'">送信</button>
			<button onClick="histry.back();'">入力画面に戻る</botton>
	</div>
</body>
</html>