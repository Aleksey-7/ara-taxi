<!-- ФАЙЛ УДАЛЯЕТ КУКИ   -->

<?php
//Удаляем куки пользователя
setcookie("userCookie", "", 0, "/");

header("Location: http://ara-taxi.local/");

?>