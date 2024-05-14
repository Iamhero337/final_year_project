<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<?php
session_start();
include('../config/db_con.php');
// Fetch category data for editing
$id = $_REQUEST["edi"];
$sql = "SELECT * FROM `feedback` WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);

// Handle category edit submission
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['name']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $feedback_title = mysqli_real_escape_string($conn, $_POST['feedback_title']);
    $feedback_details = mysqli_real_escape_string($conn, $_POST['feedback_details']);

    $sql = "UPDATE `feedback` SET username='$username', phone_number='$phone_number',email='$email',feedback_title='$feedback_title',feedback_details='$feedback_details' WHERE id='$id'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
    	move_uploaded_file($tempname, $folder);
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "success",
                    title: "Feedback Edit Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "feedback.php";
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
                    title: "Feedback Edit Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "feedback.php";
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
    <?php $page="edit_feedback"; require './assets/components/head.php' ?>
    <title>Edit Feedback</title>
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
            <h1>Edit Feedback</h1>
            <div class="btns">
              <a href="./feedback.php" class="btn btn-danger btn-sm" >Cancel</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
              <div class="col-12">
              <div class="card">  
                  <div class="card-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="rounded contact-form">
                            <div class="mb-4">
                                <input type="text" class="form-control p-3" name="name" placeholder="Your Name" value="<?php echo $result['username'] ?>">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control p-3" name="phone_number" placeholder="Phone Number" value="<?php echo $result['phone_number'] ?>">
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control p-3" name="email" placeholder="Your Email" value="<?php echo $result['email'] ?>">
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control p-3" name="feedback_title" placeholder="Feedback Title" value="<?php echo $result['feedback_title'] ?>">
                            </div>
                            <div class="mb-4">
                                <textarea class="w-100 form-control p-3" rows="6" cols="10" name="feedback_details" placeholder="Feedback"><?php echo $result['feedback_details'] ?></textarea>
                            </div>
                             <input type="submit" name="submit" value="Edit Feedback" class="btn btn-primary px-5">
                        </div>
                    </form>

    
</body>

</html>
