<?php 
    session_start();
    include("../config/db_con.php");
    $msg='';
    if (isset($_POST['submit'])) {
      // code...
      $mobile_number= mysqli_real_escape_string($conn,$_POST['mobile_number']);
      $password=mysqli_real_escape_string($conn,$_POST['password']);
      $sql= "SELECT * FROM register WHERE mobile_number='$mobile_number' AND password='$password' AND status='Approved' AND auth='0'";
      $data= mysqli_query($conn, $sql);
      $count=mysqli_num_rows($data);

      if($count>0)
      {
        $res=mysqli_fetch_array($data);
        $_SESSION['UID']=$res['id'];
        header('location:dashboard.php');
        die();
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
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div id="app">
    <section class="section" style="background:url('./../img/login_bg.jpg') no-repeat center center/cover">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">
              <img src="./../img/logo.png" alt="logo" width="100" class="shadow-light rounded-circle">
            </div>
            <div class="card card-primary">
              <div class="card-header"><h4>Login</h4></div>

              <div class="card-body">
                <form method="POST" class="needs-validation" novalidate="">
                      <div class="form-group">
                        <label for="mobile_number">Mobile Number</label>
                        <input id="number" type="number" class="form-control" name="mobile_number" tabindex="1" autofocus required>
                        <div class="invalid-feedback">
                          Please fill in your Mobile Number
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="d-block">
                        	<label for="password" class="control-label">Password</label>
                          <div class="float-right">
                            <a href="forgot_password.php" class="text-small">
                              Forgot Password?
                            </a>
                          </div>
                        </div>
                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                        <div class="invalid-feedback">
                          please fill in your password
                        </div>
                      </div>


                      <div class="form-group">
                        <input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg btn-block" tabindex="4" >
                          <!-- Login
                        </button> -->
                        <!-- <a href="./dashboard.php" class="btn btn-primary btn-lg btn-block" >Login</a> -->
                      </div>
                      <span style="color:red;"><?php echo $msg; ?></span>
                </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>