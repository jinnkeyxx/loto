<?php 

require "../../autoload.php";
if(isset($username)){
    $loaide = strip_tags($_POST['loaide']);
    $sodanh = strip_tags($_POST['sodanh']);
    $tiendanh = strip_tags($_POST['tiendanh']);
    $tong = strip_tags($_POST['tong']);
   
    if($loaide == "" || $sodanh == "" ||  $tiendanh == ""){
        $status = 1;
        $messages = "lỗi xảy ra .. vui lòng làm lại";
    }
    else {
        $get_user = $db->total("SELECT * FROM `users` WHERE `user` = '$username'");
        if($tong > $get_user['sodu']){
            $status = 1;
            $messages = "bạn không đủ tiền để đánh";
        }
        else {
            $danhso = $db->insert('danhso',array('user' => $username , 'sodanh' => $sodanh , 'kieudanh' => $loaide , 'tiendanh' => $tiendanh , 'date' => $date , 'tong' => $tong));
            $tien = $get_user['sodu'] - $tong;
            $update_sodu = $db->update('users' , array('sodu' => $tien) , array('user' => $username));
            $hethong = $db->total("SELECT * FROM `he_thong`");
            $tien_hethong = $hethong['tong_tien-ca_cuoc'] + $tong;

            $update_tien_cuoc = $db->updateview("UPDATE `he_thong` SET `tong_tien-ca_cuoc` = $tien_hethong");
            if($danhso){
                $status = 0;
                $messages = "đánh số thành công";
            }
            else {
                $status = 1;
                $messages = "có lỗi xảy ra";
            }
        }
    }
}
else {
    $status = 1;
    $messages = "Bạn chưa đăng nhập";
}
echo json_encode(array('status' => $status , 'messages' => $messages ));