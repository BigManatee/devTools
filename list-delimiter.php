<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Delimiter | Tools - Things I often find myself using | tyler.ac</title>
    <meta name="title" content="List Delimiter | Tools - Things I often find myself using | tyler.ac">
    <meta name="description" content="List Delimiter | Tools - Things I often find myself using | tyler.ac" />

    <link href="assets/css/lib.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/listdel.css?v={{ date().timestamp }}" rel="stylesheet">
    <link href="assets/css/app.css?v={{ date().timestamp }}" rel="stylesheet">
    <link rel="icon" href="assets/img/favicon.ico"/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|M0ntserrat:400,700' rel='stylesheet' type='text/css'>
    <style type="text/css">pre{margin:0;padding:0;background:#fff;border:0}</style>
    <?php include_once("assets/inc/header.php"); ?>
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="headline col-md-12 text-center">devTools | tyler.ac</div>
            </div>
            <?php include_once("assets/inc/notice.php"); ?>

            <div class="row">
                <?php include_once("assets/inc/nav.php"); ?>

                <div class="col-md-9">
                    <div class="panel-standard colorfromimg">
                        <h3>List Delimiter</h3>
                        
                        <div class="ld">
                            <div class="row">
                                <div class="col-md-12 offset-md-10">
                                    <button id="settings-cog" class="btn fa fa-cog"> <span>Settings</span></button>
                                    <div id="settings-panel" style="display:none">
                                        <div class="col-md-2 nopadleft">
                                            <label>Delimiter</label>
                                            <select id="delimiter">
                                                <option value="," selected>,</option>
                                                <option value=";">;</option>
                                                <option value="|">|</option>
                                                <option value=" "> (whitespace)</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 nopad">
                                            <label>Double Quotes</label>
                                            <input type="checkbox" id="doublequotes"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="extra-input row"><div class="col-md-4 offset-md-4 text-center"></div></div>

                            <div class="row text-center">
                                <div class="col-md-6 text-left">
                                    <textarea class="form-control" cols="20" css="width:100%" id="box1" name="Input" placeholder="Type or paste your colume data here" rows="12"></textarea>
                                    <div class="text-center" id="text-stats"></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-right">
                                        <textarea class="form-control" cols="20" id="box2" name="Output" placeholder="Your separated list will display here" rows="12"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/jq.js"></script>
    <script src="assets/js/ttt.js"></script>
</body>
</html>