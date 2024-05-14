<?php 
include('./config/db_con.php');
?>
<?php $page='service'; require './components/head.php'?>
<title>Home - Find Your Needed Services</title>
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
            <h1 class="display-2 text-white mb-4 animated slideInDown">Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5">
        <div class="container text-center py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Choose Category</h5>
                <!-- <h1 class="display-5">Our Services</h1> -->
            </div>
            <div class="row g-5">
                <?php 
                        $sql="SELECT * FROM `categories` order by id desc";
                        $data=mysqli_query($conn,$sql);
                        $i=1;
                        while($result=mysqli_fetch_assoc($data))
                        {
                ?>
                    <div class="col-xxl-3 col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="bg-light services-item p-2">
                            <div class="d-flex" style="align-items: center; justify-content: center;">
                                <div class="mb-4 services-inner-icon p-1">
                                    <img src="./admin/<?php echo $result['image']?>" height="50" width="50" class="service_img" alt="">
                                </div>
                            </div>
                            <h5 class="mb-3"><?php echo $result['categories_name']?></h5>
                            <a href="./service_option.php?id=<?php echo urlencode($result['categories_name'])?>">
                                <button type="button" class="btn btn-primary border-0 rounded-pill px-3 py-2">View</button>
                            </a>
                        </div>
                    </div>
                <?php 
                        }
                ?>

            </div>
        </div>
    </div>
    <!-- Services End -->
    <?php require './components/footer.php' ?>
   




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
    <?php require './components/scripts.php' ?>
</body>

</html>