<!-- ЭТОТ РНР ФАЙЛ СОДЕРЖИТ ЗАПРОС НА РЕДАКТИРОВАНИЕ ДАННЫХ О КЛИЕНТЕ  -->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";

//запрос в БД на редактирование товара
$sqlEditClient = "UPDATE clients SET 
              name= '" . $_POST["name"] . "', 
              	email= '" . $_POST["email"] . "',
              	  phone= '" . $_POST["phone"] . "'
      		         WHERE clients.id = '" . $_POST["id"] . "'"; 

    
      	//если выполнился запрос то...
  		if($conn->query($sqlEditClient)) {
  			//задаём адрес перехода после выполнения запроса
      header("Location: http://ara-taxi.local/admin/index.php");
  		} else {
  			//в ином случае выводим Ошибку
  			echo "Error!";
  		}

?>