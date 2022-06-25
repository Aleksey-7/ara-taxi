<!--========================================================================
ЭТОТ РНР ФАЙЛ ОБЕСПЕЧИВАЕТ ВЫВОД СПИСКА КЛИЕНТОВ ИЗ БД В АДМИН ЧАСТЬ САЙТА
===========================================================================-->

<?php
    //подключаем БД
    include "../configs/db.php";
   // include "../configs/settings.php";
 		$page = "main";

   if($_COOKIE["userCookie"] == null) {
	//перейти на страницу авторизации
	header("Location: http://ara-taxi.local/admin/login.php");
}
    //присваиваем пнременной значение для данной страницы
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="style.css"> 

</head>

<body>

<div id="container">
	<div class="sidebar">
		
			<?php

			include "parts/nav.php";
			?>

	
		
	</div> <!-- class="sidebar" -->

	<div class="info">
		<h1 class="info-header"> C L I E N T S &#128515;</h1>
			<h1>Список постоянныхклиентов службы ARA-TAXI</h1>
				<table>
		  			<tr>
			    		<th>ID</th>
			            <th>Client</th>
			  		    <th>Email</th>
			  		    <th>Phone</th>
		            </tr>
		           <!-- ЗАПРОС НА ПОЛУЧЕНИЕ ТАКСИСТОВ ИЗ БД В ТАБЛИЦУ ВОДИТЕЛЕЙ (В АДМИНКЕ )  -->
                                            <?php
                                                //создаём запрос к БД на вывод товаров из таблицы products
                                                $sql = "SELECT * FROM clients";
                                                //выполнить sql запрос в базе данных
                                                $result = $conn->query($sql);
                                                 //ложим в перемеенную $row преобразованные в массив полученные из БД данные о товаре 
                                                while($row_client = mysqli_fetch_assoc($result)) {
                                                  ?>
                                                    <!-- Выводим в таблицу данные товара  -->
                                                    <tr>
                                                        <td><?php echo $row_client['id'] ?></td>
                                                        <td><?php echo $row_client['name'] ?></td>
                                                        <td><?php echo $row_client['email'] ?></td>
                                                        <td><?php echo $row_client['phone'] ?></td>
                                                        <td>
		    												<a href="options/clients/sendMessage_form.php?id=<?php echo $row_client['id'] ?>" class="edit" class="edit">Send message &#9993;</a>
		    											</td>
														<td>
		    												<a href="options/clients/editClient_form.php?id=<?php echo $row_client['id'] ?>" class="edit" class="edit">Edit &#9998;</a>
		    											</td>
		    											<td>
		    												<a href="options/clients/deleteClient.php?id=<?php echo $row_client['id'] ?>" class="edit" class="edit">Delete &#10008;</a>
		    											</td>
		    											
		    										</tr>
		    										 <?php
                                                }//конец цикла while 
                                            ?>	    				
		    		
		        </table>
				   
				           
		              		 <!-- ССЫЛКА НА ДОБАВЛЕНИЕ ЗАКАЗА В БД  -->
                             <a href="options/clients/addClient_form.php?id=" class="adding">Add new client &#10004;</a>               
		                  		  		 
	







	</div>
	
</div> <!-- id="container" -->




	 <script src="script.js"></script>
</body>
</html>
