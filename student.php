<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Профиль студента</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="STUDENT/student_style.css">
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
	<div class="container">
    <div class="profile">
		  <div class="profile-sidebar">
				<img src="STUDENT/img/a.jpg" alt="Фото профиля" class="profile-img">
				<h2 class="profile-name">Рахметолла Айбар</h2>
                <p class="profile-info"><strong>Дата рождения:</strong> 27.01.2006</p>
				<p class="profile-info"><strong>Номер телефона:</strong> +7 (776) 238-21-87</p>
				<p class="profile-info"><strong>Номер поступления:</strong> 123456</p>
				<p class="profile-info"><strong>Город:</strong> Ақтөбе</p>
			</div>
			<div class="profile-main">
				<h1 class="profile-heading">Профиль студента</h1>
				<p class="profile-group">Группа: 203ПО</p>
				<p class="profile-faculty">Отделение: ИС</p>
				<p class="profile-specialty">Специальность: Информационные технологии и программирование</p>
				<p class="profile-email">Электронная почта: aibar270106@gmail.com</p>
				<div class="profile-social">
					<a href="https://instagram.com/aibarhvgs?igshid=YmMyMTA2M2Y=" class="social-icon" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/87/87390.png" alt="" class="social_png"></a>
                    <a href="https://youtube.com/@krypton5351" class="social-icon" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/1077/1077046.png" alt="" class="social_png"></a>
                    <a href="https://www.facebook.com/profile.php?id=100065311958029&mibextid=ZbWKwL" class="social-icon" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/4701/4701482.png" alt="" class="social_png"></a>
				</div>
                <div class="location">
            <h2>Локация</h2>
            <div class="location-info">
              <div class="location-item">
                <h3>Страна:</h3>
                <p>Қазақстан</p>
              </div>
              <div class="location-item">
                <h3>Город:</h3>
                <p>Ақтөбе</p>
              </div>
              <div class="location-item">
                <h3>Адрес:</h3>
                <p>Балауса 334</p>
              </div>
            </div>
          </div>
          <div class="academic-performance">
            <h2>Успеваемость</h2>
            <table>
              <thead>
                <tr>
                  <th>Предмет</th>
                  <th>Оценка</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>КМ-02</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>БМ-05</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>Графикалық дизайн</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>Английский язык</td>
                  <td>5</td>
                </tr>
                <tr>
                  <td>КМ-03</td>
                  <td>5</td>
                </tr>
              </tbody>
            </table>
          </div>
		</div>
		</div>
	</div>
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
