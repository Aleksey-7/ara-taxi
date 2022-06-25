<!-- ЭТОТ РНР ФАЙЛ СОДЕРЖИТ ЗАПРОС НА РЕДАКТИРОВАНИЕ ОТЗЫВОВ  -->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";

//запрос в БД на редактирование товара
$sqlEditReview = "UPDATE otzivi SET 
              name= '" . $_POST["name"] . "', 
              	email= '" . $_POST["email"] . "',
              	  text= '" . $_POST["text"] . "'
      		         WHERE otzivi.id = '" . $_POST["id"] . "'"; 

    
      	//если выполнился запрос то...
  		if($conn->query($sqlEditReview)) {
  			//задаём адрес перехода после выполнения запроса
      header("Location: http://ara-taxi.local/admin/reviews.php");
  		} else {
  			//в ином случае выводим Ошибку
  			echo "Error!";
  		}

?>