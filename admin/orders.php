<!-- ЭТОТ РНР ФАЙЛ ОБЕСПЕЧИВАЕТ ВЫВОД ЗАКАЗОВ ИЗ БД В АДМИН ЧАСТЬ САЙТА -->

<?php
    //подключаем БД
    include "../configs/db.php";
    //присваиваем пнременной значение для данной страницы
    $page = "orders";
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
			<h1 class="info-header">O R D E R S &#9951;</h1>
			<h1>Список полученных заказов в службу ARA-TAXI</h1>
				<table>
		  			<tr>
			    		<th>ID</th>
			            <th>Адрес подачи авто</th>
			  		    <th>Адрес назначения</th>
			  		    <th>Телефон клиента</th>
		            </tr>
		           <!-- ЗАПРОС НА ПОЛУЧЕНИЕ ТАКСИСТОВ ИЗ БД В ТАБЛИЦУ ВОДИТЕЛЕЙ (В АДМИНКЕ )  -->
                                            <?php
                                                //создаём запрос к БД на вывод товаров из таблицы products
                                                $sql = "SELECT * FROM orders";
                                                //выполнить sql запрос в базе данных
                                                $result = $conn->query($sql);
                                                 //ложим в перемеенную $row преобразованные в массив полученные из БД данные о товаре 
                                                while($row_order = mysqli_fetch_assoc($result)) {
                                                  ?>
                                                    <!-- Выводим в таблицу данные товара  -->
                                                    <tr>
                                                        <td><?php echo $row_order['id'] ?></td>
                                                        <td><?php echo $row_order['kudaPodavat'] ?></td>
                                                        <td><?php echo $row_order['kudaEdem'] ?></td>
                                                        <td><?php echo $row_order['phone'] ?></td>
														<td>
		    												<a href="options/orders/edit_order_form.php?id=<?php echo $row_order['id'] ?>" class="edit">Edit &#9998;</a>
		    											</td>
		    											<td>
		    												<a href="options/orders/delete_order.php?id=<?php echo $row_order['id'] ?>" class="delete">Delete &#10008;</a>
		    											</td>
		    										</tr>
		    										 <?php
                                                }//конец цикла while 
                                            ?>	    				
		    		
		        </table>
				   
				           
		              		 <!-- ССЫЛКА НА ДОБАВЛЕНИЕ ЗАКАЗА В БД  -->
                             <a href="options/orders/add_order_form.php?id=" class="adding">Add new order &#10004;</a>               
		                  		  		 
		</div> <!-- class="info"> -->	
</div> <!-- id="container" -->




	 <script src="script.js"></script>
</body>
</html>