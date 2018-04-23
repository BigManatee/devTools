document.documentElement.className = "js", $(document).ready(function() {
    function e(e, n) {
        clearTimeout(p), $(".messages .message").length > 0 ? $(".messages .message").stop().fadeOut(400, function() {
            $(this).remove(), t(e, n)
        }) : t(e, n)
    }
    function t(e, t) {
        $(".messages").append('<div class="message ' + t + '">' + e + "</div>").hide().fadeIn(400), p = setTimeout(function() {
            $(".messages .message").fadeOut(400, function() {
                $(this).remove()
            })
        }, 3e3)
    }
    function o(e) {
        e = e.toLowerCase();
        for (var t = !0, n = "", o = 0; o < e.length; o++) {
            var r = e.charAt(o);
            /\.|\!|\?|\n|\r/.test(r) ? t = !0 : "" != $.trim(r) && 1 == t && (r = r.toUpperCase(), t = !1), n += r
        }
        return "/" == window.location.pathname && (n = n.replace(/\bi\b/g, "I")), n = a(n)
    }
    function r(e) {
        e = e.toLowerCase();
        for (var t = "", n = 0; n < e.length; n++) {
            var o = e.charAt(n);
            t += n % 2 ? o.toUpperCase() : o
        }
        return t
    }
    function i(e) {
        return c = e.toLowerCase(), c = (c + "").replace(/^(\S)|\s+(\S)/g, function(e) {
            return e.toUpperCase()
        }), c = a(c), c = c.replace(/\(([A-Za-z])/g, function(e) {
            return e.toUpperCase()
        }), c
    }
    function a(e) {
        return e = e.replace(/\"([A-Za-z])/g, function(e) {
            return e.toUpperCase()
        })
    }
    function r(e) {
        e = e.toLowerCase();
        for (var t = "", n = 0; n < e.length; n++) {
            var o = e.charAt(n);
            t += n % 2 ? o.toUpperCase() : o
        }
        return t
    }
    function l(e) {
        for (var t = "", n = 0; n < e.length; n++) {
            var o = e.charAt(n);
            t += o == o.toUpperCase() ? o.toLowerCase() : o.toUpperCase()
        }
        return t
    }
    function s(e) {
        return e = i(e), e = e.replace(/\b(A|An|And|As|At|But|By|En|For|If|In|Of|On|Or|The|To|Vs?\\.?|Via)\b/g, function(e) {
            return e.toLowerCase()
        }), e = e.replace(/(?:([\.\?!] |\n|^))(a|an|and|as|at|but|by|en|for|if|in|of|on|or|the|to|vs?\\.?|via)/g, function(e) {
            return i(e)
        })
    }
    function u() {
        window.location.search.indexOf("hyphenate=true") > -1 && ($("#content").val($("#content").val().replace(/ /g, "-")), $("#content").attr("placeholder", $("#content").attr("placeholder").replace(/ /g, ""))), window.location.search.indexOf("stripdashes=true") > -1 && ($("#content").val($("#content").val().replace(/-/g, " ")), $("#content").attr("placeholder", $("#content").attr("placeholder").replace(/-/g, " "))), window.location.search.indexOf("stripspaces=true") > -1 && ($("#content").val($("#content").val().replace(/ /g, "")), $("#content").attr("placeholder", $("#content").attr("placeholder").replace(/ /g, "")))
    }
    function f() {
        //
    }
    function d(e, t, n, o) {
        var r = new Date;
        r.setTime(r.getTime() + 24 * n * 60 * 60 * 1e3);
        var i = "expires=" + r.toUTCString();
        document.cookie = e + "=" + t + ";" + i + ";path=" + o
    }
    var p, h = Date.now();
    if (1 == $("#content").length) {
        $("#content").focus(), $("#upper").click(function() {
            return $("#content").val($("#content").val().toUpperCase()).focus(), $("#content").attr("placeholder", $("#content").attr("placeholder").toUpperCase()), u(), "function" == typeof ga && ga("send", "event", "Convert", "Upper", ""), !1
        }), $("#lower").click(function() {
            return $("#content").val($("#content").val().toLowerCase()).focus(), $("#content").attr("placeholder", $("#content").attr("placeholder").toLowerCase()), u(), "function" == typeof ga && ga("send", "event", "Convert", "Lower", ""), !1
        }), $("#capitalized").click(function() {
            return $("#content").val(i($("#content").val().toLowerCase())).focus(), $("#content").attr("placeholder", i($("#content").attr("placeholder"))), u(), "function" == typeof ga && ga("send", "event", "Convert", "Capitalized", ""), !1
        }), $("#sentence").click(function() {
            return $("#content").val(o($("#content").val())).focus(), $("#content").attr("placeholder", o($("#content").attr("placeholder"))), u(), "function" == typeof ga && ga("send", "event", "Convert", "Sentence", ""), !1
        }), $("#alternating").click(function() {
            return $("#content").val(r($("#content").val())).focus(), $("#content").attr("placeholder", r($("#content").attr("placeholder"))), u(), "function" == typeof ga && ga("send", "event", "Convert", "Alternating", ""), !1
        }), $("#inverse").click(function() {
            return $("#content").val(l($("#content").val())).focus(), $("#content").attr("placeholder", l($("#content").attr("placeholder"))), u(), "function" == typeof ga && ga("send", "event", "Convert", "Inverse", ""), !1
        }), $("#title").click(function() {
            return $("#content").val(s($("#content").val())).focus(), $("#content").attr("placeholder", s($("#content").attr("placeholder"))), u(), "function" == typeof ga && ga("send", "event", "Convert", "Title", ""), !1
        });
        $("#content").on("focus blue keyup", function() {
            f()
        }), f();
    }
});