
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web chơi lô đề online, đánh số đề trực tuyến tỷ lệ 1 ăn 700</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="title" content="Web chơi lô đề online, đánh số đề trực tuyến tỷ lệ 1 ăn 700" />
    <meta name="description" content="LODE88 là cty lô đề trên mạng, đánh số đề tại LODE88 đảm bảo tỷ lệ ăn cao, rút & nạp tiền nhanh, an toàn. Có bí kíp soi cầu lô đề, số đề giúp khách hàng thắng đề" />
    <meta name="keywords" content="lo de, so de, danh de" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="google-site-verification" content="a6lR-HFYe4eoXMuYEIubmuiYXrrtbkhszE5bbpBXfuM" />
    <meta name="google-site-verification" content="yphdaCICTIzuRPV-NJfZcxcm7c78X4-LkbzZkxeFmV0" />
    <meta name="google-site-verification" content="cJwJOwz9ZhHk2kq4gzqmaxLoXxjc7_aTJCTmku2klIg" />
    <meta name="google-site-verification" content="enT3GGxaSulVXTzB52ZNsCvlJoY0GMWGYJlOjgb18F0" />
    <meta name="google-site-verification" content="yVe7PjFrVHzeL_Ze6HXjrui4E1HxvFRvGpFuZqWmx78" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link href="https://lode88.us/public/min/begin.css?v=6" rel="stylesheet" type="text/css" />
    
    <!-- <link href="../assets/css/begin.css?v=6" rel="stylesheet" type="text/css" /> -->
    <link rel="stylesheet" href="views/assets/css/style.css">
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="views/assets/css/sweetalert2.css">

</head>

<body>
    <div class="wrapper">
        <div class="header">
            <div class="logo">
                <a href="https://lode88.us/">
                    <img src="https://lode88.us/public/site/layout/images/logo.png">
                </a>
            </div>
            <?php
            if(!isset($username)){?>
            
            <div class="login col-xs-7" style="display: block;height:80px;" id="form_login">
                <form name="dang-nhap" class="form_action" id="dang-nhap">
                    <div class="row">
                        <div style="padding-right:0;" class="col-xs-4">
                            <input type="text" placeholder="Tên tài khoản" name="user_login" class="form-control txt-red" id="user_login">
                        </div>
                        <div style="padding-right:0;" class="col-xs-3">
                            <input type="password" placeholder="Mật khẩu" name="pass_login" class="form-control txt-red" id="pass_login">
                        </div>
                        <div style="padding-right:0;" class="col-xs-3">
                            <input type="submit" value="Đăng nhập" class="btn btn-signin form-control">
                        </div>
                        <div style="padding-right:0;" class="col-xs-2">
                            <input type="button" value="Đăng ký" class="btn btn-signout form-control" id="reg">
                        </div>
                        <div>
                            <div class="clear "></div>
                            <div class="message-box error m0 f13 hideit none" style="color:red;display:none;background:none;border:none;padding:0px 15px" name="login_error"></div>
                            <div class="clear "></div>
                        </div>
                    </div>
                    <div class="message-box error m0 f13 hideit hide" style="color:#444;" name="login_error"></div>
                </form>
                <div class="txt-link reset-pwd"><a href="">Quên mật khẩu?</a></div>
            </div>
            <?php } else {  
                $get_user = $db->total("SELECT * FROM `users`  WHERE `user` = '$username'");

                ?>
            <div class="login" id="form_logined" style="width:500px">
            <div style="text-align: right;" class="user-logined">
                <span>Chào bạn: <b><a href="?page=member" style="color: #d70a0a; text-decoration: underline;" id="form_username"><?php echo $_SESSION['user']; ?></a></b></span>
                <a href="#" class="lode-logout" id="logout">Đăng Xuất</a>
            </div>
            <div class="txt-link reset-pwd">
                <div class="lode-deposit">
                    <p id="cash"><?php echo number_format($get_user['sodu']);  ?> K</p>
                    <div class="deposit-money"><a href="https://lode88.us/member.html#giao-dich">NẠP TIỀN</a></div>
                </div>
            </div>

        </div>
            <?php }  ?> 
            <div class="clearfix"></div>
            <div class="menu">
                <ul>
                    <li class="mn-home active"><a href="https://lode88.us/">&nbsp;</a></li>
                    <li class="">
                        <a href="<?php echo base_url(); ?>">Lô tô</a>
                    </li>
                    <li class="">
                        <a href="?page=rut-tien">Cách rút tiền</a>
                    </li>
                    <li class="">
                        <a href="?page=danh-so&type=danhso">Đánh số</a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="notification">
            <div class="notification-head">
                <span class="notification-icon"></span>
            </div>
            <div class="notification-text">
                <marquee behavior="scroll" direction="left">
                    <span id="div_thongbao">Cam kết an toàn trên mỗi giao dịch với ghi chú buôn bán tiền ảo hợp pháp. </span>
                </marquee>
            </div>
            <div class="date-time">
                <span id="time_view"></span>
            </div>
            <div class="clearfix"></div>
        </div>