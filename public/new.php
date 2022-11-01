<?php
if (!mysql_connect('alenasha.mysql.ukraine.com.ua','alenasha_alena','sunadm369')) {echo "<script>alert ('Не вдається з`єднатися с базой даних!')</script>";};
if (!mysql_select_db('alenasha_alena')) {echo "<script>alert ('Не вдається знайти базу даних!')</script>";};
mysql_set_charset('utf8');
$l = mysql_query("SET lc_time_names = 'uk_UA'");
$w=array(1=>'понеділок', 2=>'вівторок', 3=>'середа');
$tn=array(1=>'9:30', 2=>'10:45', 3=>'12:00', 4=>'14:30', 5=>'15:45', 6=>'17:00');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" href="/css/style.css">
		<link rel="amphtml" href="https://shatynska.in.ua/amp/" />
		<title>Психолог та психотерапевт Шатинська Альона. Психологічна допомога в Дрогобичі: консультації та психотерапія.</title>
		<meta name='description' content='Психолог та психотерапевт Шатинська Альона. Дрогобич. &#9743; +380980074869.'>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-81285722-1', 'auto');
		  ga('send', 'pageview');
		</script>
		<style>
			* {
				padding: 0; margin: 0; border: 0;
				font-size: 16px;
				font-family: 'Times New Roman', Georgia, Times, serif;
				text-align: center;
				font-style: normal;
				text-decoration: none;
				color: black;
			}
			a {color: inherit;}
			body {
				display: flex; display: -webkit-flex;
				flex-direction: column;  -webkit-flex-direction: column;
				justify-content: center; -webkit-justify-content: center;
				align-items: center; -webkit-align-items: center;
				width: 100%;
				background: rgba(29, 58, 76);

			}
			img, video, canvas {
				max-width: 100%;
			}
			header {
				display: flex; display: -webkit-flex;
				flex-direction: column; -webkit-flex-direction: column;
				justify-content: space-around; -webkit-justify-content: space-around;
				align-items: center; -webkit-align-items: center;
				width: 100%;
				padding: 0 0 20px 0;
			}
			#h_1, #h_2, #h_3, #h_4, #h_4 div, #h_4 a {
				display: block;
				width: 100%;
				height: 40px;
				line-height: 40px;
				font-size: 24px;
				font-weight: bold;
				color: white;
				background: rgba(29, 58, 76);
			}
			#h_2 {
				color: black;
				background: white;
			}
			#h_3 {
				background: rgba(9, 17, 6);
			}
			header, main, nav, footer {
			max-width: 1000px;
			background: white;
			}
			main {
				display: flex; display: -webkit-flex;
				flex-direction: column;  -webkit-flex-direction: column;
				justify-content: space-around; -webkit-justify-content: space-around;
				width: 100%;
			}
			footer {
				width: 100%;
			}
			nav {
				display: flex; display: -webkit-flex;
				flex-direction: row; -webkit-flex-direction: row;
				flex-wrap: wrap; -webkit-flex-wrap: wrap;
				justify-content: space-around; -webkit-justify-content: space-around;
				margin: 20px 0px;
			}
			nav section {
				display: flex; display: -webkit-flex;
				flex-direction: column;  -webkit-flex-direction: column;
				justify-content: space-around; -webkit-justify-content: space-around;
				width: 100%;
			}
			#n_s1 div, #n_s2 div, #n_s3 div {
				position: relative;
				height: 100px;
				width: 100%;
				margin: 4px 0;
				overflow: hidden;
				background: black;
			}
			nav a {
				display: block;
				position: absolute;
				background: rgba(48, 76, 94, .7);
				height: 40px;
				line-height: 40px;
				font-size: 24px;
				font-weight: bold;
				color: white;
				width: 100%;
				top: 20px;
				left: 0;
			}
			#n_s2, #n_s3 {display: none;}
			#s1 {
				display: flex; display: -webkit-flex;
				flex-direction: column;  -webkit-flex-direction: column;
				justify-content: space-around; -webkit-justify-content: space-around;
				align-items: center; -webkit-align-items: center;
				width: 100%;
			}
			#s11 {
				display: flex; display: -webkit-flex;
				flex-direction: column;  -webkit-flex-direction: column;
				justify-content: space-around; -webkit-justify-content: space-around;
				align-items: center; -webkit-align-items: center;
				width: 100%;
				max-width: 414px;
			}
			#s121 {
				display: none;
			}
			.threeblocks {
				width: 92%;
				margin: 20px 2% 20px 6%;
				padding: 10px 0% 40px 0%;
			}
			.threeblocks>div {
				margin: 0% 5% 0% -4%;
				padding: 4px 8% 15px 6%;
			}
			.threeblocks>div>div {
				background: white; padding: 20px 4%;
			}
			.threeblocksmore {
				display: block;
				width: 30%;
				height: 40px;
				margin: -70px 0% 10px 50%;
				padding:  0 5%;
				color: white;
				font-weight: bold;
				font-size: 18px;
				line-height: 40px;
				cursor: pointer;
			}
			.blue {
				background: rgba(119, 149, 167);
			}
			.blue>div {
				background: rgba(164, 188, 205, .9);
			}
			#s12 .threeblocksmore {
				background: rgba(71, 99, 118, .8);
			}
			#s2 {
				display: flex; display: -webkit-flex;
				flex-direction: column;  -webkit-flex-direction: column;
				justify-content: space-around; -webkit-justify-content: space-around;
				align-items: center; -webkit-align-items: center;
				width: 100%;
			}
			#s21>div {
				background: rgba(155, 151, 148);
			}
			#s21>div>div {
				background: rgba(184, 187, 192, .9);
			}
			#s2 .threeblocksmore {
				background: rgba(93, 90, 87, .8);
			}
			#s2 form {
				padding: 20px 5%;
				background: rgba(203, 194, 184);
			}
			#s22 {
				display: flex; display: -webkit-flex;
				flex-direction: column;  -webkit-flex-direction: column;
				justify-content: space-around; -webkit-justify-content: space-around;
				align-items: center; -webkit-align-items: center;
				width: 100%;
				background: rgba(120, 101, 92);
				color: white;
				margin: 40px 0 0 0;
				padding: 20px 0 20px 0;
			}
			#s22 table {width: 90%; padding: 10px;
				background: rgba(108, 89, 81);}
			#s22 td {color: rgba(157, 136, 127);}
			#s22 td b, #s22 .free {color: white;}
			footer .threeblocks {
				padding: 40px 0% 10px 0%;
			}
			.midi, #h_4 {display: none;}
			.rotate {transform: rotate(-180deg);}
			.mclip {
				position: absolute;
				left: 0;
				bottom: 0px;
			}
			#googlemap {
				display: none;
			}



			@media only screen and (min-width: 767px) {
				.midi {display: block;}
				.mini, #h_1, #h_2, #h_3 {display: none;}
				.rotate {transform: none;}
				.mclip {
					position: relative;
					left: 0;
					top: 0px;
				}
				#h_4 {
					background: rgba(35, 57, 71);
					display: flex; display: -webkit-flex;
					flex-direction: row; -webkit-flex-direction: row;
					flex-wrap: wrap; -webkit-flex-wrap: wrap;
					justify-content: space-around; -webkit-justify-content: space-around;
				}
				#h_4 div {width: 49%;}
				#n_s1 .mini {display: block;}
				#s121 {
					display: block;
					background: url(img/e11b.jpg) no-repeat;
					height: 80px;
					font-size: 24px;
					color: white;
					font-weight: bold;
					text-align: left;
					padding: 20px;
					margin: 0 0 0 40px;
				}
				#s1, #s2 {
					flex-direction: row;  -webkit-flex-direction: row;
				}
				#n_s1, #n_s2, #n_s3 {
					display: flex; display: -webkit-flex;
					flex-direction: column;  -webkit-flex-direction: column;
					justify-content: space-around; -webkit-justify-content: space-around;
					align-items: center; -webkit-align-items: center;
					width: 32%;
				}
				#n_s1 div {
				height: 108px;
				}
				#n_s2 div {
				height: 69px;
				}
				#n_s3 div {
				height: 50px;
				}
				nav a {
					height: 30px;
					line-height: 30px;
				}
				#n_s1 a {
					top: 40px;
				}
				#n_s2 a {
					top: 20px;
				}
				#n_s3 a {
					top: 10px;
				}
				#s11, #s22 {
					width: 39%;
				}
				#s12, #s21 {
					width: 59%;
				}
				#s22 {
					background-image: none;
					margin: 0;
				}
				#googlemap {
					display: block;
					filter: grayscale(60%);
					-moz-filter: grayscale(60%);
					-webkit-filter:grayscale(60%);
					-webkit-filter: grayscale(0.6);
					-o-filter:grayscale(60%);
					-ms-filter:grayscale(60%);
					filter: gray;
				}
			}


			@media only screen and (min-width: 1007px) {

			}
			@media only screen and (min-width: 1187px) {
			}
			@media only screen and (min-width: 1382px) {
			}

		</style>
	</head>
	<body>
		<header>
			<img src="img/hf1.jpg" class="mini">
			<img src="img/hf2.jpg" class="mini">
			<div id="h_1" class="mini">Шатинська Альона</div>
			<h1 id="h_2" class="mini">психолог, пcихотерапевт</h1>
			<a id="h_3" href="tel:+380980074869" class="mini">+380980074869</a>
			<img src="img/ffbig1.jpg" class="midi">
			<div id="h_4" class="midi"><div  class="midi">психолог, пcихотерапевт</div><div  class="midi"><a href="tel:+380980074869">+380980074869</a></div></div>
		</header>
		<main>


			<section id="s1">
				<div id="s11"><img src="img/psychologist00.jpg" alt="психолог, психотерапевт Алёна Шатинська"></div>
				<div id="s12">
					<div id="s121">Альона<br>Шатинська</div>
					<div id="s122" class="threeblocks blue"><div><div>Запрошую в психотерапію та консультування.
Основні теми в роботі: життєві кризи, травматичні події, проживання горя, чоловічо-жіночі стосунки (розлучення, співзалежність, насилля, трикутники), пошук себе, батьківсько-дитячі відносини, депресія, панічні атаки, висока тривожність та інші.
Про себе: мені 39 років, заміжня, маю сина та доньку. По базовій освіті - психолог. Додатково навчаюся на психотерапевта (гештальт-підхід).
Спеціалізації: "Робота з кризовими станами в гештальт терапії", "Арт-терапія", "Робота з парою в гештальт терапії". Проходжу на постійній основі особисту терапію та супервізію.
					</div></div></div>
					<a href="" class="threeblocksmore">докладніше</a>
				</div>
			</section>



			<nav>
				<section id="n_s1">
					<div id="n_s11"><img src="img/hf2.jpg" class="mini"><a href="">психотерапія</a></div>
					<div id="n_s12"><img src="img/hf2.jpg" class="rotate mclip mini"><a href="">консультування</a></div>
				</section>
				<section id="n_s2">
					<div id="n_s21"><img src="img/hf2.jpg"><a href="">з дорослими</a></div>
					<div id="n_s22"><img src="img/hf2.jpg" class=""><a href="">з підлітками</a></div>
					<div id="n_s22"><img src="img/hf2.jpg"><a href="">з дітьми</a></div>
				</section>
				<section id="n_s3">
					<div id="n_s31"><img src="img/hf2.jpg"><a href="">індивідуально</a></div>
					<div id="n_s32"><img src="img/hf2.jpg"><a href="">з парою</a></div>
					<div id="n_s33"><img src="img/hf2.jpg"><a href="">з сім'єю</a></div>
					<div id="n_s34"><img src="img/hf2.jpg"><a href="">з групою</a></div>
				</section>
			</nav>


			<section id="s2">
				<div id="s21">
					<div id="s211" class="threeblocks"><div><div>Працюю в Дрогобичі за попереднім записом. <br>При потребі можлива робота онлайн за допомогою месенджера з відеозв'язком (Viber, Messenger, WhatsApp. <br>Робочі години: з 09:30 до 18:00 з понеділка по середу.<br>Вартість: 400 грн за 55 хв. При роботі з парами вартість 800 грн за 80 хв.<br>Записатися можна за телефоном <a href="tel:+380980074869" id="tel">+38 098 007 48 69</a> або заповнити запропоновану нижче форму.<br><br>

						<form method="post" >
							дата та час*:
							<select name="rt" required>
							<?php
	$lm=strtotime('+1 DAY');
	for ($ii=0; $ii<=8; $ii++) {
		$iii=date("w", $lm); if ($iii==0) {$iii=7;} if ($iii>=4) {$iii=8-$iii; $lm=strtotime('+'.$iii.' DAY', $lm); $iii=date("w", $lm); }
		$wday=0; $optb=0;
		for ($ti=1; $ti<=6; $ti++) {
			$avail=mysql_query('SELECT type from changes where date="'.date("Y-m-d", $lm).'" and d='.$iii.' and t='.$ti.' order by dt DESC');
			if (mysql_num_rows($avail)!=0) {
				$availl=mysql_fetch_array($avail);
				if ($availl['type']==1) {$av=0;}
				if ($availl['type']==0) {$av=1;}
			} else {
				$lineline = mysql_query('SELECT id from clients where status=1 and cday='.$iii.' and ct='.$ti);
				if (mysql_num_rows($lineline)!=0) {$av=0;} else {$av=1;}
			}
			if($av==1) {
				if ($wday==0) {echo '<optgroup label="'.$w[$iii].'">'; $optb=1; $wday=1; }
				$grt=$iii.'-'.$ti.'-'.date("Y-m-d", $lm);
				echo '<option value="'.$grt.'"'; if ($_GET['grt']==$grt) {echo ' selected';} echo '>' .date("d.m", $lm).' о '.$tn[$ti].'</option>';
			}
		}
		if ($optb==1) {echo '</optgroup>'; $optb=0;}
		$lm=strtotime('+1 DAY', $lm);
	}
?>

							</select><br>
							<br>ім`я: <input name="name"><br>
							<br>телефон*: <input type="tel" name="phone" required><br>
							<br>додатково : <textarea name="more" rows="1"></textarea><br>
					</div></div></div>
							<input type="submit" value="записатися" class="threeblocksmore">

						</form>

						</div>


				<div id="s22">
		<?php
	$w=array(1=>'понеділок', 2=>'вівторок', 3=>'середа');
	$tn=array(1=>'9:30', 2=>'10:45', 3=>'12:00', 4=>'14:30', 5=>'15:45', 6=>'17:00');
	echo '<table>';
	$lm=strtotime('+1 DAY');
	for ($ii=0; $ii<=8; $ii++) {
		$iii=date("w", $lm); if ($iii==0) {$iii=7;} if ($iii>=4) {$iii=8-$iii; $lm=strtotime('+'.$iii.' DAY', $lm); $iii=date("w", $lm); }
		echo '<tr><td class="free" colspan="6" style="color: #ffffe6;" >'.$w[$iii].' '.date("d.m", $lm).'</td></tr><tr>';
		for ($ti=1; $ti<=6; $ti++) {
			$avail=mysql_query('SELECT type from changes where date="'.date("Y-m-d", $lm).'" and d='.$iii.' and t='.$ti.' order by dt DESC');
			if (mysql_num_rows($avail)!=0) {
				$availl=mysql_fetch_array($avail);
				if ($availl['type']==1) {$av=0;}
				if ($availl['type']==0) {$av=1;}
			} else {
				$lineline = mysql_query('SELECT id from clients where status=1 and cday='.$iii.' and ct='.$ti);
				if (mysql_num_rows($lineline)!=0) {$av=0;} else {$av=1;}
			}
			echo '<td>'; if ($av==1) {echo '<a class="free pointer" onclick="location.href=\'reservation1.php?grt='.$iii.'-'.$ti.'-'.date("Y-m-d", $lm).'\';" title="попередній запис ',$tn[$ti],' '.date("d.m", $lm).'" > ';} echo $tn[$ti]; if ($av==1) {echo '</a>';} echo '</td>';
		}
		$lm=strtotime('+1 DAY', $lm);
		echo '</tr>';
	}
echo '</table>';
?>
				</div>
			</section>
		</main>



		<footer>
			<div class="threeblocks blue"><div><div>
					<iframe id="googlemap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2598.6670744627572!2d23.49485981521472!3d49.3584495733209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473a4c22e970212b%3A0x55e67397a0aa6041!2z0LLRg9C70LjRhtGPINCf0LXRgtGA0LAg0KHQsNCz0LDQudC00LDRh9C90L7Qs9C-LCAxNDIsINCU0YDQvtCz0L7QsdC40YcsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgODIxMDA!5e0!3m2!1suk!2sua!4v1469253916919"  frameborder="0" style="border:0; float: right; width: 350px; height: 200px;" allowfullscreen></iframe>
				психолог, психотерапевт<br>
				Шатинська Альона<br><br>
				<a href="//www.google.com.ua/maps/place/%D0%B2%D1%83%D0%BB%D0%B8%D1%86%D1%8F+%D0%9F%D0%B5%D1%82%D1%80%D0%B0+%D0%A1%D0%B0%D0%B3%D0%B0%D0%B9%D0%B4%D0%B0%D1%87%D0%BD%D0%BE%D0%B3%D0%BE,+142,+%D0%94%D1%80%D0%BE%D0%B3%D0%BE%D0%B1%D0%B8%D1%87,+%D0%9B%D1%8C%D0%B2%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B0+%D0%BE%D0%B1%D0%BB%D0%B0%D1%81%D1%82%D1%8C,+82100/@49.3584478,23.4959542,18z/data=!4m13!1m7!3m6!1s0x473a4c22e970212b:0x55e67397a0aa6041!2z0LLRg9C70LjRhtGPINCf0LXRgtGA0LAg0KHQsNCz0LDQudC00LDRh9C90L7Qs9C-LCAxNDIsINCU0YDQvtCz0L7QsdC40YcsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgODIxMDA!3b1!8m2!3d49.3584461!4d23.4970485!3m4!1s0x473a4c22e970212b:0x55e67397a0aa6041!8m2!3d49.3584461!4d23.4970485"  target="_blank">
					м. Дрогобич<br>
					вул. Петра Сагайдачного 142a</a><br><br>
				<a href="tel:+380980074869" id="tel">+380980074869</a><br>
				<a href="mailto:mail@shatynska.in.ua">mail@shatynska.in.ua</a><br><br>
				<a href="skype:live:mail_58411?chat">skype: live:mail_58411</a><br>
				<a href="https://www.facebook.com/PsychologistShatynska">facebook: PsychologistShatynska</a><br>





				</div></div></div>
			<img src="img/hf3.jpg" class="mini">
			<img src="img/ffbig.jpg" class="midi">
		</footer>
	</body>
</html>