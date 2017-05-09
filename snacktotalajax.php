<?php
    session_start();
    $_SESSION["snacktotal"] = $_POST["snacktotal"];
    echo $_POST["snacktotal"];
?>