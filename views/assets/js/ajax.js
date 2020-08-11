$(document).ready(() => {
    let array_number = [];
    let lenght_number = array_number.length;
    const danh_so = () => {

        $(document).on('click', '.number', function(e) {
            e.preventDefault();
            var data = $(this).attr('data')
            array_number = []

            $.ajax({
                url: `views/process/${data}.php `,
                type: 'post',
                beForeSend: () => {

                },
                success: (data) => {
                    $('#tab-container').html(data)
                    $('.tongtiendanh').attr('disabled', 'true')
                    formatnumber()

                }
            })

        })
    }

    $(document).on('click', '.tab_number', function() {
        var num = $(this).text();


        $('.tab_number').removeClass('tabactived')
        $(this).addClass('tabactived');
        num = num.split('-');
        var num1 = num[0];
        var num2 = num[1];

        $.ajax({
            url: 'views/process/num.php',
            type: 'post',
            data: { num1: num1, num2: num2 },

            beForeSend: () => {

            },
            success: (data) => {
                $('#num').html(data)
            }
        })


    })

    function in_array(needle, haystack) {
        var found = 0;
        for (var i = 0, len = haystack.length; i < len; i++) {
            if (haystack[i] == needle) return i;
            found++;
        }
        return -1;
    }
    $(document).on('click', '.so-item', function() {
        let clas = $(this).attr('class')
        let check = clas.includes('so-act')
        if (check) {
            $(this).removeClass('so-act')
            if (array_number.length > 0) {
                // array_number =  array_number.pop();
                let number_str = $('#sodanh').text()
                array_number = array_number.split('-')

                array_number.splice(array_number.indexOf($(this).text()), 1);
                array_number = array_number.join('-')

            } else {

                $('#tongtiendanh').val('')




            }

        } else {
            $(this).addClass('so-act');
            var number = $(this).text();
            if (array_number.length > 0) {
                array_number = array_number.split('-')

            } else {
                array_number = []
            }


            array_number.push(number);

            array_number = array_number.join('-')
        }
        $('#sodanh').text(array_number);




    })
    var url = window.location.href;
    if (url.includes('danh-so')) {
        danh_so()
    }
    $('#dang-ky').submit((e) => {
        e.preventDefault()
        let flag = true;
        let user = $('#user')
        let pass = $('#pass')
        let rp_pass = $('#rp_pass')
        let phone = $('#phone')
        if (user.val().trim() == "") {
            user.css('border', '2px solid red')
            flag = false

        } else {
            user.css('border', '1px solid #000')

        }
        if (pass.val().trim() == "") {
            pass.css('border', '2px solid red')
            flag = false

        } else {
            pass.css('border', '1px solid #000')

        }
        if (rp_pass.val().trim() == "") {
            rp_pass.css('border', '2px solid red')
            flag = false

        } else {
            rp_pass.css('border', '1px solid #000')

        }
        if (pass.val().trim() !== rp_pass.val().trim()) {
            pass.css('border', '2px solid red')
            rp_pass.css('border', '2px solid red')
            alert('mật khẩu không trùng nhau')
            flag = false


        }
        if (phone.val().trim().length < 10) {
            phone.css('border', '2px solid red')
            flag = false

        } else {
            phone.css('border', '1px solid #000')

        }
        if (flag) {
            $.ajax({
                url: 'model/ajax/dangki.php',
                type: 'post',
                data: { user: user.val().trim(), pass: pass.val().trim(), rp_pass: rp_pass.val().trim(), phone: phone.val().trim() },
                dataType: 'json',
                beForeSend: () => {
                    // $('#load').html(`<button type="button" class="btn btn-primary" data-loading-text="Loading...">Loading state</button>`)
                },
                success: (res) => {
                    if (res.status == 0) {
                        swall(res.messages, 'success')
                        $('.b-modal').css('display', 'none')
                        $('.dialog').css('display', 'none')
                        $('#dangky').css('display', 'none');

                        setTimeout(() => {
                            window.location.reload()

                        }, 2000)
                    } else if (res.status == 1) {
                        swall(res.messages, 'error')
                        $('.b-modal').css('display', 'none')
                        $('.dialog').css('display', 'none')
                        $('#dangky').css('display', 'none');

                    }
                }
            })
        }
    })
    $('#dang-nhap').submit((e) => {
        e.preventDefault();
        let user_login = $('#user_login')
        let pass_login = $('#pass_login')
        if (user_login.val().trim() == "") {
            swall('Tên đăng nhập không được bỏ trống', 'error')
        } else if (pass_login.val().trim() == "") {
            swall('Mật khẩu không được bỏ trống', 'error')
        } else {
            $.ajax({
                url: 'model/ajax/dangnhap.php',
                type: 'post',
                data: { user: user_login.val(), pass: pass_login.val() },
                dataType: 'json',
                beForeSend: () => {

                },
                success: (res) => {
                    if (res.status == 0) {
                        swall('Đăng nhập thành công , vui lòng đợi trong vài giây', 'susscess')
                        setTimeout(() => {
                            window.location.reload()

                        }, 2000)
                    } else if (res.status == 1) {
                        swall(res.messages, 'error')
                    }
                }
            })
        }
    })
    $('#logout').click((e) => {
        e.preventDefault()
        $.ajax({
            url: 'model/ajax/dangxuat.php',
            dataType: 'json',
            beForeSend: () => {

            },
            success: (res) => {
                if (res.status == 0) {
                    swall(res.messages, 'success')
                    setTimeout(() => {
                        window.location.reload()
                    }, 2000)
                } else if (res.status == 1) {
                    swall(res.messages, 'error')
                }
            }
        })
    })
    $(document).on('click', '.btn-danhde', function() {

        })
        // $(document).on('keyup', '.tienmotcon', function() {
        //     // alert(array_number.length);
        //     var number = $('#sodanh').text()
        //     if (number.length >= 2) {
        //         let check = number.split('-')
        //         if (check.length > 0) {
        //             // alert(check.length);
        //             var tien = $('.tienmotcon').val()
        //             tien = parseInt(tien)
        //             var tong = tien * 1000 * check.length;
        //             if (isNaN(tong)) {
        //                 tong = 0;
        //             }
        //             $('#tongtiendanh').val(tong)


    //         }
    //     } else {
    //         alert('bạn chưa chọn số')
    //     }

    // })

    $(document).on('click', '.so-lo', function() {

        let giatri = 23;
        let check = $(this).attr('class')
        let tong = 0;
        let tien = $('.tien-lo').val()
        tien = parseInt(tien)
        if (check.includes('so-act')) {

            if ($('.tien-lo').val().length > 0) {
                array_number = array_number.split('-')

                tong = array_number.length * tien * giatri
                array_number = array_number.join('-')
                $('#tongtiendanh').val(tong)

            }

        } else {
            array_number = array_number.split('-')
            tong = array_number.length * tien * giatri
            array_number = array_number.join('-')
            $('#tongtiendanh').val(tong)
            if (array_number <= 0) {
                $('#tongtiendanh').val('')

            }


        }
        if (isNaN(tong)) {
            tong = 0
        }


    })
    let tong = 0;
    $(document).on('keyup', '.tien-lo', function() {
        let giatri = 23;
        let tien = $(this).val()
        tien = parseInt(tien)

        if (array_number.length > 0) {
            array_number = array_number.split('-')

            tong = array_number.length * tien * giatri
            array_number = array_number.join('-')
            if (isNaN(tong)) {
                tong = 0;
            }
            $('#tongtiendanh').val(tong)

        } else {

            $(this).val('')
            alert('bạn chưa chọn số')
        }
        if (isNaN(tien)) {
            $(this).val('')
        }
    })
    $(document).on('click', '.btn-danhde', function() {
        let sodanh = $('#sodanh').text()
        let tiendanh = $('.tienmotcon').val()
        let loaide = $('#loaidedanh').text()
        let tongtiendanh = $('.tongtiendanh').val()
        if (sodanh == "" || tiendanh == "") {
            alert('moi nhap tien')
        } else {

            $.ajax({
                url: 'model/ajax/danhso.php',
                type: 'post',
                data: { sodanh: sodanh, tiendanh: tiendanh, loaide: loaide, tong: tongtiendanh },
                dataType: 'json',
                beForeSend: () => {

                },
                success: (data) => {
                    if (data.status == 0) {
                        swall(data.messages, 'succuces')
                        setTimeout(() => {
                            window.location.reload()
                        }, 2000)
                    } else if (data.status == 1) {
                        swall(data.messages, 'error')
                    }
                }
            })
        }
    })
    $(document).on('click', '.so-ba-cang', function() {
        let giatri = 1;
        let check = $(this).attr('class')
        let tong = 0;
        let tien = $('.tienmotcon-ba-cang').val()
        tien = parseInt(tien)
        if (check.includes('so-act')) {

            if ($('#tienmotcon-ba-cang').val().length > 0) {
                array_number = array_number.split('-')

                tong = array_number.length * tien * giatri
                array_number = array_number.join('-')
                $('#tongtiendanh-bacang').val(tong)

            }

        } else {
            array_number = array_number.split('-')
            tong = array_number.length * tien * giatri
            array_number = array_number.join('-')
            $('#tongtiendanh-bacang').val(tong)
            if (array_number <= 0) {
                $('#tongtiendanh-bacang').val('')

            }


        }
        if (isNaN(tong)) {
            tong = 0
        }

    })
    $(document).on('keyup', '#tienmotcon-ba-cang', function() {
        let giatri = 1;
        let tien = $(this).val()
        tien = parseInt(tien)

        if (array_number.length > 0) {
            array_number = array_number.split('-')

            tong = array_number.length * tien * giatri
            array_number = array_number.join('-')
            if (isNaN(tong)) {
                tong = 0;
            }
            $('#tongtiendanh-bacang').val(tong)

        } else {

            $(this).val('')
            alert('bạn chưa chọn số')
        }
        if (isNaN(tien)) {
            $(this).val('')
        }
    })
    $(document).on('keyup', '#tienmotcon-danhde', function() {
        let giatri = 1;
        let tien = $(this).val()
        tien = parseInt(tien)

        if (array_number.length > 0) {
            array_number = array_number.split('-')

            tong = array_number.length * tien * giatri
            array_number = array_number.join('-')
            if (isNaN(tong)) {
                tong = 0;
            }
            $('#tongtiendanh-danhde').val(tong)

        } else {

            $(this).val('')
            alert('bạn chưa chọn số')
        }
        if (isNaN(tien)) {
            $(this).val('')
        }
    })
    $(document).on('click', '.so-de', function() {
        let giatri = 1;
        let check = $(this).attr('class')
        let tong = 0;
        let tien = $('#tienmotcon-danhde').val()
        tien = parseInt(tien)
        if (check.includes('so-act')) {

            if ($('#tienmotcon-danhde').val().length > 0) {
                array_number = array_number.split('-')

                tong = array_number.length * tien * giatri
                array_number = array_number.join('-')
                $('#tongtiendanh-danhde').val(tong)

            }

        } else {
            array_number = array_number.split('-')
            tong = array_number.length * tien * giatri
            array_number = array_number.join('-')
            $('#tongtiendanh-danhde').val(tong)
            if (array_number <= 0) {
                $('#tongtiendanh-danhde').val('')

            }


        }
        if (isNaN(tong)) {
            tong = 0
        }

    })
    $(document).on('click', '.so-dau-duoi', function() {
        let giatri = 10;
        let check = $(this).attr('class')
        let tong = 0;
        let tien = $('.tien-dau-duoi').val()
        tien = parseInt(tien)
        if (check.includes('so-act')) {

            if ($('.tien-dau-duoi').val().length > 0) {
                array_number = array_number.split('-')

                tong = array_number.length * tien * giatri
                array_number = array_number.join('-')
                $('#tongtiendanh-dauduoi').val(tong)

            }

        } else {
            array_number = array_number.split('-')
            tong = array_number.length * tien * giatri
            array_number = array_number.join('-')
            $('#tongtiendanh-dauduoi').val(tong)
            if (array_number <= 0) {
                $('#tongtiendanh-dauduoi').val('')

            }


        }
        if (isNaN(tong)) {
            tong = 0
        }

    })
    $(document).on('keyup', '.tien-dau-duoi', function() {
        let giatri = 1;
        let tien = $(this).val()
        tien = parseInt(tien)

        if (array_number.length > 0) {
            array_number = array_number.split('-')

            tong = array_number.length * tien * giatri
            array_number = array_number.join('-')
            if (isNaN(tong)) {
                tong = 0;
            }
            $('#tongtiendanh-dauduoi').val(tong)

        } else {

            $(this).val('')
            alert('bạn chưa chọn số')
        }
        if (isNaN(tien)) {
            $(this).val('')
        }
    })

    $('#send').click(() => {

        let text = $('.input-message').val()
        $('.input-message').val("")
        if (text.trim() == "") {
            alert('tin nhắn trống');
        } else {

            $.ajax({
                url: 'model/ajax/chat.php',
                type: 'post',
                data: { text: text },
                dataType: 'json',
                beForeSend: () => {

                },
                success: (data) => {
                    if (data.status = 0) {

                    } else {

                    }
                }
            })
        }
    })

    function load_chat() {

        var oldscrollHeight = $("#scrollmain").prop("scrollHeight") - 20;
        // Pusher.logToConsole = true;

        var pusher = new Pusher('7def0a3587a3a2ece425', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function() {

            $.ajax({
                url: './views/html/user-chat.php',
                method: 'post',

                cache: false,
                success: function(data) {
                    $('#chat').html(data)
                    var newscrollHeight = $("#scrollmain").prop("scrollHeight") - 20;

                    if (newscrollHeight > oldscrollHeight) {
                        $("#scrollmain").animate({ scrollTop: newscrollHeight }, 'normal');
                    }
                    if (data == "") {
                        $('#chat').html(`<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        Loading...`)

                    }
                }
            })

        });


    }
    load_chat()
})