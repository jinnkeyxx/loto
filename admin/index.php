<?php
require "../autoload.php";
if(isset($username)){
    $check_admin = $db->total("SELECT * FROM `users` WHERE `user` = '$username'");
    $admin = $check_admin['role'];
    if($admin > 0){
        include "html/header.php";
        include "html/slider.php";
        include "html/main.php";
        include "html/footer.php";
    }
    else {
        include "../views/html/error404.html";
    }

}
else {
    include "../views/html/error404.html";
}
 ?>