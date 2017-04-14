<!DOCTYPE html>
<html>
    <head>
        <title>Choose your snacks</title>
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
            <div class="col-xs-10 col-xs-offset-1" id="navbartext">Rock Dog at Menlyn Park</div>
            <a href="index.php"><div id="closelink" class="col-xs-1"><span class="glyphicon glyphicon-remove"></span></div></a>
        </div>
        <div id="snacksheadingbar" class="col-xs-12">
            Snacks
        </div>
        <div id="snackgrid">
            <div class="row">
                <a data-toggle="modal" data-target="#combosmodal"><div id="snacklink" class="col-xs-4"></div></a>
                <div id="snacklink" class="col-xs-4"></div>
                <div id="snacklink" class="col-xs-4"></div>
            </div>
            <div class="row">
                <div id="snacklink" class="col-xs-4 col-xs-offset-2"></div>
                <div id="snacklink" class="col-xs-4"></div>
            </div>
        </div>
        <div id="snacktotalbar" class="col-xs-12">
            Total R<span id="totalnumber">250.95</span>
        </div>
        <div id="snackbuttons">
            <button type="submit" class="orangebutton">Continue</button><br>
            <a href="index.php"><button class="ghostbuttonwhite">Skip this step</button></a>
        </div>
        <div id="combosmodal" class="modal custom fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Combos</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div id="combo" class="col-xs-6">
                        <div class="row">
                            <div id="amount" class="col-xs-6 col-xs-offset-3">
                                <div id="snackminus" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-6 col-xs-offset-3">
                                <img src="Images/Favicon/favicon.ico"/>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Family Combo
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackdescription" class="col-xs-12">
                                4xMedium Popcorn<br>
                                4xMedium Soda
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">320.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-6">Combo2</div>
                  </div>
                  <div class="row">
                    <div id="subtotal" class="col-xs-12">
                        Subtotal R<span id="subtotalamount">0.00</span>  
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" data-dismiss="modal" class="orangebutton">Confirm</button><br>
                  <button data-dismiss="modal" class="blackghostbutton">Cancel</button></a>
              </div>
            </div>

            </div>
        </div>
    </body>
</html>