<?php
	include_once "./functions.php";
	
	$stmt = $dbh->query("SELECT * FROM news_posts ORDER BY date DESC LIMIT 5");
	
	$sql = $dbh->query("SELECT * FROM news_posts ORDER BY id DESC LIMIT 1,5");
	$sql1 =  $dbh->query("SELECT * FROM news_posts ORDER BY id DESC LIMIT 1");
	$sql2 =  $dbh->query("SELECT * FROM year_schedule ORDER BY date");
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
			<div class="title">
				<h1 class="main_title align_center">もう一度、スポーツに真剣に向き合ってみませんか？</h1>
				<h2 class="sub_title align_center">〓日本代表に最も近い球技スポールブール〓</h2>
			</div>
			<div class="movie_wrap">
			<iframe width="853" height="480" src="https://www.youtube.com/embed/LyEb2y4jSig?rel=0&autoplay=1&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<!--<div class="video_wrap">
			<video autoplay loop poster="" width="100%">
				<source src="./videos/Sport Boules.mp4">
			</video>
			</div>-->
			<div class="bottom_title">
				<h2 class="b_title1">スポールブール大阪支部　Boules-Sports OSAKA</h2>
				<h2 class="b_title2 align_center">選手募集中!!</h2>
			</div>
		</div>
		<nav class="main_nav clear_fix">
			<ul>
				<li><a class="b1" href="#c1">NEWS</a></li>
				<li><a class="b2" href="#c2">スポールブールとは</a></li>
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
						<p><img src="./img/news_photo/20150919.jpg" alt="" width="40%" align="right"></p>
						<?php foreach($sql1 as $row): ?>
						<h4><?php echo $row['title']; ?></h4>
						<h5><?php echo $row['date']; ?></h5>
						<p><?php echo nl2br($row['content']); ?></p>
						<?php endforeach; ?>
						<p><br clear="all">
						</p>
					</div>
				</section>
				<table class="past_news">
					<h3>バックナンバー</h3>
					<?php foreach($stmt as $row): ?>
					<tr>
						<td><?php $row["title"] ?></td>
						<td><?php $row["date"] ?></td>
						<td><?php $row["content"] ?></td>
						<?php endforeach; ?>
					<?php foreach($sql as $row): ?>
					<tr>
						<td><a href="./news.php"><?php echo $row['title']; ?></td><td><?php echo $row['date']; ?></td><td><?php echo mb_substr($row['content'],0,20); ?>…</a></td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
		<div id="c2" class="container">
			<div class="content">
				<h2>スポールブールについて</h2>
				<div class="clear_fix">
					<div class="c2_1p">
						<h3>スポールブールとは？</h3>
						<p>対戦型の球技で、ボールを転がす技術・投げる技術を駆使し、どちらがより多くのボールを目標地点に近づけられるかを競うスポーツです。ボールは1kg程度で人の拳二つ分程度大きさの金属球を用います。競技フィールドはおよそ30m×4mの砂地で行います。ときにボールを転がして数十cmの隙間通す繊細さが、また約15mもの距離を金属球が放物線を描き激しい衝突音を鳴り響かせるダイナミックさが、多くの人々を魅了しており、なんと50ヶ国以上の国で行われています。</p>
						<!--<p><a href="">ルール等詳しい説明はこちら</a></p>-->
					</div>
					<figure class="c2_1i">
						<img src="./img/borl.jpg" art="borl" width="90%">
						<figcaption>スポールブールで使用するボール<br>
						直径約10cm重さ約1㎏程度</figcaption>
					</figure>
				</div>
				<div class="clear_fix">
					<figure class="c2_2i">
						<img src="./img/01.jpg" art="man" width="95%">
					</figure>
					<div class="c2-2p">
						<h3>社会人でも日本代表を目指せるスポーツです</h3>
						<p>まず始めに言えることは、国内の競技人口が大変少ないことです。現在の公式発表でも選手はおよそ50人程度であり、日本代表を目指す選手という括りにするとその半数程度になります。人気スポーツであるサッカーやテニスはもとより、馬術や射撃などの他のマイナースポーツと比べても、現在世界を目指している選手は大変少ないです。それでも、日々忙しいため、試合に勝つための練習量を確保することができない、と思われる方、大丈夫です。スポールブールの上達に重要なのは、練習の量よりも質。競技の性質上、個人のボールを転がす・投げる技術の高さが勝敗に大きく寄与します。短い時間であっても、毎日ボールに触れ親しむことをすれば、確実に技術が高まり、強くなることができます。忙しくとも、せっかくスポーツをするのであれば、日本代表になるなどの高い目標を掲げたいと思われる方、ぜひスポールブールに挑戦してみてください。</p>
					</div>
				</div>
				<div class="clear_fix">
					<div class="c2_3p">
						<h3>スポールブールの魅力</h3>
						<p>スポールブールは日本国内ではマイナースポーツですが、世界的にはメジャーな方のスポーツなのです。50ヶ国以上の国で競技が行われており、プロスポーツ化している国まであるほどです（フランス、イタリア、スロベニアなど）。また、ラグビーや野球などオリンピック競技に選ばれることを目指す競技を集めて行われる４年に１度のスポーツの祭典、ワールドゲームズの一競技にもなっています。そして現在、2024年のオリンピック開催地にパリが名乗りをあげていますが、スポールブールの発祥国であるフランスが開催国に選ばれれば、スポールブールもオリンピック競技に選ばれるのではと言われています。いずれは、あなたもメジャースポーツの日本代表だったと言われるかもしれませんね。でも、それ以上に魅力的なことがスポールブールにはあります。それは、選手寿命がとても長いスポーツだということです。フランスやモロッコなどでは祖父と孫がスポールブールで試合をする光景が見られるほど、また60歳を超えても現役選手として競技を続ける方もおられます。仕事で定年を向かえてもなお、あなたには向かい続ける勝負があることは、きっとあなたの生涯をより実りあるものにしてくれるはずです。</p>
					</div>
					<figure class="c2_3i">
						<img src="./img/02.jpg" art="woman" width="90%">
					</figure>
				</div>
			</div>
		</div>
		<div id="c3" class="container">
			<div class="content clearfix">
				<h2 class="align_center">イベントカレンダー</h2>
				<iframe src="https://calendar.google.com/calendar/embed?height=500&amp;wkst=1&amp;bgcolor=%233333ff&amp;src=uqnt1rqkn5j5nc4sjs4f37htr8%40group.calendar.google.com&amp;color=%23865A5A&amp;ctz=Asia%2FTokyo" style="border:solid 1px #777" width="52%" height="450" frameborder="0" scrolling="no"></iframe>
				<div class="year_schedule">
				<h4 class="align_center">年間スケジュール</h4>
				<table>
					<?php foreach($sql2 as $row): ?>
					<tr>
						<td><?php echo $row['date_w']; ?></td>
						<td> <?php echo $row['plan']; ?></td>
					</tr>
					<?php endforeach; ?>
				</table>
				</div>
			</div>
		</div>
		<div id="c4" class="container">
			<div class="content clear_fix">
				<h2 class="sub_title align_center">練習場所へのアクセス</h2>
				<div class="accsess_p">
					<p>大阪北エリアのの扇町公園にて土日どちらかの午前中に練習を行っています。</p>
					<p><a href="#c3">練習日程はイベントカレンダーを参照下さい</a></p>
					<p><a href="#c5">見学をご希望の方はお気軽に連絡ください</a></p>
					<h3>扇町公園へのアクセス</h3>
					<ul>
						<li>大阪市営地下鉄堺筋線扇町駅より徒歩1分</li>
						<li>JR西日本大阪環状線天満駅より徒歩4分</li>
						<li>大阪梅田からも徒歩圏内です（徒歩15～18分程度）</li>
					</ul>
					<h4>扇町公園</h4>
					<p>大阪府大阪市北区扇町１丁目１</p>
				</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4638.774664874741!2d135.50588746247797!3d34.702430045821664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x6e9125ed03ad05f9!2z5omH55S65YWs5ZyS!5e0!3m2!1sja!2sjp!4v1451979725890" width="50%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		<div id="c5" class="container">
			<div class="content">
				<h2 class="sub_title align_center">お問い合わせ</h2>
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
			<small class="align_center">Copyright &copy; 2016 boule-sports OSAKA All Rights Reserved.</small>
		</footer>
	</div>
</body>
</html>