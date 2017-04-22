<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="CSS/style.css"/>
         <link rel="stylesheet" href="CSS/Moviestyle.css"/>
         <link rel="stylesheet" href="CSS/contactStyle.css"/>
        <link rel="shortcut icon" href="Images/Favicon/favicon.ico" type="image/ico">
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script src="JS/script.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>

    <body class="contact">
    <div class="row">
        <div id="navbar">
            <div class="col-xs-1" id="burgermenu">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
            <a href="index.php"><div class="col-xs-1" id="backbtn"><span class="glyphicon glyphicon-menu-left"></span></a>
        </div>
        <div class="col-xs-9" id="navbartext">Contact Us</div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="row">     
        <div  class="col-xs-12 ">
            <div class="contactWhite">
                   <div>
                    At Nu Metro, we always want you to have a great<br>
                    time when you're at one of our cinemas, and likewise <br>
                    when you're browsing our app. If you need to give <br>
                    us a call, the number is 0861-CINEMA <br>
                    </div>
                    <div class="number">
                    (+27 86 124 6362) <br>
                    </div>
                    <div>
                    or contacts us using the form below:<br>
                    </div>
            </div>
        </div>
    </div>

    <div class="contactBlack">
        <form class="form-group" action="index.php" method="post">
            <div class="row"><div  class="col-xs-12 "><h2 class="orange">What would you like to do</h2></div></div>
            <div class="row">
                <div  class="col-xs-6 "><input type="radio" name="toDo" value="question" > Ask a question</div>
                <div  class="col-xs-6 "><input type="radio" name="toDo" value="Suggestion"> Offer a suggestion</div>
            </div>
            <div class="row">
                <div  class="col-xs-6 "><input type="radio" name="toDo" value="Compliment"> Compliment us</div>
                <div  class="col-xs-6 "><input type="radio" name="toDo" value="Complaint"> Make a complaint</div><br>
            </div>
            <div class="row"><div  class="col-xs-12 "><h2 class="orange">Regarding</h2></div></div>
            <div class="row">
                <div  class="col-xs-6 "><input type="radio" name="regarding" value="cinema" > A cinema</div>
                <div  class="col-xs-6 "><input type="radio" name="regarding" value="movie"> A particular movie</div><br>
            </div>
            <div class="row">
                <div  class="col-xs-6 "><input type="radio" name="regarding" value="app"> Our app</div>
                <div  class="col-xs-6"><input type="radio" name="regarding" value="other"> Other</div><br>
            </div>

            <div  class="col-xs-1 "></div>
                    <div  class="col-xs-10 ">
                        <select class="form-control" id="cinimaInput">
                        <option>Menlyn Park</option>
                        <option>Boardwalk</option>
                        <option>Canal Walk</option>
                    </select>
                    </div>
            <div  class="col-xs-1 "></div>
            <br>
             <div class="row"><div  class="col-xs-12 "><h2 class="orange">Your details</h2></div></div>
             <div class="row">
                <div  class="col-xs-6 "><input type="text" name="firstname" placeholder="Name"> </div>
                <div  class="col-xs-6 "><input type="number" name="contactNumber" placeholder="Contact number"> </div><br>
            </div>
            <br>
            <div class="row">
                <div  class="col-xs-6 "><input type="email" name="email" placeholder="Email Address"></div><br>
            </div>
            <div class="row"><div  class="col-xs-12 "><h2 class="orange">Message</h2></div></div>
            <div  class="col-xs-1 "></div>
            <div  class="col-xs-10 "><textarea class="form-control" rows="5" id="comment"></textarea></div>
            <div  class="col-xs-1 "></div>
            <br>
            <div class="row">
                <div  class="col-xs-4 "></div>
                <div  class="col-xs-4 "><button type="submit" class="btn contactus">Contact Us</button></div>
                <div  class="col-xs-4 "></div>
            </div>
        </form>
    </div>
</body>