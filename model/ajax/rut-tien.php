<?php 
require "../../autoload.php";
if(isset($username)){
    $bank = strip_tags($_POST['bank']);
    $nguoinhan = strip_tags($_POST['nguoinhan']);
    $sotaikhoan = strip_tags($_POST['sotaikhoan']);
    $sotien = strip_tags($_POST['sotien']);
    $phone = strip_tags($_POST['phone']);
    $check_user = $db->total("SELECT * FROM `users` WHERE `user` = '$username' ");
    if($sotien > $check_user['sodu']){
        $status = 1;
        $messages = "Số dư không đủ";
    }
    else {
$rut_tien = $db->insert('rut-tien' , array('user' => $username , 'bank' => $bank , 'nguoi_nhan' => $nguoinhan , 'sotaikhoan' => $sotaikhoan , 'sotien' => $sotien , 'phone' => $phone));
        if($rut_tien){
            $status = 0;
            $messages = "rút tiền thành công";
        }
        else {
            $status = 1;
            $messages = "có lỗi xảy ra , vui lòng làm lại";
        }
    }
}
else {
    $status = 1;
    $messages = "Không có quyền truy cập";
 }
 print($_SERVER);
echo json_encode(array('status' => $status , 'messages' => $messages));

 