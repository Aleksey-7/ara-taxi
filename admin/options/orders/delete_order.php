  <!-- ЭТО ФАИЛ РНР ОБЕСПЕЧИВАЕТ УДАЛЕНИЕ ЗАКАОВ ИЗ БД -->


  <?php

// подключаем базу данных
include "../../../configs/db.php";

//если товар в таблице админки выбран 
if(isset($_GET["id"])) {
	//посылаем запрос в БД на удаление товара из таблицы products в БД
	$sqlDeleteOrder = "DELETE FROM  orders WHERE orders. id = '" . $_GET["id"] . "' ";
}
		
		//если запрос выполнен то...
		if( $conn->query($sqlDeleteOrder)) {

			//задаём адрес перехода после выполнения запроса
			header("Location: http://ara-taxi.local/admin/orders.php");
		//в ином случае показываем ошибку
		} else {
			echo "<h2>ERROR!</h2>";
		}

  ?>
 
  <a href="/admin">Вернуться на главную</a>