<?php 

require "../../autoload.php";
if(!isset($_SESSION['user'])){
    $user = strip_tags($_POST['user']);
    $pass = strip_tags($_POST['pass']);
    $rp_pass = strip_tags($_POST['rp_pass']);
    $phone = strip_tags($_POST['phone']);
    $sodu = 0;
    $flag = true;
    if(trim($user , " ") == "" && trim($pass , " ") == "" && $phone == ""){
        $status = 1;
        $messages = "Tên tài khoản , mật khẩu , số điện thoại không được để trống";
        $flag = false;

    }
    else {
        if(strlen($user) < 6){
            $status =1 ;
            $messages = "Tên tài khoản phải lớn hơn 6 kí tự";
            $flag = false;
        }
        elseif(strlen($pass) < 6){
            $status =1 ;
            $messages = "Mật khẩu phải lớn hơn 6 kí tự";
            $flag = false;
        }
        else {
            if(strlen($phone) < 10 && !is_numeric($phone)){
                $status = 1;
                $messages = "số điện thoại không đúng";
                $flag = false;
            }
            else {
                $check_user = $db->num_row("SELECT * FROM `users` WHERE `user` = '$user'");
                if($check_user == 0){
                    $check_phone = $db->num_row("SELECT * FROM `users` WHERE `phone` = '$phone'");
                    if($check_phone == 0){
                        $add_member = $db->insert('users' , array('user' => $user , 'pass' => $pass , 'phone' => $phone , 'date' => $date , 'sodu' => $sodu));
                        
                        if($add_member){
                            $_SESSION['user'] = $user;
                            $status = 0;
                            $messages = "Đăng kí thành công , đang chuyển hướng";
                            $flag = true;
                            $update_view = $db->updateview("UPDATE `he_thong` SET `view` = `view` + 1");
                            if($update_view){
                                $options = array(
                                    'cluster' => 'ap1',
                                    'useTLS' => true
                                );
                                $pusher = new Pusher\Pusher(
                                    '7def0a3587a3a2ece425',
                                    'f2289786666b1c96ee68',
                                    '1042432',
                                    $options
                                );
                                $data['message'] = $text;
                                $pusher->trigger('my-channel', 'my-event', $data);
                            }

                        }
                        else {
                            $status = 1;
                            $messages = "Có lỗi trong quá trình đăng kí , vui lòng làm lại";
                            $flag = false;
                        }
                    }
                    else {
                        $status = 1;
                        $messages = "Số điện thoại đã được sử dụng";
                        $flag = false;
                    }
                    
                }
                else {
                    $status = 1;
                    $messages = "Tên tài khoản đã tồn tại";
                    $flag = false;
                }
                
            }
        }
    }
   
}
else {
    $status = 1;
    $messages = "vui lòng đăng xuất để có thể đăng kí";
    $flag = false;
}
echo json_encode(array('status' => $status , 'messages' => $messages));


