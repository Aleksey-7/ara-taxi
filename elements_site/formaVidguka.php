<!--НTML СТРУКТУРА ФОРМЫ ОТПРАВКИ ОТЗЫВОВ НА САЙТЕ  -->

<!DOCTYPE html>
<html>
<head>
	<title>ARATaxi</title>
	<meta charset="utf-8">
	<link rel="icon" type="images/x-icon" href="/images/taksi.jpg">
	<link rel="stylesheet" type="text/css" href="../style.css"> 
</head>

<body>
	<body>
		<div class="container">
			<?php  
				include 'shapka.php'; //добавляємо шапку
			 ?>
			 <div id="vidgyku">
  	    		<div id="form-vidguki">
  	    			

					<form method="post" action="http://ara-taxi.local/elements_site/addVidguk.php" class="form">

 						<p>
 							<label for="firstname"><span class="formTextRed">*</span> Имя:</label>
 							<input type="text" name="name" id="firstname" />
 						</p>
 
 						<p>
 							<label for="email"><span class="formTextRed">*</span> Email:</label>
 							<input type="text" name="email" id="email" />
 						</p>

 						<p>
 							<label for="comment"><span class="formTextRed">*</span> Отзыв:</label>
 							<textarea rows="10" name="text" id="comment"></textarea>
 						</p>

 						<p>
 							<input type="checkbox" name="confirm" id="confirm" />
 							<label for="confirm" class="confirm">Не возражаю против публикации моего отзыва на сайте в рекламных целях:</label>
 						</p>
 
 						<p class="submit">
 							<input type="submit" value="Отправить" />
 						</p>
 					</form>


  	    			 
  	    		</div>
  			</div>
		</div>
	
</body>
</html>