$("[data-toggle=\"tooltip\"]").tooltip();

function getByteLen(normal_val) {
    // Force string type
    normal_val = String(normal_val);

    var byteLen = 0;
    for (var i = 0; i < normal_val.length; i++) {
        var c = normal_val.charCodeAt(i);
        byteLen += c < (1 <<  7) ? 1 :
                   c < (1 << 11) ? 2 :
                   c < (1 << 16) ? 3 :
                   c < (1 << 21) ? 4 :
                   c < (1 << 26) ? 5 :
                   c < (1 << 31) ? 6 : Number.NaN;
    }
    return byteLen;
}

function run(){
    document.getElementById('characters').innerHTML = $('#text').val().replace(/ /g,"").length;
    document.getElementById('charactersww').innerHTML = $('#text').val().split(" ").length - 1;
    if($('#text').val().length != 0){
        document.getElementById('words').innerHTML = $('#text').val().replace(/^[\s,.;]+/, "").replace(/[\s,.;]+$/, "").split(/[\s,.;]+/).length;
    } else {
        document.getElementById('words').innerHTML = 0;
    }
    document.getElementById('sentences').innerHTML = $('#text').val().split(".").length - 1;
	document.getElementById('bytes').innerHTML = getByteLen($('#text').val());
}

$('#text').bind('keyup keydown change paste', function() {
	run();
});