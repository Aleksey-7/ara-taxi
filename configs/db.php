<!-- ЭТОТ РНР ФАЙЛ СОЗДАЁТ ЗАПРОС НА ПОДКЛЮЧЕНИЕ К БД  -->

<?php
//адрес сервера
$servername = "localhost";
//логин
$username = "root";
//пароль
$password = "";
//имя БД
$dbname = "ara";

//создаём подключение
$conn = new mysqli($servername, $username, $password, $dbname);

//проверка на подключение
if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

echo "<span>server connecting</span>";

//устанавливаем кодировку
$conn->set_charset("utf8");


