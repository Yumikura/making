<?php
	include_once "./functions.php";
	$sql1 =  $dbh->query("SELECT * FROM news_posts ORDER BY id DESC LIMIT 1");
	$sql = $dbh->query("SELECT * FROM news_posts ORDER BY id DESC LIMIT 1,5");
	$dbh = null;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<title>スポールブール</title>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="./js/main.js"></script>
</head>
<body>
	<div class="posi_area">
		<nav class="posi_nav">
			<ul>
				<div class="memu_button">
					<li><a id="b1" class="b1" href="#c1"><i class="fa fa-newspaper-o"></i></a></li>
				</div>
				<div class="memu_button">
					<li><a id="b2" class="b2" href="#c2"><i class="fa fa-dribbble"></i></a></li>
				</div>
				<div class="memu_button">
					<li><a id="b3" class="b3" href="#c3"><i class="fa fa-calendar"></i></a></li>
				</div>
				<div class="memu_button">
					<li><a id="b4" class="b4" href="#c4"><i class="fa fa-subway"></i></a></li>
				</div>
				<div class="memu_button">
				<li><a id="b5" class="b5" href="#c5"><i class="fa fa-envelope-o"></i></a></li>
				<div>
			</ul>
		</nav>
		<div id="gotop" class="memu_button">
			<p id="b6" class="gotop"><i class="fa fa-home"></i></p>
		</div>
	</div>
	<header>
		<div class="main_vis">
			<h1 class="logo align_center"><img src="./img/logo_w.png" alt="logo" width="15%"></h1>
			<h1 class="title align_center">THIS IS MAIN MESSAGE</h1>
			<img src="http://placeimg.com/640/480/nature" alt="" width="100%" height="600">
		</div>
		<nav class="main_nav clear_fix">
			<ul>
				<li><a class="b1" href="#c1">NEWS</a></li>
				<li><a class="b2" href="#c2">menu2</a></li>
				<li><a class="b3" href="#c3">イベントカレンダー</a></li>
				<li><a class="b4" href="#c4">アクセス</a></li>
				<li><a class="b5" href="#c5">お問い合わせ</a></li>
			</ul>
		</nav>
	</header>
	<div class="main">
		<div id="c1" class="container">
			<div class="content">
				<h2>NEWS</h2>
				<section class="resent_news">
					<h3>最新NEWS</h3>
					<div class="news_content">
						<p><img src="http://placeimg.com/640/480/nature" alt="" width="40%" height="300" align="left"></p>
						<?php foreach($sql1 as $row): ?>
						<h4><?php echo $row['title']; ?></h4>
						<h5>投稿日時：<?php echo $row['date']; ?></h5>
						<p><?php echo $row['content']; ?></p>
						<?php endforeach; ?>
						<p><br clear="all">
						</p>
					</div>
				</section>
				<table class="past_news">
					<h3>バックナンバー</h3>
					<?php foreach($sql as $row): ?>
					<tr>
						<td><a href="./news.php"><?php echo $row['title']; ?></td><td><?php echo $row['date']; ?></td><td><?php echo $row['content']; ?></a></td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
		<div id="c2" class="container">
			<div class="content">
				<h2>スポールブールについて<h2>
				<h3>スポールブールとは？</h3>
				<p></p>
				<h3>スポールブールは本気になれるスポーツです！</h3>
				<p></p>
			</div>
		</div>
		<div id="c3" class="container">
			<div class="content align_center">
				<h2>イベントカレンダー</h2>
<iframe src="https://calendar.google.com/calendar/embed?height=500&amp;wkst=1&amp;bgcolor=%233333ff&amp;src=uqnt1rqkn5j5nc4sjs4f37htr8%40group.calendar.google.com&amp;color=%23865A5A&amp;ctz=Asia%2FTokyo" style="border:solid 1px #777" width="800" height="500" frameborder="0" scrolling="no"></iframe>			</div>
		</div>
		<div id="c4" class="container">
			<div class="content">
			<h2 class="sub_title align_center">練習場所へのアクセス</h2>
			<p>大阪北エリアのの扇町公園にて土日どちらかの午前中に練習を行っています。</p>
			<p><a href="#c3">練習日程はイベントカレンダーを参照下さい</a></p>
			<p><a href="#c5">見学をご希望の方はお気軽に連絡ください</a></p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4638.774664874741!2d135.50588746247797!3d34.702430045821664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x6e9125ed03ad05f9!2z5omH55S65YWs5ZyS!5e0!3m2!1sja!2sjp!4v1451979725890" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			<h3>扇町公園へのアクセス</h3>
			<ul>
				<li>大阪市営地下鉄堺筋線扇町駅より徒歩1分</li>
				<li>JR西日本大阪環状線天満駅より徒歩4分</li>
				<li>大阪梅田からも徒歩圏内です（徒歩15～18分程度）</li>
			</ul>
			</div>
		</div>
		<div id="c5" class="container">
				<h2 class="sub_title align_center">お問い合わせ</h2>
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
		</div>
		<footer>
			<small>Copyright &copy; 2016 ○○○○ All Rights Reserved.</small>
		</footer>
	</div>
</body>
</html>