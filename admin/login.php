<!-- АВТОРИЗАЦИЯ АДМИНА ДЛЯ ВХОДА В АДМИН-ПАНЕЛЬ СЛУЖБЫ ТАКСИ-->

<?php 

	include "../configs/db.php";
	
	
if(isset($_POST["name"]) && isset($_POST["password"]) && $_POST["name"] != "" && $_POST["password"] != "" ) { 

	//вставить в таблтицу зарегистрировавшегося user
	$sqlLog = "SELECT * FROM `taxists` WHERE `name` LIKE '" . $_POST["name"] . "' AND `password` LIKE '" .  $_POST["password"] . "'";
	//выполнить sql запрос в базе данных	
	$result = mysqli_query($conn, $sqlLog);
	
	//mysqli_num_rows -получить кол-во результатов
	$countAdmin = mysqli_num_rows($result);

    if($countAdmin == 1) {
    	//преобразовать полученные данные пользователя в массив
		$user = mysqli_fetch_assoc($result);

	
		//создаёми cookie для хранения данных пользователя
    	setcookie("userCookie", $user["id"], time() + 10000, "/");
    	//осуществляем пкреход на главную страпницу чата
    	header("Location: http://ara-taxi.local/admin/index.php"); 
	 }else {
	 
    		echo "<h2>error!</h2>";
	}

}  

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin panel ARA-TAXI</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 
</head>

<body>

<div id="container">
	<div class="info">
		<div class="info-log">
		<h2>АВТОРИЗАЦИЯ ДИСПЕТЧЕРА ДЛЯ ВХОДА В АДМИН-ПАНЕЛЬ СЛУЖБЫ ARA_TAXI</h2>
		<form action="/admin/login.php" method="POST">
			<p> 
				 login:<br/>
				<input class="add-text" type="text" name="name" placeholder="введите имя">
			</p>

			<p>
				password:<br/>
				<input class="add-text" type="password" name="password" placeholder="введите пароль">
			</p>
				<button class="add-text" id="btn-log" type="submit">Войти</button>
		</form>
	</div> 

	</div>
	
</div> <!-- id="container" -->




	 <script src="script.js"></script>
</body>
</html>
