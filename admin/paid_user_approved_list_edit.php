<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
session_start();
include('../config/db_con.php');
// Fetch category data for editing
$id = $_REQUEST["edt"];
$sql = "SELECT * FROM `register` WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);

// Handle category edit submission
if (isset($_POST['submit'])) {
    $full_name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $profession = mysqli_real_escape_string($conn, $_POST['categories_name']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);        
    $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);

    $sql = "UPDATE `register` SET full_name='$full_name',email='$email',pincode='$pincode',mobile_number='$mobile_number' WHERE id='$id'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
    	// move_uploaded_file($tempname, $folder);
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "success",
                    title: "User Details Edit Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "paid_user_approved_list.php";
                });
            });
        </script>
        <?php
    } else {
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "error",
                    title: "User Details Edit Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "paid_user_approved_list.php";
                });
            });
        </script>
        <?php
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $page="paid_user_approved_list_edit"; require './assets/components/head.php' ?>
    <title>Edit User Approved Details</title>
</head>

<body>
	<div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <?php  require './assets/components/navbar.php' ?>
      
      <?php  require './assets/components/sidebar.php' ?>
       <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header d-flex justify-content-between">
            <h1>Edit User Approved Details</h1>
            <div class="btns">
              <a href="./paid_user_approved_list.php" class="btn btn-danger btn-sm" >Cancel</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
              <div class="col-12">
              <div class="card">  
                  <div class="card-body">

                    <form method="POST">
                            <div class="form-group mb-3">
                                <label for="fullname">Full Name</label>
                                <input type="text" class="form-control" id="fullname" name="name" placeholder="Enter your Full Name" value="<?php echo $result['full_name']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo $result['email'] ?>">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="pin">Pincode</label>
                                <input type="text" class="form-control" id="pin" name="pincode" placeholder="Enter your Pincode" value="<?php echo $result['pincode'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="phone">Mobile No.</label>
                                <input type="text" class="form-control" id="phone" name="mobile_number" placeholder="Enter your Mobile No." value="<?php echo $result['mobile_number'] ?> ">
                            
                            </div>
                             <input type="submit" name="submit" value="Update User Details" class="btn btn-primary px-5">
                        </div>
                        </form>

    
</body>

</html>