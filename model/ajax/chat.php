<?php 

require "../../autoload.php";
require  '../../vendor/autoload.php';

$text = strip_tags($_POST['text']);


if(isset($username)){
    $get_user = $db->total("SELECT * FROM `users` WHERE `user` = '$username' ");
    $add_chat = $db->insert('live_chat' , array('user' => $username , 'content' => $text , 'date' => $date));    
    if($add_chat){
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


        $status = 0;
        $messages = "Nhắn tin thành công";
    }
    else{
        $status = 1;
        $messages = "Nhắn tin không thành công";
    }
}
echo json_encode(array('status' => $status , 'messages' => $messages));

?>