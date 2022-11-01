<?php include ("first.php"); ?>
<link rel="canonical" href="https://shatynska.in.ua/trainings.php"/>
<title>Тренінги : Психолог : консультації психолога та тренінги : психологічна допомога в Дрогобичі : сімейний та дитячий психолог</title>
<meta name='description' content='Психолог Шатинська Олена. Допомога психолога в Дрогобичі. Консультації психолога: особистісне, сімейне та психолого-педагогічне консультування. Психологічні тренінги: для вагітних, для тих у кого зайва вага, для батьків дітей різного віку, для підлітків та молоді. '>
<?php include ("begin.php"); ?>
<main>
	<?php	if (!isset ($_GET['id']) or $_GET['id']>4)	{ echo '
	<h1>Тренінги і групи</h1>
<div class="n12">
<h2>Психологія на кожен день</h2>
<amp-img src="../images/t1.jpg"  width="280" height="280"></amp-img>
<p>Тренінг для підлітків і для юнаків
<p>Набираємо дві тренінгові групи: підліткову та юнацьку.
Все буде просто, практично і цікаво.
<br/><br/>
</div>

<div class="n12">
	<h2>Я в відносинах</h2>
<amp-img src="../images/t2.jpg" width="280" height="280"></amp-img>

 <p> Психологічна група. Про все що стосується відносин і, головне, про Вас в цих відносинах. Як не втратити себе? Чого ви насправді хочете? І як же ж цього досягнути?

<br/><br/>
</div>
	<div class="n12">
		<h2>Неформат</h2>
<amp-img src="../images/t3.jpg" width="280" height="280"></amp-img>

<p>Вечірня психологічна група для тих у кого зайва вага. У невеличкому колі (6-8 учасників) ми психологічно пропрацюємо ті моменти, які перешкоджають Вам на цьому шляху.

<br/><br/>
</div>
		<div class="n12">
	<h2>Нове життя</h2>
<amp-img src="../images/t4.jpg" width="280" height="280"></amp-img>

 <p>Тренінг для вагітних. Запрошуємо майбутніх мам пройти шість тренінгових занять, що посприяють оптимальному протіканню вагітності та народженню малюка.

<br/><br/>
</div>
	';} else { include ('../tren/'.$_GET['id'].'.php');}
?>
</main>
<?php include ("end.php"); ?>