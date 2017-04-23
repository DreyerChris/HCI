<!DOCTYPE html>
<?php
    if(!empty($_GET['moviesorting']))
    {
        $sortType = $_GET['moviesorting'];
        if($sortType == "Alphabetical")
        {
            $sortType = "nameMovie DESC";
        }
        if($sortType == "Newest first")
        {
            $sortType = "releaseDate DESC";
        }
        if($sortType == "Oldest first")
        {
            $sortType = "releaseDate ASC";
        }
        if($sortType == "Top Rated")
        {
            $sortType = "rating DESC";
        }
        if($sortType == "Age restriction")
        {
            $sortType = "ageRestriction DESC";
        }
    }
    else
    {
        $_GET['moviesorting'] = "Top Rated";
         $sortType = "rating DESC";
    }
    if(!empty($_GET['moviesearch']))
    {
        $searchFor = "WHERE nameMovie LIKE '%".$_GET['moviesearch']."%'";
    }
    else
    {
        $searchFor = "";
    }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "numetro";

$conn = new mysqli($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<html>
    <head>
        <title>movies</title>
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

    <body class="black">
        <div id="navbar">
            <div class="col-xs-1" id="burgermenu">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <a href="index.php"><div class="col-xs-1" id="backbtn"><span class="glyphicon glyphicon-menu-left"></span></div></a>
            <div class="col-xs-9" id="navbartext">NuMetro</div>
            <div id="option"><span class="glyphicon glyphicon-option-vertical"></span></div>
        </div>

    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-6">
            <div id="cinemasearchbar">
                <form action="movies.php" method="GET">
                    <input type="text" name="moviesearch" id="whiteborderinput" placeholder="Search for movie...">
                </form>
            </div>
        </div> 

        <div class="col-xs-2"></div>

        <div class="col-xs-1">
            <div id="moviesorting">
                <form action="movies.php" method="GET">
                    <input list="sorting" class="dropdown-toggle" name="moviesorting" id="redborderinput" placeholder=<?php echo'"'.$_GET['moviesorting'].'"' ?>>
                    <datalist id="sorting">
                        <option id="redborderinput" value="Alphabetical">
                        <option id="redborderinput" value="Newest first">
                        <option id="redborderinput" value="Oldest first">
                        <option id="redborderinput" value="Top Rated">
                        <option id="redborderinput" value="Age restriction">
                    </datalist>
                </form>
            </div>
        </div>  
    </div>

<?php
    $sql = 'SELECT * FROM movie '.$searchFor.' ORDER BY '.$sortType.'';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            echo '<div class="row"';
                echo'<div class="col-xs-12" id="movieposter">';

                    echo'<a href="moviepage.php?id='.$row["nameMovie"].'">';
                    echo'<img class="movie" src="Images/Carousel/'.$row["image"].'">';
                    echo '</a>';
            
                    echo'<div class="movieInfocontainer"><div class="movieInfo col-xs-8">';
                        echo '<div class="row">';
                            echo'<h3 id="movietitle">'.$row["nameMovie"].'</h3>';
                        echo '</div>';
                        echo '<div class="row">';
                            echo'<h3 id="movieinfoheader">Running time: <span id="movieinfocontent">1hr 30min</span></h3>';
                        echo '</div>';
                        echo '<div class="row">';
                            echo'<h3 id="movieinfoheader">Release date: <span id="movieinfocontent">14 February</span></h3>';
                        echo '</div>';
                        echo '<div class="row">';
                            echo'<div id="agerestriction">PG V</div>';
                        echo '</div>';
                    echo'</div>';
                    echo'<div class="movierating col-xs-4">';
                        echo'<div class="row">';
                            echo'<div class="col-xs-5 col-xs-offset-2"><img height="70" width="120" src="Images/IMDB/IMDB_Logo.png"/></div>';
                            echo'<div id="movieratingtext" class="col-xs-5">8/10</div>';
                        echo'</div>';
                        echo'<div class="row">';
                            echo'<div id="ratingstars" class="col-xs-12"><span id="ratingstar" class="glyphicon glyphicon-star"><span id="ratingstar" class="glyphicon glyphicon-star"><span id="ratingstar" class="glyphicon glyphicon-star"><span id="ratingstar" class="glyphicon glyphicon-star"><span id="ratingstar" class="glyphicon glyphicon-star-empty"></span></div>';
                        echo'</div>';
                    echo'</div>';
                
                echo'</div></div>';
            echo'</div>';
        }
    }

    $conn->close();
?>
    </body>
</html>