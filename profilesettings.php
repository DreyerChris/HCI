<!DOCTYPE html>
<?php
    $user = $_GET['username'];
    $user = urldecode($user);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "numetro";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


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
     <?php
    echo '   <div class="row"> ';
     echo '       <div id="linkbar" class="col-xs-12">';
     echo '           <a href="socialfeed.php?username='.$user.'">';
     echo '               <div id="sociallinkcontainer" class="col-xs-3">';
     echo '                   <span id="sociallink" class="glyphicon glyphicon-list-alt"></span>';
     echo '               </div>';
     echo '           </a>';
     echo '           <a href="socialmoviesearch.php?username='.$user.'">';
      echo '              <div id="sociallinkcontainer" class="col-xs-3">';
      echo '                  <span id="sociallink" class="glyphicon glyphicon-film"></span>';
      echo '              </div>';
      echo '          </a>';
      echo '          <a href="socialpeoplesearch.php?username='.$user.'">';
      echo '              <div id="sociallinkcontainer" class="col-xs-3">';
     echo '                   <span id="sociallinkorange" class="glyphicon glyphicon-user"></span>';
      echo '              </div>';
     echo '           </a>';
      echo '          <a href="profilesettings.php?username='.$user.'">';
     echo '               <div id="sociallinkcontainer" class="col-xs-3">';
     echo '                   <span id="sociallink" class="glyphicon glyphicon-cog"></span>';
     echo '               </div>';
     echo '           </a>';
     echo '       </div>';
    echo '    </div>';
?>

<?php

             $sql = "SELECT * FROM user WHERE username = '".$user."'";

            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
    echo' <div class="row">';
    echo'        <div class="col-xs-8">';
    echo'            <div id="profileimage" class="col-xs-4">';
    echo'                <img width="180px" src="Images/profilepics/'.$row["profilepic"].'"/>';
    echo'             <div id="editphoto">Edit</div>';
    echo'            <div class="col-xs-7">';
    echo'                <div class="row">';
    echo'                    <h3 id="profilename">'.$row["username"].'</h3>';
    echo'                </div>';
   echo'                 <div class="row">';
    echo'                    <h5 id="profileinfo">'.$row["suburb"].', '.$row["city"].'</h5>';
    echo'                </div>';
    echo'                <div class="row">';
   echo'                     <h5 id="profileinfo">'.$row["email"].'</h5>';
   echo'                 </div>';
   echo'                 <div class="row">';
    echo'                    <h5 id="profileinfo">'.$row["contact"].'</h5>';
    echo'                </div>';
   echo'             </div>';
   echo'         </div>';

        }
        }
?>
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
                <div id="profilemenulinkorange" class="col-xs-4">
                    About
                </div>
            </a>
            <a href="profilesettingsfriends.php">
                <div id="profilemenulink" class="col-xs-4">
                    Friends
                </div>
            </a>
            <a href="profilesettingswatched.php">
                <div id="profilemenulink" class="col-xs-4">
                    Watched
                </div>
            </a>
            <div id="searchdivider2"></div>
            <h3 id="searchsuggestionheadingorange">Likes</h3>
        </div>
        <div id="likes" class="row">
            <div class="col-xs-4">
                <span id="genreremove" class="fa fa-times fa-4x"></span>
                <h4 id="genrelike">Adventure</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreremove" class="fa fa-times fa-4x"></span>
                <h4 id="genrelike">Romance</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreremove" class="fa fa-times fa-4x"></span>
                <h4 id="genrelike">Thriller</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreremove" class="fa fa-times fa-4x"></span>
                <h4 id="genrelike">Horror</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreremove" class="fa fa-times fa-4x"></span>
                <h4 id="genrelike">Action</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreremove" class="fa fa-times fa-4x"></span>
                <h4 id="genrelike">Animation</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreadd" class="fa fa-plus fa-4x"></span>
                <h4 id="genrelike">Drama</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreadd" class="fa fa-plus fa-4x"></span>
                <h4 id="genrelike">Comedy</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreadd" class="fa fa-plus fa-4x"></span>
                <h4 id="genrelike">Western</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreadd" class="fa fa-plus fa-4x"></span>
                <h4 id="genrelike">Fiction</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreadd" class="fa fa-plus fa-4x"></span>
                <h4 id="genrelike">Sci-Fi</h4>
            </div>
            <div class="col-xs-4">
                <span id="genreadd" class="fa fa-plus fa-4x"></span>
                <h4 id="genrelike">Fantasy</h4>
            </div>
        </div>
    </body>
</html>