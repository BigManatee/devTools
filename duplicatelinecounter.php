<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Duplicate Line Counter | Tools - Things I often find myself using | tyler.ac</title>
    <meta name="title" content="Duplicate Line Counter | Tools - Things I often find myself using | tyler.ac">
    <meta name="description" content="Duplicate Line Counter | Tools - Things I often find myself using | tyler.ac" />

    <link href="assets/css/lib.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/app.css" rel="stylesheet">
    <link rel="icon" href="assets/img/favicon.ico"/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|M0ntserrat:400,700' rel='stylesheet' type='text/css'>
    <style type="text/css">pre{margin:0;padding:0;background:#fff;border:0}</style>
    <?php include_once("assets/inc/header.php"); ?>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="headline col-md-12 text-center">Tools</div>
            </div>
            <?php include_once("assets/inc/notice.php"); ?>

            <div class="row">
                <?php include_once("assets/inc/nav.php"); ?>

                <div class="col-md-9">
                    <div class="panel-standard dupes">
                        <h3>Duplicate Line Counter</h3>
                        
                        <form method="get" action="#" onsubmit="return false;" name="lineCounts">
                            <textarea name="textInput" rows="10" cols="100"></textarea>
                            <h3>Counts</h3>
                            <input type="button" onclick="updateCounts();" value="Display/Update Counts">
                            
                            Sort By: 
                            <label for="sortby_count"><input type="radio" name="sortby" value="count" checked="checked" id="sortby_count"> Count</label>
                            <label for="sortby_line"><input type="radio" name="sortby" value="line" id="sortby_line"> Line</label>
                            <br>
                            <pre id="CountsPlaceholder" style="margin-top: 1em;"></pre>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/jq.js"></script>
    <script type="text/javascript">
    var objCountsPlaceholder = null;
    function updateCounts() {
        formObj = document.forms['lineCounts'];
        textInput = formObj.elements['textInput'];
        objCountsPlaceholder = document.getElementById('CountsPlaceholder');
    
        sortByIndex = 0;
        if(document.getElementById('sortby_line').checked) {
            sortByIndex = 1;
        }

        inputString = new String(textInput.value);
        var arrLines = inputString.split("\n");
        var countLines = arrLines.length;
        var arrUniqueLines = [];

        for(var i = 0; i < countLines; i++) {
            var currentLine = arrLines[i];
            if(currentLine.substr(currentLine.length - 2, 2) == "\r\n") {
                currentLine = currentLine.substr(0, currentLine.length - 2);
            }
            if(currentLine.substr(currentLine.length - 1, 1) == "\n" ||
                currentLine.substr(currentLine.length - 1, 1) == "\r") {
                    currentLine = currentLine.substr(0, currentLine.length - 1);
            }
    
            if(!arrUniqueLines[currentLine]) {
                arrUniqueLines[currentLine] = 1;
            } else {
                arrUniqueLines[currentLine] += 1;
            }
        }

        if(objCountsPlaceholder.hasChildNodes()){
            while(objCountsPlaceholder.childNodes.length >= 1){
                objCountsPlaceholder.removeChild(objCountsPlaceholder.firstChild);
            }
        }
    
        AppendLine("COUNT    | LINE");
        AppendLine("-----------------------------------------------------");
        
        var sortedLines = [];
        for(var i in arrUniqueLines) {
            sortedLines.push([arrUniqueLines[i], i]);
        }
        arrUniqueLines = null;

        sortedLines.sort(function(a,b) {
            if(sortByIndex == 0) {
                return (b[0] - a[0] != 0 ? b[0] - a[0] : a[1].localeCompare(b[1]));
            } else {
                return (a[1].localeCompare(b[1]) != 0 ?a[1].localeCompare(b[1]) : b[0] - a[0]);
            }
        });

        for(var i in sortedLines) {
            strToPrint = '' + zeroPad(sortedLines[i][0], 8, " ");
            strToPrint += ' | ' + sortedLines[i][1] + '';
            AppendLine(strToPrint);
        }

        AppendLine("-----------------------------------------------------");
        AppendLine(zeroPad(countLines, 8, " ") + " | TOTAL LINES");
    }
    
    // n = number you want padded
    // digits = length you want the final output
    function zeroPad(n, digits, padChar) {
        n = n.toString();
        while (n.length < digits) {
            n = padChar + n;
        }
        return n;
    }
    function AppendLine(str) {
        objCountsPlaceholder.appendChild(document.createTextNode(str + "\n"));
    }
    </script>
</body>
</html>