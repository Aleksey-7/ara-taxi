<!--ЭТОТ РНР ФАЙЛ ВЫВОДИТ ПЕРЕПИСКУ ЧАТА   -->
    <?php

     include "../../../configs/db.php";


    // если есть выбранный пользователь и пользователь с id не равному 5

 if(isset($_GET["driver"]) && $_GET["driver"]!=11 || isset($send_user_id)) { 
        
        $polzovatel_id = null;

        if (isset($_GET["driver"])) {
            $polzovatel_id = $_GET["driver"];
        
        } else {
            $polzovatel_id = $_COOKIE["userCookie"];
        }
        
        // получить все сообщения отправленные пользователю (переписка)
        $sql = "SELECT * FROM messages " . 
        " WHERE (komu_user_id=" . $polzovatel_id . // где id получателя = $_GET["user"](выбранный пользователь)
        " AND ot_user_id=" . $_COOKIE["userCookie"] . ")" . // и id отправителя = $user_id(авторизованный пользователь)
        " OR (komu_user_id=" . $polzovatel_id . " AND ot_user_id =" . $_COOKIE["userCookie"] . ")"; // или наоборот
        // выполняем запрос
        $result = mysqli_query($conn, $sql);
        // получаем все строки из БД
        $count_messages = mysqli_num_rows($result);
        // $i - счётчик количества сообщений
        $i = 0;
        // запускаем цикл по имеющимся сообщениям        
        while ($i < $count_messages) {
            // mysqli_fetch_assoc--преобразовать полученные данные сообщения в массив
            $message = mysqli_fetch_assoc($result);
            ?>  
            <ul id="correspondence">      
                <li>
                    <?php
                        // вывести имя, фамилию и фото конкретного пользователя(отправителя) из БД таблицы Таксисты
                        $sql = "SELECT name, lastName, photo FROM taxists WHERE id=" . $message["ot_user_id"];
                        // выполнить запрос
                        $user = mysqli_query($conn, $sql);
                        // записываем в переменную данные пользователя и выводим их
                        $user = mysqli_fetch_assoc($user);
                    ?>
                    <div class="avatar">
                            <img src="<?php echo $user["photo"]; ?>">
                    </div>
                    <h2><?php echo $user["name"]; ?></h2>
                    <h3><?php echo $user["lastName"]; ?></h3>
                    <p><?php echo $message["text"]; ?></p>
                    <div class="time"><?php echo $message["time"]; ?></div>
                </li> 
            <?php
            // увеличиваем счётчик на одного пользователя
            $i = $i + 1;
        } 
    
    }else if(isset($_GET["driver"])==11) {
        
        $polzovatel_id = null;

        if (isset($_GET["driver"])) {
            $polzovatel_id = $_GET["driver"];
        
        }
        
        // иначе если есть выбранный пользователь с id равному 5, выводим все сообщения
        $sql = "SELECT * FROM messages WHERE komu_user_id=" . $polzovatel_id; // где id получателя = $_GET["user"](выбранный пользователь)
        
        // выполняем запрос
        $result = mysqli_query($conn, $sql);
        
        // получаем все строки из БД
        $count_messages = mysqli_num_rows($result);
        // $i - счётчик количества сообщений
        $i = 0;
        // запускаем цикл по имеющимся сообщениям        
        while ($i < $count_messages) {
            // mysqli_fetch_assoc--преобразовать полученные данные сообщения в массив
            $message = mysqli_fetch_assoc($result);
            ?>        
                <li>
                    <?php
                         // вывести имя, фамилию и фото конкретного пользователя(отправителя) из БД таблицы Таксисты
                        $sql = "SELECT name, lastName, photo FROM taxists WHERE id=" . $message["ot_user_id"];
                        // выполнить запрос
                        $user = mysqli_query($conn, $sql);
                        // записываем в переменную данные пользователя и выводим их
                        $user = mysqli_fetch_assoc($user);
                    ?>
                    <div class="avatar">
                            <img src="<?php echo $user["photo"]; ?>">
                    </div>
                    <h2><?php echo $user["name"]; ?></h2>
                    <h3><?php echo $user["lastName"]; ?></h3>
                    <p><?php echo $message["text"]; ?></p>
                    <div class="time"><?php echo $message["time"]; ?></div>
                </li> 
            <?php
            // увеличиваем счётчик на одного пользователя
            $i = $i + 1;
        } 
    } else {
        // иначе выводим текст
        echo "<h2>Пользователь не выбран!</h2>";
    }        
   
    ?>
</ul>  <!-- ul id="correspondence" -->                                                        

                          