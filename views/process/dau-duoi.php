<div id="bet_type_content-tab4">
    <div id="tabBetType" class="bhead">
        <div style="width: auto;" data-multi="1" data-loto_id="6" data-code="dauduoi_dau" class="kd1 act">
            Đầu </div>
        <div style="width: auto;" data-multi="1" data-loto_id="7" data-code="dauduoi_duoi" class="kd1 ">
            Đuôi </div>

        <div class="clearfix"></div>
    </div>

    <div style="position:relative;min-height:300px">
        <div id="loto_type_info" data-code="dauduoi_dau">


            <div id="tabBetTypeDetail" style="margin-top: 20px;">
                <table style="width: 100%; height: 100%;">
                    <tbody>
                        <tr>
                            <td style="padding-left: 15px;">
                                <table cellpadding="5px">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="tabactived">0-9</span>
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
                                                <?php for($number = 0; $number < 10; $number++){ ?>

                                                <span class="so">
                                                    <span class="so-item so-dau-duoi"><?php echo "0".$number; ?></span>
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
                    Đánh 1 chữ số ở hàng chục của giải ĐB. Thắng gấp 9.5 lần. Ví dụ: đánh 1k cho
                    số 7. Tổng thanh toán: 1K. Nếu giải ĐB là xxx7x thì Tiền thắng: 1k x 9.5 =
                    9.5k </div>

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
                    <div class="ngay" id="loaidedanh">Đánh Đầu</div>
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
                        <div class="tien act ">Tổng tiền đánh (K)</div>
                        <input type="text" name="amount" placeholder="0" onkeyup="FormatNumber(this)"
                            class="format_currency tongtiendanh " id="tongtiendanh-dauduoi">
                    </div>

                    <div class="fl" style="margin-left: 10px;">
                        <div class="tien act">
                            Số tiền trên 1 con (K)
                        </div>
                        <input type="text" id="tienmotcon" class="tienmotcon tien-dau-duoi" placeholder="0">
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
                    <input name="max_bet_numbers" id="max_bet_numbers" value="0" type="hidden">
                    <input name="bet_numbers" id="bet_numbers" value="" type="hidden">
                    <input name="bet_code" id="bet_code" value="dauduoi_dau" type="hidden">
                    <input name="loto_id" id="loto_id" value="6" type="hidden">
                    <input name="pay_number" id="pay_number" value="1" type="hidden">


                    <input name="bet_rate" id="bet_rate" value="9.50" type="hidden">
                    <input name="user" id="bet_user" value="" type="hidden">

                    <div class="clearfix"></div>

                    <input type="submit" class="btn-danhde" value="Xác nhận">
                </div>
            </div>

        </div>
        <div id="loto_type_info_load" class="form_load"></div>
    </div>

</div>