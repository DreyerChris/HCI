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
                <img src="" alt="no image yet" id="social"/>
        </div>
        <div id="selector">
            <div class="col-xs-3 sicons">
                    <a href="social1.php"><span class="glyphicon glyphicon-list-alt"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social2.php"><span class="glyphicon glyphicon-film"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social3.php"><span class="glyphicon glyphicon-user" style="color:#ff4e00;"/></a>
            </div>
            <div class="col-xs-3 sicons">
                    <a href="social4.php"><span class="glyphicon glyphicon-cog"/></a>
            </div>
        </div>
        <div class="commentsection">
                    <img href="" alt="no alternative" style="float:left;" id="cpfp"/>
                <h1 style="float:right;" id="cusername">Pieter Smith</h1><br>
                <p style="float:left;color:white;padding-left:20px;">Wonderboom,pretoria</p>
                <p style="float:left;color:white;padding-left:20px;">Petersmith@gmail.com</p><br>
                <p style="float:left;color:white;padding-left:20px;">0794692490</p>
                <br>
        </div>
        <div style="color:white;float:right;">
           
        </div>
        <div class="socialnav">
                <a href="profilefeed.php"><div  class="col-xs-3 fafw" >Feed</div></a>
                <a href=""><div  class="col-xs-3 fafw" style="color:#ff4e00;">About</div></a>
                <a href="profilefriends.php"><div  class="col-xs-3 fafw">Friends</div></a>
                <a href="profilewatched.php"><div  class="col-xs-3 fafw" style="padding-left: 65px;">Watched</div></a>
        </div>
        <div id="Feed">
            About
        </div>
        <line class="profileheader">Likes</line>
        <div id="moviepreferences">

            <div class="col-xs-6 checkboxes">
                        <input type="checkbox" name="Adventure" class="genrecheck">Adventure</input><br>
                        <input type="checkbox" name="Adventure" class="genrecheck">Animation</input><br>
                        <input type="checkbox" name="Adventure" class="genrecheck">Action</input><br>
                        <input type="checkbox" name="Adventure" class="genrecheck">Romance</input><br>
                        <input type="checkbox" name="Adventure" class="genrecheck">Thriller</input><br>
            </div>
            <div class="col-xs-6 checkboxes">
                 <input type="checkbox" name="Adventure" class="genrecheck">Horror</input><br>
                 <input type="checkbox" name="Adventure" class="genrecheck">Drama</input><br><br><br><br><br>
            </div>
        </div> 
     <div id="moviepreferences">

            <line class="profileheader">Bio</line>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et lacinia ipsum. Duis placerat lacus augue, ac luctus turpis sollicitudin eu. Etiam eu bibendum nulla, tempus placerat libero. Quisque suscipit magna at tellus pulvinar ultrices. Maecenas tincidunt mattis leo, at iaculis velit porta vitae. Fusce libero sapien, vestibulum rhoncus ante at, vulputate congue erat. Cras faucibus ex sit amet arcu gravida laoreet. Aenean tellus felis, accumsan nec massa et, elementum sollicitudin nisi. Nulla facilisi. Sed nec dignissim quam, in bibendum risus. Ut posuere purus nisi, sed consequat orci auctor eget.</p>
        </div> 


    </body>
</html>