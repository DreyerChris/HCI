<!DOCTYPE html>
<?php

session_start();
if(empty($_SESSION["username"])) 
{
     header("Location:login.php");
}
else
{
    
    $currentUser = $_SESSION["username"];
}

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


    if(!empty($_POST['comment']))
    {
        $sql = "INSERT INTO `comments` (`heading`, `username`, `comment`) VALUES ('".$_POST['heading']."', '".$_POST['username']."', '".$_POST['comment']."')";
        $result = $conn->query($sql);   
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
     echo '           <a href="socialfeed.php?username='.$currentUser.'">';
     echo '               <div id="sociallinkcontainer" class="col-xs-3">';
     echo '                   <span id="sociallink" class="glyphicon glyphicon-list-alt"></span>';
     echo '               </div>';
     echo '           </a>';
     echo '           <a href="socialmoviesearch.php?username='.$currentUser.'">';
      echo '              <div id="sociallinkcontainer" class="col-xs-3">';
      echo '                  <span id="sociallink" class="glyphicon glyphicon-film"></span>';
      echo '              </div>';
      echo '          </a>';
      echo '          <a href="socialpeoplesearch.php?username='.$currentUser.'">';
      echo '              <div id="sociallinkcontainer" class="col-xs-3">';
     echo '                   <span id="sociallinkorange" class="glyphicon glyphicon-user"></span>';
      echo '              </div>';
     echo '           </a>';
      echo '          <a href="profilesettings.php?username='.$currentUser.'">';
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
            $profilepic = $row["profilepic"];
   echo' <div class="row">';
    echo'        <div class="col-xs-8">';
    echo'            <div id="profileimage" class="col-xs-4">';
    echo'                <img width="180px" src="Images/profilepics/'.$row["profilepic"].'"/>';
    echo'            </div>';
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
                <div id="addremovefriend" class="row">
                    <div class="col-xs-4 col-xs-offset-2">
                        <span id="friendfunction" class="fa fa-user-times fa-4x"/>
                    </div>
                    <div class="col-xs-4">
                        <span id="friendfunctionorange" class="fa fa-user-plus fa-4x"/>
                    </div>
                </div>
            </div>
        </div>
<?php
     echo'   <div class="row">';
     echo'        <div id="searchdivider"></div>';
     echo'        <a href="socialprofile.php?username='.$user.'">';
     echo'            <div id="profilemenulinkorange" class="col-xs-3">';
     echo'                Feed';
     echo'            </div>';
     echo'        </a>';
     echo'        <a href="socialprofileabout.php?username='.$user.'">';
     echo'            <div id="profilemenulink" class="col-xs-3">';
     echo'                About';
     echo'            </div>';
     echo'        </a>';
     echo'        <a href="socialprofilefriends.php?username='.$user.'">';
     echo'            <div id="profilemenulink" class="col-xs-3">';
     echo'                Friends';
     echo'            </div>';
     echo'        </a>';
     echo'        <a href="socialprofilewatched.php?username='.$user.'">';
     echo'            <div id="profilemenulink" class="col-xs-3">';
     echo'                Watched';
     echo'            </div>';
     echo'        </a>';
     echo'        <div id="searchdivider2"></div>';
     echo'        <h3 id="searchsuggestionheading">Feed</h3>';
     echo'    </div> ';
?>


<?php
        $sql = "SELECT * FROM feed";

            $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){

            $heading = $row["heading"];
            
       echo'  <div id="feeditem" class="row">';
       echo'      <div class="row">';
       echo'          <div id="feedheading">'.$row["heading"].':</div>';
       echo'          <div id="feedheadingline"></div>';
       echo'          <div id="feedheadingdate">'.$row["feedDate"].'</div>';
        echo'     </div>';
        echo'     <div class="row">';
        echo'         <a href="socialmovie.php"><div id="feedmovieimage"><img width="900px" src="Images/Carousel/'.$row["movie"].'"></div></a>';
        echo'     </div>';
        echo'     <div id="likescommentscontainer" class="row">';
        echo'         <div id="feedlikes" class="col-xs-6">'.$row["likes"].' Likes</div>';
        echo'         <div id="feedcomments" class="col-xs-6">'.$row["numComments"].' Comment</div>';
         echo'    </div>';
         echo'    <div class="row">';
          echo'       <div class="row">';
         echo'            <div id="likecommentshareline"></div>';
         echo'        </div>';
         echo'        <div id="likecommentshare" class="col-xs-4">Like</div>';
         echo'        <div id="likecommentshare" class="col-xs-4">Comment</div>';
         echo'        <div id="likecommentshare" class="col-xs-4">Share</div>';
         echo'        <div class="row">';
          echo'           <div id="likecommentshareline2"></div>';
          echo'       </div>';
         echo'   </div>';

        $sql2 = "SELECT * FROM comments WHERE heading = '".$row["heading"]."'ORDER BY 'index' DESC";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
        while($row2 = $result2->fetch_assoc()){

            $sql3 = "SELECT * FROM user WHERE username = '".$row2["username"]."'";
            $result3 = $conn->query($sql3);

            if ($result3->num_rows > 0) {
            while($row3 = $result3->fetch_assoc()){
                $picture = $row3["profilepic"];
            }}
        echo'  <div id="commentcontainer" class="row">';
         echo'       <div id="commentprofilepic" class="col-xs-2"><img height="120px" width="120px" src="Images/profilepics/'.$picture.'"></div>';
         echo'       <div id="commentcontent" class="col-xs-10">';
         echo'           <h2 id="commentername">'.$row2["username"].'</h2>';
         echo'           <p id="comment">'.$row2["comment"].'</p>';
        echo'        </div>';
         echo'   </div>';

        }}
         echo'   <div id="commentcontainer" class="row">';
        echo'        <div id="commentprofilepic" class="col-xs-2"><img height="80px" width="80px" src="Images/profilepics/0.jpg"></div>';
         echo'       <div id="commentcontent" class="col-xs-10">';
         echo'          <form method=POST>';
         echo'           <input type="text" name="comment" id="makeacomment" placeholder="Write a comment..."<span id=';
         echo '"commentcamera"';
         echo "class='glyphicon glyphicon-camera'>";
         echo '</span>';
        echo '         <input type="hidden" name="heading" value="'.$row["heading"].'">'; 
        echo '         <input type="hidden" name="username" value="'.$currentUser.'">'; 
        echo'          </form >';
        echo'        </div>';
        echo'    </div>';


        }
        }

?>


        </div>
    </body>
</html>