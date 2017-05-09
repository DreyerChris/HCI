<!DOCTYPE html>

<?php
if(!empty($_POST['email']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "numetro";

        $conn = new mysqli($servername, $username, $password,$dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        $sql = "SELECT * FROM user WHERE password = '".$_POST['password']."' AND email = '".$_POST['email']."'";
         $result = $conn->query($sql);
        
         if($result == true)
         {

                session_start();
                $userEmail = $_POST['email'];  
                $_SESSION['email'] = $userEmail;
            header("Location:index.php");
            echo '<script language="javascript">';
            echo 'alert("login succesfull")';
            echo '</script>';
            exit;
          
         }
          else{
            echo '<script language="javascript">';
            echo 'alert("incorrect email and password combination")';
            echo '</script>';
          }
    }

?>
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
    <body class="white">
        <div id="navbar">
            <div id="iconbar" class="col-xs-3"></div>
            <div class="col-xs-8" id="navbartext">Log In</div>
            <a href="index.php"><div id="closelink" class="col-xs-1"><span class="glyphicon glyphicon-remove"></span></div></a>
        </div>
        <div id="numetrosocialheader" class="col-xs-12">
            <img height="120px" width="340px" src="Images/Logos/numetrosocial.png"/>
        </div>
        <div id="loginheading" class="col-xs-12">
            <h1 id="orangeheading">Log In</h1>
        </div>
        <form id="loginform" action="login.php" method="POST">
            <input type="text" name="email" id="forminput" placeholder="Email Address"><br>
            <input type="password" name="password" placeholder="Password" id="forminput" class="lastinput"><br>
            <button type="submit" class="quicklinkbtn">Log In</button>
        </form>
        <a href="index.php"><button class="ghostbuttonblack">Cancel</button></a><br>
        <a id="noaccount" href="signup.php"><span id="blacklink">Don't have an account yet?</span><span id="orangelink"> Sign Up here</span></a>
        <div id="socialfooter">
            <div class="col-xs-4" id="sociallink">
                <img height="80" width="80" src="Images/Social/facebook.png">
            </div>
            <div class="col-xs-4" id="sociallink">
                <img height="85" width="85" src="Images/Social/instagram.png">
            </div>
            <div class="col-xs-4" id="sociallink">
                <img height="85" width="85" src="Images/Social/twitter.png">
            </div>
        </div>
    </body>
</html>