<?php
$hostname_db = getenv('HOSTNAME_DB');
$username_db = getenv('USERNAME_DB');
$password_db = getenv('PASSWORD_DB');
$base = getenv('BASENAME');

if ($db = mysqli_connect($hostname_db, $username_db, $password_db, $base))
{
mysqli_set_charset($db, 'utf8');  }
else
{
    throw new Exception('Unable to connect');
}
if (isset($_POST['rt'])){
	$res=mysqli_query($db, 'insert into clients (name, phone, more) values ( "'.htmlspecialchars($_POST['name']).'", "'.htmlspecialchars($_POST['phone']).'", "'.htmlspecialchars($_POST['more']).'")') or die ('помилка');
	$last_id =mysqli_insert_id($db);
	$dd=substr($_POST['rt'], 0, 1);
	$tt=substr($_POST['rt'], 2, 1);
	$ddate=substr($_POST['rt'], 4);
	$res=mysqli_query($db, 'insert into changes (c_id, date, d, t) values ("'.$last_id.'", "'.$ddate.'", "'.$dd.'",  "'.$tt.'")') or die ('помилка2');
	Header('Location: ?thank');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>