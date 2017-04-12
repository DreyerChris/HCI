<!DOCTYPE html>
<html>
    <head>
        <title>Cinemas</title>
        <link rel="stylesheet" href="CSS/style.css"/>
        <link rel="shortcut icon" href="Images/Favicon/favicon.ico" type="image/ico">
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script src="JS/script.js"></script>
        
        <script                     src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="white">
        <div id="navbar">
            <div class="col-xs-1" id="burgermenu">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <a href="index.php"><div class="col-xs-1" id="backbtn"><span class="glyphicon glyphicon-menu-left"></span></div></a>
            <div class="col-xs-9" id="navbartext">NuMetro</div>
            <div id="option"><span class="glyphicon glyphicon-option-vertical"></span></div>
        </div>
        <div id="cinemasearchbar">
            <div class="col-xs-6">
                <form>
                    <input type="text" name="cinemasearch" id="whiteborderinput" placeholder="Search for cinemas...">
                </form>
            </div>
        </div>
        <div class="col-xs-12" id="cinemaposter">
            <img src="Images/Cinemas/menlyn.jpg">
        </div>
        <div class="col-xs-12" id="cinemadivider"></div>
        <div class="col-xs-12" id="cinemaposter">
            <img src="Images/Cinemas/canalwalk.png">
        </div>
        <div class="col-xs-12" id="cinemadivider"></div>
        <div class="col-xs-12" id="cinemaposter">
            <img src="Images/Cinemas/emperorspalace.jpg">
        </div>
        <div class="col-xs-12" id="cinemadivider"></div>
    </body>
</html>