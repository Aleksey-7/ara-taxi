<!--ЭТОТ РНР ФАЙЛ  СОДЕРЖИТ ЗАПРОС НА ОТПРАВКУ СООБЩЕНИЙ  В ЧАТЕ -->

<?php

include "../../../configs/db.php";

/*=====================
  Добавление сообщения выбранному пользователю
=======================*/
// если есть отправляемое сообщение, то заносим в БД данные текста, получателя и отправителя
if (isset($_POST["send_sms"])) {
    $sql = "INSERT INTO messages (text, komu_user_id, ot_user_id) VALUES ('" . $_POST["text"] . "', '" . $_POST["komu_user_id"] . "', '" . $_POST["ot_user_id"] . "')";
    mysqli_query($conn, $sql);
}

$send_user_id= $_POST["komu_user_id"];
$user_id = $_POST["ot_user_id"];

include "correspondence.php";
?>