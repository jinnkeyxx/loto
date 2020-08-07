<html>

<head>
    <meta charset="UTF-8">
    <title>Chat box</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <link rel="stylesheet" href="views/assets/css/chat.css">


</head>

<body id="bdy" class="wap-cp- mnbdy platfrom-desktop" style="overflow: hidden; height: 618px;" marginwidth="0" marginheight="0">
    <div style="display:none;" class="alert-msg"></div>
    <div id="scrollmain" style="height: 519px; overflow: auto; overflow-anchor: none;">
        <table id="mt" border="0" cellpadding="0" cellspacing="0" width="100%" class="hbtbl chat-history" style="width: 100%;">
            <tbody>
                <tr id="append-history">
                    <td class="stxt msgSticky">
                        <div align="center"><a page="1" rel="lode88" id="lnkArchive">[Các tin cũ]</a></div>
                    </td>
                </tr>
                <tr class="msg-mix" msg-id="5f23ca68d7fad9b23a3266fc" data-name="nguyenkhoaf" uid="66388" style="">
                    <td class="msg stxt">
                        <div class="dtxt2">14:38:16, 31/7/2020</div>
                        <span class="modtools"></span>
                        <b class="nme pn_std">nguyenkhoaf</b>: 10 trieu thi rut roi
                    </td>
                </tr>
                <tr class="msg-mix" msg-id="5f23cb02d7fad9b23a3266fd" data-name="ksory5379" uid="75051" style="">
                    <td class="msg stxt">
                        <div class="dtxt2">14:40:50, 31/7/2020</div>
                        <span class="modtools"></span>
                        <b class="nme pn_std">ksory5379</b>: tui rút 10tr vô tư, , chứ chưa có cơ hội rút nhiều,nạp nhiều thì có
                    </td>
                </tr>
                <tr class="msg-mix" msg-id="5f23eb0cd7fad9b23a326700" data-name="hoanghocbui" uid="43894" style="">
                    <td class="msg stxt">
                        <div class="dtxt2">16:57:32, 31/7/2020</div>
                        <span class="modtools"></span>
                        <b class="nme pn_std">hoanghocbui</b>: 30tr rút ok.mấy lần rồi
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- <div class="emoji-bg">
        <ul>

            <li>🗾</li>

            <li>🗿</li>

            <li>😀</li>

            <li>😁</li>

            <li>😂</li>

            <li>😃</li>

            <li>😄</li>

            <li>😅</li>

            <li>😆</li>

            <li>😇</li>

            <li>😈</li>

            <li>😉</li>

            <li>😊</li>

            <li>😋</li>

            <li>😌</li>

            <li>😍</li>

            <li>😎</li>

            <li>😏</li>

            <li>😐</li>

            <li>😑</li>

            <li>😒</li>

            <li>😓</li>

            <li>😔</li>

            <li>😕</li>

            <li>😖</li>

            <li>😗</li>

            <li>😘</li>

            <li>😙</li>

            <li>😚</li>

            <li>😛</li>

            <li>😜</li>

            <li>😝</li>

            <li>😞</li>

            <li>😟</li>

            <li>😠</li>

            <li>😡</li>

            <li>😢</li>

            <li>😣</li>

            <li>😤</li>

            <li>😥</li>

            <li>😦</li>

            <li>😧</li>

            <li>😨</li>

            <li>😩</li>

            <li>😪</li>

            <li>😫</li>

            <li>😬</li>

            <li>😭</li>

            <li>😮</li>

            <li>😯</li>

            <li>😰</li>

            <li>😱</li>

            <li>😲</li>

            <li>😳</li>

            <li>😴</li>

            <li>😵</li>

            <li>😶</li>

            <li>😷</li>

            <li>😸</li>

            <li>😹</li>

            <li>😺</li>

            <li>😻</li>

            <li>😼</li>

            <li>😽</li>

            <li>😾</li>

            <li>😿</li>

            <li>🙀</li>

            <li>🙁</li>

            <li>🙂</li>

            <li>🙃</li>

            <li>🙄</li>

            <li>🙅</li>

            <li>🙆</li>

            <li>🙇</li>

            <li>🙈</li>

            <li>🙉</li>

            <li>🙊</li>

            <li>🙋</li>

        </ul>
    </div> -->
    <div class="form-chat">
        <form name="cbox" target="cboxmain" action="" method="post" class="cfrm">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                <tbody>
                    <tr>
                        <td>&nbsp;<span id="btnOnliners"><span id="onliners"><span class="ccu-online">31</span> người online</span>
                            </span>
                        </td>
                        <td align="right"><span id="chanBar"></span><a onclick="resetApp()" target="cboxmain" id="rf">Tải lại</a>&nbsp;</td>
                    </tr>
                    <tr class="chat-message">
                        <td colspan="2" id="tblmid" valign="top" style="vertical-align: top; white-space: nowrap; font-size: 0;">
                            <input type="hidden" name="key" value="" class="input-userid">
                            <input type="hidden" autocomplete="off" value="" class="frmtb input-name">
                            <input type="hidden" autocomplete="off" value="" class="frmtb input-email">
                            <br>

                            <textarea placeholder="Đăng nhập để chat" disabled="disabled" cols="15" rows="1" class="frmtb input-message"></textarea>

                            <div class="emoji-mobile"><img src="/img/smile.png"></div>
                            <a href="javascript:void(0);" class="frmbtn send-message">Gửi</a>
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






</html>