<!-- ЭТО ФАИЛ РНР ОБЕСПЕЧИВАЕТ УДАЛЕНИЕ ВОДИТЕЛЕЙ  ИЗ БД -->


  <?php

// подключаем базу данных
include "../../../configs/db.php";

//если товар в таблице админки выбран 
if(isset($_GET["id"])) {
	//посылаем запрос в БД на удаление товара из таблицы products в БД
	$sqlDeleteDriver = "DELETE FROM  taxists WHERE taxists. id = '" . $_GET["id"] . "' ";
}
		
		//если запрос выполнен то...
		if( $conn->query($sqlDeleteDriver)) {

			//задаём адрес перехода после выполнения запроса
			header("Location: http://ara-taxi.local/admin/drivers.php");
		//в ином случае показываем ошибку
		} else {
			echo "<h2>ERROR!</h2>";
		}

  ?>
 
  <a href="/admin">Вернуться на главную</a>