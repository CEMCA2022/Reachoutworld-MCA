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
margin-top:-22vh
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


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
             
               <img src="./img/BANNER.png" class="img-fluid" id="slide1">
                <img src="./img/BAN.jpeg"  class="img-fluid" id="slide2">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" >
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
  
                                <!-- <h1 class="display-3 text-white animated slideInDown" style="text-transform: uppercase;">Get ready for the next big thing!!</h1>
                                <p class="fs-5 text-white mb-4 pb-2" style="font-style: italic;">"Reachout programs are the official anouncements that the Gospel has arrived in your country" -<spam style="font-style: initial;">Rev. Chris Oyakhilome D.Sc., D.D</spam></p> -->
                                <div class="btnCover2">     
                               <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" id="btn-radius">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight" id="btn-radius-white">Join Now</a>
                               </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img src="./img/network.jpeg" class="img-fluid" id="slide3">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" >
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">

                                <div class="btnCover">
                                <!-- <h1 class="display-3 text-white animated slideInDown">Penetrating with Truth Campaign in every City</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Using Rhapsody of Realities</p> -->
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" id="btn-radius">Read More</a>
                            <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight" id="btn-radius-white">Join Now</a>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img src="./img/seven.jpeg" class="img-fluid" id="slide3">
        
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" >
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <div class="btnCover">
                              
                            
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" id="btn-radius">Read More</a>
                                <a href="" class="btn btn-light py-md-3 px-md-5 animated slideInRight" id="btn-radius-white">Join Now</a>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5" id="reg-container">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-handshake text-primary mb-4"></i>
                            <h5 class="mb-3">Partnership</h5>
                            <p>Participate and be involved, take action</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="select_reg.php">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-address-card text-primary mb-4"></i>
                            <h5 class="mb-3">Registration</h5>
                            <p style="margin-bottom: 50px;">Everyone matters</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-bullhorn text-primary mb-4"></i>
                            <h5 class="mb-3">Media / Publicity</h5>
                            <p style="margin-bottom: 50px;">Spread the news</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Distribution</h5>
                            <p>Penetration of Rhapsody in every Nation, street and home</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <div id="earth"></div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" id="about-cover">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Reachout World</h1>
                    <p class="mb-4">The Reachout World marks the begining of a global crusade with Rhapsody of Realities in an accountable and effective way.</p>
                    <p class="mb-4">Our aim is to reach 7.5 Billion people across all ages in all 7,139 Languages monthly, with all format, engaging them with God's word.</p>
                    <!-- <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div> -->
                    <a class="btn btn-primary py-3 px-5 mt-2" href="" id="btn-radius">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Gallery</h6>
              
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/p1.JPG" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/p2.JPG" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0"></h5>
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/p3.JPG" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <small class="text-primary"></small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/p4.JPG" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0"></h5>
                            <small class="text-primary"></small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->


    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/row4.png" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;background-color: green;border-width: 0px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;background-color: green;border-width: 0px;">Join Now</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/row4.png" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;border-width: 0px;background-color: green;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;border-width: 0px;background-color: green;">Join Now</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/row4.png" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4" >
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;border-width: 0px;background-color: green;" >Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;background-color: green;border-width: 0px;">Join Now</a>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>



  


   

    



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