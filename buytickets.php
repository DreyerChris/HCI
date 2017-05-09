<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to NuMetro!</title>
        <link rel="stylesheet" href="CSS/style.css"/>
        <link rel="shortcut icon" href="Images/Favicon/favicon.ico" type="image/ico">
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script                     src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="white">
        <div id="navbar">
            <div id="iconbar" class="col-xs-2"></div>
            <div class="col-xs-10" id="navbartext">NuMetro</div>
        </div>
        <div class="row">
            <div id="buyticketsheading" class="col-xs-12">
                <h1 id="orangeheading">Buy Tickets</h1>
            </div>
        </div>
        <div id="selectscinema" class="col-xs-10 col-xs-offset-1">
            <select>
                <option>Select Cinema</option>
                <option>Menlyn Park</option>
                <option>Boardwalk</option>
                <option>Canal Walk</option>
            </select>
        </div>
        <div id="selectsmovie" class="col-xs-10 col-xs-offset-1">
            <select>
                <option>Select Movie</option>
                <option>Sloane</option>
                <option>John Wick</option>
                <option>Kong: Skull Island</option>
            </select>
        </div>
        <div id="selectsdate" class="col-xs-10 col-xs-offset-1">
            <select>
                <option>Select Date</option>
                <option>13 April</option>
                <option>14 April</option>
                <option>15 April</option>
                <option>16 April</option>
                <option>17 April</option>
                <option>18 April</option>
                <option>19 April</option>
            </select>
        </div>
        <div id="selectstime" class="col-xs-10 col-xs-offset-1">
            <select>
                <option>Select Time</option>
                <option>14:00</option>
                <option>16:00</option>
                <option>18:00</option>
                <option>20:00</option>
            </select>
        </div>
        <div id="selectstickets" class="col-xs-10 col-xs-offset-1">
            <select>
                <option>Number of tickets</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <button id="confirmmovie" type="submit" class="quicklinkbtn" style="margin-top: 80px;">Continue</button>
        <div id="socialfooter">
            <div class="col-xs-4" id="sociallink">
                <img height="80" width="80" src="Images/Social/facebook.png">
            </div>
            <div class="col-xs-4" id="sociallink">
                <img height="85" width="85" src="Images/Social/instagram.png">
            </div>
            <div class="col-xs-4" id="sociallink">
                <img height="85" width="85" src="Images/Social/twitter.png">
            </div>
        </div>
        <script src="JS/buytickets.js"></script>
    </body>
</html>