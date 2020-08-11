<?php if(isset($username)){ 

    ?>
<div class="main page-lode">
    <div class="taikhoan">
        <div class="account-header clearfix ">
            <div id="infoUser" class="pull-left">
                <div class="title-block ">
                    <h4 class="title"><i class="iconUser"></i>Thông tin tài khoản:</h4>
                    <a class="edit-info" href="https://lode88.us/memberinfoedit.html"><i class="iconEdit"></i>chỉnh
                        sửa</a>
                </div>
                <div class="meta">
                    <p>Email: <a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                            data-cfemail="3f4b5a5e535d505006067f58525e5653115c5052">[email&#160;protected]</a></p>
                    <p>Số điện thoại: 07793*****</p>
                </div>
            </div>

        </div>

        <div class="lich-su-danh gd">
            <div class="bhead">
                <div class="fl">
                    <div class="tab vergo-tab">
                        <a href="#" class="active">Lịch sử đánh đề</a> |
                       

                    </div>
                </div>
            </div>
            <div class="bcontent" id="lode_history">
                <form id="frm-form-loto"  method="get">
                    <div class="row chon-ngay" style="margin-bottom: 10px;">
                        
                        <!-- <div class="col-xs-2">
                            
                            <input name="ngay" id="from_overview_playhistory_todate_loto" type="text"
                                class="form-control txt-red datepicker hasDatepicker" value="05-08-2020">
                        </div>
                        <div class="col-xs-2">
                            <span>
                                <input id="submit-btn-loto" type="submit" class="btn btn-signin form-control"
                                    value="Xem"></span>
                        </div> -->
                    </div>
                    <table id="tblshower_playhistory">
                        <thead>
                            <tr>
                                
                            </tr>
                        </thead>
                        <tbody id="table_playhistory">
                            <tr>
                                
                                <td>Ngày đánh</td>
                                <td>Đài</td>
                                <td>Loại đề</td>
                                <td>Số</td>
                                <td>tiền đánh một con</td>
                                <td>Tổng tiền</td>
                            </tr>
                            <?php $check_ls = $db->query("SELECT * FROM `danhso` WHERE `user` = '$username' ORDER BY `id` DESC");
                                while($row = @mysqli_fetch_array($check_ls)):
                             ?>
                            <tr>
                            <td><?= $row['date']; ?></td>
                            <td>Miền Bắc</td>
                            <td><?= $row['kieudanh']; ?></td>
                            <td><?= $row['sodanh']; ?></td>
                            <td><?= $row['tiendanh'] . 'K'; ?></td>
                            <td><?= $row['tong'] . 'K'; ?></td>
                            </tr>
                                <?php endwhile; ?>
                        </tbody>
                    </table>

                </form>

            </div>
            <style>
            table {
                width: 100%
            }
            </style>
            </form>

        </div>
    </div>
    <div class="giao-dich" id="giao-dich">
        <ul class="tabs">
            <li class="tab-link tab-link--bank current" data-tab="tab-1">Nạp qua ngân hàng</li>
            
        </ul>
        <div id="tab-1" class="tabs-content current">
        <div class="pull-left block-gd nap-tien " id='fix'>
                    <form name="nap-tien" action="" id="frm-deposit-make">
                        <div class="title block-title">
                            Nạp tiền ATM
                            <div class="bank" data-toggle="modal" data-target="#popBank">
                                <span class="icon-bank"></span>
                                <span class="bank-txt">Ngân hàng</span>
                            </div>
                        </div>
                        <div>
                         
                            <ul>
                                <li>số tài khoản : 123</li>
                                <li>số tài khoản : 123</li>
                                <li>số tài khoản : 123</li>
                                <li>số tài khoản : 123</li>
                                <li>số tài khoản : 123</li>
                            </ul>
                        </div>
                    </form>
                   
                </div>
            <div class="deposit-container clearfix">
                <!-- <div class="fl block-gd nap-tien">
                    <form name="nap-tien-sieu-toc" action="https://lode88.us/smartpay/new_invoice.html"
                        id="frm-smartpay-deposit-make" class="">
                        <div class="title block-title">NẠP TIỀN siêu tốc</div>
                        <div class="tb-deposit-quick">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td colspan="2">
                                            <a href="#"><img
                                                    src="https://lode88.us/public/site/images/banner-smartpay-new-1.jpg"
                                                    width="100%" /></a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td style="width: 135px;">
                                            Chọn ngân hàng (<font color="red"><b>*</b></font>)
                                        </td>
                                        <td>
                                            <select name="bank" class="form-control" id="select-auto-banking">
                                                <option value></option>
                                                <option value="vcb">Ngân hàng Vietcombank </option>
                                                <option value="eab">Ngân hàng DongA </option>
                                                <option value="acb">Ngân hàng ACB </option>
                                                <option value="vtb">Ngân hàng VietinBank </option>
                                                <option value="bidv">Ngân hàng Đầu Tư &amp; Phát triển Việt Nam (BIDV)
                                                </option>
                                                <option value="sab">Ngân hàng Sacombank </option>
                                                <option value="tcb">Ngân hàng Techcombank </option>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Số tiền (<font color="red"><b>*</b></font>)
                                        </td>
                                        <td>
                                            <input type="text" name="amount" class="form-control format_currency"
                                                id="from_overview_smartpay_naptien_tien">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                        </td>
                                        <td>
                                            <input class="btn btn-signin pull-right" id="btn-deposite-quick"
                                                type="submit" value="Nạp tiền">
                                            <input type="hidden" value="2" name="_submit" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="warning-notification">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                    <tr>
                                        <td align="center" valign="middle"><img
                                                src="https://lode88.us/public/site/images/Icon_Service_Full.png"
                                                width="100" height="100" /></td>
                                        <td valign="middle" style="padding-left:20px;">Hệ thống Smartpay đang tạm ngưng
                                            trong ít phút</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </form>
                </div> -->
                
            </div>
        </div>
        <ul class="tabs">
            
            <li class="tab-link tab-link--card" data-tab="tab-2">Nạp qua thẻ cào<i class="iconNews"></i></li>
        </ul>
        <div id="tab-2" class="tabs-content" style="display: block;">
            <div class="deposit-container clearfix">
                <form name="nap-tien-the-cao" action="https://lode88.us/card/deposit.html" id="frm-card-deposit-make"
                    class="">
                    <div class="banner-card--deposit"></div>
                    <div class="fl block-gd nap-tien">
                        <div class="tb-deposit-quick">
                            <table style="width: 100%;">
                                <tbody>
                                    <tr>
                                        <td style="width: 135px;">
                                            Chọn loại thẻ (<font color="red"><b>*</b></font>)
                                        </td>
                                        <td>
                                            <select name="namecard" class="form-control" id="select-name-card">
                                                <option value="">Vui lòng chọn nhà mạng</option>
                                                <option value="">Chọn loại thẻ</option>
                                                <option value="VIETTEL">Viettel</option>
                                                <option value="MOBIFONE">Mobifone</option>
                                                <option value="VINAPHONE">Vinaphone</option>
                                                <option value="GATE">Gate</option>
                                                <option value="ZING">Zing</option>
                                                <option value="GARENA">Garena</option>
                                                
                                                
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Số series thẻ (<font color="red"><b>*</b></font>)
                                        </td>
                                        <td>
                                            <input type="text" name="seriescard" class="form-control"
                                                id="from_overview_series_card">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <p>Lưu ý:</p>
                                            <p class="note-text--deposit">_ Vui lòng chọn đúng mệnh giá và nhà mạng, nếu
                                                nhập sai Admin không chịu trách nhiệm.<br>_ Phí gạch thẻ 35% rẻ nhất
                                                thị trường.</p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="warning-notification">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%" height="100%">
                                    <tbody>
                                        <tr>
                                            <td align="center" valign="middle"><img
                                                    src="https://www.lode88.net/public/site/images/Icon_Service_Full.png"
                                                    width="100" height="100"></td>
                                            <td valign="middle" style="padding-left:20px;">Hệ thống Smartpay đang tạm
                                                ngưng trong ít phút</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="pull-right block-gd nap-tien">
                        <table style="width: 100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        Mệnh giá (<font color="red"><b>*</b></font>)
                                    </td>
                                    <td>
                                        <select name="valuecard" class="form-control" id="select-menhgia">
                                            <option value="">Vui lòng chọn mệnh giá</option>
                                            <option value="10000">10.000</option>
                                                <option value="20000">20.000</option>
                                                <option value="30000">30.000</option>
                                                <option value="50000">50.000</option>
                                                <option value="100000">100.000</option>
                                                <option value="200000">200.000</option>
                                                <option value="300000">300.000</option>
                                                <option value="500000">500.000</option>
                                                <option value="1000000">1.000.000</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Mã thẻ (Pin) (<font color="red"><b>*</b></font>)
                                    </td>
                                    <td>
                                        <input name="pincard" id="from_overview_pin_card" type="text"
                                            class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="btn btn-signin pull-right" id="btn-form-submit-deposite-card"
                                            type="submit" value="Nạp tiền">
                                        <input type="hidden" value="2" name="_submit">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <div style="clear:both;"></div>
        <div class="withdraw clearfix">
            <form name="rut-tien" id="frm-withdraw-make">
                <div class="title block-title">
                    Rút tiền</div>
                <div class="block-gd pull-left">
                    <table style="width: 100%;">
                        <tbody>
                            <tr>
                                <td style="width: 135px;">
                                    Chọn ngân hàng (<font color="red"><b>*</b></font>)
                                </td>
                                <td>
                                    <select name="bank" id="from_overview_ruttien_bank" class="form-control">
                                        <option></option>
                                        <option value="VCB">Ngân hàng Vietcombank</option>
                                        <option value="DongA">Ngân hàng DongA</option>
                                        <option value="ACB">Ngân hàng ACB</option>
                                        <option value="VietinBank">Ngân hàng VietinBank</option>
                                        <option value="BIDV">Ngân hàng Đầu Tư & Phát triển Việt Nam (BIDV)</option>
                                        <option value="Sacombank">Ngân hàng Sacombank</option>
                                        <option value="Techcombank">Ngân hàng Techcombank</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Tên người nhận (<font color="red"><b>*</b></font>)
                                </td>
                                <td>
                                    <input name="bank_account" id="from_overview_ruttien_customer" type="text"
                                        class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Số tài khoản (<font color="red"><b>*</b></font>)
                                </td>
                                <td>
                                    <input name="bank_numbers" id="from_overview_ruttien_accountnumber" type="text"
                                        onkeyup="numberonly(this)" class="form-control">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="block-gd pull-right">
                    <table style="width: 100%;">
                        <tbody>
                            <tr>
                                <td>
                                    Số tiền (<font color="red"><b>*</b></font>)
                                </td>
                                <td>
                                    <input name="amount" id="from_overview_ruttien_tien" type="text"
                                        class="form-control format_currency">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Nhập mã (<font color="red"><b>*</b></font>)
                                </td>
                                <td>
                                    <input name="security_code" autocomplete="off" id="from_overview_ruttien_sdt"
                                        type="text" class="form-control"
                                        placeholder="Nhập số điện thoại đăng kí.">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                </td>
                                <td>
                                    <input id="btn-form-submit-withdraw" type="submit" class="btn btn-signin pull-right"
                                        value="Rút tiền">
                                    <input type="hidden" value="2" name="_submit">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
        <div class="clearfix">
        </div>
    </div>
</div>
</div>
                <?php } else {
                    echo "<script> window.location.href = '/' </script>";
                } ?>