<link rel="stylesheet" href="/css/style.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81285722-1', 'auto');
  ga('send', 'pageview');
	</script>
	<style>
	  *{ padding: 0; margin: 0; border: 0; font-family: 'Times New Roman', Georgia, Times, serif; color: #4a542b; font-size: 1 rem; 
	  text-align: center; 
	  font-style: normal; 
	  line-height: 2 rem;}
	  a {text-decoration: none; cursor: pointer;}
		p {text-align: justify; text-indent: 25px; }
		img {border-radius: 4px; }
	  html {background-color: #848c1f; background-image: url(images/fon.jpg); background-repeat: no-repeat; background-position: center top; background-size: auto 534px;}
	  #flex {display: flex; flex-direction: column; flex-wrap: nowrap; justify-content: center; width: 100%;}
	  h1, h1 a, h1 a, h2, h2 a, a h2 {font-weight: bold; font-size: 1.2rem; text-align: center; margin: 4px 0;}
	  h3, h3 a {font-size: 1.1rem;}
	  header {width: 100%; height: 300px; }
	  nav, address, main, aside {display: flex; flex-direction: column; flex-wrap:wrap; }
	  #short, #short2, #zap, #cont, #kons, #tren, #lart, #lart2, main div, main section {position: relative; min-height: 225px; padding: 10px; margin: 0 5px 10px; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.15), 0 1px 1px rgba(0,0,0,0.1);}
	  nav {order: 1;}
		main {order: 3; flex-wrap: nowrap;}
		main div, main section  {background-color: rgba(255, 255, 255, 0.9); flex-grow: 1; }
	  #short {order: 2;}
	  address {order: 4; }
	  #short, #short2 {min-width: 300px; background-color: rgba(255, 255, 255, 0.7);}
	  #short img, #short2 img {width: 50%;float: left; border-radius: 4px; margin: 5px 5px 20px 0; }
	  #menu, #three, #three2, main, aside {display: flex; flex-direction: column;  justify-content: space-between; box-shadow:none;  padding: 0; margin: 0; }
	  #menu a, #three a, #three2 a {display: block; min-width: 210px; padding: 6px 10px ;  margin: 0 5px 10px; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.15), 0 1px 1px rgba(0,0,0,0.1); font-weight: bold;}
	  #menu a {color: #ffffe6; font-size: 1.1rem; background-color: rgba(83, 100, 1, 0.8); }
	  #menu a:hover { box-shadow: 0 2px 4px rgba(0,0,0,0.4), 0 2px 2px rgba(0,0,0,0.1);}
	  #three a, #three2 a {font-size: 1rem; padding: 12px 10px ;}
	  #three2 {min-height: 0;}
	  .th1 {background-color: rgba(244, 214, 87, 0.7);}
	  .th2 {background-color: rgba(255, 229, 101, 0.7);}
	  .th3 {background-color: rgba(255, 237, 151, 0.7);}
	  #lart, #lart2 {background-color: rgba(83, 100, 1, 0.7); min-height: 0; color: #ffffe6;}
	  #lart a, #lart2 a {display: block; color: #ffffe6;}
	  #lart h2, #lart2 h2 {color: #ffffe6;}
	  #lart2 {display: none; color: #ffffe6; }
	  #zap {min-width: 210px; background-color: rgba(83, 100, 1, 0.7); color: #ffffe6; }
	  #zap h2 {color: #ffffe6;}
	  #zap table {width: 100%; font-size: 0.84rem; text-align: center; background-color: rgba(83, 100, 1, 0.8); border-radius: 4px; margin: 10px 0 20px 0; line-height: 1rem;}
	  #zap table td a {color: #ffffe6;}
	  #zap table td {color: #848c1f;}
	  #cont {min-width: 210px; background-color: rgba(238, 210, 82, 0.7);}
	  #kons {min-width: 300px; order: 6; background-color: rgba(255, 255, 255, 0.8);}
	  #tren {min-width: 300px; order: 7; background-color: rgba(255, 255, 255, 0.9);}
	  aside {min-width: 210px; min-height: 0; order: 8; justify-content: flex-start; }
	  #short2 {display: none;}
	  #three {display: none;}
		.free {color: #4a542b;}
		.pointer {cursor: pointer;}
	  main {order: 3;}
	  .more {display: block; position: absolute; bottom: 10px; width: 90%; font-weight: bold; }
		.reserv {width: 100%;}
		.reserv td {border: 1px solid #bdcc98; padding: 1px; color: #bdcc98; }
@media only screen and (min-width: 587px) {
		#menu a, #three a, #three2 a, #lart, #zap, #cont {width:210px;}
		  #short2 {display: block;}
		  #short {display: none;}
		  #flex {justify-content: left; }
		  #short, #short2 {min-width: 300px; width: auto; }
		  main {position: absolute; min-width: 300px; width: auto;  margin-left:240px; margin-right:10px; top:300px;}
		  #kons,  #tren {min-width: 300px; width: auto; }
	  }
@media only screen and (min-width: 767px) {
		  #menu a, #three a, #three2 a, aside {min-width: 150px; width: 150px;}
		  #short2 {display: block;}
		  #short {display: none;}
		  #lart2 {display: block;}
		  #lart {display: none;}
		  #short2, #kons, #tren {min-width: 300px; }
		  #three {display: flex;}
		  #three2 {display: none;}
		  #flex {flex-direction: row; flex-wrap: nowrap; justify-content: center;}
		  main {position: static; width: auto; min-width: 330px; order: 2; margin:0px; }
		  address { order: 3; }
		  aside {display: none;}
	  }
@media only screen and (min-width: 1007px) {
		  #menu a, #three a, #three2 {width: 100px;}
		  #lart {width: 150px;}
		  aside {display: flex; order: 5; width: 180px; }
		  #flex {flex-wrap: wrap; }
		  main {position: static; width: 810px; order: 6;  flex-wrap: wrap; }
		  nav, address, main, #forindex {flex-direction:row;}
		  address {flex-direction:row-reverse;}
		  #short {display: block; order: 2; width: 300px;}
		  #short2 {display: none;}
		  #lart {display: block;}
		  #lart2 {display: none;}
		  #three {display: none;}
		  #three2 {display: flex;}
		  aside {display: flex; order: 5;}
		  #kons,  #tren {width: 375px;}
		  #short img {width: 150px;}
		 .n13 {flex-basis: 270px; }
		 .n12 {flex-basis: 305px; }
		 .n23 {flex-basis: 540px;}
		}
@media only screen and (min-width: 1187px) {
			main {position: static; width: 990px; }
			#three2 {display: none;}
		  #three {display: flex;}
	      #kons, #tren {width: 465px;}
		 .n12 {flex-basis: 405px; }
	aside {order: 8;}
	  }
@media only screen and (min-width: 1382px) {
	  }
		</style>
	</head>
	<body>
		<header></header>
		<div id="flex">
			<nav>
				<div id="menu"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=1")); echo $line['text']; ?></div>
				<div id="three"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=3")); echo $line['text']; ?></div>
			</nav>
			<address>
				<div id="cont"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=4")); echo $line['text']; ?></div>
				<div id="zap"><?php include ('zap.php');?></div>
				<div id="lart2"><?php $line = mysqli_fetch_array(mysqli_query($db, "SELECT * from text where id=5")); echo $line['text']; ?></div>
			</address>