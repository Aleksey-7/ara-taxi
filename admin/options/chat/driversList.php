<!-- СПИСОК водителей-->
<!-- этот файл РНР выводит список оводителей из таблицы TAXISTS В БД -->

<?php
	
	include "../configs/db.php";
   
?>
<ul id="drivers-list">
        <?php
        // $i - счётчик количества пользователей
        $i = 0;
        // $f - счётчик совпадений
        $flag = 0;
        if (isset($_POST["search-text"]) && $_POST["search-text"] !="") {
            $flag = 0;
            //  подключение списка всех пользователей из БД таблицы Таксисты, где есть совпадение введённого текста с запрашиваемым именем и не равно авторизованному пользователю
            $sql = "SELECT * FROM taxists WHERE name LIKE '%" .  $_POST["search-text"] . "%' AND id!=" . $_COOKIE["userCookie"];
            // mysqli_query--выполнить sql-запрос в базе данных
            $result = mysqli_query($conn, $sql);
            // mysqli_num_rows--получить количество пользователей
            $countDrivers = mysqli_num_rows($result);
            // запускаем цикл по имеющимся пользователям        
            while ($i < $countDrivers) {
                // mysqli_fetch_assoc--преобразовать полученные данные пользователя в массив и выводим их
                $driver = mysqli_fetch_assoc($result);
                ?>  
                    <li>
                    <a href="http://ara-taxi.local/admin/chat.php?driver=<?php echo $driver["id"]; ?>">
                    <div class="avatar">
                            <img src="<?php echo $driver["photo"]; ?>">
                    </div>
                    <p><?php echo $driver["name"]; ?></p>
                    <p><?php echo $driver["lastName"]; ?></p>
                    <p><?php echo $driver["message"]; ?></p>
                    <p><?php echo $driver["time"]; ?></p>
                    </a>
                </li> 
                <?php
                // 
                $flag = 1;
                // увеличиваем счётчик на одного пользователя
                $i = $i + 1;
            } 
           // если совпадений нет то выводим текст
            if ($flag == 0) {
                echo "<h2>Совпадений не найдено!</h2>";
            }
        } else { // иначе выводим весь список пользователей без авторизованного
             //  подключение списка всех пользователей из БД таблицы Таксисты
            $sql = "SELECT * FROM taxists WHERE id!=" . $_COOKIE["userCookie"];
            // mysqli_query--выполнить sql-запрос в базе данных
            $result = mysqli_query($conn, $sql);
            // mysqli_num_rows--получить количество пользователей
            $count_drivers = mysqli_num_rows($result);
            // $i - счётчик количества пользователей
            $i = 0;
            // запускаем цикл по имеющимся пользователям        
            while ($i < $count_drivers) {
                // mysqli_fetch_assoc--преобразовать полученные данные пользователя в массив
                $taxist = mysqli_fetch_assoc($result);
                ?>  
                    <li>
                    <a href="http://ara-taxi.local/admin/chat.php?driver=<?php echo $taxist["id"]; ?>">
                    <div class="avatar">
                            <img src="<?php echo $taxist["photo"]; ?>">
                    </div>
                    <p><?php echo $taxist["name"]; ?></p>
                    <p><?php echo $taxist["lastName"]; ?></p>
                    <p><?php echo $taxist["message"]; ?></p>
                    <p><?php echo $taxist["time"]; ?></p>
                 
                    
                    </a>
                </li> 
                <?php
                 // увеличиваем счётчик на одного пользователя
                $i = $i + 1;
            } 
        }
    
    ?>
		
</ul> <!-- drivers-list-->

<!-- </div>   -->
