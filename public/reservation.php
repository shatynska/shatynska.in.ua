<?php include ("first.php");
$l = mysqli_query($db, "SET lc_time_names = 'uk_UA'");
$w=array(1=>'понеділок', 2=>'вівторок', 3=>'середа', 4=>'четвер', 5=>'п`ятниця');
$tn=array(1=>'8:30', 2=>'9:45', 3=>'12:00', 4=>'12:45');
?>
	 <link rel="canonical" href="https://shatynska.in.ua/contacts.php"/>
	 <title>Попередній запис : Психолог та психотерапевт Шатинська Альона: психологічна допомога в Дрогобичі</title>
	 <meta name='description' content='Психолог та психотерапевт Шатинська Альона. Консультування: особистісне, сімейне та психолого-педагогічне'>
<?php include ("begin.php"); ?>

<div id="short">
<h1 id="reservation">попередній запис</h1><br>
	<?php
if (!isset($_GET['thank'])) {
?>
	<form style="font-size: 16px; position: relative;" method="post" >
дата та час*:
<select name="rt" required style="font-size: 16px;" >
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
</select><br>
<br>ім`я: <input name="name" style="font-size: 16px;"><br>
<br>телефон*: <input name="phone" style="font-size: 16px;" required><br>
<br>додатково : <textarea name="more" style="font-size: 16px;" ></textarea><br>
		<br><input type="submit" value="записатися" style="cursor: pointer; padding: 0.5vw 3vw; background-color: #b9c694; font-weight: bold;font-size: 16px;">
	</form>
<?php } else {echo '<br>Дякую! Я зателефоную до Вас найближчим часом, щоб підтвердити попередній запис.<br><br><br>';} 	?>
</div>

<main>

<div id="short2">
<h1 id="reservation">попередній запис</h1><br>
	<?php
if (!isset($_GET['thank'])) {
?>
	<form style="font-size: 16px; position: relative;" method="post" >
дата та час*:
<select name="rt" required style="font-size: 16px;" >
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
			if($av==1) {
		        $online="";
				if ($wday==0) {echo '<optgroup label="'.$w[$iii].$online.'">'; $optb=1; $wday=1; }
				$grt=$iii.'-'.$ti.'-'.date("Y-m-d", $lm);
				echo '<option value="'.$grt.'"'; if (isset($_GET['grt']) && $_GET['grt']==$grt) {echo ' selected';} echo '>' .date("d.m", $lm).' о '.$tn[$ti].'</option>';
			}
		}
		if ($optb==1) {echo '</optgroup>'; $optb=0;}
		$lm=strtotime('+1 DAY', $lm);
	}
?>
</select><br>
<br>ім`я: <input name="name" style="font-size: 16px;"><br>
<br>телефон*: <input name="phone" style="font-size: 16px;" required><br>
<br>додатково : <textarea name="more" style="font-size: 16px;" ></textarea><br>
		<br><input type="submit" value="записатися" style="cursor: pointer; padding: 0.5vw 3vw; background-color: #b9c694; font-weight: bold;font-size: 16px;">
	</form>
<?php } else {echo '<br>Дякую! Я зателефоную до Вас найближчим часом, щоб підтвердити попередній запис.<br><br><br>';} 	?>
</div>

<div class="n12"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=9")); echo $line['text']; ?>	  </div>

<div class="n12">
<br/>
	<?php
	echo '<table class="reserv">';
	$lm=strtotime('+1 DAY');
	for ($ii=0; $ii<=9; $ii++) {
		$iii=date("w", $lm); if ($iii==0) {$iii=7;} if ($iii>=6) {$iii=8-$iii; $lm=strtotime('+'.$iii.' DAY', $lm); $iii=date("w", $lm); }
		$online="";
		echo '<tr><td class="free"><span class="free">'.$w[$iii].' '.date("d.m", $lm).$online.'</span></td>';
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
			echo '<td>'; if ($av==1) {echo '<span class="free pointer" onclick="location.href=\'reservation.php?grt='.$iii.'-'.$ti.'-'.date("Y-m-d", $lm).'\';" title="попередній запис ',$tn[$ti],' '.date("d.m", $lm).'" > ';} echo $tn[$ti]; if ($av==1) {echo '</span>';} echo '</td>';
		}
		$lm=strtotime('+1 DAY', $lm);
		echo '</tr>';
	}
echo '</table>';
?>

<br>

</div>
</main>
<?php include ("end.php"); ?>