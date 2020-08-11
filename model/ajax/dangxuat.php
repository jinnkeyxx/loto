<?php 
session_start();
$logout = session_destroy();
if($logout){
    $status = 0;
    $messages = "Đăng xuất thành công";
    $update_view = $db->updateview("UPDATE `he_thong` SET `view` = `view` - 1");
   
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
    $messages = "đăng xuất không thành công";
}
echo json_encode(array('status' => $status , 'messages' => $messages));