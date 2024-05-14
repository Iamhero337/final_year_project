<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
session_start();
include('../config/db_con.php');

// Handle category edit submission
if (isset($_POST['submit'])) {
    $id = $_POST["id"];
    $categories_name = mysqli_real_escape_string($conn, $_POST['categories_name']);
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "category_image/" . $filename;

    $sql = "UPDATE `categories` SET categories_name='$categories_name', image='$folder' WHERE id='$id'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
    	move_uploaded_file($tempname, $folder);
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "success",
                    title: "Category Edit Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "categories.php";
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
                    title: "Category Edit Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "categories.php";
                });
            });
        </script>
        <?php
    }
}

// Fetch category data for editing
$id = $_REQUEST["ed"];
$sql = "SELECT * FROM `categories` WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $page="edit_category"; require './assets/components/head.php' ?>
    <title>Edit Category</title>
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
            <h1>Edit Category</h1>
            <div class="btns">
              <a href="./categories.php" class="btn btn-danger btn-sm" >Cancel</a>
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
            <label for="category" class="form-label">Category Name</label>
            <input type="text" class="form-control" id="category" name="categories_name" placeholder="Category" value="<?php echo $result['categories_name']; ?>" required="">
        </div>

        <div class="col-md-12 form-group">
            <label for="category" class="form-label">Category Image</label>
            <input type="file" class="form-control" id="category" name="image" placeholder="Category" value="<?php echo $result['image']?>" height="50" width="50"  required="">
        </div>

        <div class="col-12 mt-4">
            <input type="submit" name="submit" value="Edit Category" class="btn btn-primary px-5">
        </div>
    </form>
</body>

</html>
