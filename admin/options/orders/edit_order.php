<!-- ЭТОТ РНР ФАЙЛ СОДЕРЖИТ ЗАПРОС НА РЕДАКТИРОВАНИЕ ЗАКАЗОВ  -->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";

//запрос в БД на редактирование товара
$sqlEditOrder = "UPDATE orders SET 
              kudaPodavat= '" . $_POST["kudaPodavat"] . "', 
              	kudaEdem= '" . $_POST["kudaEdem"] . "',
              	  phone= '" . $_POST["phone"] . "'
      		         WHERE orders.id = '" . $_POST["id"] . "'"; 

    
      	//если выполнился запрос то...
  		if($conn->query($sqlEditOrder)) {
  			//задаём адрес перехода после выполнения запроса
      header("Location: http://ara-taxi.local/admin/orders.php");
  		} else {
  			//в ином случае выводим Ошибку
  			echo "Error!";
  		}

?>

