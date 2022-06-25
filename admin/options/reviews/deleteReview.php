  <!-- ЭТО ФАИЛ РНР ОБЕСПЕЧИВАЕТ УДАЛЕНИЕ ОТЗЫВОВ ИЗ БД -->


  <?php

// подключаем базу данных
include "../../../configs/db.php";

//если товар в таблице админки выбран 
if(isset($_GET["id"])) {
	//посылаем запрос в БД на удаление товара из таблицы products в БД
	$sqlDeleteReview = "DELETE FROM  otzivi WHERE otzivi. id = '" . $_GET["id"] . "' ";
}
		
		//если запрос выполнен то...
		if( $conn->query($sqlDeleteReview)) {

			//задаём адрес перехода после выполнения запроса
			header("Location: http://ara-taxi.local/admin/reviews.php");
		//в ином случае показываем ошибку
		} else {
			echo "<h2>ERROR!</h2>";
		}

  ?>
 
 