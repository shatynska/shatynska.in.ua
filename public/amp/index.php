<?php include("first.php"); ?>
<title>Психолог та психотерапевт Альона Шатинська. Психологічна допомога в Дрогобичі: Психотерапія та психологічні консультації.</title>
<meta name='description' content='Психолог та психотерапевт Шатинська Альона. Дрогобич. &#9743; +380980074869. Психотерапія та психологічні консультації'>
<link rel="canonical" href="https://shatynska.in.ua/">
<?php include("begin.php"); ?>
<section id="psy"><a href="/amp/psychologist.php"><h1>психолог</h1></a><p>Альона Шатинська, 41 рік, психолог та гештальт-терапевт в Дрогобичі. У 1998-2003рр. навчалася за спеціальністю "Психологія" в Дрогобицькому..... </p>
<amp-img alt="психолог Шатинська Альона" src="/images/photomini.jpg" height="280" width="280"></amp-img><a href="/amp/psychologist.php" class="more">докладніше</a></section>
<aside><h2><a class="white" href="/amp/reservation.php">попередній запис</a></h2>
	<?php
    $w=array(1=>'понеділок', 2=>'вівторок', 3=>'середа', 4=>'четвер', 5=>'п`ятниця');
    $tn=array(1=>'08:30', 2=>'09:45', 3=>'12:00');
	echo '<table>';
	$lm=strtotime('+1 DAY');
	for ($ii=0; $ii<=4; $ii++) {
		$iii=date("w", $lm); if ($iii==0) {$iii=7;} if ($iii>=6) {$iii=8-$iii; $lm=strtotime('+'.$iii.' DAY', $lm); $iii=date("w", $lm); }
		$online="";
		echo '<tr><td class="free" colspan="6" style="color: #ffffe6;" >'.$w[$iii].' '.date("d.m", $lm).$online.'</td></tr><tr>';
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
			echo '<td>'; if ($av==1) {echo '<a class="free pointer" onclick="location.href=\'reservation.php?grt='.$iii.'-'.$ti.'-'.date("Y-m-d", $lm).'\';" title="попередній запис ',$tn[$ti],' '.date("d.m", $lm).'" > ';} echo $tn[$ti]; if ($av==1) {echo '</a>';} echo '</td>';
		}
		$lm=strtotime('+1 DAY', $lm);
		echo '</tr>';
	}
echo '</table>';
?>

<a href="/amp/reservation.php" class="more">докладніше</a></aside>
<section id="kons">
<?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=9")); echo $line['amptext']; ?>
</section>
<section id="tren">
<?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=6")); echo $line['amptext']; ?>
</section>
<?php include("end.php"); ?>