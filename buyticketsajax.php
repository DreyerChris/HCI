<?php
    session_start();
    $_SESSION["cinema"] = $_POST["cinema"];
    $_SESSION["movie"] = $_POST["movie"];
    $_SESSION["date"] = $_POST["date"];
    $_SESSION["time"] = $_POST["time"];
    $_SESSION["numtickets"] = $_POST["numtickets"];
    echo  $_SESSION["cinema"];
echo  $_SESSION["movie"];
echo  $_SESSION["date"];
echo  $_SESSION["time"];
?>