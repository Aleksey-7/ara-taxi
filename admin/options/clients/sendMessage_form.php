<!--ЭТОТ РНР ФАЙЛ  СОДЕРЖИТ ФОРМУ ОТПРАВКИ ПИСЕМ КЛИЕНТАМ  -->
<?php
	//ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";
    $page = "main";

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


    				 <?php    

        	 		//создаём запрос на вывод данных выбранного клиента в форму отправки писем
                    $sqlSelectClient = "SELECT `name`, `email` FROM `clients` WHERE id=" . $_GET["id"] . " ";
                    //посылаем запрос   
                    $result = $conn->query($sqlSelectClient);
                    //возвращаем выбранный товар из БД в виде массива элементов
                    $get_client = mysqli_fetch_assoc($result);


        	 ?>


   
         <div class="info">
        	 <h1 class="info-header"> ФОРМА ОТПРАВКИ СООБЩЕНИЙ КЛИЕНТУ </h1>

				<form method="post" action="http://ara-taxi.local/admin/index.php" class="form">

 						<p>
 							<label for="firstname"> Имя:</label>
 							<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
 							<input value="<?php echo $get_client["name"] ?>" type="text" name="name" id="firstname" />
 						</p>
 						<p>
 							<label for="firstname"> Email:</label>
 							<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
 							<input value="<?php echo $get_client["email"] ?>" type="text" name="name" id="firstname" />
 						</p>
 
 						

 						<p>
 							<label for="comment"> Message:</label>
 							<textarea rows="10" name="text" id="comment"></textarea>
 						</p>

 
 						<p class="submit">
 							<input type="submit" value="Отправить" />
 						</p>
 					</form>


		 </div>
	
</div> <!-- id="container" -->




	 <script src="../../script.js"></script>
</body>
</html>


