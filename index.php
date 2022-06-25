
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
			include 'elements_site/formazamovlen.php'; // добавляємо форму замовлень
		 ?>
		<div class="about_us">
			<div class="text">
				<h1 class="we">Про нас</h1>
				<p><b>ARATaxi</b> - це перше та єдине таксі нашого міста. У нас найкращі атомобілі у місті з обкаткою понад 30 років, кожен з яких обладнаний аудіомагнітофоном з аудіокасетами всіх пісень Олега Винника. Наші водії професіонали, дехто з них навіть має водійські права. Серед найважливіших пріоритетів нашої роботи - безпека пасажира, тому ми не наполягаємо щоб Ви їхали з нами, а навіть рекомендуємо пройтися пішки чи скористатися автобусом. Та все ж, якщо Ви таки скористаєтесь хоча б одного разу сервісом нашої служби таксі, Ви будете приємно здивовані і ця поїздка залишиться для Вас незабутньою. Можливо Вам навіть пощастить і Ви таки доїдете до місця призначення. З нами Вам завжди буде весело...</p>
				
			</div>
		</div>

 		<div id="video">
			<iframe width="250" height="165" src="https://www.youtube.com/embed/DmupMVxM69M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<div id="radio">
			<img src="images/playRadio.png">
			<audio controls="controls">
	  			<source src="audio/taksi.mp3"/></audio>
		</div>
  	</div>
 </body>
</html>