<h2><a  style="color: #ffffe6;" href="/reservation.php">попередній запис</a></h2>
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
		 <a class="more white" style="color: white;" href="/reservation.php">докладніше</a>