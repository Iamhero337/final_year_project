<?php $page='home'; require './components/head.php'?>
    <title>Pricing plan</title>
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

    
    


    <!-- pricing Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Pricing</h5>
                <h1 class="display-5 w-50 mx-auto">Affordable Pricing Plan</h1>
            </div>
            <div class="row g-5 justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                    <div class="rounded bg-light pricing-item">
                        <div class="bg-dark py-3 px-5 text-center rounded-top border-bottom border-primary">
                            <h2 class="m-0 text-primary">Standerd</h2>
                        </div>
                        <div class="px-4 py-3 text-center bg-dark pricing-label pricing-featured mb-2">
                            <h1 class="mb-0 text-primary">FREE</span></h1>
                            <!-- <p class="mb-0 text-white">Standard Pest Control</p> -->
                        </div>
                        <div class="p-4 text-center fs-5">
                            <p><i class="fa fa-times text-danger me-2"></i> Highlight Profile With Premium Badge</p>
                            <p><i class="fa fa-times text-danger me-2"></i> Recommendation to Customers</p>
                            <p><i class="fa fa-times text-danger me-2"></i>Notification to the Premium Members</p>
                            <a href="mobile_number_verification.php">
                                
                                <button type="button" class="btn btn-dark border-0 text-primary rounded-pill px-4 py-3 mt-3">Get Started</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                    <div class="rounded bg-light pricing-item">
                        <div class="bg-primary py-3 px-3 text-center rounded-top border-bottom border-dark">
                            <h2 class="m-0">Premium</h2>
                        </div>
                        <div class="px-4 py-3 text-center bg-primary pricing-label mb-2">
                            <h1 class="mb-0">₹ 999<span class="text-secondary fs-5 fw-normal">/Year</span></h1>
                            <!-- <p class="mb-0">Premium Pest Control</p> -->
                        </div>
                        <div class="p-4 text-center fs-5">
                            <p><i class="fa fa-check text-success me-2"></i>Highlight Profile With Premium Badge</p>
                            <p><i class="fa fa-check text-success me-2"></i> Recommendation to Customers</p>
                            <p><i class="fa fa-check text-success me-2"></i>Notification to the Premium Members</p>
                            <a href="paid_mobile_number_verification.php">
                                
                                <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-3">Get Started</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <?php require './components/footer.php'?>
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    <?php require './components/scripts.php'?>
</body>

</html>