<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to NuMetro!</title>
        <link rel="stylesheet" href="CSS/style.css"/>
        <link rel="shortcut icon" href="Images/Favicon/favicon.ico" type="image/ico">
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous"></script>
        <script                     src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body class="main">
        <div id="navbar">
            <div id="iconbar" class="col-xs-2"></div>
            <div class="col-xs-10" id="navbartext">NuMetro</div>
        </div>
        
        <div id="carouselcontainer">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="Images/Carousel/1.jpg" alt="Chania">
                </div>

                <div class="item">
                  <img src="Images/Carousel/2.jpg" alt="Chania">
                </div>

                <div class="item">
                  <img src="Images/Carousel/3.jpg" alt="Flower">
                </div>

                <div class="item">
                  <img src="Images/Carousel/4.jpg" alt="Flower">
                </div>
                  
                <div class="item">
                  <img src="Images/Carousel/5.jpg" alt="Flower">
                </div>
                  
                <div class="item">
                  <img src="Images/Carousel/6.jpg" alt="Flower">
                </div>
                  
                <div class="item">
                  <img src="Images/Carousel/7.jpg" alt="Flower">
                </div>
              </div>
            </div>
        </div>
        
        <div class="row">
            <div id="loginbar" class="col-xs-12">
                <div id="loginlink" class="col-xs-6">
                    <a href="login.php"><button class="loginlinkbtn">Log In</button></a>
                </div>
                <div id="signuplink" class="col-xs-6">
                    <a href="signup.php"><button class="signuplinkbtn">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="quicklinks" class="col-xs-12">
                <div class="row">
                    <div id="quicklink" class="col-xs-6">
                        <a href="buytickets.php"><button class="quicklinkbtn">Buy Tickets</button></a>
                    </div>
                    <div id="quicklink" class="col-xs-6">
                        <button class="quicklinkbtn">Cinemas</button>
                    </div>
                </div>
                <div class="row">
                    <div id="quicklink" class="col-xs-12">
                        <button class="quicklinkbtn">Movies</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="imagescrolllist">
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/1.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/2.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/3.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/4.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/5.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/6.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/7.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/8.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/9.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/10.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/11.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/12.jpg"/>
            </div>
            <div id="imagescrolllistimagecontainer">
                <img id="imagescrolllistimage" src="Images/ImageScroll/13.jpg"/>
            </div>
        </div>
    </body>
</html>