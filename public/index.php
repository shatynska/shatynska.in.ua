<?php
include_once('first.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="amphtml" href="https://shatynska.in.ua/amp/" />
<title>Психолог та гештальт-терапевт Олена Шатинська. Психологічна допомога в Дрогобичі: психотерапія та психологічні консультації.</title>
<meta name='description' content='Психолог та гештальт-терапевт Олена Шатинська. Дрогобич. &#9743; +380980074869. Психотерапія та психологічні консультації: індивідуальний та сімейний психолог.'>
<?php include ('begin.php'); ?>
<section id="short"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=2")); echo $line['text']; ?></section>
<main>
<section id="short2"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=2")); echo $line['text']; ?></section>
<section id="kons"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=9")); echo $line['text']; ?>	  </section>
<section id="tren"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=6")); echo $line['text']; ?>	  </section>
</main>
<?php include ('end.php'); ?>