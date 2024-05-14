<?php
    include('./config/db_con.php');
    session_start();
    $msg='';
        if (isset($_POST['submit']))
        {
          $mobile_number=mysqli_real_escape_string($conn,$_POST['mobile_number']);
          $sql= "SELECT * FROM register WHERE mobile_number='$mobile_number'";
          $data= mysqli_query($conn, $sql);
          $count=mysqli_num_rows($data);

            if($count>0)
            {
               $msg= "You Have Already Registered!";
            }
          else
           {
               $otp = rand(10000, 99999);
               $_SESSION['OTP']=$otp;
               $_SESSION['MOBILE']=$mobile_number;   
               header('location:verify_otp.php');
               die();
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
                    <div class="card-header">Verify Your Mobile Number</div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group mb-3">
                                <label for="fullname">Mobile Number</label>
                                <input type="number" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter Your Mobile Number" required maxlength="10">
                            </div>
                            
                            <input type="submit" name="submit" value="Send OTP" class="btn btn-primary">
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