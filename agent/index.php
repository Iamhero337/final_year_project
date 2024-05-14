<?php 
    session_start();
    include("../config/db_con.php");
    $msg='';
    if (isset($_POST['submit'])) {
      // code...
      $mobile_number= mysqli_real_escape_string($conn,$_POST['mobile_number']);
      $password=mysqli_real_escape_string($conn,$_POST['password']);
      $sql= "SELECT * FROM register WHERE mobile_number='$mobile_number' AND password='$password' AND status='Approved' AND auth='0'";
      $sql1= "SELECT * FROM register WHERE mobile_number='$mobile_number' AND password='$password'";
      $data= mysqli_query($conn, $sql);
      $data1= mysqli_query($conn, $sql1);
      $count=mysqli_num_rows($data);
      $count1=mysqli_num_rows($data1);

      if($count>0)
      {
        $res=mysqli_fetch_array($data);
        $_SESSION['UID']=$res['id'];
        header('location:dashboard.php');
        die();
      }else if($count1 > 0){
        $msg = "You Have Successfully Registered. Wait For Admin Verification";
      }
      else
      {
        $msg= "Please Enter Valid Details!";
      }

    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">
        <link rel="shortcut icon" href="./img/fav.png" type="image/x-icon">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;700;800&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
        <!-- Customized Bootstrap Stylesheet -->
        <link href="./../css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="./../css/style.css" rel="stylesheet">
        <link href="./../css/main.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->
<!-- Topbar Start -->
<div class="container-fluid topbar-top bg-primary">
        <div class="container">
            <div class="d-flex justify-content-between topbar py-2">
                <div class="d-flex align-items-center flex-shrink-0 topbar-info">
                    <a href="tel:+919895895589" class="me-4 text-secondary"><i class="fas fa-phone-alt me-2 text-dark"></i>+919641657727</a>
                </div>
                <div class="text-end pe-4 me-4 border-end border-dark search-btn">
                    <div class="search-form">
                        <form method="post" action="service.php">
                            <div class="form-group">
                                <div class="d-flex">
                                    <input type="text" class="form-control border-0 rounded-pill" name="search-input" value="" placeholder="Search Here" required=""/>
                                    <button type="submit" value="Search Now!" class="btn"><i class="fa fa-search text-dark"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center topbar-icon">
                    <a href="./../price.php" class="me-4 text-dark d-flex gap-2 align-items-center"><i class="fa-solid fa-user-plus"></i> Register</a>
                    <a href="./login.php" class="me-4 text-dark d-flex gap-2 align-items-center"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <div class="container-fluid bg-dark" id="nav_bar">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <img src="./../img/logo.png" class="brand_logo logo_bg" alt="">
                </a>
                <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-dark"></span>
                </button>
                <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="./../index.php" class="nav-item nav-link <?php if($page=='home') echo 'active' ?>">Home</a>
                        <a href="./../about.php" class="nav-item nav-link <?php if($page=='about') echo 'active' ?>">About</a>
                        <a href="./../service.php" class="nav-item nav-link <?php if($page=='service') echo 'active' ?>">Services</a>
                        <a href="./../blog.php" class="nav-item nav-link <?php if($page=='blog') echo 'active' ?>">Blog</a>
                        <a href="./../faq.php" class="nav-item nav-link <?php if($page=='faq') echo 'active' ?>">FAQ</a>
                        <a href="./../feedback.php" class="nav-item nav-link <?php if($page=='feedback') echo 'active' ?>">Feedback</a>
                        <a href="./../contact.php" class="nav-item nav-link <?php if($page=='contact') echo 'active' ?>">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    


    <!-- pricing Start -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login Form</div>
                    <div class="card-body">
                        <form method="POST" >
                            <div class="form-group mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="number" class="form-control" id="phone" name="mobile_number" placeholder="Enter your Mobile Number">
                            </div>
                          
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                            </div>
                            <!-- <button type="submit" class="btn btn-primary">Login</button> -->
                            <input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg btn-block" tabindex="4" >
                            <span style="color:red;"><?php echo $msg; ?></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Footer Start -->
    
    
    
    <!-- Footer Start -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay=".3s">
        <div class="container py-5">
            <div class="row g-4 footer-inner">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">About SimpleSolveHub</h4>
                        <p>Our WebSite One Step Solution Provides the Best Services and Solution for Everyone. We Provide Experienced and Certified Provider for all type of Services. We provide service provider in time and our web site is the best website in the world.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Usefull Link</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="btn btn-link ps-0" href="./../index.php"><i class="fa fa-check me-2"></i>Home</a>
                            <a class="btn btn-link ps-0" href="./../about.php"><i class="fa fa-check me-2"></i>About Us</a>
                            <a class="btn btn-link ps-0" href="./../contact.php"><i class="fa fa-check me-2"></i>Contact Us</a>
                            <a class="btn btn-link ps-0" href="./../service.php"><i class="fa fa-check me-2"></i>Our Services</a>
                            <a class="btn btn-link ps-0" href="./../faq.php"><i class="fa fa-check me-2"></i>FAQ</a>
                            <a class="btn btn-link ps-0" href="./../feedback.php"><i class="fa fa-check me-2"></i>Feedback</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Services Link</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Makeup And Beauty</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Office Cleaning</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Car Washing</a>
                            <a class="btn btn-link ps-0" href=""><i class="fa fa-check me-2"></i>Electronics Riper</a>
                            <a class="btn btn-link ps-0" href="./service.php"><i class="fa fa-check me-2"></i>Explore Services</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="text-white fw-bold mb-4">Contact Us</h4>
                        <a href="#" class="btn btn-link w-100 text-start ps-0 pb-3 rounded-0"><i class="fa fa-map-marker-alt me-3"></i>Kolkata, India</a>
                        <a href="tel:+919999999999" class="btn btn-link w-100 text-start ps-0 py-3 rounded-0"><i class="fa fa-phone-alt me-3"></i>+919009009009</a>
                        <a href="mailto:info@gmail.com" class="btn btn-link w-100 text-start ps-0 py-3 rounded-0"><i class="fa fa-envelope me-3"></i>SimpleSolveHub@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
   <!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="./../js/main.js"></script>
</body>

</html>