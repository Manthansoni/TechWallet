<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Checkout </title>

    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Sunrise Digital">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.png">
    
    <!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/carousel.css" rel="stylesheet">
    <link href="../assets/ionicons-2.0.1/css/ionicons.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Catamaran:400,100,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
session_start();
?>
<nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./"> <i class="ion-cube"></i> TechWallet</a>
          </div>

          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="../home/index.php">Home</a></li>
              <li><a href="../catalog/index.php">Catalog</a></li>
              <li><a href="../blog/index.html">Blog</a></li>
              <li><a href="../gallery/index.html">Gallery</a></li>
              <li class="dropdown">
                <a href="../catalog/index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../cart/index.php">Cart</a></li>
                  <li class="active"><a href="../checkout/index.html">Checkout</a></li>
                  <li><a href="../faq/index.html">FAQ</a></li>
                  <li><a href="../contacts/index.html">Contacts</a></li>
                  <li role="separator" class="divider"></li>
                  <li class="dropdown-header">Variations</li>
                  <li><a href="../home/index.html">Home</a></li>
                  <li><a href="../blog/item-photo.html">Article Photo</a></li>
                  <li><a href="../blog/item-video.html">Article Video</a></li>
                  <li><a href="../blog/item-review.html">Article Review</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../login/index.html"> <i class="ion-android-person"></i> <?php if(isset($_SESSION['name'])){echo "Hello, ".$_SESSION['name'];}else {echo "Login";} ?> </a></li>
              <li><a href="../profile/profile.php">My Profile</a></li>  
              <li><a href="../signup/"> Sign Up</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <hr class="offset-md">

    <div class="box">
      <div class="container">
          <h1>Checkout order</h1>
      </div>
    </div>
    <hr class="offset-md">

    <div class="container">
      <div class="row">
          <div class="col-md-8">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="checkout">
                    <div class="addresses box-select">
                        <h2> 1. Delevery address</h2>
                        <hr class="offset-sm">

                        <address class="box-default sm-padding" data-style="selected">
                            <hr class="offset-sm">

                            <h3 class="no-margin"><i class="ion-ios-person"></i> <?php echo $_SESSION['name'];?></h3>
                            <p>
                                <i class="ion-ios-location"></i> L-4/6/83, Shastrinagar, Naranpura, Ahmedabad
                            </p>

                            <div class="check">
                                <i class="ion-checkmark-round"></i>
                            </div>
                            <hr class="offset-sm">
                        </address>

                        <address class="box-default sm-padding">
                            <hr class="offset-sm">
                            <h3 class="no-margin"><i class="ion-ios-person"></i> <?php echo $_SESSION['name'];?></h3>
                            <p>
                                <i class="ion-ios-location"></i> Government Polytechnic, Sec 26, Gandhinagar
                            </p>

                            <div class="check">
                                <i class="ion-checkmark-round"></i>
                            </div>
                            <hr class="offset-sm">
                        </address>

                        <hr class="offset-sm">
                        <a href="#addaddress" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Add new address
                        </a>
                        <hr class="offset-sm">
                        <div class="collapse" id="collapseExample">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="row group">
                                        <div class="col-sm-4"><h2 class="h4">Choose country</h2></div>
                                        <div class="col-sm-8">
                                          <!-- <input type="text" class="form-control" name="country" value="" required="" placeholder="" /> -->

                                          <div class="group-select justify" tabindex='1'>
                                              <input class="form-control select" id="country" name="country" value="United Kingdom" placeholder="" required="" />

                                              <ul class="dropdown">
                                                <li data-value="Australia">Australia</li>
                                                <li data-value="Canada">Canada</li>
                                                <li data-value="India">India</li>
                                                <li data-value="United Kingdom">United Kingdom</li>
                                                <li data-value=">United States">>United States</li>
                                              </ul>

                                              <div class="arrow bold"><i class="ion-chevron-down"></i></div>
                                          </div>
                                        </div>
                                    </div>

                                    <hr class="offset-sm">
                                    <div class="row">
                                      <div class="col-sm-4">
                                        <p>City</p>

                                        <input type="text" class="form-control input-sm" name="city" value="" required="" placeholder="" />
                                      </div>
                                      <div class="col-sm-4">
                                        <hr class="offset-sm visible-xs">
                                        <p>Street</p>

                                        <input type="text" class="form-control input-sm" name="street" value="" required="" placeholder="" />
                                      </div>
                                      <div class="col-sm-2">
                                        <hr class="offset-sm visible-xs">
                                        <p>Building</p>

                                        <input type="text" class="form-control input-sm" name="bilding" value="" required="" placeholder="" />
                                      </div>
                                      <div class="col-sm-2">
                                        <hr class="offset-sm visible-xs">
                                        <p>Zip</p>

                                        <input type="text" class="form-control input-sm" name="zip" value="" required="" placeholder="" />
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="">
                            Use as billing address
                          </label>
                        </div>

                        <hr class="offset-sm">
                        <hr>
                    </div>

                    <div class="delivery box-select">
                        <h2> 2. Delevery option </h2>
                        <hr class="offset-sm">

                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="box-default sm-padding" data-style="selected">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/shipping/fedex.jpg" title="fedex" alt="fedex" />
                                    <span>&nbsp;&nbsp;2-3 working days</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-default sm-padding">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/shipping/dhl.jpg" title="dhl" alt="dhl" />
                                    <span>&nbsp;&nbsp;5-10 working days</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-default sm-padding">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/shipping/ems.jpg" title="ems" alt="ems" />
                                    <span>&nbsp;&nbsp;5-10 working days</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-default sm-padding">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/shipping/ups.jpg" title="ups" alt="ups" />
                                    <span>&nbsp;&nbsp;12-14 working days</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                        </div>


                        <hr class="offset-sm">
                        <hr>
                    </div>

                    <div class="payment box-select">
                        <h2> 3. Payment </h2>
                        <hr class="offset-sm">
                        
                        <div class="row"> 
                            <div class="col-md-6">
                                <div class="box-default sm-padding" data-style="selected">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/payments/paypal.jpg" title="paypal" alt="paypal" />
                                    <span>&nbsp;&nbsp;0% Service fee</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="box-default sm-padding">
                                    <hr class="offset-sm">
                                    <img src="../assets/img/payments/stripe.jpg" title="stripe" alt="stripe" />
                                    <span>&nbsp;&nbsp;1% Service fee</span>
                                    <div class="check">
                                        <i class="ion-checkmark-round"></i>
                                    </div>
                                    <hr class="offset-sm">
                                </div>
                            </div>
                        </div>


                        <hr class="offset-sm">
                        <hr>
                    </div>

                    <div class="payment box-select">
                        <h2> 4. Remark </h2>
                        <hr class="offset-sm">

                        <textarea name="remark" class="form-control" placeholder="Please, type remark" rows="5"></textarea>
                        <hr class="offset-sm">
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-8 col-md-4">
            <hr class="offset-sm visible-sm">
              <div class="panel panel-default">
                <div class="panel-body">
                  <h2 class="no-margin">Summary</h2>
                  <hr class="offset-md">

                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-xs-6">
                              <p>Subtotal</p>
                              <p>Discount</p>
                              <p>Delivery</p>
                          </div>
                          <div class="col-xs-6">
                              <p><b><?php echo "$ ".$_SESSION['total']; ?></b></p>
                              <p><b>$0</b></p>
                              <p><b>$0</b></p>
                          </div>
                      </div>
                  </div>

                  <div class="checkboxes">
                      <div class="radio">
                          <label>
                              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                              Promotional Codes
                          </label>
                          <hr class="offset-xs">

                          <div class="input-group">
                            <input type="text" class="form-control input-sm" placeholder="Insert code">
                            <span class="input-group-btn">
                              <button class="btn btn-primary btn-sm" type="button">Apply</button>
                            </span>
                          </div><!-- /input-group -->
                          <hr class="offset-sm">
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                          Coupon
                        </label>
                      </div>
                  </div>
                  <hr>

                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-xs-6">
                              <h3 class="no-margin">Total sum</h3>
                          </div>
                          <div class="col-xs-6">
                              <h3 class="no-margin"><?php echo "$ ".$_SESSION['total']; ?></h3>
                          </div>
                      </div>
                  </div>
                  <hr class="offset-md">
                <form action="confirm.php" method="POST">
                <input type="submit" name="confirm" value="CONFIRM ORDER" class="btn btn-primary btn-lg justify">
                </div>
              </div>
          </div>
      </div>
    </div>
    <hr class="offset-lg">
    <hr class="offset-lg">

    <footer>
      <div class="about">
        <div class="container">
          <div class="row">
            <hr class="offset-md">

            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-telephone-outline"></i>
                <h1>24/7 free <br> <span>support</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-star-outline"></i>
                <h1>Low price <br> <span>guarantee</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-gear-outline"></i>
                <h1> Manufacturer???s <br> <span>warranty</span></h1>
              </div>
            </div>
            <div class="col-xs-6 col-sm-3">
              <div class="item">
                <i class="ion-ios-loop"></i>
                <h1> Full refund <br> <span>guarantee</span> </h1>
              </div>
            </div>

            <hr class="offset-md">
          </div>
        </div>
      </div>

      <div class="subscribe">
        <div class="container align-center">
            <hr class="offset-md">

            <h1 class="h3 upp">Join our newsletter</h1>
            <p>Get more information and receive special discounts for our products.</p>
            <hr class="offset-sm">

            <form action="index.php" method="post">
              <div class="input-group">
                <input type="email" name="email" value="" placeholder="E-mail" class="form-control">
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-primary"> Subscribe <i class="ion-android-send"></i> </button>
                </span>
              </div><!-- /input-group -->
            </form>
            <hr class="offset-lg">
            <hr class="offset-md">

            <div class="social">
              <a href="#"><i class="ion-social-facebook"></i></a>
              <a href="#"><i class="ion-social-twitter"></i></a>
              <a href="#"><i class="ion-social-googleplus-outline"></i></a>
              <a href="#"><i class="ion-social-instagram-outline"></i></a>
              <a href="#"><i class="ion-social-linkedin-outline"></i></a>
              <a href="#"><i class="ion-social-youtube-outline"></i></a>
            </div>


            <hr class="offset-md">
            <hr class="offset-md">
        </div>
      </div>


      <div class="container">
        <hr class="offset-md">

        <div class="row menu">
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Information <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">About</a>
              <a href="#" class="list-group-item">Terms</a>
              <a href="#" class="list-group-item">How to order</a>
              <a href="#" class="list-group-item">Delivery</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Products <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">Laptops</a>
              <a href="#" class="list-group-item">Tablets</a>
              <a href="#" class="list-group-item">Servers</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Support <i class="ion-plus-round hidden-sm hidden-md hidden-lg"></i> </h1>

            <div class="list-group">
              <a href="#" class="list-group-item">Returns</a>
              <a href="#" class="list-group-item">FAQ</a>
              <a href="#" class="list-group-item">Contacts</a>
            </div>
          </div>
          <div class="col-sm-3 col-md-2">
            <h1 class="h4">Location</h1>

            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Language
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a href="#English"> <img src="../assets/img/flags/gb.png" alt="Eng"/> English</a></li>
                <li><a href="#Spanish"> <img src="../assets/img/flags/es.png" alt="Spa"/> Spanish</a></li>
                <li><a href="#Deutch"> <img src="../assets/img/flags/de.png" alt="De"/> Deutch</a></li>
                <li><a href="#French"> <img src="../assets/img/flags/fr.png" alt="Fr"/> French</a></li>
              </ul>
            </div>
            <hr class="offset-xs">

            <div class="dropdown">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Currency
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="#Euro"><i class="ion-social-euro"></i> Euro</a></li>
                <li><a href="#Dollar"><i class="ion-social-usd"></i> Dollar</a></li>
                <li><a href="#Yen"><i class="ion-social-yen"></i> Yen</a></li>
                <li><a href="#Bitcoin"><i class="ion-social-bitcoin"></i> Bitcoin</a></li>
              </ul>
            </div>

          </div>
          <div class="col-sm-3 col-md-3 col-md-offset-1 align-right hidden-sm hidden-xs">
            <h1 class="h4">Unistore, Inc.</h1>

              <address>
                1305 Market Street, Suite 800<br>
                San Francisco, CA 94102<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </address>

              <address>
                <strong>Support</strong><br>
                <a href="mailto:#">sup@example.com</a>
              </address>

          </div>
        </div>
      </div>

      <hr>

      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-9 payments">
            <p>Pay your order in the most convenient way</p>

            <div class="payment-icons">
              <img src="../assets/img/payments/paypal.svg" alt="paypal">
              <img src="../assets/img/payments/visa.svg" alt="visa">
              <img src="../assets/img/payments/master-card.svg" alt="mc">
              <img src="../assets/img/payments/discover.svg" alt="discover">
              <img src="../assets/img/payments/american-express.svg" alt="ae">
            </div>
            <br>

          </div>
          <div class="col-sm-4 col-md-3 align-right align-center-xs">
            <hr class="offset-sm hidden-sm">
            <hr class="offset-sm">
            <p>TechWallet ?? 2016 <br> Designed By <a href="http://sunrise.ru.com/" target="_blank">Sunrise Digital</a></p>
            <hr class="offset-lg visible-xs">
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="Modal-ForgotPassword" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <h4 class="modal-title">Forgot Your Password?</h4>
                  <br>

                  <form class="join" action="index.php" method="post">
                    <input type="email" name="email" value="" placeholder="E-mail" required="" class="form-control" />
                    <br>

                    <button type="submit" class="btn btn-primary btn-sm">Continue</button>
                    <a href="#Sign-In" data-action="Sign-In">Back ></a>
                  </form>
                </div>
                <div class="col-sm-6">
                  <br><br>
                  <p>
                    Enter the e-mail address associated with your account. Click submit to have your password e-mailed to you.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Modal-Gallery" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="ion-android-close"></i></span></button>
            <h4 class="modal-title">Title</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../assets/js/jquery-latest.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/core.js"></script>
    <script src="../assets/js/checkout.js"></script>
    <script src="../assets/js/catalog.js"></script>

    <script type="text/javascript" src="../assets/js/jquery-ui-1.11.4.js"></script>
    <script type="text/javascript" src="../assets/js/jquery.ui.touch-punch.js"></script>
    
  </body>
</html>