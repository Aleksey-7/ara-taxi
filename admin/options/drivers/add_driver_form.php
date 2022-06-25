<!--ЭТОТ РНР ФАЙЛ ОЮЕСПЕЧИВАЕТ ДОБАВЛЕНИЕ ВОДИТЕЛЕЙ В БД   -->


<?php
$page = "drivers";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="../../style.css"> 
</head>

<body>

<div id="container">
	<div class="sidebar">
		<?php

			//подключаем навигационную часть админ панели
			include "../../parts/nav.php";
		?>
	</div> <!-- class="sidebar" -->

	<!--==============================================
        ФОРМА ДОБАВЛЕНИЯ ДАННЫХ НОВОГО ВОДИТЕЛЯ В БД 
     ================================================= -->
   
         <div class="info">
        	 <h1 class="info-header"> ФОРМА ДОБАВЛЕНИЯ ВОДИТЕЛЯ В БД </h1>


		<form action="http://ara-taxi.local/admin/options/drivers/add_driver.php" method="POST">
			<label for="title">Имя водителя</label>
			<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
			<input type="text" id="title" name="name" class="add-text" placeholder="введите имя ">

			<label for="title">Фамилия водителя</label>
			<input type="text" id="title" name="lastName" class="add-text" placeholder="введите фамилию ">

			<label for="title">Модель авто водителя</label>
			<input type="text" id="title" name="modelCar" class="add-text" placeholder="введите модель авто ">

			<label for="title">Цвет авто водителя</label>
			<input type="text" id="title" name="colorCar" class="add-text" placeholder="введите цвет авто">

			<label for="title">Номер авто водителя</label>
			<input type="text" id="title" name="numCar" class="add-text" placeholder="введите гос.номер авто">

			<label for="title">Телефон водителя</label>
			<input type="text" id="title" name="phone" class="add-text" placeholder="введите телефон ">

			<label for="title">Фото водителя</label>
			<input type="text" id="title" name="photo" class="add-text" placeholder="введите путь к просмотру фото">

			<input type="submit"  class="bttn" value="submit">
		</form>







		 </div>
     

		 
  
</div> <!-- id="container" -->



		 <script src="../../script.js"></script>
	
</body>
</html>
