<!-- ЭТОТ РНР ФАЙЛ ОБЕСПЕЧИВАЕТ  ДОБАВЛЕНИЕ КЛИЕНТОВ В БД -->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";
//проверяем на существование запросов в форме и условие что инпуты не пустые
if(isset($_POST["name"]) && $_POST["name"] != "" && isset($_POST["email"]) && $_POST["email"] != "" && isset($_POST["phone"]) && $_POST["phone"] != "") {   
//создаём запрос в БД
$sqlAddClient = "INSERT INTO clients (name, email, phone) VALUES ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["phone"] . "')";



		//если выполнился запрос то....
	   	if( $conn->query($sqlAddClient)) {

			//задаём адрес перехода после выполнения запроса
			header("Location: http://ara-taxi.local/admin/index.php");
		//в ином случае показываем ошибку
		} else {
			echo "<h2>ERROR!</h2>";
		}

}
?>