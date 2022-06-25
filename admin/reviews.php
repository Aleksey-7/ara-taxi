<!-- ЭТОТ РНР ФАЙЛ ОБЕСПЕЧИВАЕТ ВЫВОД ОТЗЫВОВ ИЗ БД В АДМИН ЧАСТЬ САЙТА -->

<?php
    //подключаем БД
    include "../../configs/db.php";
   // include "../configs/settings.php";
 		$page = "reviews";

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
		<h1 class="info-header"> R E V I E W S 	&#9996;</h1>
			<h1>Таблица обратных отзывов для обработки и публикации на сайте</h1>
				<table>
		  			<tr>
			    		<th>ID</th>
			            <th>Name</th>
			  		    <th>Email</th>
			  		    <th>Review</th>
		            </tr>
		           <!-- ЗАПРОС НА ПОЛУЧЕНИЕ ТАКСИСТОВ ИЗ БД В ТАБЛИЦУ ВОДИТЕЛЕЙ (В АДМИНКЕ )  -->
                                            <?php
                                                //создаём запрос к БД на вывод товаров из таблицы products
                                                $sql = "SELECT * FROM otzivi";
                                                //выполнить sql запрос в базе данных
                                                $result = $conn->query($sql);
                                                 //ложим в перемеенную $row преобразованные в массив полученные из БД данные о товаре 
                                                while($row_review = mysqli_fetch_assoc($result)) {
                                                  ?>
                                                    <!-- Выводим в таблицу данные товара  -->
                                                    <tr>
                                                        <td><?php echo $row_review['id'] ?></td>
                                                        <td><?php echo $row_review['name'] ?></td>
                                                        <td><?php echo $row_review['email'] ?></td>
                                                        <td><?php echo $row_review['text'] ?></td>
                                                       
														<td>
		    												<a href="options/reviews/editReview_form.php?id=<?php echo $row_review['id'] ?>" class="edit" class="edit">Edit &#9998;</a>
		    											</td>
		    											<td>
		    												<a href="options/reviews/deleteReview.php?id=<?php echo $row_review['id'] ?>" class="edit" class="edit">Delete &#10008;</a>
		    											</td>
		    											
		    										</tr>
		    										 <?php
                                                }//конец цикла while 
                                            ?>	    				
		    		
		        </table>
				   
				           
		              		
	







	</div>
	
</div> <!-- id="container" -->




	 <script src="script.js"></script>
</body>
</html>
