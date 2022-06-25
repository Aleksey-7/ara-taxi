<!--ЭТОТ РНР ФАЙЛ  СОДЕРЖИТ ФОРМУ РЕДАКТИРОВАНИЯ ДАННЫХ О ВОДИТЕЛЯХ  -->

<?php
	//ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";
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


					<!--=======================================
        				ФОРМА РЕДАКТИРОВАНИЯ ДАННЫХ  ВОДИТЕЛЯ
    				 ==========================================-->
   
         <div class="info">
        	 <h1 class="info-header"> ФОРМА РЕДАКТИРОВАНИЯ ДАННЫХ ВОДИТЕЛЯ </h1>


        	  <?php    
        	 		//создаём запрос на вывод данных выбранного водителя в таблицу редактирования
                    $sqlSelectDriver = "SELECT * FROM `taxists` WHERE id=" . $_GET["id"] . " ";
                    //посылаем запрос   
                    $result = $conn->query($sqlSelectDriver);
                    //возвращаем выбранный товар из БД в виде массива элементов
                    $get_driver = mysqli_fetch_assoc($result);

        	 ?>



		<form action="http://ara-taxi.local/admin/options/drivers/edit_driver.php" method="POST">
			<label for="title">Редактировать имя водителя</label>
			<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
			<input value="<?php echo $get_driver["name"] ?>" type="text" id="title" name="name" class="add-text">

			<label for="title" водителя>Редактировать фамилию водителя</label>
			<input value="<?php echo $get_driver["lastName"] ?>" type="text" id="title" name="lastName" class="add-text">

			<label for="title">Редактировать модель авто водителя</label>
			<input value="<?php echo $get_driver["modelCar"] ?>" type="text" id="title" name="modelCar" class="add-text">

			<label for="title">Редактировать цвет авто водителя</label>
			<input value="<?php echo $get_driver["colorCar"] ?>" type="text" id="title" name="colorCar" class="add-text">

			<label for="title">Редактировать гос.номер авто водителя</label>
			<input value="<?php echo $get_driver["numCar"] ?>" type="text" id="title" name="numCar" class="add-text">

			<label for="title">Редактировать телефон водителя</label>
			<input value="<?php echo $get_driver["phone"] ?>" type="text" id="title" name="phone" class="add-text">

			<label for="title">Редактировать адрес рсположения фото водителя</label>
			<input value="<?php echo $get_driver["photo"] ?>" type="text" id="title" name="photo" class="add-text">

			<input type="submit"  class="bttn" value="E D I T">
		</form>







		 </div>
	
</div> <!-- id="container" -->




	 <script src="../../script.js"></script>
</body>
</html>
