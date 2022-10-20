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
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>