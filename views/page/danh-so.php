<?php if(isset($_REQUEST['type'])){

 ?>
<div class="main">
    <!-- Message -->
    <style>
    .tab_number_content {
        display: none;
    }
    </style>

    <div class="page-lode">
        <style>
        .alert-success #md5-loto-token,
        .alert-success #md5-loto-rs {
            word-break: break-word;
        }
        </style>
        <div class="block">
            <div style="background: #f6f6f6;" class="bhead">
                <div id="BDHeader" class="fl">Biên đề - Miền Bắc</div>
                <div class="clearfix"></div>
            </div>
            <div class="bcontent">
               
                    <div id="overlay-modal"
                        style="display:none;position: absolute;top: 0;bottom: 0;left: 0;    right: 0;    background: #ccc;    z-index: 9;    opacity: 0.5;">
                    </div>
                    <div class="row" style="position:relative;">
                        <div class="col-xs-3">
                            <input type="text" name="date" id="date" value="<?php echo $date; ?>"
                                class="form-control date_bet txt-red" placeholder="Chọn ngày">
                            <div name="date_error" class="error"></div>
                        </div>
                        <div class="col-xs-3">
                            <div id="load_city">
                                <select id="daido" name="city" class="form-control txt-red" placeholder="Chọn đài">
                                    <option data-token="" data-result="" data-name="Miền bắc" value="1">Miền bắc
                                    </option>
                                </select>
                            </div>
                            <div name="city_error" class="error"></div>
                        </div>
                        <div class="col-xs-4">
                            <div class="error" style="padding-top:8px"><?php if(!isset($username)) echo "vui lòng đăng nhập để tham gia cá cược"; ?></div>
                        </div>
                        <div id="divkqxs_load" class="form_load"></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="kieu-danh nav nav-tabs" role="tablist">
                        <div style="border-left: solid 1px #d7d7d7;" class="kd act nav-item" data-type="loto">
                            <a class="nav-link active number" data='danh-lo'>Đánh lô</a>
                        </div>

                        <div style="border-left: solid 1px #d7d7d7;" class="kd " data-type="3cang">
                            <a class="nav-link active number" data='ba-cang'>3 càng</a>
                        </div>
                        <div style="border-left: solid 1px #d7d7d7;" class="kd " data-type="de">
                            <a class="nav-link active number" data='danh-de'>Đánh đề</a>
                        </div>
                        <div style="border-left: solid 1px #d7d7d7;" class="kd " data-type="dauduoi"> <a
                                class="nav-link active number" data='dau-duoi'>Đầu đuôi</a></div>
                        <div style="border-left: solid 1px #d7d7d7;" class="kd " data-type="loxien"><a
                                class="nav-link active number" data='lo-xien'>Lô Xiên</a></div>
                        <div style="border-left: solid 1px #d7d7d7;" class="kd " data-type="lotruot"><a
                                class="nav-link active number" data='lo-truot'>Lô trượt</a></div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="chon-so" style="position:relative;min-height:300px" id="tab-container">
                        <div id="bet_type_content-tab1">
                            <div id="tabBetType" class="bhead">
                                <div style="width: auto;" data-multi="1" data-loto_id="1" data-code="loto_2so"
                                    class="kd1 act">
                                    Lô 2 số </div>
                                <!-- <div style="width: auto;" data-multi="1" data-loto_id="2" data-code="loto_3so" class="kd1 ">
            Lô 3 số </div> -->
                                <div class="clearfix"></div>
                            </div>
                            <div style="position:relative;min-height:300px">
                                <div id="loto_type_info" data-code="loto_2so">
                                    <div id="tabBetTypeDetail" style="margin-top: 20px;">

                                        <table style="width: 100%; height: 100%;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding-left: 15px;">
                                                        <table cellpadding="5px">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <span class="tabactived">00-99</span>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="10">
                                                        <table style="width: 100%;height:100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <?php for($number = 00 ; $number <= 99 ; $number++){ ?>
                                                                        <span class="so">
                                                                            <span
                                                                                class="so-item so-lo"><?php if($number < 10){echo "0".$number;} else {echo $number;} ?></span>
                                                                        </span>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="ngay-danh" style="padding: 10px">
                                        <div id="div_helpplay">
                                            Đánh 2 chữ số cuối trong lô 27 giải ( chỉ cần thanh toán cho 22 giải ).
                                            Thắng gấp 81 lần, nếu số đó về N lần thì tính kết quả x N lần. Ví dụ: đánh
                                            lô 79 - 1 con 1k, Tổng thanh toán: 1k x 22 = 22k. Nếu trong lô có 2 chữ số
                                            cuối là 79 thì Tiền thắng: 1k x 81 = 81k, nếu có N lần 2 chữ số cuối là 79
                                            thì Tiền thắng là: 1k x 81 x N </div>

                                        <div class="fl" style="margin-top: 10px;">
                                            <div class="ngay act">Ngày đánh</div>
                                            <div class="ngay" id="ngaydanh"><?php echo $date; ?></div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="fr" style="margin-top: 10px;">
                                            <div class="ngay act">Đài</div>
                                            <div class="ngay" id="daidanh">Miền bắc</div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="clearfix"> </div>
                                        <div style="margin-top: 10px;"></div>
                                        <div class="fl">
                                            <div class="ngay act">Loại đề</div>
                                            <div class="ngay" id="loaidedanh">Đánh Lô 2 số</div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="fr">
                                            <div class="ngay act">Số đánh</div>
                                            <div class="ngay" id="sodanh" style="height: auto; min-height: 40px;"></div>
                                            <div class="clearfix"></div>
                                        </div>

                                        <div class="clearfix"></div>

                                        <div class="tien-danh">
                                            <div class="fl">
                                                <div class="tien act">Tổng tiền đánh (K)</div>
                                                <input type="text" name="amount" placeholder="0"
                                                    onkeyup="FormatNumber(this)" class="format_currency tongtiendanh"
                                                    id="tongtiendanh">
                                            </div>

                                            <div class="fl" style="margin-left: 10px;">
                                                <div class="tien act">
                                                    Số điểm trên 1 con (K)
                                                </div>
                                                <input type="text" id="tienmotcon" class=" tien-lo" placeholder="0" >
                                            </div>
                                            <div class="fr">
                                                <div style="width: 173px;" class="tien act">Tiền thắng/1 con (K)</div>
                                                <div class="tien input-width">
                                                    <span class="format_currency tienthang1con "
                                                        id="tienthang1con">0</span>
                                                </div>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>




                                        <div class="danh-de">
                                            <div class="clear"></div>
                                            <div name="bet_numbers_error" class="error"></div>
                                            <div class="clear"></div>
                                            <div name="bet_code_error" class="error"></div>
                                            <div class="clear"></div>
                                            <div name="loto_id_error" class="error"></div>
                                            <div class="clear"></div>
                                            <div name="amount_error" class="error"></div>
                                            <div class="clear"></div>
                                            <div name="date_error" class="error"></div>
                                            <div class="clear"></div>
                                            <div name="user_error" class="error"></div>
                                            <div class="clear"></div>
                                            <input name="max_bet_numbers" id="max_bet_numbers" value="0" type="hidden">
                                            <input name="bet_numbers" id="bet_numbers" value="" type="hidden">
                                            <input name="bet_code" id="bet_code" value="loto_2so" type="hidden">
                                            <input name="loto_id" id="loto_id" value="1" type="hidden">
                                            <input name="pay_number" id="pay_number" value="22" type="hidden">


                                            <input name="bet_rate" id="bet_rate" value="81.00" type="hidden">
                                            <input name="user" id="bet_user" value="" type="hidden">

                                            <div class="clearfix"></div>

                                            <input type="button" id="danhlo"  class="btn-danhde" value="Xác nhận">
                                        </div>
                                    </div>

                                </div>
                                <div id="loto_type_info_load" class="form_load"></div>
                            </div>

                        </div>





                        <div id="bet_type_load" class="form_load" style="display: none;">
                            <div id="loader"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div style="display:none;">
        <div class="widget" id="verify_login">
            <div class="title">
                <img src="https://lode88.us/public/admin/images/icons/dark/bubbles2.png" alt="" class="titleIcon">
                <h6>Thông báo</h6>
            </div>

            <div class="body">
                <div id="notice">Bạn cần đăng nhập để thực hiện chức năng này</div>
                <div class="textC" style="margin-top:10px;">
                    <a id="cancel" href="" class="mws-button gray" style="margin: 5px;"><img
                            src="https://lode88.us/public/admin/images/icons/dark/close.png" class="icon"><span>Hủy
                            bỏ</span></a>
                </div>
            </div>

            <div id="verify_action_load" class="form_load"></div>
        </div>
    </div>
    <div style="display:none;">
        <div class="widget" id="verify_time_bet">
            <div class="title">
                <img src="https://lode88.us/public/admin/images/icons/dark/bubbles2.png" alt="" class="titleIcon">
                <h6>Thông báo</h6>
            </div>

            <div class="body">
                <div id="notice">Chúng tôi đã khóa bảng.Quý khách vui lòng quay lại sau</div>
                <div class="textC" style="margin-top:10px;">
                    <a id="accept" href="https://lode88.us/" class="mws-button blue" style="margin: 5px;"><img
                            src="https://lode88.us/public/admin/images/icons/light/create.png" class="icon"
                            style="margin-bottom:-3px"><span>Chấp nhận</span></a>
                    <a id="cancel" href="" class="mws-button gray" style="margin: 5px;"><img
                            src="https://lode88.us/public/admin/images/icons/dark/close.png" class="icon"
                            style="margin-bottom:-3px"><span>Hủy bỏ</span></a>
                </div>
            </div>

            <div id="verify_action_load" class="form_load"></div>
        </div>
    </div>


</div>
                                                                        <?php } else{?>
                                                                            error 
                                                                        <?php } ?>