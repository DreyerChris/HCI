<!DOCTYPE html>
<html>
    <head>
        <title>NuMetro Social</title>
        <link rel="stylesheet" href="CSS/style.css"/>
        <link rel="shortcut icon" href="Images/Favicon/favicon.ico" type="image/ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script src="https://use.fontawesome.com/727ae44ffb.js"></script>
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script                     src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="black">
        <div class="icon-bar" onclick="myFunction(this)">
              <div class="bar1"></div>
              <div class="bar2"></div>
              <div class="bar3"></div>
            </div>
        <div id="navbar">
            <div class="col-xs-10 col-xs-offset-2" id="navbartext">NuMetro</div>
        </div>
        <div id="menu" style="z-index: -1;">
            <div id="menurowfirst" class="row">
                <div id="menulinkcontainer" class="col-xs-12">
                    <div id="menulinkicon" class="col-xs-3"><img height="70px" width="110px" src="Images/Logos/numetrosocialsmall.png"/></div>
                    <div id="menulinklink" class="col-xs-9"><a id="menulink"><span id="orangemenulink">NuMetro Social</span></a></div>
                </div>
            </div>
            <div id="menurow" class="row">
                <div id="menulinkcontainer" class="col-xs-12">
                    <div id="menulinkicon" class="col-xs-3"><span class="glyphicon glyphicon-arrow-down"></span></div>
                    <div id="menulinklink" class="col-xs-9"><a id="menulink">Book Now</a></div>
                </div>
            </div>
            <div id="menurow" class="row">
                <div id="menulinkcontainer" class="col-xs-12">
                    <div id="menulinkicon" class="col-xs-3"><span class="glyphicon glyphicon-star"></span></div>
                    <div id="menulinklink" class="col-xs-9"><a id="menulink">Forthcoming</a></div>
                </div>
            </div>
            <div id="menurow" class="row">
                <div id="menulinkcontainer" class="col-xs-12">
                    <div id="menulinkicon" class="col-xs-3"><span class="glyphicon glyphicon-floppy-saved"></span></div>
                    <div id="menulinklink" class="col-xs-9"><a id="menulink">Saved Bookings</a></div>
                </div>
            </div>
            <div id="menurow" class="row">
                <div id="menulinkcontainer" class="col-xs-12">
                    <div id="menulinkicon" class="col-xs-3"><span class="glyphicon glyphicon-heart"></span></div>
                    <div id="menulinklink" class="col-xs-9"><a id="menulink">Wishlist</a></div>
                </div>
            </div>
            <div id="menurow" class="row">
                <div id="menulinkcontainer" class="col-xs-12">
                    <div id="menulinkicon" class="col-xs-3"><span class="glyphicon glyphicon-info-sign"></span></div>
                    <div id="menulinklink" class="col-xs-9"><a href="about.php" id="menulink">About</a></div>
                </div>
            </div>
            <div id="menurow" class="row">
                <div id="menulinkcontainer" class="col-xs-12">
                    <div id="menulinkicon" class="col-xs-3"><span class="glyphicon glyphicon-phone"></span></div>
                    <div id="menulinklink" class="col-xs-9"><a id="menulink">Contact Us</a></div>
                </div>
            </div>
            <div id="menurow" class="row">
                <div id="menulinkcontainer" class="col-xs-12">
                    <div id="menulinkicon" class="col-xs-3"><span class="glyphicon glyphicon-log-out"></span></div>
                    <div id="menulinklink" class="col-xs-9"><a id="menulink">Exit</a></div>
                </div>
            </div>
        
        </div>
        <div id="numetrosocialheader" class="col-xs-12">
            <img height="120px" width="340px" src="Images/Logos/numetrosocial.png"/>
        </div>
        <div class="row">
            <div id="linkbar" class="col-xs-12">
                <a href="socialfeed.php">
                    <div id="sociallinkcontainer" class="col-xs-3">
                        <span id="sociallink" class="glyphicon glyphicon-list-alt"></span>
                    </div>
                </a>
                <a href="socialmoviesearch.php">
                    <div id="sociallinkcontainer" class="col-xs-3">
                        <span id="sociallink" class="glyphicon glyphicon-film"></span>
                    </div>
                </a>
                <a href="socialpeoplesearch.php">
                    <div id="sociallinkcontainer" class="col-xs-3">
                        <span id="sociallinkorange" class="glyphicon glyphicon-user"></span>
                    </div>
                </a>
                <a href="profilesettings.php">
                    <div id="sociallinkcontainer" class="col-xs-3">
                        <span id="sociallink" class="glyphicon glyphicon-cog"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <input class="searchbox" placeholder="Search for people...&#9;&#9;&#9;&#9;&#9;&#9;&#9;       &#xF002;"/>
            <div id="searchdivider"></div>
            <h3 id="searchsuggestionheading">Recent Searches</h3>
        </div>
        <a href="socialprofile.php">
            <div id="profilesearchitem" class="row">
                <div id="profilesearchimage" class="col-xs-4">
                    <img width="100px" src="Images/profilepics/chrisPP.jpg"/>
                </div>
                <div class="col-xs-8">
                    <h3 id="profilesearchtitle">Chris Dreyer</h3>
                </div>
            </div>
        </a>
        <div id="profilesearchitem" class="row">
            <div id="profilesearchimage" class="col-xs-4">
                <img width="100px" src="Images/profilepics/chrisPP.jpg"/>
            </div>
            <div class="col-xs-8">
                <h3 id="profilesearchtitle">Chris Dreyer</h3>
            </div>
        </div>
        <div class="row">
            <div id="searchdivider"></div>
            <h3 id="searchsuggestionheading">Trending</h3>
        </div>
        <div id="profilesearchitem" class="row">
            <div id="profilesearchimage" class="col-xs-4">
                <img width="100px" src="Images/profilepics/chrisPP.jpg"/>
            </div>
            <div class="col-xs-8">
                <h3 id="profilesearchtitle">Chris Dreyer</h3>
            </div>
        </div><div id="profilesearchitem" class="row">
            <div id="profilesearchimage" class="col-xs-4">
                <img width="100px" src="Images/profilepics/chrisPP.jpg"/>
            </div>
            <div class="col-xs-8">
                <h3 id="profilesearchtitle">Chris Dreyer</h3>
            </div>
        </div>
    </body>
</html>