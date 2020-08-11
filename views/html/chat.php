<?php require "./autoload.php"; ?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Chat box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="stylesheet" href="views/assets/css/chat.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>

<body id="bdy" class="wap-cp- mnbdy platfrom-desktop" style="overflow: hidden; height: 618px;" marginwidth="0" marginheight="0">
    <div style="display:none;" class="alert-msg"></div>
    <div id="scrollmain" style="height: 329px; overflow: auto; overflow-anchor: none;">
        <table id="mt" border="0" cellpadding="0" cellspacing="0" width="100%" class="hbtbl chat-history" style="width: 100%;">
            <tbody id="chat">
                <tr id="append-history">
                    
                </tr>
                <?php 
                $get_chat = $db->query("SELECT * FROM `live_chat`");
                while($row = @mysqli_fetch_array($get_chat)):
                ?>
                <tr class="msg-mix"  >
                    <td class="msg stxt">
                        <div class="dtxt2"><?= $row['date'];?></div>
                        <span class="modtools"></span>
                        <b class="nme pn_std"><?= $row['user']; ?></b>: <?= $row['content']; ?>
                    </td>
                </tr>
                <?php endwhile; ?>
                

            </tbody>
        </table>
    </div>
   
    <div class="form-chat">
        <form name="chat" target="cboxmain" id="chatbox" class="cfrm">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                <tbody>
                    <tr >
                        <td>&nbsp;<span id="btnOnliners"><span id="onliners"><span class="ccu-online"><?php
                            $view = $db->total("SELECT * FROM `he_thong`");
                            echo $view['view']; 
                        ?></span> người online</span>
                            </span>
                        </td>
                        
                    </tr>
                    <tr class="chat-message">
                        <td colspan="2" id="tblmid" valign="top" style="vertical-align: top; white-space: nowrap; font-size: 0;">
                            <input type="hidden" name="key" value="" class="input-userid">
                            <input type="hidden" autocomplete="off" value="" class="frmtb input-name">
                            <input type="hidden" autocomplete="off" value="" class="frmtb input-email">
                            <br>
                            <?php
                            if(isset($_SESSION['user'])){?>
                            <textarea placeholder="Messages"  cols="15" rows="1" class="frmtb input-message"></textarea>
                            <?php } else { ?>
                                <textarea placeholder="Đăng nhập để chat" disabled="disabled" cols="15" rows="1" class="frmtb input-message"></textarea>
                            <?php } ?>
                                
                            <div class="emoji-mobile"><img src="/img/smile.png"></div>
                            <a href="javascript:void(0);" class="frmbtn send-message" id="send">Gửi</a>
                        </td>
                    </tr>
                    <tr>

                    </tr>




                </tbody>
            </table>
        </form>
        <div class="disconnect" style="display: none;">
            Mất kết nối với máy chủ, bấm vào đây để thử lại
            <button onclick="resetApp()">Thử lại</button>
        </div>
    </div>

    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('7def0a3587a3a2ece425', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      
    });
  </script>

    <script src="views/assets/js/ajax.js"></script>
   
</body>
</html>