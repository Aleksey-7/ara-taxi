<!-- ЭТОТ РНР ФАЙЛ ВЫВОДИТ СПИСОК ВОДИТЕЛЕЙ ИЗ БД В АДМИН-ПАНЕЛЬ  -->

<?php
    //подключаем БД
    include "../configs/db.php";
    //присваиваем пнременной значение для данной страницы
    $page = "drivers";
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
			</div> <!-- class="sidebar"> -->
				
		<div class="info">
			<h1 class="info-header">D R I V E R S &#9936;</h1>
			<h1>Список водителей автопарка ARA-TAXI</h1>
				<table>
		  			<tr>
			    		<th>ID</th>
			            <th>Имя</th>
			  		    <th>Фамилия</th>
			  		    <th>Модель авто</th>
			  		    <th>Цвет авто</th>
			  		    <th>Гос.№ авто</th>
			  		    <th>Телефон</th>
			  		    <th>Фото</th>
			  		    <th></th>
			  		    <th></th>
		            </tr>
					
					 <!-- ЗАПРОС НА ПОЛУЧЕНИЕ ТАКСИСТОВ ИЗ БД В ТАБЛИЦУ ВОДИТЕЛЕЙ (В АДМИНКЕ )  -->
                                            <?php
                                                //создаём запрос к БД на вывод товаров из таблицы products
                                                $sql = "SELECT * FROM taxists";
                                                //выполнить sql запрос в базе данных
                                                $result = $conn->query($sql);
                                                 //ложим в перемеенную $row преобразованные в массив полученные из БД данные о товаре 
                                                while($row_driver = mysqli_fetch_assoc($result)) {
                                                  ?>
                                                    <!-- Выводим в таблицу данные товара  -->
                                                    <tr>
                                                        <td><?php echo $row_driver['id'] ?></td>
                                                        <td><?php echo $row_driver['name'] ?></td>
                                                        <td><?php echo $row_driver['lastName'] ?></td>
                                                        <td><?php echo $row_driver['modelCar'] ?></td>
                                                        <td><?php echo $row_driver['colorCar'] ?></td>
                                                        <td><?php echo $row_driver['numCar'] ?></td>
                                                        <td><?php echo $row_driver['phone'] ?></td>
                                                        <td><?php echo $row_driver['photo'] ?></td>
														<td>
		    												<a href="options/drivers/edit_driver_form.php?id=<?php echo $row_driver['id'] ?>" class="edit">Edit &#9998;</a>
		    											</td>
		    											<td>
		    												<a href="options/drivers/delete_driver.php?id=<?php echo $row_driver['id'] ?>" class="delete">Delete &#10008;</a>
		    											</td>
		    										</tr>
		    										 <?php
                                                }//конец цикла while 
                                            ?>
				</table>

				              <!-- ССЫЛКА НА ДОБАВЛЕНИЕ ВОДИТЕЛЯ В БД  -->
                             <a href="options/drivers/add_driver_form.php?id=" class="adding">Add new driver &#10004;</a>
				   
				           
		                            
		                  		  		 
		</div> <!-- class="info"> -->
		
	</div> <!-- id="container" -->





	 <script src="script.js"></script>
</body>
</html>