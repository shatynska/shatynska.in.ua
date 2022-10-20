<?php
if (!mysql_connect('alenasha.mysql.ukraine.com.ua','alenasha_alena','sunadm369')) {echo "<script>alert ('Не вдається з`єднатися с базой даних!')</script>";};
if (!mysql_select_db('alenasha_alena')) {echo "<script>alert ('Не вдається знайти базу даних!')</script>";};
mysql_set_charset('utf8');
if (isset($_POST['c_id'])){
	$res=mysql_query('insert into sessions (c_id, s_dt, s_num, s_main) values ("'.$_POST['c_id'].'", "'.$_POST['s_dt_y'].'-'.$_POST['s_dt_m'].'-'.$_POST['s_dt_d'].' '.$_POST['s_dt_h'].':'.$_POST['s_dt_i'].':00", "'.$_POST['s_num'].'", "'.htmlspecialchars($_POST['s_main']).'")') or die ('помилка');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	 	<title>Сесія</title>
		<style>
			table {width: 100%;}
			td {border: 1px solid grey; text-align: center;}
		</style>
	</head>
	<body>
		<table>
			<tr><td></td><td>8:30</td><td>9:45</td><td>11:30</td><td>12:45</td></tr>
			<?php
			$w=array(1=>'понеділок', 2=>'вівторок', 3=>'середа', 4=>'четвер', 5=>'п`ятниця');
			for ($d=1; $d<=3; $d++) {
				echo '<tr><td>'.$w[$d].'</td>';
				for ($t=1; $t<=6; $t++) {
					$lineline = mysql_query('SELECT id, name from cl where status>0 and status<=2 and cday='.$d.' and ct='.$t);
					if (mysql_num_rows($lineline)!=0) {
					$line=mysql_fetch_array($lineline);	
					echo '<td><a href="?c_id='.$line['id'].'&d='.$d.'&t='.$t.'">',$line['name'],'</a></td>';
					} else {echo '<td><a href="?c_id=0&d='.$d.'&t='.$t.'">+</a></td>';}
				}
				echo '</tr>';
			}
			?>
		</table>
		<b>також:</b>
		<?php
		$lineline1 = mysql_query('SELECT * from cl where status=3 order by ctime');

				while ($line1=mysql_fetch_array($lineline1)) {
					echo '<br>- <a href="?c_id='.$line1['id'].'">',$line1['name'],'</a>  ',$line1['more'],'';
				}
		echo '<br>- <a href="?c_id=0">+</a>';
?>

</body>