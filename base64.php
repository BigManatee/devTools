<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Base64 Encode / Decode | Tools - Things I often find myself using | tyler.ac</title>
    <meta name="title" content="Base64 Encode / Decode | Tools - Things I often find myself using | tyler.ac">
    <meta name="description" content="Base64 Encode / Decode | Tools - Things I often find myself using | tyler.ac" />

    <link href="assets/css/lib.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/app.css" rel="stylesheet">
    <link rel="icon" href="assets/img/favicon.ico"/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|M0ntserrat:400,700' rel='stylesheet' type='text/css'>
    <style>.cols{width:42%;float:left;text-align:center}.colmid{width:15%;position:relative;top:180px}textarea{width:100%}.clear{clear:both}input[type=button]{margin-bottom:5px;background:#fff;border:1px solid #ccc;text-transform:capitalize}</style>
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
                    <div class="panel-standard b64">
                        <h3>Base64 Encode / Decode</h3>
                        
                        <div class="cols">
                            <textarea id="gtext" rows="20" cols="20" wrap="off"></textarea>
                        </div>
                        <div class="cols colmid">
                            <input id="gencode" type="button" value="encode >">
                            <input id="gdecode" type="button" value="decode >">
                        </div>
                        <div class="cols">
                            <textarea id="ltext" rows="20" cols="20" wrap="off"></textarea>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/jq.js"></script>
    <script src="assets/js/webtoolkit.base64.js"></script>

    <script>
        $(document).ready(function(){
            $("#gencode").click(function() {
                $("#ltext").val(Base64.encode($("#gtext").val()));
            });

            $("#gdecode").click(function() {
                $("#ltext").val(Base64.decode($("#gtext").val()));
            });
        });
    </script>
</body>
</html>