<!-- ЭТОТ РНР ФАЙЛ ОБЕСПЕЧИВАЕТ  ДОБАВЛЕНИЕ ОТЗЫВОВ В БД ЧЕРЕЗ ФОРМУ НА САЙТЕ-->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../configs/db.php";
//проверяем на существование запросов в форме и условие что инпуты не пустые
if(isset($_POST["name"]) && $_POST["name"] != "" && isset($_POST["email"]) && $_POST["email"] != "" && isset($_POST["text"]) && $_POST["text"] != "") {   
//создаём запрос в БД
$sqlAddVidguk = "INSERT INTO  otzivi (name, email, text) VALUES ('" . $_POST["name"] . "', '" . $_POST["email"] . "', '" . $_POST["text"] . "')";



		//если выполнился запрос то....
	   	if( $conn->query($sqlAddVidguk)) {

			//задаём адрес перехода после выполнения запроса
			header("Location: http://ara-taxi.local");
			echo "<p>Ваш заказ прийнято. Вам зателефонуэ опереатор";
		//в ином случае показываем ошибку
		} else {
			echo "<h2>ERROR!</h2>";
		}

}
?>