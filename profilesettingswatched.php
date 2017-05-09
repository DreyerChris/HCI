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
                        <span id="sociallink" class="glyphicon glyphicon-user"></span>
                    </div>
                </a>
                <a href="profilesettings.php">
                    <div id="sociallinkcontainer" class="col-xs-3">
                        <span id="sociallinkorange" class="glyphicon glyphicon-cog"></span>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div id="profileimage" class="col-xs-4">
                    <img width="180px" src="Images/profilepics/chrisPP.jpg"/>
                    <div id="editphoto">Edit</div>
                </div>
                <div class="col-xs-7">
                    <div class="row">
                        <h3 id="profilename">Chris Dreyer</h3>
                    </div>
                    <div class="row">
                        <h5 id="profileinfo">Wonderboom, Pretoria</h5>
                    </div>
                    <div class="row">
                        <h5 id="profileinfo">christiaandreyer@gmail.com</h5>
                    </div>
                    <div class="row">
                        <h5 id="profileinfo">0764567324</h5>
                    </div>
                </div>
            </div>
            <div class="col-xs-4">
                <div id="numetrosocialpoints" class="row">
                    <div id="numetrosocialpointslogo" class="col-xs-4 col-xs-offset-1">
                        <img width="80px" src="Images/Logos/numetrosocialsmall.png"/>
                    </div>
                    <div class="col-xs-7">
                        <h5 id="numetrosocialpointsamount">1359</h5>
                    </div>
                </div>
            </div>
        </div>
        <div id="editprofile" class="row">
            <button class="editpersonalinfo">Edit personal info</button>
        </div>
        <div class="row">
            <div id="searchdivider"></div>
            <a href="profilesettings.php">
                <div id="profilemenulink" class="col-xs-4">
                    About
                </div>
            </a>
            <a href="profilesettingsfriends.php">
                <div id="profilemenulink" class="col-xs-4">
                    Friends
                </div>
            </a>
            <a href="profilesettingswatched.php">
                <div id="profilemenulinkorange" class="col-xs-4">
                    Watched
                </div>
            </a>
            <div id="searchdivider2"></div>
            <h3 id="searchsuggestionheadingorange">Likes</h3>
        </div>
        <div class="row">
            <input class="searchbox" placeholder="Search for movies...&#9;&#9;&#9;&#9;&#9;&#9;&#9;       &#xF002;"/>
        </div>
        <div id="watcheditem" class="row">
            <div id="removefriend" class="col-xs-1">
                <span id="removefriendicon" class="fa fa-times fa-4x"></span>
            </div>
            <div id="moviesearchimage" class="col-xs-3">
                <img width="300px" src="Images/Carousel/3.jpg"/>
            </div>
            <div class="col-xs-7">
                <h3 id="watchedtitle">Chips</h3>
                <h2 id="watchedinfo">25 Feb</h2>
                <h2 id="watchedinfo">18:00</h2>
            </div>
        </div>
        <div id="watcheditem" class="row">
            <div id="removefriend" class="col-xs-1">
                <span id="removefriendicon" class="fa fa-times fa-4x"></span>
            </div>
            <div id="moviesearchimage" class="col-xs-3">
                <img width="300px" src="Images/Carousel/3.jpg"/>
            </div>
            <div class="col-xs-7">
                <h3 id="watchedtitle">Chips</h3>
                <h2 id="watchedinfo">25 Feb</h2>
                <h2 id="watchedinfo">18:00</h2>
            </div>
        </div>
        <div id="watcheditem" class="row">
            <div id="removefriend" class="col-xs-1">
                <span id="removefriendicon" class="fa fa-times fa-4x"></span>
            </div>
            <div id="moviesearchimage" class="col-xs-3">
                <img width="300px" src="Images/Carousel/3.jpg"/>
            </div>
            <div class="col-xs-7">
                <h3 id="watchedtitle">Chips</h3>
                <h2 id="watchedinfo">25 Feb</h2>
                <h2 id="watchedinfo">18:00</h2>
            </div>
        </div>
    </body>
</html>