<!-- ЭТОТ РНР ФАЙЛ СОДЕРЖИТ HTML ФОРМУ РЕДАКТИРОВАНИЯ ЗАКАЗОВ  И 
ЗАПРОС В БД НА ВЫВОД  ЗАКАЗОВ В ФОРМУ РЕДАКТИРОВАНИЯ В АДМИН ПАНЕЛИ-->


<?php
//ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";
    $page = "orders";

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

	<dsiv class="info">

        	 <h1 class="info-header"> ФОРМА РЕДАКТИРОВАНИЯ ЗАКАЗОВ </h1>

        	 <!--==================================================
        	 			ФОРМА РЕДАКТИРОВАНИЯ ЗАКАЗОВ
        	 =====================================================-->

        	 <?php    

        	 		//создаём запрос на вывод данных выбранного товара в таблицу редактирования
                    $sqlSelectOrder = "SELECT * FROM `orders` WHERE id=" . $_GET["id"] . " ";
                    //посылаем запрос   
                    $result = $conn->query($sqlSelectOrder);
                    //возвращаем выбранный товар из БД в виде массива элементов
                    $get_order = mysqli_fetch_assoc($result);


        	 ?>


		<form action="http://ara-taxi.local/admin/options/orders/edit_order.php" method="POST">
			<label for="title">Редактировать адрес подачи авто</label>
			<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
			<input value="<?php echo $get_order["kudaPodavat"] ?>" type="text" id="title" name="kudaPodavat" class="add-text">

			<label for="title">Редактировать адрес назначения</label>
			<input value="<?php echo $get_order["kudaEdem"] ?>" type="text" id="title" name="kudaEdem" class="add-text">

			<label for="title">Редактировать телефон клиента</label>
			<input value="<?php echo $get_order["phone"] ?>" type="text" id="title" name="phone" class="add-text">

			<input type="submit"  class="bttn" value="E D I T">
		</form>

	 </div> <!-- class="info" -->
	
</div> <!-- id="container" -->




	 <script src="../../script.js"></script>
</body>
</html>
