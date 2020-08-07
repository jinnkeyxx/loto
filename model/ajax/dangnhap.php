<?php

require "../../autoload.php";
if(!isset($_SESSION['user'])){
    $user = strip_tags($_POST['user']);
    $pass = strip_tags($_POST['pass']);
    if(trim($user , ' ') == ""){
        $status = 1;
        $messages = "Tên đăng nhập không được bỏ trống";
    }
    elseif(trim($pass , ' ') == ""){
        $status = 1;
        $messages = "Mật khẩu không được bỏ trống";
    }
    else {
        $check_user = $db->num_row("SELECT * FROM `users` WHERE `user` = '$user' AND `pass` = '$pass'");
        // echo $check_user;
        if($check_user > 0){
            $_SESSION['user'] = $user;
            
            $status = 0;
            $messages = "Đăng nhập thành công , vui lòng đợi trong giây lát";
        }
        else {
            $status =1 ;
            $messages = "Tên tài khoản hoặc mật khẩu sai";
        }
    }

}
else {
    $status = 1;
    $messages = "Bạn đã đăng nhập rồi";
}
echo json_encode(array('status' => $status , 'messages' => $messages ));
