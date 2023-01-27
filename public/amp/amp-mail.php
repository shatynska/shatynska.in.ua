<?php include ("first.php");
if (isset($_GET['rt'])){
	$res=mysqli_query($db, 'insert into cl (phone, more, dt) values ("'.htmlspecialchars($_GET['phone']).'", "'.htmlspecialchars($_GET['more']).'", NOW())') or die ('помилка');
	$last_id =  mysqli_insert_id();
	$tt=substr($_GET['rt'], 0, 1);
	$dd=substr($_GET['rt'], 2);
    $res=mysqli_query($db, 'UPDATE reserv SET  t'.$tt.'="' .$last_id.'" WHERE ID="'.$dd.'"') or die ('помилка2');
}
