<div id="bet_type_content-tab1">
    <div id="tabBetType" class="bhead">
        <div style="width: auto;" data-multi="1" data-loto_id="1" data-code="loto_2so" class="kd1 act">
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
                                                        class="so-item"><?php if($number < 10){echo "0".$number;} else {echo $number;} ?></span>
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
                    <div class="ngay" id="ngaydanh">06-08-2020</div>
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
                            class="format_currency tongtiendanh" id="tongtiendanh">
                    </div>

                    <div class="fl" style="margin-left: 10px;">
                        <div class="tien act">
                            Số tiền trên 1 con (K)
                        </div>
                        <input type="text" id="tienmotcon" class="tienmotcon" placeholder="0">
                    </div>
                    <div class="fr">
                        <div style="width: 173px;" class="tien act">Tiền thắng/1 con (K)</div>
                        <div class="tien input-width">
                            <span class="format_currency tienthang1con " id="tienthang1con">0</span>
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

                    <input type="submit" class="btn-danhde" value="Xác nhận">
                </div>
            </div>

        </div>
        <div id="loto_type_info_load" class="form_load"></div>
    </div>

</div>