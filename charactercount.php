<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Character Counter | Tools - Things I often find myself using | tyler.ac</title>
    <meta name="title" content="Character Counter | Tools - Things I often find myself using | tyler.ac">
    <meta name="description" content="Character Counter | Tools - Things I often find myself using | tyler.ac" />

    <link href="assets/css/lib.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/app.css" rel="stylesheet">
    <link rel="icon" href="assets/img/favicon.ico"/>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700|M0ntserrat:400,700' rel='stylesheet' type='text/css'>
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
                    <div class="panel-standard">
                        <h3>Character Counter</h3>
                        
                        <div class="row-fluid-5">
                            <div data-toggle="tooltip" data-placement="bottom" title="Counts all the characters" class="span2"><span class="caps">characters</span> <span id="characters" class="counter">0</span></div>
                            <div data-toggle="tooltip" data-placement="bottom" title="Counts all the words" class="span2"><span class="caps">words</span> <span id="words" class="counter">0</span></div>
                            <div data-toggle="tooltip" data-placement="bottom" title="Counts all the sentences" class="span2"><span class="caps">sentences</span> <span id="sentences" class="counter">0</span></div>
                            <div data-toggle="tooltip" data-placement="bottom" title="Counts all white spaces" class="span2"><span class="caps">whitespace</span> <span id="charactersww" class="counter">0</span></div>
                            <div data-toggle="tooltip" data-placement="bottom" title="Calculates byte size" class="span2"><span class="caps">bytes</span> <span id="bytes" class="counter">0</span></div>
                        </div>

                        <textarea data-persist="garlic" autofocus id="text" class="form-control" onclick="" placeholder="Copy and paste your text here to start counting characters." rows="15"></textarea>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/lib.js"></script>
    <script src="assets/js/jq.js"></script>
    <script src="assets/js/calculator.js"></script>
</body>
</html>