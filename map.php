<!--НTML СТРУКТУРА СТРАНИЦЫ САЙТА *КАРТА ГОРОДА*  -->
<!DOCTYPE html>
<html>
<head>
	<title>ARATaxi</title>
	<meta charset="utf-8">
	<link rel="icon" type="images/x-icon" href="/images/taksi.jpg">
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>
	<div class="container">
		<?php  
				include 'elements_site/shapka.php'; //добавляємо шапку
		?>
		<div id="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d8666.900860356905!2d28.72761210761387!3d49.77318124972265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1suk!2sua!4v1591329310404!5m2!1suk!2sua" width="700" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
	</div>
</body>
</html>