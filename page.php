<?php
$db = new mysqli('localhost','root','','winners');

$info = [];

if ($query = $db->query("SELECT * FROM winners")) {
	$info = $query->fetch_all(PDO::FETCH_ASSOC);
} else{
	echo 'qate';
}
?>



<!DOCTYPE html>
<!-- saved from url=(0060)http://127.0.0.1:5500/worldskills/worldskills_page/page.html -->
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Worldskills</title>
	<link rel="stylesheet" href="worldskillspage/page.css">
</head>
<body>
<header class="menu_header">
	<div class="button" onclick="openmenu()">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
	</div>
	<div class="logo1" onclick="slowscroll('#top')">
		<span>IT center</span>
	</div>
</header>
<ul class="menu" id="menu">
	<li class="links"><a href="ITcenter.php" onclick="mainrep()">Басты бет</a></li> 
	<li class="links"><a href="student.php" target="_blank"  onclick="studentrep()">Айбар</a></li>
	<li class="ws_link">Worldskills
		<ul class="submenu">
			<li><a href="page.php" target="_blank" onclick="pagerep()">Ақпарат</a></li>
			<li><a href="worldskillssubmit.php" target="_blank" onclick="submitrep()">Өтініш жіберу</a></li>
		</ul>
	</li>
</ul>
<div class="container">
	<header class="header">
		<div class="logo"><img src="./page_files/logo.svg" alt=""></div>
	</header>
	<div class="top">
		<h1>worldskills чемпиондар сенімі</h1>
		<p>2023-2024 жылдар аралығында WorldSkills Champions Trust елшілері ретінде қызмет ететін дүние жүзіндегі WorldSkills бәсекелестерімен танысыңыз.</p>
		<a href="https://worldskills.org/" target="_blank">көбірек білу</a>
	</div>
	<section class="about">
		<div class="about_title">
			<h1>Әлемді дағдылардың күшімен жақсартамыз</h1>
			<p>Біз білікті адамдардың беделі мен танылуын арттырамыз және экономикалық өсуге қол жеткізуде дағдылардың қаншалықты маңызды екенін көрсетеміз.</p>
		</div>
		<div class="about_img">
			<div class="img-1"><div class="img_title"><h1>2020</h1><p>айбар рахметолла жеңді</p></div></div>
			<div class="img-2"><div class="img_title"><h1>2021</h1><p>айбар рахметолла жеңді</p></div></div>
			<div class="img-3"><div class="img_title"><h1>2022</h1><p>айбар рахметолла жеңді</p></div></div>
			<div class="img-4"><div class="img_title"><h1>2023</h1><p>айбар рахметолла жеңді</p></div></div>
		</div>
	</section>
	<section class="member">
		<div class="winners_title"><h1>WorldSkills жеңімпаздары</h1><p>2018 жылы өткен «WorldSkills Kazakhstan» облыстық чемпионатында колледжіміздің студенттері 8 құзыреттілік бойынша Гран-приді жеңіп алып, республикалық чемпионатқа жолдама алды және 4 құзырет бойынша жеңімпаз атанды</p></div>
		<div class="winners">
			<?php foreach ($info as $data): ?>
			<div class="winners_about">
				<img src="<?php echo $data[0]; ?>" alt="">
				<h3><?php echo $data[1]; ?></h3>
				<p><?php echo $data[2]; ?></p>
				<p><?php echo $data[3]; ?></p>
			</div>
			
			<?php endforeach; ?>
		</div>
	</section>
</div>










<!--что это? -->

<!-- Code injected by live-server -->
<script>
	
	$(document).on("scroll", function (){
		if($(window).scrollTop() === 0)
			$("header").removeClass("fixed")
		else
			$("header").attr("class", "fixed");	
	})
	function openmenu(){
		document.getElementById('menu').classList.toggle('menu_fixed');
	}
</script>

</body></html>