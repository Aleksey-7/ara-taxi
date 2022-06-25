<!-- ЭТОТ РНР ФАЙЛ ОБЕСПЕЧИВАЕТ  ДОБАВЛЕНИЕ ЗАКАЗОВ В БД ПО ЗАКАЗАМ ОТ КЛИЕНТОВ ЧЕРЕЗ ФОРМУ НА САЙТЕ-->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../configs/db.php";
//проверяем на существование запросов в форме и условие что инпуты не пустые
if(isset($_POST["kudaPodavat"]) && $_POST["kudaPodavat"] != "" && isset($_POST["kudaEdem"]) && $_POST["kudaEdem"] != "" && isset($_POST["phone"]) && $_POST["phone"] != "") {   
//создаём запрос в БД
$sqlAddOrder = "INSERT INTO orders (kudaPodavat, kudaEdem, phone) VALUES ('" . $_POST["kudaPodavat"] . "', '" . $_POST["kudaEdem"] . "', '" . $_POST["phone"] . "')";



		//если выполнился запрос то....
	   	if( $conn->query($sqlAddOrder)) {

			//задаём адрес перехода после выполнения запроса
			header("Location: http://ara-taxi.local");
			echo "<p>Ваш заказ прийнято. Вам зателефонуэ опереатор";
		//в ином случае показываем ошибку
		} else {
			echo "<h2>ERROR!</h2>";
		}

}
?>
