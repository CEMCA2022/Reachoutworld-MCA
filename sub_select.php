<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ReachOut World</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
         #logo-img{
    width:110px;
    height:110px;
    margin-top:20px;
  }
  #slide1{
    display:block;
    object-fit: contain;
  }
  #slide3{
  
    object-fit: contain;
    

}
  #slide2{
   display: none; 
    
  }
  .btnCover{
      margin-top: 200px;
  }
  .btnCover1{
      margin-top: 60vh;
  }
  .btnCover2{
      margin-top: 60vh;
  }

#earth {
  width: 380px;
  height: 370px;
  background: url(https://web.archive.org/web/20150807125159if_/http://www.noirextreme.com/digital/Earth-Color4096.jpg);
  border-radius: 50%;
  background-size: 610px;
  box-shadow: inset 8px 36px 80px 36px rgb(0, 0, 0), inset -6px 0 12px 4px rgba(255, 255, 255, 0.3);
  animation-name: rotate;
  animation-duration: 12s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotate;
     -webkit-animation-duration: 12s;
     -webkit-animation-iteration-count: infinite;
     -webkit-animation-timing-function: linear;
}
@keyframes rotate {
  from {
    background-position: 0px 0px;
  }
  to {
    background-position: 610px 0px;
  }
}
@-webkit-keyframes rotate {
  from {
    background-position: 0px 0px;
  }
  to {
    background-position: 610px 0px;
  }
}
  @media (max-width: 992px) and (min-width: 320px){
  #logo-img{
    width:100px;
    height:100px;
    /* margin-top:20px; */
  }
  #slide2{
    display:inline-block;
    width:400px;
    height:400px;
    object-fit: contain;
  }
  #slide1{
   display: none; 

  }
  #slide3{
    width:400px;
    height:380px;
    object-fit: cover;
}
.btnCover2{
      margin-top: 28vh;
  }
  #reg-container{
margin-top:-2vh
  }
  #earth {
  width: 300px;
  height: 300px;
  background: url(https://web.archive.org/web/20150807125159if_/http://www.noirextreme.com/digital/Earth-Color4096.jpg);
  border-radius: 50%;
  background-size: 610px;
  box-shadow: inset 8px 36px 80px 36px rgb(0, 0, 0), inset -6px 0 12px 4px rgba(255, 255, 255, 0.3);
  animation-name: rotate;
  animation-duration: 12s;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  -webkit-animation-name: rotate;
     -webkit-animation-duration: 12s;
     -webkit-animation-iteration-count: infinite;
     -webkit-animation-timing-function: linear;
}
#about-cover{
    margin-top:-40px
}
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0" >
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5" style="background-color:transparent">
            <h2 class="m-0 text-primary"><img src="./img/ROW.png" id="logo-img" /></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse" style="background-color:transparent">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="https://www.reachoutworld.org" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block" style="background-color: green;">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->





    <!-- Service Start -->
    <div class="container-xxl py-5" id="reg-container">
        <div class="container">
            <div class="row g-4">
               <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_arg.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/ROW_AIRPORT.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">AIRPORT ROAD GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
               <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_karu.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowkaru.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">KARU GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_kdmg.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowkdm.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">KORODUMA GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_cbd.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowmimshach.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">CBD GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_loko.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowlokogoma.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">LOKOGOMA GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_pleroma.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowpleroma.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">PLEUROMA GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
               <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_model.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowmodel.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">MODEL GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
               <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_sil.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowsbd.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">SILVERBIRD GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
              <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_nyanya.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rownyanya.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">NYANYA GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_virtuous.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowvirtuous.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">VIRTUOUS GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_ask.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowasokoro.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">ASOKORO GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_garki.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowgarki.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">GARKI GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_wuse.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowwuse.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">WUSE GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="reg_shach.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/rowmimshach.png" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">MIMSHACH GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="registration.html">
                    <div class="service-item text-center pt-3">
                        <div class="p-0">
                            <img class="img-fluid position-relative w-60 h-60" id="slide" src="img/group1.jpeg" alt="" style="margin-top: -20px;" >
                            <p class="mb-3" style="color:#000; font-weight:bold; margin-top:20px;padding:5px; font-size:1.2rem">GARKI GROUP</p>
                          
                        </div>
                    </div>
                    </a>
                </div>
                
                
            </div>

        </div>

                
            </div>
        </div>
    </div>
    <!-- Service End -->


  




  


   

    



    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="background-color: green;border-width:0px"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>