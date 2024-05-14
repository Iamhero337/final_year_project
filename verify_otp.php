<?php
include('./config/db_con.php');
session_start();
$msg='';
$session_otp=$_SESSION['OTP'];
if(isset($_POST['submit']))
{
    $enter_otp=mysqli_real_escape_string($conn,$_POST['enter_otp']);
    if($enter_otp==$session_otp)
    {
        header('location: register.php');
        die();
    }
    else
    {
        $msg="Otp Does Not Match !!";
    }
}

?>
<?php $page='home'; require './components/head.php'?>
    <title>Mobile Number Verification</title>
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
                    <div class="card-header">OTP Verification</div>
                    <div class="card-body">
                        <form method="POST" action="">
                            <div class="form-group mb-3">
                                <label for="fullname">OTP</label>
                                <input type="number" class="form-control" id="otp" name="enter_otp" placeholder="Enter Your OTP" value="<?php echo $session_otp; ?>">
                            </div>
                            
                            <input type="submit" name="submit" value="Verify OTP" class="btn btn-primary">
                            <span style="color:red;"><?php echo $msg; ?></span>
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