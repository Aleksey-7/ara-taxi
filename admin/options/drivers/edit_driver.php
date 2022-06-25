<!-- ЭТОТ РНР ФАЙЛ СОДЕРЖИТ ЗАПРОС НА  РЕДАКТИРОВАНИЕ ДАННЫХ ВОДИТЕЛЕЙ  -->

<?php
    
    //ПОДКЛЮЧАЕМ БД
    include "../../../configs/db.php";

//запрос в БД на редактирование товара
$sqlEditDriver = "UPDATE taxists SET 
              name= '" . $_POST["name"] . "', 
              	lastName= '" . $_POST["lastName"] . "',
              	  modelCar= '" . $_POST["modelCar"] . "',
              		  colorCar= '" . $_POST["colorCar"] . "',
                      numCar= '" . $_POST["numCar"] . "',
                      	phone= '" . $_POST["phone"] . "',
                          photo= '" . $_POST["photo"] . "'
      		           	      WHERE taxists.id = '" . $_POST["id"] . "'"; 

    
      	//если выполнился запрос то...
  		if($conn->query($sqlEditDriver)) {
  			//задаём адрес перехода после выполнения запроса
      header("Location: http://ara-taxi.local/admin/drivers.php");
  		} else {
  			//в ином случае выводим Ошибку
  			echo "Error!";
  		}

?>

<a href="/admin">Вернуться на главную</a>