<?php
include('./config/db_con.php');
session_start();
$mobile_number=$_SESSION['MOBILE'];
?>
<?php $page='home'; require './components/head.php'?>
    <title>Register</title>
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
                    <div class="card-header">Registration Form</div>
                    <div class="card-body">
                        <form method="POST" action="paid_register_action.php">
                            <div class="form-group mb-3">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="name" placeholder="Enter your Full Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="form-group mb-3" >
                                <label for="exampleSelect">Select an Profession</label>
                                <select name="categories_name" id="service" class="form-control" required>
                          <option>Select Service</option>
                          <?php 
                                    $sql="SELECT categories_name FROM `categories` order by id desc";
                                    $data=mysqli_query($conn,$sql);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data))
                                    {
                          ?>
                                      <option value="<?php echo $result['categories_name'] ?>"><?php echo $result['categories_name'] ?></option>
                          <?php
                                    }
                          ?>
                          
                        </select>                        
                        

                            </div>
                            <div class="form-group mb-3">
                                <label for="pin">Pincode</label>
                                <input type="text" class="form-control" id="pin" name="pincode" placeholder="Enter your Pincode" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile No.</label>
                                <input type="text" class="form-control" id="phone" name="mobile_number" placeholder="Enter your Mobile No." value="<?php echo $mobile_number; ?> " required>
                            </div>
                            
                               <br>
                               <input type="submit" name="submit" value="Register" class="btn btn-primary">
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