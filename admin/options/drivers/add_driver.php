<!-- ЭТОТ РНР ФАЙЛ ОБЕСПЕЧИВАЕТ  ДОБАВЛЕНИЕ НОВЫХ ВОДИТЕЛЕЙ В БД -->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";
//проверяем на существование запросов в форме и условие что инпуты не пустые
if(isset($_POST["name"]) && $_POST["name"] != "" && isset($_POST["lastName"]) && $_POST["lastName"] != "" && isset($_POST["modelCar"]) && $_POST["modelCar"] != "" && isset($_POST["colorCar"]) && $_POST["colorCar"] != "" && isset($_POST["numCar"]) && $_POST["numCar"] != "" && isset($_POST["phone"]) && $_POST["phone"] != "" && isset($_POST["photo"]) && $_POST["photo"] != "") {   
//создаём запрос в БД
$sqlAddDriver = "INSERT INTO taxists (name, lastName, modelCar, colorCar, numCar, phone, photo) VALUES ('" . $_POST["name"] . "', '" . $_POST["lastName"] . "', '" . $_POST["modelCar"] . "', '" . $_POST["colorCar"] . "', '" . $_POST["numCar"] . "', '" . $_POST["phone"] . "', '" . $_POST["photo"] . "')";

}

		//если выполнился запрос то....
	   	if( $conn->query($sqlAddDriver)) {

			//задаём адрес перехода после выполнения запроса
			header("Location: http://ara-taxi.local/admin/drivers.php");
		//в ином случае показываем ошибку
		} else {
			echo "<h2>ERROR!</h2>";
		}


?>

<a href="/admin">Вернуться на главную</a>
