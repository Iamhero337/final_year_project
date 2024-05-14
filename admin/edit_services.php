<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
session_start();
include('../config/db_con.php');

// Handle category edit submission
if (isset($_POST['submit'])) {
    // $id = $_POST["id"];
    $filename = $_FILES['service_image']['name'];
    $tempname = $_FILES['service_image']['tmp_name'];
    $folder = "service_image/" . $filename;
    $service_name= mysqli_real_escape_string($conn, $_POST['service_name']);

    $sql = "UPDATE `service` SET image='$folder' service_name='$service_name' WHERE id='$id'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
    	move_uploaded_file($tempname, $folder);
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "success",
                    title: "Service Edit Successful",
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
                    title: "Service Edit Failed",
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

// Fetch category data for editing
$id = $_REQUEST["ed"];
$sql = "SELECT * FROM `service` WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $page="edit_services"; require './assets/components/head.php' ?>
    <title>Edit Service</title>
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
            <h1>Edit Service</h1>
            <div class="btns">
              <a href="./services.php" class="btn btn-danger btn-sm" >Cancel</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
              <div class="col-12">
              <div class="card">  
                  <div class="card-body">
    <form class="row g-3" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        <div class="col-md-12 form-group">
        <label for="service" class="form-label">Choose Image</label>
        <input type="file" class="form-control" id="service" name="service_image" placeholder="Service" value="<?php echo $result['image']?>" required="">
      </div>

      <div class="col-md-12 form-group">
        <label for="service" class="form-label">Service Name</label>
        <input type="text" class="form-control" id="service" name="service_name" placeholder="Service" value="<?php echo $result['service_name']; ?>" required="">
      </div>

        <div class="col-12 mt-4">
            <input type="submit" name="submit" value="Update Service" class="btn btn-primary px-5">
        </div>
    </form>
</body>

</html>
