<?php include ("first.php");
if (isset($_POST['rt'])){
	$res=mysql_query('insert into cl (phone, more, dt) values ("'.htmlspecialchars($_POST['phone']).'", "'.htmlspecialchars($_POST['more']).'", NOW())') or die ('помилка');
	$last_id =  mysql_insert_id();
	$tt=substr($_POST['rt'], 0, 1);
	$dd=substr($_POST['rt'], 2);
    $res=mysql_query('UPDATE reserv SET  t'.$tt.'="' .$last_id.'" WHERE ID="'.$dd.'"') or die ('помилка2');
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
	mail('mail@shatynska.in.ua', 'попередній запис', htmlspecialchars($_POST['rt']).'<br/>'.htmlspecialchars($_POST['phone']).'<br/>'.htmlspecialchars($_POST['more']), $headers) or die('Помилка!');
	echo "<script>alert(\"Дякуємо! Ми до Вас зателефонуємо в найближчий час (від однієї до чотирьох годин в робочий час) щоб підтвердити запис.\");</script>";
}
?>
	 <link rel="canonical" href="https://shatynska.in.ua/contacts.php"/>
	 <title>Контакти : Психолог : консультації психолога та тренінги : психологічна допомога в Дрогобичі</title>
	 <meta name='description' content='Психолоr, психотерапевт Шатинська Альона. Консультування: особистісне, сімейне та психолого-педагогічне. .'>
<?php include ("begin.php"); ?>
<div id="short"></div>
<main>
<div>
<h1>контакти</h1>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2598.6670744627572!2d23.49485981521472!3d49.3584495733209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473a4c22e970212b%3A0x55e67397a0aa6041!2z0LLRg9C70LjRhtGPINCf0LXRgtGA0LAg0KHQsNCz0LDQudC00LDRh9C90L7Qs9C-LCAxNDIsINCU0YDQvtCz0L7QsdC40YcsINCb0YzQstGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjCwgODIxMDA!5e0!3m2!1suk!2sua!4v1469253916919"  frameborder="0" style="border:0; float: left; padding-right: 1vw; width: 40vw; height: 20vw;" allowfullscreen></iframe>

<p style="text-align: left;"><br>м. Дрогобич<br>
			  вул. Лесі Українки 26<br>
<a href="tel:+380980074869" id="tel">0980074869</a><br/>
	  <a href="mailto:mail@shatynska.in.ua">mail@shatynska.in.ua</a><br>
сайт: <a href="https://shatynska.in.ua">https://shatynska.in.ua</a><br>
<a href="https://www.facebook.com/PsychologistShatynska">facebook.com/PsychologistShatynska</a><br><br>

</div>
</main>
<?php include ("end.php"); ?>