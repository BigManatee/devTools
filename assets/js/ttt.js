function column_to_delimited(inp, character) {
    var doubleQuotes = document.getElementById("doublequotes").checked;
    var result = ((doubleQuotes) ? '"' : '') + replaceAll("\n", ((doubleQuotes) ? '"' : '') + character + ((doubleQuotes) ? '"' : ''), inp).trim() + ((doubleQuotes) ? '"' : '');
    
    while (result.trim().substr(result.length - 1) === character) result = result.slice(0, -1);
    while (result.trim().charAt(0) === character) result = result.substring(1);
    return result;
}

function delimited_to_column(inp, character) {
    var result = replaceAll(character, "\n", inp).trim();
    while (result.trim().substr(result.length - 1) === "\n") result = result.slice(0, -1);
    while (result.trim().charAt(0) === "\n") result = result.substring(1);
    return result;
}

function convert(inp) {
    var delimiter = $('#delimiter').val();
    return column_to_delimited(inp, delimiter);
}

function replaceAll(find, replace, str) {
    return str.replace(new RegExp(find, 'g'), replace);
}

function GetTabs(cnt) {
    var result = '';
    for (var i = 0; i < cnt; i++) {
        result += '    ';
    }
    return result;
}

/** ---- */

$(function() {
    $('textarea, input[type="text"]').first().focus().select();
    $("#box1").keyup(function() {
        process(false);
    });
    $("#box1").on('paste', function() {
        setTimeout(function() {
            process(true);
        }, 1);
    });

    function process(txt) {
        $('#social').show();
        var input = $('#box1').val();
        if (typeof convert === 'function') {
            $('#box2').val(convert(input, txt));
        }
        var lineCount = input.split(/\r\n|\r|\n/).length;
        $('#text-stats').html('Lines: ' + lineCount);
    }

    $("#settings-cog").click(function(e){
        e.preventDefault();
        $("#settings-panel").toggle({"direction":"down"});
    });
});