<!--ЭТОТ РНР ФАЙЛ  СОДЕРЖИТ ФОРМУ ДОБАВЛЕНИЯ ЗАКАЗОВ В БД  -->

<?php
	$page = "orders";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin panel</title>
	<link rel="stylesheet" type="text/css" href="../../style.css"> 
</head>

<body>

<div id="container">
	<div class="sidebar">
		<?php
			//подключаем навигационную часть админ панели
			include "../../parts/nav.php";
		?>	
	</div> <!-- class="sidebar" -->	

	<!--==============================
        ФОРМА ДОБАВЛЕНИЯ ЗАКАЗОВ В БД 
     ============================== -->
   
         <div class="info">

         	<h1>ФОРМА ДОБАВЛЕНИЯ ЗАКАЗОВ</h1>


			<form action="http://ara-taxi.local/admin/options/orders/add_order.php" method="POST">
				<label for="title">Адрес подачи авто</label>
				<input type="hidden" name="id" value="<?php echo $_GET["id"] ?>">
				<input type="text" id="title" name="kudaPodavat" class="add-text" placeholder="введите адрес подачи авто">

				<label for="title">Адрес назначения</label>
				<input type="text" id="title" name="kudaEdem" class="add-text" placeholder="введите адрес назначения">

				<label for="title">Телефон клиента</label>
				<input type="text" id="title" name="phone" class="add-text" placeholder="введите телефон клиента">


				<input type="submit"  name="add-order" class="bttn" value="submit">
			</form>







		 </div>
     

</div> <!-- id="container" -->




	 <script src="../../script.js"></script>
</body>
</html>
