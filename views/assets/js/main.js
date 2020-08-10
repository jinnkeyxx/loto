document.write("<script type='text/javascript' language='javascript'>MainContentW = 980;LeftBannerW = 170;RightBannerW = 170;LeftAdjust = 5;RightAdjust = 5;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");

function FloatTopDiv() {
    startLX = ((document.body.clientWidth - MainContentW) / 2) - LeftBannerW - LeftAdjust, startLY = TopAdjust + 80;
    startRX = ((document.body.clientWidth - MainContentW) / 2) + MainContentW + RightAdjust, startRY = TopAdjust + 80;
    var d = document;

    function ml(id) {
        var el = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
        el.sP = function(x, y) {
            this.style.left = x + 'px';
            this.style.top = y + 'px';
        };
        el.x = startRX;
        el.y = startRY;
        return el;
    }

    function m2(id) {
        var e2 = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
        e2.sP = function(x, y) {
            this.style.left = x + 'px';
            this.style.top = y + 'px';
        };
        e2.x = startLX;
        e2.y = startLY;
        return e2;
    }
    window.stayTopLeft = function() {
        if (document.documentElement && document.documentElement.scrollTop)
            var pY = document.documentElement;
        else if (document.body)
            var pY = document.body;
        if (document.body.scrollTop > 30) {
            startLY = 3;
            startRY = 3;
        } else {
            startLY = TopAdjust;
            startRY = TopAdjust;
        };
        ftlObj.y += (pY + startRY - ftlObj.y) / 16;
        ftlObj.sP(ftlObj.x, ftlObj.y);
        ftlObj2.y += (pY + startLY - ftlObj2.y) / 16;
        ftlObj2.sP(ftlObj2.x, ftlObj2.y);
        setTimeout("stayTopLeft()", 1);
    }
    ftlObj = ml("divAdRight");
    //stayTopLeft();
    ftlObj2 = m2("divAdLeft");
    stayTopLeft();
}

function ShowAdDiv() {
    var objAdDivRight = document.getElementById("divAdRight");
    var objAdDivLeft = document.getElementById("divAdLeft");
    if (document.body.clientWidth < 1000) {
        objAdDivRight.style.display = "none";
        objAdDivLeft.style.display = "none";
    } else {
        objAdDivRight.style.display = "block";
        objAdDivLeft.style.display = "block";
        FloatTopDiv();
    }
}

$('#reg').click(() => {
    $('.b-modal').css('display', 'block');
    $('#dangky').css('display', 'block');
    $('.dialog').css('display', 'block')

})
$('.close').click(() => {
    $('.b-modal').css('display', 'none');
    $('#dangky').css('display', 'none');
    $('.dialog').css('display', 'none')

})


function swall(text, icon) {
    Swal.fire(
        'Thông báo!',
        text,
        icon
    )
}
const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
})
Toast.fire({
    icon: 'success',
    title: 'Signed in successfully'
})

function formatnumber(id) {
    var input = document.getElementById(id);
    var currentValue;

    input.addEventListener('input', function(event) {
        var cursorPosition = getCaretPosition(input);
        var valueBefore = input.value;
        var lengthBefore = input.value.length;
        var specialCharsBefore = getSpecialCharsOnSides(input.value);
        var number = removeThousandSeparators(input.value);

        if (input.value == '') {
            return;
        }

        input.value = formatNumber(number.replace(getCommaSeparator(), '.'));

        // if deleting the comma, delete it correctly
        if (currentValue == input.value && currentValue == valueBefore.substr(0, cursorPosition) + getThousandSeparator() + valueBefore.substr(cursorPosition)) {
            input.value = formatNumber(removeThousandSeparators(valueBefore.substr(0, cursorPosition - 1) + valueBefore.substr(cursorPosition)));
            cursorPosition--;
        }

        // if entering comma for separation, leave it in there (as well support .000)
        var commaSeparator = getCommaSeparator();
        if (valueBefore.endsWith(commaSeparator) || valueBefore.endsWith(commaSeparator + '0') || valueBefore.endsWith(commaSeparator + '00') || valueBefore.endsWith(commaSeparator + '000')) {
            input.value = input.value + valueBefore.substring(valueBefore.indexOf(commaSeparator));
        }

        // move cursor correctly if thousand separator got added or removed
        var specialCharsAfter = getSpecialCharsOnSides(input.value);
        if (specialCharsBefore[0] < specialCharsAfter[0]) {
            cursorPosition += specialCharsAfter[0] - specialCharsBefore[0];
        } else if (specialCharsBefore[0] > specialCharsAfter[0]) {
            cursorPosition -= specialCharsBefore[0] - specialCharsAfter[0];
        }
        setCaretPosition(input, cursorPosition);

        currentValue = input.value;
    });
}

function getSpecialCharsOnSides(x, cursorPosition) {
    var specialCharsLeft = x.substring(0, cursorPosition).replace(/[0-9]/g, '').length;
    var specialCharsRight = x.substring(cursorPosition).replace(/[0-9]/g, '').length;
    return [specialCharsLeft, specialCharsRight]
}

function formatNumber(x) {
    return getNumberFormat().format(x);
}

function removeThousandSeparators(x) {
    return x.toString().replace(new RegExp(escapeRegExp(getThousandSeparator()), 'g'), "");
}

function getThousandSeparator() {
    return getNumberFormat().format('1000').replace(/[0-9]/g, '')[0];
}

function getCommaSeparator() {
    return getNumberFormat().format('0.01').replace(/[0-9]/g, '')[0];
}

function getNumberFormat() {
    return new Intl.NumberFormat();
}

/* From: http://stackoverflow.com/a/6969486/496992 */
function escapeRegExp(str) {
    return str.replace(/[\-\[\]\/\{\}\(\)\*\+\?\.\\\^\$\|]/g, "\\$&");
}

/*
 ** Returns the caret (cursor) position of the specified text field.
 ** Return value range is 0-oField.value.length.
 ** From: http://stackoverflow.com/a/2897229/496992
 */
function getCaretPosition(oField) {
    // Initialize
    var iCaretPos = 0;

    // IE Support
    if (document.selection) {

        // Set focus on the element
        oField.focus();

        // To get cursor position, get empty selection range
        var oSel = document.selection.createRange();

        // Move selection start to 0 position
        oSel.moveStart('character', -oField.value.length);

        // The caret position is selection length
        iCaretPos = oSel.text.length;
    }

    // Firefox support
    else if (oField.selectionStart || oField.selectionStart == '0')
        iCaretPos = oField.selectionStart;

    // Return results
    return iCaretPos;
}

/* From: http://stackoverflow.com/a/512542/496992 */
function setCaretPosition(elem, caretPos) {
    if (elem != null) {
        if (elem.createTextRange) {
            var range = elem.createTextRange();
            range.move('character', caretPos);
            range.select();
        } else {
            if (elem.selectionStart) {
                elem.focus();
                elem.setSelectionRange(caretPos, caretPos);
            } else
                elem.focus();
        }
    }
}
$('.tongtiendanh').attr('disabled', 'true')
formatnumber('tienmotcon')
    // formatnumber('tienmotcon-ba-cang')ng'
$(document).on('click', '.kd1', function() {
    $('.kd1').removeClass('act')

    $(this).addClass('act')
    let data = $(this).text()
    data = data.trim()
    $('#loaidedanh').text(data)
    alert(data)
})