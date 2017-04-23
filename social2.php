<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to NuMetro!</title>
        <link rel="stylesheet" href="CSS/hdstyles.css"/>
        <link rel="shortcut icon" href="Images/Favicon/favicon.ico" type="image/ico">
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script src="JS/script.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="main">
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
                    <div id="menulinkicon" class="col-xs-3"></div>
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
        <div id="imgdiv">
               <img height="120px" width="340px" src="Images/Logos/numetrosocial.png"/>
        </div>
        <div id="selector">
            <div class="col-xs-3 sicons">
                    <a href="social1.php"><span class="glyphicon glyphicon-list-alt" style="color:gray;"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social2.php"><span class="glyphicon glyphicon-film" style="color:#ff4e00;"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social3.php"><span class="glyphicon glyphicon-user" style="color:gray;"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social4.php"><span class="glyphicon glyphicon-cog" style="color:gray;"/></a>
            </div>
        </div>
        <div class="searchbar">
        <div class="inner-addon right-addon">
          <i class="glyphicon glyphicon-search"></i>
          <input type="text" class="form-control" placeholder="Search">
        </div>
        </div>
        <h1 id="recentsearch">Recent Searches</h1>
        <div id="recent">
                 <a href="moviedetails.php"><div class="moviepic" style="">
                    <img src="Images/carousel/4.jpg" alt="balsak" class="moviesearchimg"/>
                     <h3 style="float:right;padding-left: 20px;" class="smoviename">King Kong</h3>
                </div></a>
                <br>
                 <a href="moviedetails.php"><div  class="moviepic" style="">
                    <img src="Images/carousel/3.jpg" alt="balsak" class="moviesearchimg"/>
                     <h3 style="float:right;padding-left: 20px;" class="smoviename">Chips</h3>
                     <br>
                </div></a>
                <br>                
                 <a href="moviedetails.php"><div  class="moviepic" style="">
                    <img src="Images/carousel/2.jpg" alt="balsak" class="moviesearchimg"/>
                     <h3 style="float:right;padding-left: 20px;" class="smoviename">Jhon Wick 2</h3>
                </div></a>
        </div>

        <div>
         <h1 id="recentsearch">Trending</h1>
                <a href="moviedetails.php"><div class="moviepic" style="">
                    <img src="Images/carousel/4.jpg" alt="balsak" class="moviesearchimg"/>
                     <h3 style="float:right;padding-left: 20px;" class="smoviename">King Kong</h3>
                </div></a>
                <br>
                <a href="moviedetails.php"><div  class="moviepic" style="">
                    <img src="Images/carousel/3.jpg" alt="balsak" class="moviesearchimg"/>
                     <h3 style="float:right;padding-left: 20px;" class="smoviename">Chips</h3>
                     <br>
                </div></a>
                <br>                
               <a href="moviedetails.php"> <div  class="moviepic" style="">
                    <img src="Images/carousel/2.jpg" alt="balsak" class="moviesearchimg"/>
                     <h3 style="float:right;padding-left: 20px;" class="smoviename">Jhon Wick 2</h3>
                </div></a>
        </div>







    </body>
</html>