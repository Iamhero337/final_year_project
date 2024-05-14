<?php 
$page='service'; 
require './components/head.php';
include('./config/db_con.php');
$id=$_GET['id'];
$sql=mysqli_query($conn,"SELECT * FROM agent_service where id='$id'");
$data=mysqli_fetch_assoc($sql);
?>
<title>Service Details - Find Your Needed Services</title>
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
            <h1 class="display-2 text-white mb-4 animated slideInDown"><?php echo $data['service_name']; ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="./service.php">Services</a></li>
                    <li class="breadcrumb-item"><a href="./service_option.php"><?php echo $data['service_profession']; ?></a></li>
                    <li class="breadcrumb-item text-white" aria-current="page"><?php echo $data['service_name']; ?></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <div class="container mt-5">
        <div class="row g-4">
            <div class="col-md-5">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./agent/<?php echo $data['service_image']?>" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./agent/<?php echo $data['service_image']?>" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="./agent/<?php echo $data['service_image']?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-md-7">
                <h4><?php echo $data['service_name']; ?></h4>
                <p><?php echo $data['description']; ?></p>
                <p>Time : 10Am to 10Pm</p>
                <p>Call Now : <a class="text-success" href="tel:<?php echo $data['mobile_number']; ?>"><?php echo $data['mobile_number']; ?></a></p>
                <p>Email : <a class="text-success" href="mailto:<?php echo $data['email']; ?>"><?php echo $data['email']; ?></a></p>
                <h5>More Info: </h5>
                <p>Address: <?php echo $data['address']; ?></p>
                
                <!-- <h6>more</h6> -->
            </div>
        </div>
    </div>



    
    <?php require './components/footer.php' ?>
   




    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
    <?php require './components/scripts.php' ?>
    <script>
        var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        });
    </script>
</body>

</html>