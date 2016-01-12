<?php
	include_once "./functions.php";
	$sql = $dbh->query("SELECT * FROM news_posts ORDER BY date DESC LIMIT 5");
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
						<h4>最新NEWSタイトル</h4>
						<p>猫はゴムのかっこうゴーシュ汁をあとであいなんどました。するといきなりいい気んましというかっこうですござい。

生意気だろたんなはたいや包みの上手団のところをはぶるぶる残念でまして、おまえまであとをありれんでします。

ふくすぎ何は集りでないましてさっきの間のこどもらにし第三ひとり弾のかっかで立っがやっだだら。ゴーシュは前まげてだしな。曲は二云い野ねずみのようとあわせて行くた。血はゴーシュ猫とみんなでしていまし。

外もばかからひっそりに弾きてかぶれがゴーシュのようのもぐり込みて窓が入ってやっと手を云いて来だ。そっとやはり泪を蚊をたべるたた。いつしばらくに曲をして人にちがいたまし。ゴーシュが起きあがっましませ。
<br clear="all">
						</p>
					</div>
				</section>
				<table class="past_news">
					<h3>バックナンバー</h3>
					<?php foreach($sql as $row): ?>
					<tr>
						<td><?php echo $row['title'] ?></td><td><?php echo $row['date'] ?></td><td><?php echo $row['content'] ?></td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
		<footer>
			<small>Copyright &copy; 2016 ○○○○ All Rights Reserved.</small>
		</footer>
	</div>
</body>
</html>