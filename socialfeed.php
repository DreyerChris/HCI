<!DOCTYPE html>
<html>
    <head>
        <title>NuMetro Social</title>
        <link rel="stylesheet" href="CSS/style.css"/>
        <link rel="shortcut icon" href="Images/Favicon/favicon.ico" type="image/ico">
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
                        <span id="sociallinkorange" class="glyphicon glyphicon-list-alt"></span>
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
                        <span id="sociallink" class="glyphicon glyphicon-cog"></span>
                    </div>
                </a>
            </div>
        </div>
        <div id="feeditem" class="row">
            <div class="row">
                <div id="feedheading">Pieter watched and commented on:</div>
                <div id="feedheadingline"></div>
                <div id="feedheadingdate">25 Feb at 7:22 am</div>
            </div>
            <div class="row">
                <a href="socialmovie.php"><div id="feedmovieimage"><img width="900px" src="Images/Carousel/3.jpg"></div></a>
            </div>
            <div id="likescommentscontainer" class="row">
                <div id="feedlikes" class="col-xs-6">17 Likes</div>
                <div id="feedcomments" class="col-xs-6">1 Comment</div>
            </div>
            <div class="row">
                <div class="row">
                    <div id="likecommentshareline"></div>
                </div>
                <div id="likecommentshare" class="col-xs-4">Like</div>
                <div id="likecommentshare" class="col-xs-4">Comment</div>
                <div id="likecommentshare" class="col-xs-4">Share</div>
                <div class="row">
                    <div id="likecommentshareline2"></div>
                </div>
            </div>
            <div id="commentcontainer" class="row">
                <div id="commentprofilepic" class="col-xs-2"><img height="120px" width="120px" src="Images/profilepics/jaco.jpg"></div>
                <div id="commentcontent" class="col-xs-10">
                    <h2 id="commentername">Pieter Bezuidenhout</h2>
                    <p id="comment">Excellent movie!! 10/10 Would watch again!</p>
                </div>
            </div>
            <div id="commentcontainer" class="row">
                <div id="commentprofilepic" class="col-xs-2"><img height="80px" width="80px" src="Images/profilepics/1.jpg"></div>
                <div id="commentcontent" class="col-xs-10">
                    <input type="text" id="makeacomment" placeholder="Write a comment...<span id='commentcamera' class='glyphicon glyphicon-camera'></span>"/>
                </div>
            </div>
        </div>
    </body>
</html>