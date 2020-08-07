<?php
if(isset($_REQUEST['page'])){
    $page = $_REQUEST['page'] . '.php';
    include "./views/page/".$page;
}
else {
?>
<div class="main">
    <div class="fl box-number">
        <div class="box-number-content">
            <div style="position:relative;min-height:300px">
                <div id="divkqxs" class="box-ketqua">
                    <div class="clearfix"></div>
                    <div class="bang-ketqua">
                        <script language="javascript" src="//www.minhngoc.net.vn/jquery/jquery-1.7.2.js"></script>
                        <link rel="stylesheet" type="text/css" href="//www.minhngoc.net.vn/style/bangketqua_mini.css" />
                        <div id="box_kqxs_minhngoc">
                            <script language="javascript">
                            bgcolor = "#bfbfbf";
                            titlecolor = "#730038";
                            dbcolor = "#000000";
                            fsize = "14px";
                            kqwidth = "100%";
                            </script>
                            <script language="javascript" src="//www.minhngoc.net.vn/getkqxs/mien-bac.js"></script>
                        </div>
                    </div>
                </div>
                <div id="divkqxs_load" class="form_load"></div>
            </div>
        </div>
    </div>
    <div class="fl box-chat">
        <div class="box-chat-title"></div>
        <div id="chat_logined" class="box-chat-content">
            <div id="cboxdiv"
                style="position: relative; margin: 0 auto; width: 286px;height:100%; font-size: 0; line-height: 0;">

                <iframe src="chat" marginheight="0"
                    marginwidth="0" frameborder="0" width="100%" height="100%" scrolling="yes"
                    allowtransparency="yes"></iframe>
            </div>
        </div>

    </div>
    <div class="clearfix"></div>
    <div class="info">
        <div class="icon-info">
            <a style="font-size: 12px;" href="?page=nap-tien">
                <i class="icon icon-heo"></i>
                <p style="font-size: 12px;">Cách nạp tiền</p>
            </a>
        </div>
        <div class="icon-info">
            <a style="font-size: 12px;" href="?page=rut-tien">
                <i class="icon icon-dola"></i>
                <p style="font-size: 12px;">Cách rút tiền</p>
            </a>
        </div>
        <div class="icon-info">
            <a style="font-size: 12px;" href="https://lode88.us/kinh-nghiem.html">
                <i class="icon icon-moigioi"></i>
                <p style="font-size: 12px;">Kinh nghiệm</p>
            </a>
        </div>
        <div class="icon-info">
            <img src="https://lode88.us/public/site/layout/images/icon_vnd.png" />
            <p style="font-size: 12px;">Tổng tiền cược trong ngày</p>
        </div>
        <div class="tiencuoc" id="div_tongtiencuoc" money="<?php echo $tien_ca_cuoc; ?>">
            <i class="tc"><?php echo number_format($tien_ca_cuoc) ; ?></i>
        </div>
    </div>
    <div class="banner">
        <ul class="banner-slider">
            <li><img src="https://lode88.us/public/site/layout/images/img_banner.png" /></li>
            <li><img src="https://lode88.us/public/site/layout/images/img_banner2_1.png" /></li>
        </ul>
        <div class="slider-controls">
            <span id="slider-next" class="slider-btn"></span>
            <span id="slider-prev" class="slider-btn"></span>
        </div>
    </div>
</div>

<?php } ?>