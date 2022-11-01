<?php include ("first.php");
echo '
	 <link rel="canonical" href="https://shatynska.in.ua/article.php?id="'.$_GET['id'].'/>
	 <title>Стаття : Психолог : консультації психолога та тренінги : психологічна допомога в Дрогобичі : сімейний та дитячий психолог</title>
	 <meta name="description" content="Психологічна студія Sunny. Допомога психолога в Дрогобичі. Консультації психолога: особистісне, сімейне та психолого-педагогічне консультування. Психологічні тренінги: для вагітних, для тих у кого зайва вага, для батьків дітей різного віку, для підлітків та молоді. ">';
include ("begin.php");
echo '
<div id="short"></div>
	 <main>
	<div>';
include ('articles/'.$_GET['id'].'/text.php');
	echo '</div>
</main>';
include ("end.php"); ?>