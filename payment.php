
<?php
$page = 'home';
require './components/head.php';
?>
<title>Payment</title>
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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Payment Form</div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="payment_action.php">

                            <div class="form-group mb-3">
                                <label for="fullname">QR Code</label>
                                <img src="https://pbs.twimg.com/media/E3XaIcYWQAUvOAh.png" alt="" class="img-fluid">
                            </div>
                            <div class="form-group mb-3">
                                <label for="tnx">Transaction ID</label>
                                <input type="text" class="form-control" id="tnx" name="tnx" placeholder="16 digit tnx id" required>
                            </div>
                            <div class="form-group mb-3"><center><b>Or</b></center></div>
                            <div class="form-group mb-3">
                                <label for="screenshot" class="form-label">Upload Screenshot</label>
                                <input type="file" class="form-control" id="image" name="upload_sc" placeholder="Upload Screenshot Image">
                            </div>
                            
                            <div>
                                <input type="submit" name="submit" value="submit" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->


    <!-- Footer Start -->
    
    
    <?php require './components/footer.php'?>
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
    <?php require './components/scripts.php'?>
</body>

</html>