<?php
include ("first.php");
$l = mysqli_query($db, "SET lc_time_names = 'uk_UA'");
if (isset($_GET['rt'])){
	$res=mysqli_query($db, 'insert into clients (name, phone, more) values ( "'.htmlspecialchars($_GET['name']).'", "'.htmlspecialchars($_GET['phone']).'", "'.htmlspecialchars($_GET['more']).'")') or die ('помилка');
	$last_id =  mysqli_insert_id($db);
	$dd=substr($_GET['rt'], 0, 1);
	$tt=substr($_GET['rt'], 2, 1);
	$ddate=substr($_GET['rt'], 4);
	$res=mysqli_query($db, 'insert into changes (c_id, date, d, t) values ("'.$last_id.'", "'.$ddate.'", "'.$dd.'",  "'.$tt.'")') or die ('помилка2');
	Header('Location: ?thank');
}
$w=array(1=>'понеділок', 2=>'вівторок', 3=>'середа', 4=>'четвер', 5=>'п`ятниця');
    $tn=array(1=>'08:30', 2=>'09:45', 3=>'12:00');
?>
<link rel="canonical" href="https://shatynska.in.ua/contacts.php"/>
<title>Попередній запис : психолог та гештальт-терапевт Альона Шатинська : психологічна допомога в Дрогобичі : консультування та психотерапія</title>
<meta name='description' content='Психолог та гештальт-терапевт Альона Шатинська. Консультування та психотерапія.'>
<script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
<?php include ("begin.php"); ?>
<main>
	<h1>попередній запис</h1>
		<?php
	if (isset($_GET['thank'])) {echo '<br>Дякуємо! Ми до Вас зателефонуємо в найближчий чаc щоб підтвердити попередній запис.<br><br><br>';}
	else {
?>
	<form method="get" target="_top" class="amp-form-php">
<div class="amp-form-php__item"><br>Ім`я<br><input type="text" name="name"><br><br></div>

		<div class="amp-form-php__item">Дата та час*<br>
<select name="rt" required>
<?php
	$lm=strtotime('+1 DAY');
	for ($ii=0; $ii<=9; $ii++) {
		$iii=date("w", $lm); if ($iii==0) {$iii=7;} if ($iii>=6) {$iii=8-$iii; $lm=strtotime('+'.$iii.' DAY', $lm); $iii=date("w", $lm); }
		$wday=0; $optb=0;
		$time_begin=1; $time_end=3;
		for ($ti=$time_begin; $ti<=$time_end; $ti++) {
			$avail=mysqli_query($db, 'SELECT type from changes where date="'.date("Y-m-d", $lm).'" and d='.$iii.' and t='.$ti.' order by dt DESC');
			if (mysqli_num_rows($avail)!=0) {
				$availl=mysqli_fetch_array($avail);
				if ($availl['type']==1) {$av=0;}
				if ($availl['type']==0) {$av=1;}
			} else {
				$lineline = mysqli_query($db, 'SELECT id from clients where status=1 and cday='.$iii.' and ct='.$ti);
				if (mysqli_num_rows($lineline)!=0) {$av=0;} else {$av=1;}
			}
		    $online="";
			if($av==1) {
				if ($wday==0) {echo '<optgroup label="'.$w[$iii].$online.'">'; $optb=1; $wday=1; }
				$grt=$iii.'-'.$ti.'-'.date("Y-m-d", $lm);
				echo '<option value="'.$grt.'"'; if (isset($_GET['grt']) && $_GET['grt']==$grt) {echo ' selected';} echo '>' .date("d.m", $lm).' о '.$tn[$ti].'</option>';
			}
		}
		if ($optb==1) {echo '</optgroup>'; $optb=0;}
		$lm=strtotime('+1 DAY', $lm);
	}
?>
</select><br></div>
<div class="amp-form-php__item"><br>номер телефону*<br><input  type="tel" name="phone" required><br></div>
<div class="amp-form-php__item"><br>додатково<br><textarea name="more"></textarea><br></div>
		<div class="amp-form-php__item"><br><input type="submit" value=" записатися " class="more" style="width: 100%; cursor: pointer;"></div>
	</form>
<?php
	}

echo '</main>';
include ("end.php"); ?>