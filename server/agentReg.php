<?php include('server/serverAgent.php') ?>
<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tanadi Discount">
    <meta name="keywords" content="discount">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QualityRice.ng</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">


     <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
     <link rel="manifest" href="/site.webmanifest">




    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/prompt3.css">
   
     <style>
             .error {color:red;
             font-size:6px;}
             #prompt{color:red;
             font-size: 15px}
          </style>

          <style>
          @media screen and (max-width: 600px) {
  .logopix {
           width:150px;
           height:150px
           vertical-align:center;
           align-content: center;
           align-items: center;
           margin-left: 20vw;
          }
}

        #image {

         display: inline-block;
    width: 100%;
    font-size: 4;
    line-height: 0;
    vertical-align: middle;
    background-size: 100%;
    background-position: 50% 50%;
    background-repeat: no-repeat;


        }

        }

     
        </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Offcanvas Menu Section Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>

        <div class="header-configure-area">

            <!-- <a href="#" class="bk-btn">Booking Now</a> -->
        </div>
        <nav class="mainmenu mobile-menu">
            
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="top-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-tripadvisor"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
        <ul class="top-widget">
         <li><i class="fa fa-phone"></i> +2348062585929</li>
         <li><i class="fa fa-envelope"></i> info@qualityrice.ng</li>
        </ul>
    </div>
    <!-- Offcanvas Menu Section End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="top-nav">
            <div class="container">

                </div>
            </div>
        </div>
        <div class="menu-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">


                            <img src="img/qricee.jpeg" alt="logo" class="logopix">



                    </div>
                    <div class="col-lg-10">
                        <div class="nav-menu">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="active"><a href="./index.html"></a></li>
                                    <li><a href="./rooms.html"></a></li>
                                    <li><a href="./about-us.html"></a></li>
                                    <li><a href="./pages.html"></a>
                                        <ul class="dropdown">
                                            <li><a href="./room-details.html"></a></li>
                                            <li><a href="./blog-details.html"></a></li>
                                            <li><a href="#"></a></li>
                                            <li><a href="#"></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="./blog.html"></a></li>
                                    <li><a href="./contact.html"></a></li>
                                </ul>
                            </nav>
                            <div class="nav-right search-switch">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6" style=""  id="image">







                    <div class="hero-text">

                        <h3 style="font-weight:bold;font-size:35px; color:#009900">No 1 Connect for Quality <span style="color:#c6ac2a">RICE</span> at best Price!!!</h3>
                  
 <img src="img/riceBag.jpg" alt="Assset"  style="margin-top: 5vh">


                    </div>
                </div>


                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1" id="loginForm" style="opacity:0.9">
                  <center style="color:red"><?php echo "<div id=\"prompt5\">".$messagesSuccess."</div>"; ?></center>
                    <div class="booking-form" style="background-color:#009900; opacity:0.9">
                        <center><h3 style="font-size:20px;font-weight:bold; color:#ffffff ">Agent Registration Portal</h3></center>
                  <form  action="agentReg.php"  method="post">
                            <div class="check-date">
                                <label for="date-in" style="color:#ffffff">Name:</label>
                                <input type="text" name="name"  value="<?php echo $name; ?>"  placeholder="Full Name" id="date-in" >
                                   <span  class="error1" style="text-align:center;font-size:7px; color:#ffffff"> <?php echo $errname;?></span>
                            </div>
                            <div class="check-date">
                                <label for="date-out" style="color:#ffffff">Email Address:</label>
                                <input type="text" name="email"  value="<?php echo $email; ?>"  placeholder="Email Address"  id="date-out">
                                    <span  class="error1" style="text-align:center;font-size:7px; color:#ffffff"> <?php echo $erremail;?></span>
                            </div>
                            <div class="check-date">
                                <label for="date-out" style="color:#ffffff">System TOKEN:</label>
                                <input type="text" name="token"  value="<?php echo $token; ?>"  placeholder="Please enter your Valid token"  id="date-out">
                                    <span  class="error1" style="text-align:center;font-size:7px; color:#ffffff"> <?php echo $errtoken;?></span>
                            </div>
                            <div class="check-date">
                                <label for="date-out" style="color:#ffffff">Mobile:</label>
                                <input type="number"  name="phone"  value="<?php echo $phone; ?>" placeholder="Phone Number" id="date-out">
                                <span  class="error1" style="text-align:center;font-size:7px; color:#ffffff"> <?php echo $errphone;?></span>
                            </div>
                            <div class="check-date">
                                <label for="date-out" style="color:#ffffff">Password:</label>
                                <input type="password" name="password_1"  value="<?php echo $password_1; ?>" placeholder="Agent Password" id="date-out">
                                <span  class="error1" style="text-align:center;font-size:7px;color:#ffffff"> <?php echo $errpassword_1;?></span>
                            </div>
                            <button type="submit" name="pass" style="border:1px solid #ffffff; color:#ffffff">SUBMIT</button>
                            <!-- <h6 style="text-align:center; font-weight:bold;color:#ebebeb;font-size:10px; padding:10px" id="signUpB"> <a href="#"  style="text-decoration:none;color:gray;">Click here to SignUp</a></h6> -->
                        </form>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1" style="display:none" id="signUpForm">

                    <div class="booking-form">
                        <h3 style="font-size:20px">Sign Up</h3>
                     	<form  action="index.php"  method="post">
                            <div class="check-date">
                                <label for="date-in">Firstname:</label>
                                <input type="text"  id="date-in" name="firstname"  value="<?php echo $first_name; ?>"  required="" >
                                <i class="icon_persons"></i>
                            </div>
                            <span  class="error1" style="text-align:center;font-size:7px; color:red"> <?php echo $errfirst_name;?></span>
                            <div class="check-date">
                                <label for="date-out">Lastname:</label>
                                <input type="text"  id="date-out" name="lastname" value="<?php echo $last_name; ?>"  required="">
                                <i class="icon_persons"></i>
                            </div>
                            <span class="error1" style="text-align:center;font-size:7px; color:red"> <?php echo $errlast_name;?></span>
                            <div class="check-date">
                                <label for="date-out">Wallet Number:</label>
                                <input type="number" id="date-out" name="wallet_number" value="<?php echo $wallet_number; ?>"  required="">
                                <i class="icon_phone"></i>
                            </div>
                             <span class="error1" style="text-align:center;font-size:5px; color:#000000"> <?php echo $errwallet_number;?></span>
                            <div class="check-date">
                                <label for="date-out">Password:</label>
                                <input type="password" id="date-out" name="password_1" value="<?php echo $password_1; ?>"  required="">
                                <i class="icon_lock"></i>
                            </div>
                            <span class="error1" style="font-size:5px;text-align:center; color:#000000"> <h7 style="font-size:5px"><?php echo $errpassword_1;?></h7></span>
                            <div class="check-date">
                                <label for="date-out">Confirm-Password:</label>
                                <input type="password" id="date-out" name="password_2" value="<?php echo $password_2; ?>"  required="">
                                <i class="icon_lock"></i>
                            </div>
                            <span class="error1" style="font-size:5px;text-align:center; color:red"><h7> <?php echo $errpassword_1;?></h7></span>
                            <button type="submit" name="send1" id="signUpButton">create Account</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel" style=" background-color:transparent">
            <!-- <div class="hs-item set-bg" data-setbg="img/Asset2.png"></div> -->
            <!-- <div class="hs-item set-bg" data-setbg="img/hero/hero-2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero/hero-3.jpg"></div> -->
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->

    <!-- Footer Section End -->

    <!-- Search model Begin -->

    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>
