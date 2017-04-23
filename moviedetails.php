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
                    <a href="social1.php"><span class="glyphicon glyphicon-list-alt" style="color:#ff4e00;"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social2.php"><span class="glyphicon glyphicon-film" style="color:gray;"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social3.php"><span class="glyphicon glyphicon-user" style="color:gray;"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social4.php"><span class="glyphicon glyphicon-cog" style="color:gray;"/></a>
            </div>
        </div>
        <div id="movietitle">
            <div class="gentext" style="text-align: center;border-bottom: none;">Jhon Wick 2</div>

            <div class="trailerwindow">
            <iframe width="100%" height="315"
                src="https://www.youtube.com/watch?v=XGk2EfbD_Ps">
                </iframe>
            </div>
        </div>
        <div class="movierating">
            9/10<img src="Images/IMDB/IMDB_Logo.png" alt="stars" class="stars"/><br>
            Friends watched: <line style="font-size: 20px;">Pieter Smith and</line><line style="font-size: 30px;color:#ff4e00;"> 3 others</line><br>
            Total watched:<line style="font-size: 30px;color:#ff4e00;">455</line> 
        </div>
        <div class="commentsection">
                    <img src="Images/profilepics/1.jpg" alt="no alternative" style="float:left;" id="cpfp"/>
                <h1 style="float:right;color:#ff4e00;padding-right: 30px;" id="cusername" >Pieter Smith</h1><br>
                <p style="float:left;color:white;padding-left:20px;font-size: 20px;">Movie was excelent!</p>
                <p style="float:left;color:white;padding-left:20px;font-size: 20px;">I would recomend it!</p>
                <br>

        </div>
        <br>
                <div class="commentsection" style=" margin-top: 110px;">
                    <img src="Images/profilepics/2.jpg" alt="no alternative" style="float:left;" id="cpfp"/>
                <h1 style="float:right;color:#ff4e00;padding-right: 30px;" id="cusername" >Justin Clarke</h1><br>
                <p style="float:left;color:white;padding-left:20px;font-size: 20px;">Great</p>
                <p style="float:left;color:white;padding-left:20px;font-size: 20px;">I would recomend it!</p>
                <br>

        </div>
        <br>
                <div class="commentsection" style=" margin-top: 110px;">
                    <img src="Images/profilepics/1.jpg" alt="no alternative" style="float:left;" id="cpfp"/>
                <h1 style="float:right;color:#ff4e00;padding-right: 30px;" id="cusername" >Pieter Smith</h1><br>
                <p style="float:left;color:white;padding-left:20px;font-size: 20px;">Was good!</p>
                <p style="float:left;color:white;padding-left:20px;font-size: 20px;">I would recomend it!</p>
                <br>

        </div>
        <div id="alsowatched">
            <line style="font-size:25px;color:white;">People who watched this also watched:</line>
            <div>
                <img src="Images/Carousel/3.jpg" alt="no image" class="alsowatchedmovieimg"/>
            </div>
        </div>
 



    </body>
</html>