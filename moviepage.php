<!DOCTYPE html>
<?php
    $movie = $_GET['id'];
    $movie = urldecode($movie);

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
        <title>movie page</title>
        <link rel="stylesheet" href="CSS/style.css"/>
         <link rel="stylesheet" href="CSS/Moviestyle.css"/>
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
        <div id="navbar">
            <div class="col-xs-1" id="burgermenu">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <a href="movies.php"><div class="col-xs-1" id="backbtn"><span class="glyphicon glyphicon-menu-left"></span></div></a>
            <div class="col-xs-9" id="navbartext">NuMetro</div>
            <div id="option"><span class="glyphicon glyphicon-option-vertical"></span></div>
        </div>

        <div style="height: 120px"></div>    
        <?php
                $sql = 'SELECT * FROM movie WHERE nameMovie="'.$movie.'"';
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()){
                        echo '<div class="row"';
                            echo'<div class="col-xs-12" id="movieposter">';

                                echo'<iframe width="100%" height="500" src="https://www.youtube.com/embed/h9y6oPka3us" frameborder="0" allowfullscreen></iframe>';
                            echo'</div>';
                     echo'</div>';

                     echo'<div id="moviepageinfo" class="col-xs-12">';
                        echo'<div>';
                             echo'<h3 id="moviepagetitle">'.$row["nameMovie"].'</h3><div id="agerestrictionmoviepage">PG V</div><div id="genre">Animation</div><div id="favouritecontainer"><span id="favourite" class="glyphicon glyphicon-heart-empty></span>';
                                echo'<dl>';
                             echo '<dt>Director: '.$row["Director"].'</dt>';
                             echo '<dt>Music: '.$row["Music"].'</dt>';
                             echo '<dt>Running time: '.$row["runningTime"].'</dt>';
                                echo'</dl>';
                        echo'</div>';
                     echo'</div>';

                      echo'<div class="col-xs-6">';
                        echo'<div>';
                            echo $row["synopsis"];
                        echo'</div>';
                     echo'</div>';

                     echo'<div class="col-xs-12">';
                        echo'<div class="white">';
                            echo'<h2>Book tickets</h2>';
                        echo'</div>';
                     echo'</div>';
                    }
                }
            ?>
    </body>
</html>