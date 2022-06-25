  <!-- ЭТО ФАИЛ РНР ОБЕСПЕЧИВАЕТ УДАЛЕНИЕ КЛИЕНТА ИЗ БД -->


  <?php

// подключаем базу данных
include "../../../configs/db.php";

//если товар в таблице админки выбран 
if(isset($_GET["id"])) {
	//посылаем запрос в БД на удаление товара из таблицы products в БД
	$sqlDeleteClient = "DELETE FROM clients WHERE clients. id = '" . $_GET["id"] . "' ";
}
		
		//если запрос выполнен то...
		if( $conn->query($sqlDeleteClient)) {

			//задаём адрес перехода после выполнения запроса
			header("Location: http://ara-taxi.local/admin/index.php");
		//в ином случае показываем ошибку
		} else {
			echo "<h2>ERROR!</h2>";
		}

  ?>