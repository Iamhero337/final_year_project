<?php
    $page='feedback';
    require './components/head.php'; 
    include('./config/db_con.php');
?>
<title>Feedback</title>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require './components/top_nav.php' ?>
    <!-- Topbar End -->
    
    <!-- Navbar Start -->
    <?php require './components/navbar.php' ?>
    <!-- Navbar End -->

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Feedback</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Feedback</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Feedback Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <!-- <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Give your valuable feedback</h5> -->
                <h1 class="display-5 w-50 mx-auto">Give your valuable feedback</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="h-100">
                        <img src="./img/feedback.jpg" class="h-100 w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                    <form method="POST" action="feedback_action.php" enctype="multipart/form-data">
                        <div class="rounded contact-form">
                            <div class="mb-4">
                                <input type="text" class="form-control p-3" name="name" placeholder="Your Name">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control p-3" name="phone_number" placeholder="Phone Number">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control p-3" name="email" placeholder="Your Email">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control p-3" name="feedback_title" placeholder="Feedback Title">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control p-3" rows="6" cols="10" name="feedback_details" placeholder="Feedback"></textarea>
                            </div>
                             <input type="submit" name="submit" value="Send Feedback" class="btn btn-primary px-5">
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div> 
    <!-- Contact End -->
    <div class="container-fluid testimonial py-5 bg-light" id="feedback">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Feedback</h5>
                <h1 class="display-5 w-50 mx-auto">What Clients Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay=".5s">
                 <?php
                          // Fetch data from your database and populate the table here
                          // Example:
                          $sql = "SELECT * FROM `feedback` order by id desc";
                          $data = mysqli_query($conn, $sql);
                          $i = 1;
                          while ($result = mysqli_fetch_assoc($data)) {
                          ?>
                <div class="testimonial-item">
                    <div class="testimonial-content rounded mb-4 p-4">
                        <p class="fs-5 m-0"><?php echo $result['feedback_title'] ?></p>
                    </div>
                    <div class="d-flex align-items-center  mb-4" style="padding: 0 0 0 25px;">
                        <div class="position-relative">
                            <img src="img/feedback/feedback1.jpg" class="img-fluid rounded-circle py-2" alt="">
                            <div class="position-absolute" style="top: 33px; left: -25px;">
                                <i class="fa fa-quote-left rounded-pill bg-primary text-dark p-3"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h4 class="mb-0"><?php echo $result['username'] ?></h4>
                            <p class="mb-1"><?php echo $result['feedback_details'] ?></p>
                            <div class="d-flex">
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                                <small class="fas fa-star text-primary me-1"></small>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php
                    }
                ?>
            </div>
        </div>
    </div>

     <?php require './components/footer.php' ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
    <?php require './components/scripts.php' ?>
</body>

</html>