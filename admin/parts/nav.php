<!-- HTML СТРУКТУРА НАВИГАЦИОННОЙ ЧАСТИ АДМИН-ПАНЕЛИ  -->

<ul class="nav">
    <li  class="nav-list">
        <a class="nav-link" id="home" href="/admin"><?php if($page == "main") {echo '&#9658';} ?>CLIENTS</a>
    </li>

    <li class="nav-list">
        <a class="nav-link"  id="drivers" href="http://ara-taxi.local/admin/drivers.php">
             <?php if($page == "drivers") { echo '&#9658'; } ?> DRIVERS</a>
    </li>

    <li class="nav-list">
        <a class="nav-link" id="orders" href="http://ara-taxi.local/admin/orders.php">
         <?php if($page == "orders") { echo '&#9658'; } ?>ORDERS</a>
    </li>

     <li  class="nav-list>">
        <a class="nav-link" id="chat" href="http://ara-taxi.local/admin/chat.php">
            <?php if($page == "chat") { echo '&#9658'; } ?>CHAT</a>
    </li>

    <li  class="nav-list>">
        <a class="nav-link" id="chat" href="http://ara-taxi.local/admin/reviews.php">
            <?php if($page == "reviews") { echo '&#9658'; } ?>REVIEWS</a>
    </li>

    <li class="nav-list ">
        <a id="logout" class="nav-link" href="http://ara-taxi.local/admin/exit.php">EXIT</a>
    </li >
   
</ul> <!-- ul class="nav" -->