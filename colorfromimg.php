<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Color from Image | Tools - Things I often find myself using | tyler.ac</title>
    <meta name="title" content="Color from Image | Tools - Things I often find myself using | tyler.ac">
    <meta name="description" content="Color from Image | Tools - Things I often find myself using | tyler.ac" />

    <link href="assets/css/lib.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/app.css?v=<?php echo time(); ?>" rel="stylesheet">
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
                        <h3>Color from Image</h3>
                        
                        <form>
                            <div class="large-12 columns">
                                <div class="row">
                                    <div class="col-md-4 col-xs-4 nopadleft">
                                        <label for="imageLoader" class="button">Upload File</label>
                                        <input type="file" id="imageLoader" name="imageLoader" class="show-for-sr"/>
                                    </div>
                                    <div class="col-md-6 col-xs-6 nopad">
                                        <input type="text" placeholder="http://..." id="webImageUrl">
                                    </div>
                                    <div class="col-md-2 col-xs-2 nopad">
                                        <a href="#" class="button postfix" id="webbtn">Go</a>
                                    </div>
                                </div>
                            </div>
                        </form>
    
                        <div class="row">
                            <canvas class="columns small-9" id="imageCanvas" width="450" height="300" style="padding:0px;float:left;border:1px solid #ccc;"></canvas>
                            <canvas class="columns small-3" id="pixCanvas" width="150" height="150" style="padding:0px;background-color: #ddd;float:left;"></canvas>
                            <canvas class="columns small-3" id="barvaCanvas" width="150" height="150" style="padding:0px;background-color: #ccc;float:left;"></canvas>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-xs-6 text-right">
                                Color code:
                            </div>
                            <div class="col-md-4 col-xs-6 nopadright">
                                <input type="text" id="pixcolor" style="font-size:17px;height:40px; margin-top:5px;color:#333">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/jq.js"></script>
    <script src="/assets/js/img.min.js"></script>
</body>
</html>