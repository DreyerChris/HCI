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
    <body class="white">
        <div id="navbar">
            <div id="iconbar" class="col-xs-3"></div>
            <div class="col-xs-8" id="navbartext">Log In</div>
            <a href="index.php"><div id="closelink" class="col-xs-1"><span class="glyphicon glyphicon-remove"></span></div></a>
        </div>
        <div id="numetrosocialheader" class="col-xs-12">
            
        </div>
        <div id="loginheading" class="col-xs-12">
            <h1 id="orangeheading">Log In</h1>
        </div>
        <form id="loginform">
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