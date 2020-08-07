<div id="bet_type_content-tab5">
    <div id="tabBetType" class="bhead">
        <div style="width: auto;" data-multi="0" data-loto_id="3" data-code="loxien_2so" class="kd1 act">
            Xiên 2 </div>
        <div style="width: auto;" data-multi="0" data-loto_id="4" data-code="loxien_3so" class="kd1 ">
            Xiên 3 </div>
        <div style="width: auto;" data-multi="0" data-loto_id="5" data-code="loxien_4so" class="kd1 ">
            Xiên 4 </div>

        <div class="clearfix"></div>
    </div>

    <div style="position:relative;min-height:300px">
        <div id="loto_type_info" data-code="loxien_2so">


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
                                                <?php for($number = 0; $number < 100; $number++){ ?>

                                                <span class="so">
                                                    <span
                                                        class="so-item"><?php if($number < 10){echo "0".$number;}else {echo $number;} ?></span>
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
                    Xiên 2 của 2 chữ số cuối trong lô 27 giải. Thắng gấp 17 lần. Ví dụ : đánh 1k
                    cho xiên 11+13, Tổng thanh toán: 1k. Nếu trong lô có "2 chữ số cuối là 11 và
                    2 chữ số cuối là 13" thì Tiền thắng: 1k x 17 = 17k </div>

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
                    <div class="ngay" id="loaidedanh">Đánh Xiên 2</div>
                    <div class="clearfix"></div>
                </div>
                <div class="fr">
                    <div class="ngay act">Số đánh</div>
                    <div class="ngay" id="sodanh" style="height: auto; min-height: 40px;">34 -
                        35</div>
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
                            <span class="format_currency tienthang1con " id="tienthang1con">0
                                K</span>
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
                    <input name="max_bet_numbers" id="max_bet_numbers" value="2" type="hidden">
                    <input name="bet_numbers" id="bet_numbers" value="34 - 35" type="hidden">
                    <input name="bet_code" id="bet_code" value="loxien_2so" type="hidden">
                    <input name="loto_id" id="loto_id" value="3" type="hidden">
                    <input name="pay_number" id="pay_number" value="1" type="hidden">


                    <input name="bet_rate" id="bet_rate" value="17.00" type="hidden">
                    <input name="user" id="bet_user" value="" type="hidden">

                    <div class="clearfix"></div>

                    <input type="submit" class="btn-danhde" value="Xác nhận">
                </div>
            </div>

        </div>
        <div id="loto_type_info_load" class="form_load"></div>
    </div>

</div>