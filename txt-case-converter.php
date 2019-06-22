<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Text Case Converter | Tools - Things I often find myself using | iamtyler.sh</title>
    <meta name="title" content="Text Case Converter | Tools - Things I often find myself using | iamtyler.sh">
    <meta name="description" content="Text Case Converter | Tools - Things I often find myself using | iamtyler.sh" />

    <link href="assets/css/lib.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/listdel.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="assets/css/app.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link href="assets/css/tcc.css?v=<?php echo time(); ?>" rel="stylesheet">
    <link rel="icon" href="assets/img/favicon.ico"/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|M0ntserrat:400,700' rel='stylesheet' type='text/css'>
    <style type="text/css">pre{margin:0;padding:0;background:#fff;border:0}</style>
    <?php include_once("assets/inc/header.php"); ?>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="headline col-md-12 text-center">devTools | iamtyler.sh</div>
            </div>
            <?php include_once("assets/inc/notice.php"); ?>

            <div class="row">
                <?php include_once("assets/inc/nav.php"); ?>

                <div class="col-md-9">
                    <div class="panel-standard colorfromimg">
                        <h3>Text Case Converter</h3>
                        
                        <div class="tcc">
                            <textarea id="content" placeholder="Paste or type your text here"></textarea>

                            <div class="tasks">
                                <button id="title" class="btn">Title Case</button>
                                <button id="sentence" class="btn">Sentence case</button>
                                <button id="capitalized" class="btn">Capitalized Case</button>
                                <button id="lower" class="btn">lower case</button>
                                <button id="upper" class="btn">UPPER CASE</button>
                                <button id="alternating" class="btn">aLtErNaTiNg cAsE</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/jq.js"></script>
    <script src="assets/js/tcc.js"></script>
</body>
</html>