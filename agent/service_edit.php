<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
session_start();
include('../config/db_con.php');
// Fetch category data for editing
$id = $_REQUEST["edte"];
$sql = "SELECT * FROM `agent_service` WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);

// Handle category edit submission
if (isset($_POST['submit'])) {
    $service_name = mysqli_real_escape_string($conn, $_POST['service_name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);        
    $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
    $filename = $_FILES['service_image']['name'];
    $tempname = $_FILES['service_image']['tmp_name'];
    $folder = "service_image/" . $filename;

    $sql = "UPDATE `agent_service` SET 
        `service_name`='$service_name',
        `description`='$description',
        `address`='$address',
        `email`='$email',
        `mobile_number`='$mobile_number',
        `service_image`='$folder'
        WHERE id='$id'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
    	move_uploaded_file($tempname, $folder);
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "success",
                    title: "User Details Edit Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "services.php";
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
                    window.location.href = "services.php";
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
    <?php $page="services_edit"; require './assets/components/head.php' ?>
    <title>Edit User Details</title>
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
            <h1>Edit User Details</h1>
            <div class="btns">
              <a href="./services.php" class="btn btn-danger btn-sm" >Cancel</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
              <div class="col-12">
              <div class="card">  
                  <div class="card-body">

                    <form method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="service_name">Service Name</label>
                                <input type="text" class="form-control" id="service_name" name="service_name" placeholder="Enter your Full Name" value="<?php echo $result['service_name']?>">
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" id="description" name="description" placeholder="Enter your Full Name" value="<?php echo $result['description']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter your Full Name" value="<?php echo $result['address']?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?php echo $result['email'] ?>">
                            </div>
 
                            <div class="form-group">
                                <label for="phone">Mobile No.</label>
                                <input type="text" class="form-control" id="phone" name="mobile_number" placeholder="Enter your Mobile No." value="<?php echo $result['mobile_number'] ?> ">
                            
                            </div>
                            <div class="col-md-12 form-group">
                                            <label for="service_image" class="form-label">Service Image</label>
                                            <input type="file" class="form-control" id="service_image" name="service_image" placeholder="image"  value="<?php echo $result['service_image'] ?>" required="">
                                        </div>
                             <input type="submit" name="submit" value="Update User Details" class="btn btn-primary px-5">
                        </div>
                        </form>

    
</body>

</html>