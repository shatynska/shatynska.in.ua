<?php
$hostname_db = 'db';
$username_db = 'root';
$password_db = 'root';
$base = 'laravel';

if ($db = mysqli_connect($hostname_db, $username_db, $password_db, $base))
{
mysqli_set_charset($db, 'utf8');  }
else
{
    throw new Exception('Unable to connect');
}

// новий клієнт
if (isset($_POST['new_client'])){
	$res=mysqli_query($db, 'insert into clients (name, phone, more, dt, status, price, cadd, c1, c2, c3) values ("'.htmlspecialchars($_POST['name']).'", "'.htmlspecialchars($_POST['phone']).'", "'.htmlspecialchars($_POST['more']).'", NOW(), "'.$_POST['status'].'", "'.htmlspecialchars($_POST['price']).'", "'.htmlspecialchars($_POST['cadd']).'", "'.htmlspecialchars($_POST['c1']).'", "'.htmlspecialchars($_POST['c2']).'", "'.htmlspecialchars($_POST['c3']).'" )') or die ('помилка');
	Header('Location: https://shatynska.in.ua/session.php');
}
//редагування клієнтів
if (isset($_POST['edit_client'])){
	$res=mysqli_query($db, 'UPDATE clients SET name="'.htmlspecialchars($_POST['name']).'", phone="'.htmlspecialchars($_POST['phone']).'", more="'.htmlspecialchars($_POST['more']).'", status="'.$_POST['status'].'", price="'.htmlspecialchars($_POST['price']).'", cadd="'.htmlspecialchars($_POST['cadd']).'", c1="'.htmlspecialchars($_POST['c1']).'", c2="'.htmlspecialchars($_POST['c2']).'", c3="'.htmlspecialchars($_POST['c3']).'" WHERE ID="'.$_POST['edit_client'].'"') or die ('помилка3');
	Header('Location: https://shatynska.in.ua/session.php');
}
//обнулення дня та години
if (isset($_GET['null_dt'])) {
	$res=mysqli_query($db, 'UPDATE clients SET cday="0", ct="0" WHERE ID="'.$_GET['null_dt'].'"') or die ('помилка4');
	Header('Location: https://shatynska.in.ua/session.php');

}
//закріплення години за клієнтом
if (isset($_POST['fixation_dt']) and isset($_POST['c_id']) and $_POST['c_id']!=0){
	$res=mysqli_query($db, 'UPDATE clients SET cday="'.$_POST['cday'].'", ct="'.$_POST['ct'].'", status="1" WHERE id="'.$_POST['c_id'].'"') or die ('помилка 6');
	Header('Location: https://shatynska.in.ua/session.php');
}

// зміни в сесіях
if (isset($_POST['changes']) and $_POST['changes']==1){
	$res=mysqli_query($db, 'insert into changes (c_id, type, date, d, t, addition) values ("'.$_POST['c_id'].'", "'.$_POST['type'].'", "'.$_POST['date'].'", "'.$_POST['d'].'", "'.$_POST['t'].'", "'.htmlspecialchars($_POST['addition']).'")') or die ('помилка2');
	Header('Location: https://shatynska.in.ua/session.php');
}
// створення звіту
if (isset($_POST['s_new'])){
	$res=mysqli_query($db, 'insert into sessions (c_id, presence, num, date, main, f01, f02, f03, f04, f05, f06, f07, f08, f09, f10, f11, f12, f13, f14, f15, addition) values ("'.$_POST['c_id'].'", "'.$_POST['presence'].'", "'.$_POST['num'].'", "'.$_POST['date'].'", "'.htmlspecialchars($_POST['main']).'", "'.htmlspecialchars($_POST['f01']).'", "'.htmlspecialchars($_POST['f02']).'", "'.htmlspecialchars($_POST['f03']).'", "'.htmlspecialchars($_POST['f04']).'", "'.htmlspecialchars($_POST['f05']).'", "'.htmlspecialchars($_POST['f06']).'", "'.htmlspecialchars($_POST['f07']).'", "'.htmlspecialchars($_POST['f08']).'", "'.htmlspecialchars($_POST['f09']).'", "'.htmlspecialchars($_POST['f10']).'", "'.htmlspecialchars($_POST['f11']).'", "'.htmlspecialchars($_POST['f12']).'", "'.htmlspecialchars($_POST['f13']).'", "'.htmlspecialchars($_POST['f14']).'", "'.htmlspecialchars($_POST['f15']).'", "'.htmlspecialchars($_POST['addition']).'")') or die ('помилка');
	Header('Location: https://shatynska.in.ua/session.php');
}
// редагування звіту
if (isset($_POST['s_id'])) {
	$res=mysqli_query($db, 'UPDATE sessions SET presence="'.$_POST['presence'].'", num="'.$_POST['num'].'", date="'.$_POST['date'].'", main="'.htmlspecialchars($_POST['main']).'", addition="'.htmlspecialchars($_POST['addition']).'", f01="'.htmlspecialchars($_POST['f01']).'", f02="'.htmlspecialchars($_POST['f02']).'", f03="'.htmlspecialchars($_POST['f03']).'", f04="'.htmlspecialchars($_POST['f04']).'", f05="'.htmlspecialchars($_POST['f05']).'", f06="'.htmlspecialchars($_POST['f06']).'", f07="'.htmlspecialchars($_POST['f07']).'", f08="'.htmlspecialchars($_POST['f08']).'", f09="'.htmlspecialchars($_POST['f09']).'", f10="'.htmlspecialchars($_POST['f10']).'", f11="'.htmlspecialchars($_POST['f11']).'", f12="'.htmlspecialchars($_POST['f12']).'", f13="'.htmlspecialchars($_POST['f13']).'", f14="'.htmlspecialchars($_POST['f14']).'", f15="'.htmlspecialchars($_POST['f15']).'" WHERE ID="'.$_POST['s_id'].'"') or die ('помилка2');
	Header('Location: https://shatynska.in.ua/session.php');
}
$ddd=array(1=>'пон', 2=>'вів', 3=>'сер', 4=>'чет', 5=>'пят', 6=>'суб');
$ttt=array(1=>'8:30', 2=>'9:45', 3=>'12:00');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	 	<title>Сесія</title>
		<style>
			* {font-size: 12px; font-family:"Times New Roman", Times, serif;}
			body {
			background-color: rgb(168, 168, 170);
			color: white;
			}
a {color: white; text-decoration: none; }
div {border: 1px solid #57585b;}
.grid {
	max-width: 600px;
	display: grid;
	grid-template-rows: 0.3fr 7fr;
	grid-template-columns:  0.2fr 1fr 1fr 1fr 1fr 1fr 1fr;
	grid-gap: 2px;
}
.grid > div {
	text-align: center;
	font-weight: bold;
}
.grid2 {
	display: grid;
	grid-template-columns: 1fr;
	grid-gap: 2px;
	grid-template-rows: repeat(3, 1fr);
}
.grid2 > div {
	text-align: center;
	font-weight: normal;
	font-weight: bold;
	writing-mode: tb-rl;
	background-color: rgb(84, 86, 91);
}
.grid3 {
	display: grid;
	grid-template-columns: 1fr;
	grid-gap: 2px;
	grid-template-rows: repeat(3, 1fr);

}
.grid3 > div {
	font-weight: normal;
	display: grid;
    grid-template-rows:  2.5fr 1fr;
    grid-template-columns: repeat(3,  1fr);
	background-color: rgb(200, 200, 200);
}
.grid3 > div > div {cursor: pointer; }
.gname {
	grid-row: 1/2;
	grid-column: 1/4;
	background-color: rgb(118, 119, 123);
 	display: flex;
    justify-content: center;
    align-items: center;
			}
.border {
	background-color: rgb(84, 86, 91);
}
.blank {
	background-color: rgb(200, 200, 200);
}
			.r_l {background-color: rgb(210, 210, 210); color: black;}
			.r_m {background-color: rgb(160, 160, 160); color: black;}
			.r_d {background-color: rgb(100, 100, 100); }
		</style>
	</head>
	<body>

		<?php
// створення клієнта
if (isset($_GET['new_client'])) {
	echo'
		<h1>новий клієнт</h1>
		<form method="post" >
		<input type="hidden" name="new_client">
		Ім`я: <input name="name"><br>
		<br>додатково : <input name="more"><br>
		<br>телефон: <input name="phone"><br>
		<br>статус: <select name="status"><option value="0">новий клієнт</option><option value="1">щотижня</option><option value="2">раз на два тижня</option><option value="3">раз в місяць</option><option value="4">без сталого графіку</option><option value="5">на паузі</option><option value="6">завершено</option><option value="9">зустріч не відбулась</option></select>
		
		<br><br>вартість: <input name="price"><br>
		<br>додатково : <textarea name="cadd" style="width: 330px; height:80px;" ></textarea><br>
		<br>1 : <textarea name="c1" style="width: 330px; height: 40px;" ></textarea><br>
		<br>2 : <textarea name="c2" style="width: 330px; height: 40px;" ></textarea><br>
		<br>3 : <textarea name="c3" style="width: 330px; height: 40px;" ></textarea><br>
		<br><input type="submit" value="зберегти">
		</form>
		';
		echo '<br><br>';
}
// список клієнтів
if (isset($_GET['clients'])){
	$c_iddd = mysqli_query($db, "SELECT * from clients where status<=5 order by id DESC");
			while ($c_idd=mysqli_fetch_array($c_iddd)) {
				echo '<br><a href="?edit_client='.$c_idd['id'].'">'.$c_idd['status'].'. '.$c_idd['id'].' '.$c_idd['name'].' '.$c_idd['more'].' '.$c_idd['price'].'</a>';
			}
		echo '<br><br>';
}
// редагування клієнта
if (isset($_GET['edit_client'])) {
	$line=mysqli_fetch_array(mysqli_query($db, 'SELECT * from clients where id='.$_GET['edit_client']));
	echo '
	<form method="post">
	<input type="hidden" name="edit_client" value="'.$_GET['edit_client'].'">
	Ім`я: <input name="name" value="'.$line['name'].'"><br>
	<br>додатково : <input name="more" value="'.$line['more'].'"><br>
	<br>телефон: <input name="phone" value="'.$line['phone'].'"><br>
	<br>статус: <select name="status"><option value="0" '; if ($line['status']==0) {echo "selected";} echo '>новий клієнт</option><option value="1" '; if ($line['status']==1) {echo "selected";} echo '>щотижня</option><option value="2" '; if ($line['status']==2) {echo "selected";} echo '>раз на два тижня</option><option value="3" '; if ($line['status']==3) {echo "selected";} echo '>раз в місяць</option><option value="4" '; if ($line['status']==4) {echo "selected";} echo '>без сталого графіку</option><option value="5" '; if ($line['status']==5) {echo "selected";} echo '>на паузі</option><option value="6" '; if ($line['status']==6) {echo "selected";} echo '>завершено</option><option value="9" '; if ($line['status']==9) {echo "selected";} echo '>зустріч не відбулась</option></select>
		<br><br>вартість: <input name="price" value="'.$line['price'].'"><br>
		<br>додатково : <textarea name="cadd" style="width: 330px; height:80px;" >'.$line['cadd'].'</textarea><br>
		<br>1 : <textarea name="c1" style="width: 330px; height: 40px;" >'.$line['c1'].'</textarea><br>
		<br>2 : <textarea name="c2" style="width: 330px; height: 40px;" >'.$line['c2'].'</textarea><br>
		<br>3 : <textarea name="c3" style="width: 330px; height: 40px;" >'.$line['c3'].'</textarea><br>
<br><input type="submit" value="зберегти">
		</form>';
		echo '<br><br>';
}
		// закріплення дню та часу
if (isset($_GET['fixation']) and isset($_GET['d']) and isset($_GET['t'])) {
	echo '
	<h2>Закріплення: '.$ddd[$_GET['d']].' о '.$ttt[$_GET['t']].'</h2>
	<form method="post">
		<input name="fixation_dt" type="hidden" value="1"><input name="cday" type="hidden" value="'.$_GET['d'].'"><input name="ct" type="hidden" value="'.$_GET['t'].'">
		<select name="c_id">
		';
	$c_iddd = mysqli_query($db, "SELECT * from clients where status<=5 and cday=0 order by status, id DESC");
	while ($c_idd=mysqli_fetch_array($c_iddd)) {
		echo '<option value="'.$c_idd['id'].'">'.$c_idd['status'].'. '.$c_idd['id'].' '.$c_idd['name'].' '.$c_idd['more'].'</option>';
	}
	echo '
		</select>
		<br><br><input type="submit" value="зберегти">
		</form>';
	echo '<br><br>';
}

		// створення звіту
elseif (isset($_GET['c_id']) && $_GET['c_id']!=0 and $_GET['session']) {
	$line=mysqli_fetch_array(mysqli_query($db, 'SELECT * from clients where id='.$_GET['c_id']));
	$num=mysqli_fetch_array(mysqli_query($db, 'SELECT num from sessions where c_id='.$_GET['c_id'].' and presence!=0 order by num DESC'));
	echo '
		<b>'.$line['id'].' '.$line['name'].' '.$line['more'].'</b> <a href="?null_dt='.$_GET['c_id'].'">(обнулити)</a>
		<form  method="post">
		<input type="hidden" name="c_id" value="'.$_GET['c_id'].'">
		<input type="hidden" name="s_new">
		<br><input type="checkbox" name="presence" checked value="1">
		<input type="date"  name="date" value="'.date('Y-m-d', $_GET['session']).'">
		<input  type="number" name="num" value="',$num['num']+1,'" style="width: 50px;"><br>
		<br>основне<br><textarea name="main" style="width: 330px; height: 100px;" autofocus></textarea>			
		<br>фон до зустрічі<br><textarea name="f01" style="width: 330px; height: 30px;"></textarea>
		<br>реакція від візуального контакту<br><textarea name="f02" style="width: 330px; height: 30px;"></textarea>
		<br>запит<br><textarea name="f03" style="width: 330px; height: 30px;"></textarea>
		<br>важлива інформація<br><textarea name="f04" style="width: 330px; height: 100px;"></textarea>
		<br>інтервенції та їх спрямування<br><textarea name="f05" style="width: 330px; height: 60px;"></textarea>
		<br>що для клієнта було новим досвідом<br><textarea name="f06" style="width: 330px; height: 30px;"></textarea>
		<br>почуття на виході з контакту<br><textarea name="f07" style="width: 330px; height: 30px;"></textarea>
		<br>
		<br>емоції<br><textarea name="f08" style="width: 330px; height: 30px;"></textarea>
		<br>тілесні реакції<br><textarea name="f09" style="width: 330px; height: 30px;"></textarea>
		<br>потреба клієнта<br><textarea name="f10" style="width: 330px; height: 30px;"></textarea>		
		<br>способи побудови контакту, чи він відбувся<br><textarea name="f11" style="width: 330px; height: 30px;"></textarea>
		<br>функція Self<br><textarea name="f12" style="width: 330px; height: 30px;"></textarea>
		<br>перенос/контрперенос, метафора<br><textarea name="f13" style="width: 330px; height: 30px;"></textarea>
		<br>гіпотеза<br><textarea name="f14" style="width: 330px; height: 30px;"></textarea>
		<br>стратегія на майбутнє<br><textarea name="f15" style="width: 330px; height: 30px;"></textarea>
		<br>додатково<br><textarea name="addition" style="width: 330px; height: 100px;"></textarea>
		<br><input type="submit" value="зберегти">
		</form>';
	$sessionss = mysqli_query($db, "SELECT id, num, DATE_FORMAT(date, '%d.%m') as d1, main from sessions where c_id=".$_GET['c_id']." order by date DESC, num DESC, presence  DESC");
	while ($sessions=mysqli_fetch_array($sessionss)) {
		echo '<br><a href="session.php?s_id=',$sessions['id'],'">',$sessions['num'] ,') ', $sessions['d1'],' ', substr($sessions['main'], 0, 100),'</a>';
	}
	echo '<br><br>';
}

// редагування звіту
elseif (isset ($_GET['s_id']) and $_GET['s_id']!=0) {
	$session=mysqli_fetch_array(mysqli_query($db, 'SELECT * from sessions where id='.$_GET['s_id']));
	$client=mysqli_fetch_array(mysqli_query($db, 'SELECT name from clients where id='.$session['c_id']));
	echo '
		<b>',$client['name'],'</b>
		<form method="post">
		<input type="hidden" name="s_id" value="',$_GET['s_id'],'"><input type="hidden" name="c_id" value="',$session['c_id'],'">
		<br><input type="checkbox" name="presence"'; if ($session['presence']==1) {echo 'checked';} echo ' value="1">
		<input type="date"  name="date" value="'.$session['date'].'">
		<input  type="number" name="num" value="',$session['num'],'" style="width: 50px;"><br>
		<br>основне<br><textarea name="main" style="width: 330px; height: 100px;" autofocus>',$session['main'],'</textarea>
		<br>фон до зустрічі<br><textarea name="f01" style="width: 330px; height: 30px;">',$session['f01'],'</textarea>
		<br>реакція від візуального контакту<br><textarea name="f02" style="width: 330px; height: 30px;">',$session['f02'],'</textarea>
		<br>запит<br><textarea name="f03" style="width: 330px; height: 30px;">',$session['f03'],'</textarea>
		<br>важлива інформація<br><textarea name="f04" style="width: 330px; height: 100px;">',$session['f04'],'</textarea>
		<br>інтервенції та їх спрямування<br><textarea name="f05" style="width: 330px; height: 60px;">',$session['f05'],'</textarea>
		<br>що для клієнта було новим досвідом<br><textarea name="f06" style="width: 330px; height: 30px;">',$session['f06'],'</textarea>
		<br>почуття на виході з контакту<br><textarea name="f07" style="width: 330px; height: 30px;">',$session['f07'],'</textarea>
		<br>
		<br>емоції<br><textarea name="f08" style="width: 330px; height: 30px;">',$session['f08'],'</textarea>
		<br>тілесні реакції<br><textarea name="f09" style="width: 330px; height: 30px;">',$session['f09'],'</textarea>
		<br>потреба клієнта<br><textarea name="f10" style="width: 330px; height: 30px;">',$session['f10'],'</textarea>		
		<br>способи побудови контакту, чи він відбувся<br><textarea name="f11" style="width: 330px; height: 30px;">',$session['f11'],'</textarea>
		<br>функція Self<br><textarea name="f12" style="width: 330px; height: 30px;">',$session['f12'],'</textarea>
		<br>перенос/контрперенос, метафора<br><textarea name="f13" style="width: 330px; height: 30px;">',$session['f13'],'</textarea>
		<br>гіпотеза<br><textarea name="f14" style="width: 330px; height: 30px;">',$session['f14'],'</textarea>
		<br>стратегія на майбутнє<br><textarea name="f15" style="width: 330px; height: 30px;">',$session['f15'],'</textarea>
		<br>додатково<br><textarea name="addition" style="width: 330px; height: 200px;">',$session['addition'],'</textarea>
		<br><input type="submit" value="зберегти">
		</form>';
	$sessionss = mysqli_query($db, "SELECT id, num, DATE_FORMAT(date, '%d.%m') as d1, main from sessions where c_id=".$session['c_id']." order by date DESC, num DESC, presence  DESC");
	while ($sessions=mysqli_fetch_array($sessionss)) {
		echo '<br><a href="session.php?s_id=',$sessions['id'],'">',$sessions['num'] ,') ', $sessions['d1'],' ', substr($sessions['main'], 0, 100),'</a>';
	}
	echo '<br><br>';
}
// зміни в розкладі
if (isset($_GET['changes']) and $_GET['changes']=1) {
	echo'
		<h1>Зміни</h1>
		<form method="post" >
		<input name="changes" type="hidden" value="1">
		<select name="c_id">
		<option value="0">новий клієнт</option>
		';
	$c_iddd = mysqli_query($db, "SELECT * from clients order by id DESC");
	while ($c_idd=mysqli_fetch_array($c_iddd)) {
		echo '<option value="'.$c_idd['id'].'" '; if ($c_idd['id']==$_GET['c_id']) {echo 'selected';} echo '>'.$c_idd['id'].' '.$c_idd['name'].' '.$c_idd['more'].'</option>';
	}
	echo '
		</select>
<br><input type="radio" name="type" value="1" '; if ($_GET['c_id']==0) {echo 'checked';} echo '>додавання &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="type" value="0" '; if ($_GET['c_id']!=0) {echo 'checked';} echo '>відміна
		<br><input type="date"  name="date" value="'.$_GET['date'].'">
		<input name="d" type="hidden" value="'.$_GET['d'].'">
		<input name="t" type="hidden" value="'.$_GET['t'].'">
		<br>Додатково: <input name="addition"><br>
		<br><input type="submit" value="зберегти">
		</form><br>
		';
}

// таблиця
echo
'<div class="grid">
			<div onclick="location.href=\'session.php\';"></div>
			<div class="border">пон</div>
			<div class="border">вів</div>
			<div class="border">сер</div>
			<div class="border">чет</div>
			<div class="border">пят</div>
			<div class="border">суб</div>
		
			<div class="grid2 time">
				<div>08:30</div>
				<div>9:45</div>
				<div>12:00</div>

			</div>';
			$w=array(1=>'понеділок', 2=>'вівторок', 3=>'середа', 4=>'четвер', 5=>'пятниця', 6=>'субота');
			$lm=strtotime('last monday', strtotime('tomorrow'));
			for ($d=1; $d<=6; $d++) {
				$wd=$d-1;
				$lm1=strtotime('+'.$wd.' DAY', $lm);
				$lm2=strtotime('+1 WEEK +'.$wd.' DAY', $lm);
				$lm3=strtotime('+2 WEEK +'.$wd.' DAY', $lm);
				echo '<div class="grid3">';
				for ($t=1; $t<=3; $t++) {
					$lineline = mysqli_query($db, 'SELECT id, name, more from clients where status=1 and cday='.$d.' and ct='.$t);
					echo '<div>
					';
					if (mysqli_num_rows($lineline)!=0) {
						$line=mysqli_fetch_array($lineline);
						$c_id=$line['id'];
						$r=mysqli_query($db, 'SELECT id from sessions where date="'.date("Y-m-d", $lm1).'" and c_id="'.$c_id.'"'); if (mysqli_num_rows($r)!=0) {$cr='&#10003;';} else {$cr='';}
						echo '<div class="gname" onclick="location.href=\'session.php?c_id='.$line['id'].'&session='.$lm1.'\';">',$cr,' ',$line['name'],' ',$line['more'], '</div>';
					} else {$c_id=0; echo '<div class="gname blank" onclick="location.href=\'session.php?d='.$d.'&t='.$t.'&fixation\';"></div>';}
					for ($i=0; $i<=2; $i++) {
					$lmm=strtotime('+'.$i.' WEEK '.$wd.' DAY', $lm);;
					$c_idd=$c_id;
					$avail=mysqli_query($db, 'SELECT id, c_id, type from changes where date="'.date("Y-m-d", $lmm).'" and d='.$d.' and t='.$t.' order by dt DESC');
					if ($c_id!=0) {
						if (mysqli_num_rows($avail)==0) { $av='d';}
						else {
							$availl=mysqli_fetch_array($avail);
							if ($availl['type']==1) {if ($availl['c_id']==$c_id) {$av='d';} else {$av='m'; $c_idd=$availl['c_id'];}}
							if ($availl['type']==0) { if($availl['c_id']==$c_id) {$av='l'; $c_idd=0;}}}
					} else {
						if (mysqli_num_rows($avail)==0) { $av='l';}
						else {
							$availl=mysqli_fetch_array($avail);
							if ($availl['type']==1) {$av='m'; $c_idd=$availl['c_id'];}
							if ($availl['type']==0) {$av='l'; $c_idd=0;}
						}
					}
					echo '
					<div onclick="location.href=\'session.php?c_id='.$c_idd.'&d='.$d.'&t='.$t.'&date='.date("Y-m-d", $lmm).'&changes=1\';"  class="r_',$av,'">',date("d", $lmm),'</div>';

					}
					echo '</div>';
				}
				echo '</div>';
			}
			echo '
		</div>
		<b><a href="?clients">клієнти:</a></b>
		';
		$lineline1 = mysqli_query($db, 'SELECT * from clients where status<=5 and cday=0  order by status, id DESC');
				while ($line1=mysqli_fetch_array($lineline1)) {
					echo '<br>'.$line1['status'].'. <a href="?c_id='.$line1['id'].'&session='.strtotime("now").'"><b>',$line1['name'],'</b> ',$line1['more'],'</a>';
				}
		echo '<br><a href="?new_client">+</a>';

echo '</body>';
?>