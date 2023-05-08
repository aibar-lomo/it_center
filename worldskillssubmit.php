<?php

$db = new mysqli('localhost','root','','submit');
$email = trim($_POST['email']);
$name = trim($_POST['name']);
$squad = trim($_POST['squad']);
$mamandyq = trim($_POST['mamandyq']);
$db->query("INSERT INTO `signin` (`email`,`name`,`squad`,`mamandyq`)
VALUES ('$email','$name','$squad','$mamandyq')");

$db->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worldskills</title>
    <link rel="stylesheet" href="submit/worldskills_submit.css">
</head>
<body>
	<header class="menu_header">
		<div class="button" onclick="openmenu()">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
		</div>
		<div class="logo" onclick="slowscroll('#top')">
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
    <form method="post" class="form">
			<div class="Group">
				<label for="Email">Email</label>
				<input placeholder="abc@email.com" id="Email" type="email" name="login" method="post">
			</div>
			<div class="Group">
				<label for="name">Аты-жөні</label>
				<input id="name" type="name" name="name" method="post">
			</div>
			<div class="Group">
				<label for="name">Тобы</label>
				<input id="name" type="name" name="squad" method="post">
			</div>
			<div class="Group">
				<label for="name">Құзыреттілік</label>
				<input id="name" type="name" name="mamandyq" method="post">
			</div>
			<div class="Group">
				<button class="btn">Жіберу</button>
			</div>
		</form>


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
</body>
</html>