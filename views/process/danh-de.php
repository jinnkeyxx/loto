<div id="bet_type_content-tab3">
    <div id="tabBetType" class="bhead">
        <div style="width: auto;" data-multi="1" data-loto_id="8" data-code="de_dau" class="kd1 act">
            Đề đầu </div>
        <div style="width: auto;" data-multi="1" data-loto_id="9" data-code="de_dacbiet" class="kd1 ">
            Đề đặc biệt </div>
        <div class="clearfix"></div>
    </div>
    <div style="position:relative;min-height:300px">
        <div id="loto_type_info" data-code="de_dau">
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
                                                <?php for($number = 0; $number <100; $number++){ ?>

                                                <span class="so">
                                                    <span
                                                        class="so-item"><?php if($number < 10){echo "0".$number;} else {echo $number;} ?></span>
                                                </span>

                                                <?php } ?>
                                            </td>
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
                    Đánh lô giải 7 ( có 4 giải, thanh toán đủ ). Thắng gấp 95 lần. Ví dụ : đánh
                    1k cho số 79, Tổng thanh toán: 1k x 4 =4k. Nếu trong lô giải 7 có 1 số 79
                    thì Tiền thắng: 1k x 95 = 95k. </div>

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
                    <div class="ngay" id="loaidedanh">Đánh Đề đầu</div>
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
                        <input type="text" name="amount" placeholder="0" onkeyup="FormatNumber(this)"
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
                    <input name="bet_code" id="bet_code" value="de_dau" type="hidden">
                    <input name="loto_id" id="loto_id" value="8" type="hidden">
                    <input name="pay_number" id="pay_number" value="4" type="hidden">
                    <input name="bet_rate" id="bet_rate" value="95.00" type="hidden">
                    <input name="user" id="bet_user" value="" type="hidden">

                    <div class="clearfix"></div>
                    <input type="button" class="btn-danhde" value="Xác nhận">
                </div>
            </div>

        </div>
        <div id="loto_type_info_load" class="form_load"></div>
    </div>

</div>