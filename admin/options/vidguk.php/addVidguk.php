<!-- ЭТОТ РНР ФАЙЛ СОДЕРЖИТ ЗАПРОС НА РЕДАКТИРОВАНИЕ ОТЗЫВОВ  -->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";

//запрос в БД на редактирование товара
$sql = "UPDATE otzivi SET 
              name= '" . $_POST["name"] . "', 
                email= '" . $_POST["email"] . "',
                  text= '" . $_POST["text"] . "'
                   WHERE id"; 

      	//если выполнился запрос то...
  		if($conn->query($sql)) {
  			//задаём адрес перехода после выполнения запроса
    //header("Location: http://ara-taxi.local/admin/index.php");
      } else {
  			//в ином случае выводим Ошибку
  			echo "Error!";
  		}

?>

