
<?php include('server/server_arg.php') ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ReachOut World | Registration Portal</title>
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
  #form-cover{
      border:1px solid #f4f5f9;
      padding:20px 
  }
  #slide{
   width:500px;
   height:550px
  }
  #slide2{
   display: none; 
    
  }
  .input-container{
display:flex;
justify-content: space-around;

  }
  #input-cover{
      width:250px;
      border-radius: 20px;
  }
  #input-cover-select{
      width:250px;
      justify-content:flex-start;
      align-items: flex-start;
      margin-right:280px
      
  }
  #input{
      border-radius: 4px;
      width:230px;
  }
  #input-lg{
      border-radius: 4px;
      width:500px;
      margin-right:30px
  }
  #submit-btn{
    width:500px;
    padding:10px;
    background-color: green;
    color: #fff;
    border:none;
    outline-style: none;
    margin-left: 20px;
    border-radius: 4px;
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
  .input-container{
display:grid;

  }
  #submit-btn{
    width:200px;
    padding:10px;
    background-color: green;
    color: #fff;
    border:none;
    outline-style: none;
    margin-left: 30px;
    border-radius: 4px;
  }
#reg-page{
    margin-top:-80px
}
#slide-page{
    margin-top:-100px
}
#input-cover-select{
      width:250px;
      justify-content:flex-start;
      align-items: flex-start;
      margin-right:0px
      
  }
  #input-lg{
      border-radius: 4px;
      width:230px;
      margin-right:20px
  }

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
                <a href="index.php" class="nav-item nav-link active">Home</a>
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






    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;" id="slide-page">
                    <div class="position-relative h-100">
                       
                        
                        <img class="img-fluid position-absolute w-100 h-100" src="img/rowsbd.png" alt="" style="object-fit: contain;">
</div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" id="reg-page">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Welcome to Reachout World </h6>
                    <h1 class="mb-4"> Registration Portal</h1>
                    <form  action="reg_sil.php"  method="post">
   
                        <div class="border-1 shadow-lg" id="form-cover">
                            <div class="input-container">
                                <div class="mb-3" id="input-cover-select"> 
                                    <label for="exampleFormControlInput1" class="form-label">Title</label>
                                   <select class="form-select" name="title" aria-label="Default select example"  id="input"s>
                                       <option value="Mr">Mr</option>
                                       <option value="Mrs">Mrs</option>
                                       <option value="Brother">Brother</option>
                                       <option value="Sister">Sister</option>
                                       <option value="Pastor">Pastor</option>
                                       <option value="Deacon">Deacon</option>
                                       <option value="Deaconess">Deaconess</option>
                                       <option value="Evangelist">Evangelist</option>
                                   </select>
                                  </div>
                                 
                            </div>
                        <div class="input-container">
                            <div class="mb-3" id="input-cover"> 
                                <label for="exampleFormControlInput1" class="form-label">First name</label>
                                <input type="text" class="form-control" name="firstname"  value="<?php echo $firstname; ?>"  id="input" placeholder="Enter your first name">
                              </div>
                              <div class="mb-3" id="input-cover"> 
                                <label for="exampleFormControlInput1" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="input" name="lastname"  value="<?php echo $lastname; ?>"   placeholder="Enter your last name">
                              </div>
                        </div>
                        <div class="input-container">
                            <div class="mb-3" id="input-cover"> 
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control"  name="email"  value="<?php echo $email; ?>"  id="input" placeholder="Enter your email address">
                              </div>
                              <div class="mb-3" id="input-cover"> 
                                <label for="exampleFormControlInput1" class="form-label">Mobile phone</label>
                                <input type="number" class="form-control" id="input" name="phone"  value="<?php echo $phone; ?>"   placeholder="Enter your phone number">
                              </div>
                              <div class="mb-3" id="input-cover" style="display:none"> 
                                <label for="exampleFormControlInput1" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="input" name="my_group"  value="SILVERBIRD"  placeholder="Enter your last name">
                              </div>
                        </div>
                        <div class="input-container">
                            
                              <div class="mb-3" id="input-cover-lg"> 
                                <label for="exampleFormControlInput1" class="form-label">Church</label>
                                <select class="form-select" name="church" aria-label="Default select example"  id="input-lg">
                                  <option value="Mr">Select your  church</option>
                                  <option value="Christ Embassy Karu 1">Christ Embassy Karu 1</option>
                                  <option value="Christ Embassy Karu 4">Christ Embassy Karu 4</option>
                                  <option value="Christ Embassy Jikwoyi 2">Christ Embassy Jikwoyi 2</option>
                                
                              </select>
                              </div>
                        </div>
                        <input type="submit" class="form-control" name="send" id="submit-btn">
                    </div>
                    </form>
                  
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


  

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