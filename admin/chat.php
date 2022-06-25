<!-- HTML СТРУКТУРА ЧАТА АДМИН-ПАНЕЛИ  -->

<?php
    //подключаем БД
    include "../configs/db.php";
    //присваиваем пнременной значение для данной страницы
    $page = "chat";

?>


<!DOCTYPE html>
<html>
<head>
	<title>ARA TaXi</title>
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

          <!--  Ч А Т  -->
         <!--Основной блок со списком контактов и сообщениями  -->
        <div id="content">
        	<!--Левый блок со списком контактов  -->
            <div id="users">
             	<div id="search">
                   
                    <!--Блок с поисковой строкой и кнопкой -->
                    <form  method="POST" id="poisk">
                         <!--поисковая строка  -->
                        <input type="text" name="search-text">
                         <!--кнопка поиска  -->
                        <button>                    
                    	   <img src="../images-chat/icon-search.png">
                        </button>
                    </form>

                </div>  <!-- div id="search" --> 
                

                <div id="list">
                    <ul id="driverList">
                    	<?php
                        include "options/chat/driversList.php";
                        ?>
                    </ul>
                 </div>  <!-- div id="list" --> 

            </div> <!-- div id="users" -->
         
            <div id="messages">
            	<div id="list-messages">
                    <ul id="correspondence"></ul>
                 <?php
                    /*ПЕРЕПИСКА МЕЖДУ ПОЛЬЗОВАТЕЛЯМИ */
                         //подключаем файл  переписки чата диспетчер-водитель
                        include "options/chat/correspondence.php";
                  ?>
                    </ul >
            	</div> <!-- div id="list-messages" -->
                <?php   

                if(isset($_GET["driver"])) {
                ?>
                    <form id="form" action="http://ara-taxi.local/admin/options/chat/sendMessage.php" method="POST">    
                        <input type="hidden" name="komu_user_id" value="<?php echo $_GET["user"] ?>"> <!--сообщение будет отпрвлено пользователю по которому кликнул-->
                        <input type="hidden" name="ot_user_id" value="<?php echo $_COOKIE["userCookie"] ?>"> <!--сообщение будет отпрвлено от авторизированного пользователя-->
                        <!-- Текстовое поле для записи сообщений -->
                        <textarea name="text"></textarea>
                        <!-- Кнопка отправки сообщений -->
                        <button type="submit" name="send_sms"><img src="../images-chat/send-icon2.png" alt=""></button>   
                    </form>
                <?php
                }
                ?>
            </div> <!-- div id="messages" -->






           		
        </div> <!-- div id="content" --> 
    </div> <!-- div id="info" -->   
    <script src="script.js"></script>

</body>
</html>