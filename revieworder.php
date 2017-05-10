<!DOCTYPE html>
<html>
    <?php session_start(); ?>
    <head>
        <title>Choose your snacks</title>
        <link rel="stylesheet" href="CSS/style.css"/>
        <link rel="shortcut icon" href="Images/Favicon/favicon.ico" type="image/ico">
        <script src="https://use.fontawesome.com/727ae44ffb.js"></script>
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script                     src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="main">
        <div id="navbar">
            <div class="col-xs-10 col-xs-offset-1" id="navbartext"><?php echo $_SESSION["movie"];?> at <?php echo $_SESSION["cinema"];?></div>
            <a href="index.php"><div id="closelink" class="col-xs-1"><span class="glyphicon glyphicon-remove"></span></div></a>
        </div>
        <div id="snacksheadingbar" class="col-xs-12">
            Review your order information
        </div>
        <div id="randomspace"></div>
        <div id="orderline" class="row">
            <div class="col-xs-1"><span id="removeorder" class="fa fa-times fa-4x"></span></div>
            <div class="col-xs-8">
                <h3 id="ordername">5x movie tickets for John Wick at Boardwalk 18:00 15 April</h3>
            </div>
            <div class="col-xs-3">
                <h3 id="orderprice">R220.95</h3>
            </div>
            <div id="orderdivider" class="col-xs-12"></div>
        </div>
        <div id="orderline" class="row">
            <div class="col-xs-1"><span id="removeorder" class="fa fa-times fa-4x"></span></div>
            <div class="col-xs-8">
                <h3 id="ordername">Snacks</h3>
            </div>
            <div class="col-xs-3">
                <h3 id="orderprice">R320.95</h3>
            </div>
            <div id="orderdivider" class="col-xs-12"></div>
        </div>
        <div id="snacktotalbar" class="col-xs-12">
            Total R<span id="totalnumber">0.00</span>
        </div>
    </body>
</html>