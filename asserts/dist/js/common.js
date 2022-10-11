function convertDatetime(input, fullDateTime, ampm, format) {
    if (format == null || format == "") {
        format = 'dmy';
    }
    if (input == null || input == "")
        return "";
    var time = "";
    var value = new Date(parseInt(input.replace(/(^.*\()|([+-].*$)/g, '')));
    var day = value.getDate() > 9 ? value.getDate() : "0" + value.getDate();
    var month = (value.getMonth() + 1) > 9 ? (value.getMonth() + 1) : "0" + (value.getMonth() + 1);
    var year = value.getFullYear();

    var gio = value.getHours();
    if (ampm) {
        var time = gio >= 12 ? 'PM' : 'AM';
        gio = gio % 12;
        gio = gio ? gio : 12;
    }
    var hour = gio > 9 ? gio : "0" + gio;
    var minute = value.getMinutes() > 9 ? value.getMinutes() : "0" + value.getMinutes();
    var second = value.getSeconds() > 9 ? value.getSeconds() : "0" + value.getSeconds();

    var result = "";
    if (format == "dmy") {
        result = day + "/" + month + "/" + year;
    } else if (format == "mdy") {
        result = month + "/" + day + "/" + year;
    } else {
        result = year + "/" + month + "/" + day;
    }



    if (fullDateTime) {
        if (ampm)
            return result + " " + hour + ":" + minute + ":" + second + " " + time;
        return result + " " + hour + ":" + minute + ":" + second;
    }
    return result;
}

function formatThousands(n, dp) {
    var s = '' + (Math.floor(n)),
        d = n % 1,
        i = s.length,
        r = '';
    while ((i -= 3) > 0) { r = ',' + s.substr(i, 3) + r; }
    return s.substr(0, i + 3) + r + (d ? '.' + Math.round(d * Math.pow(10, dp || 2)) : '');
}

function contains(a, obj) {
    var i = a.length;
    while (i--) {
        if (a[i] === obj) {
            return true;
        }
    }
    return false;
}

function fn_DateCompare(DateA, DateB) { // this function is good for dates > 01/01/1970

    var a = new Date(DateA);
    var b = new Date(DateB);

    var msDateA = Date.UTC(a.getFullYear(), a.getMonth() + 1, a.getDate());
    var msDateB = Date.UTC(b.getFullYear(), b.getMonth() + 1, b.getDate());

    if (parseFloat(msDateA) < parseFloat(msDateB))
        return -1; // lt
    else if (parseFloat(msDateA) == parseFloat(msDateB))
        return 0; // eq
    else if (parseFloat(msDateA) > parseFloat(msDateB))
        return 1; // gt
    else
        return null; // error
}

// Chuyển chuỗi kí tự (string) sang đối tượng Date()
function parseDate(str) {
    var mdy = str.split('/');
    return new Date(mdy[2], mdy[1], mdy[0]);
}

// Định dạng tiền tệ
function formatNumber(nStr, decSeperate, groupSeperate) {
    nStr += '';
    x = nStr.split(decSeperate);
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + groupSeperate + '$2');
    }
    return x1 + x2;
}

// Chuyển số thành chư
var convertCharacterNumber = function() {
    var t = ["không", "một", "hai", "ba", "bốn", "năm", "sáu", "bảy", "tám", "chín"],
        r = function(r, n) {
            var o = "",
                a = Math.floor(r / 10),
                e = r % 10;
            return a > 1 ? (o = " " + t[a] + " mươi", 1 == e && (o += " mốt")) : 1 == a ? (o = " mười", 1 == e && (o += " một")) : n && e > 0 && (o = " lẻ"), 5 == e && a >= 1 ? o += " lăm" : 4 == e && a >= 1 ? o += " bốn" : (e > 1 || 1 == e && 0 == a) && (o += " " + t[e]), o
        },
        n = function(n, o) {
            var a = "",
                e = Math.floor(n / 100),
                n = n % 100;
            return o || e > 0 ? (a = " " + t[e] + " trăm", a += r(n, !0)) : a = r(n, !1), a
        },
        o = function(t, r) {
            var o = "",
                a = Math.floor(t / 1e6),
                t = t % 1e6;
            a > 0 && (o = n(a, r) + " triệu", r = !0);
            var e = Math.floor(t / 1e3),
                t = t % 1e3;
            return e > 0 && (o += n(e, r) + " nghìn", r = !0), t > 0 && (o += n(t, r)), o
        };
    return {
        doc: function(r) {
            if (0 == r) return t[0];
            var n = "",
                a = "";
            do ty = r % 1e9, r = Math.floor(r / 1e9), n = r > 0 ? o(ty, !0) + a + n : o(ty, !1) + a + n, a = " tỷ"; while (r > 0);
            return n.trim()
        }
    }
}();

function getddmmyyyynow() {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0!
    var yyyy = today.getFullYear();

    if (dd < 10) {
        dd = '0' + dd
    }

    if (mm < 10) {
        mm = '0' + mm
    }

    today = mm + '/' + dd + '/' + yyyy;
    return today
}

function ShowLoading() {
    $('.loadingBL').show();
    $('html').css('overflow', 'hidden');
}

function HideLoading() {
    $('.loadingBL').hide();
    $('html').css('overflow', 'inherit');
}

function DownloadBLPdf(url, name) {
    var urllink = "data:application/pdf;base64," + url;
    //console.log(urllink);
    var link = document.createElement('a');
    link.href = urllink;
    link.download = "BienLaiDienTu_" + name + ".pdf";
    link.click();
}

function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
        val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
    }
    return val;
}