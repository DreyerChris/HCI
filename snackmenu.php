<!DOCTYPE html>
<html>
    <?php session_start(); ?>
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
            <div class="col-xs-10 col-xs-offset-1" id="navbartext"><?php echo $_SESSION["movie"];?> at <?php echo $_SESSION["cinema"];?></div>
            <a href="index.php"><div id="closelink" class="col-xs-1"><span class="glyphicon glyphicon-remove"></span></div></a>
        </div>
        <div id="snacksheadingbar" class="col-xs-12">
            Snacks
        </div>
        <div id="snackgrid">
            <div class="row">
                <a data-toggle="modal" data-target="#combosmodal"><div id="snacklink" class="col-xs-4">
                    <img height="200" width="200" src="Images/Snackmenu/popcorn.png"/><br>
                    Combos
                </div></a>
                <a data-toggle="modal" data-target="#drinksmodal"><div id="snacklink" class="col-xs-4">
                    <img height="200" width="200" src="Images/Snackmenu/drink.png"/><br>
                    Drinks
                </div></a>
                <a data-toggle="modal" data-target="#popcornmodal"><div id="snacklink" class="col-xs-4">
                    <img height="200" width="200" src="Images/Snackmenu/popcorn.png"/><br>
                    Popcorn
                </div></a>
            </div>
            <div class="row">
                <a data-toggle="modal" data-target="#sweetsmodal"><div id="snacklink" class="col-xs-4 col-xs-offset-2">
                    <img height="200" width="200" src="Images/Snackmenu/sweets.png"/><br>
                    Sweets
                </div></a>
                <a data-toggle="modal" data-target="#accessoriesmodal"><div id="snacklink" class="col-xs-4">
                    <img height="200" width="200" src="Images/Snackmenu/glasses.png"/><br>
                    Accessories
                </div></a>
            </div>
        </div>
        <div id="snacktotalbar" class="col-xs-12">
            Total R<span id="totalnumber">0.00</span>
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
                                <div id="snackminus familycombo" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount familycombo" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus familycombo" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-6 col-xs-offset-3">
                                <img height="200" width="200" src="Images/Snackmenu/familycombo.png"/>
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
                    <div id="combo" class="col-xs-6">
                        <div class="row">
                            <div id="amount" class="col-xs-6 col-xs-offset-3">
                                <div id="snackminus couplescombo" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount couplescombo" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus couplescombo" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-6 col-xs-offset-3">
                                <img height="200" width="200" src="Images/Snackmenu/couplecombo.png"/>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Couples Combo
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackdescription" class="col-xs-12">
                                2xMedium Popcorn<br>
                                2xMedium Soda<br>
                                2xSweets
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">320.95</span>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="subtotal" class="col-xs-12">
                        Subtotal R<span id="subtotalamount">0.00</span>  
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" data-dismiss="modal" class="orangebuttonsnackmenu">Confirm</button><br>
                  <button data-dismiss="modal" class="blackghostbuttonsnackmenu">Cancel</button></a>
              </div>
            </div>

            </div>
        </div>
        <div id="drinksmodal" class="modal custom fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Drinks</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus smallsoda" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount smallsoda" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus smallsoda" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="100" width="100" src="Images/Snackmenu/drinkblack.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Small Soda
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackdescription" class="col-xs-12">
                                330 ml
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">12.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus mediumsoda" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount mediumsoda" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus mediumsoda" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="150" width="150" src="Images/Snackmenu/drinkblack.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Medium Soda
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackdescription" class="col-xs-12">
                                645 ml
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">17.95</span>
                            </div>
                        </div>
                    </div>
                  <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus largesoda" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount largesoda" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus largesoda" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/drinkblack.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Large Soda
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackdescription" class="col-xs-12">
                                945 ml
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">24.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus slushie" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount slushie" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus slushie" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/slushie.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Slushie
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackdescription" class="col-xs-12">
                                645 ml
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">21.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus stillwater" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount stillwater" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus stillwater" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/stillwater.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Still Water
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackdescription" class="col-xs-12">
                                500 ml
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">12.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus liptonicetea" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount liptonicetea" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus liptonicetea" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="100" width="200" src="Images/Snackmenu/lipton.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Lipton Ice Tea
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackdescription" class="col-xs-12">
                                500 ml
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">17.95</span>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="subtotal" class="col-xs-12">
                        Subtotal R<span id="subtotalamount soda">0.00</span>  
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" data-dismiss="modal" class="orangebuttonsnackmenu" id="sodaconfirm">Confirm</button><br>
                  <button data-dismiss="modal" class="blackghostbuttonsnackmenu">Cancel</button></a>
              </div>
            </div>

            </div>
        </div>
        <div id="popcornmodal" class="modal custom fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Popcorn</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus smallpopcorn" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount smallpopcorn" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus smallpopcorn" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="100" width="100" src="Images/Snackmenu/popcornblack.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Small Popcorn
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">18.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus mediumpopcorn" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount mediumpopcorn" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus mediumpopcorn" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="150" width="150" src="Images/Snackmenu/popcornblack.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Medium Popcorn
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">22.95</span>
                            </div>
                        </div>
                    </div>
                  <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus largepopcorn" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount largepopcorn" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus largepopcorn" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/popcornblack.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Large Popcorn
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">29.95</span>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="subtotal" class="col-xs-12">
                        Subtotal R<span id="subtotalamount popcorn">0.00</span>  
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" data-dismiss="modal" class="orangebuttonsnackmenu" id="popcornconfirm">Confirm</button><br>
                  <button data-dismiss="modal" class="blackghostbuttonsnackmenu">Cancel</button></a>
              </div>
            </div>

            </div>
        </div>
        <div id="sweetsmodal" class="modal custom fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Sweets</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus astros" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount astros" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus astros" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/astros.jpeg"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Astros
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">35.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus whispers" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount whispers" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus whispers" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/whispers.jpeg"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Whispers
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">38.95</span>
                            </div>
                        </div>
                    </div>
                  <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus mnms" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount mnms" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus mnms" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="140" width="200" src="Images/Snackmenu/mnm.jpg"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                M&amp;M's
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">29.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus winegums" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount winegums" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus winegums" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/winegums.jpeg"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Wine Gums
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">25.95</span>
                            </div>
                        </div>
                    </div>
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus smarties" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount smarties" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus smarties" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/smarties.jpeg"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                Smarties
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">22.95</span>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="subtotal" class="col-xs-12">
                        Subtotal R<span id="subtotalamount">0.00</span>  
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" data-dismiss="modal" class="orangebuttonsnackmenu">Confirm</button><br>
                  <button data-dismiss="modal" class="blackghostbuttonsnackmenu">Cancel</button></a>
              </div>
            </div>

            </div>
        </div>
        <div id="accessoriesmodal" class="modal custom fade" role="dialog">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Accessories</h4>
              </div>
              <div class="modal-body">
                  <div class="row">
                    <div id="combo" class="col-xs-4">
                        <div class="row">
                            <div id="amount" class="col-xs-12">
                                <div id="snackminus glasses" class="col-xs-4">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </div>
                                <div id="snackamount glasses" class="col-xs-4">
                                    0
                                </div>
                                <div id="snackplus glasses" class="col-xs-4">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackimage" class="col-xs-12">
                                <div class="col-xs-12"><img height="200" width="200" src="Images/Snackmenu/glassesblack.png"/></div>
                            </div>
                        </div>
                        <div class="row">
                            <div id="snacktitle" class="col-xs-12">
                                3D Glasses
                            </div>
                        </div>
                        <div class="row">
                            <div id="snackprice" class="col-xs-12">
                                R<span id="snackprice">9.95</span>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="row">
                    <div id="subtotal" class="col-xs-12">
                        Subtotal R<span id="subtotalamount">0.00</span>  
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" data-dismiss="modal" class="orangebuttonsnackmenu">Confirm</button><br>
                  <button data-dismiss="modal" class="blackghostbuttonsnackmenu">Cancel</button></a>
              </div>
            </div>

        </div>
        </div>
        <script src="JS/snackmenu.js"></script>
    </body>
</html>