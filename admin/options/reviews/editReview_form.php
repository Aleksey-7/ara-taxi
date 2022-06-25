<!-- ЭТОТ РНР ФАЙЛ СОДЕРЖИТ HTML ФОРМУ РЕДАКТИРОВАНИЯ ОТЗЫВОВ  И 
ЗАПРОС В БД НА ВЫВОД  ЭТИХ ОТЗЫВОВ В ФОРМУ РЕДАКТИРОВАНИЯ В АДМИН ПАНЕЛИ-->


<?php
//ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";
    $page = "reviews";

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

        	 <h1 class="info-header"> ФОРМА РЕДАКТИРОВАНИЯ ОТЗЫВА КЛИЕНТА</h1>

        	 <!--==================================================
        	 			ФОРМА РЕДАКТИРОВАНИЯ ЗАКАЗОВ
        	 =====================================================-->

        	 <?php    

        	 		//создаём запрос на вывод данных выбранного товара в таблицу редактирования
                    $sqlSelectReviews = "SELECT * FROM `otzivi` WHERE id=" . $_GET["id"] . " ";
                    //посылаем запрос   
                    $result = $conn->query($sqlSelectReviews);
                    //возвращаем выбранный товар из БД в виде массива элементов
                    $get_client = mysqli_fetch_assoc($result);


        	 ?>


		<form action="http://ara-taxi.local/admin/options/reviews/editReview.php" method="POST">
			<label for="title">Редактировать имя клиента</label>
			<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
			<input value="<?php echo $get_client["name"] ?>" type="text" id="title" name="name" class="add-text">

			<label for="title">Редактировать email клиента</label>
			<input value="<?php echo $get_client["email"] ?>" type="text" id="title" name="email" class="add-text">

			<label for="title">Редактировать отзыв клиента</label>
			<input value="<?php echo $get_client["text"] ?>" type="text" id="title" name="text" class="add-text">

			<input type="submit"  class="bttn" value="E D I T">
		</form>

	 </div> <!-- class="info" -->
	
</div> <!-- id="container" -->




	 <script src="../../script.js"></script>
</body>
</html>
