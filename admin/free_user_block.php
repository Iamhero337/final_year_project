<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
  session_start();
  include('../config/db_con.php');
  $blk = $_GET["blk"];
  $sql = "UPDATE `register` SET auth='1' WHERE id='$blk'";
  $data = mysqli_query($conn, $sql);
  if ($data) { 
  ?>
  <script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Use SweetAlert for success message
        Swal.fire({
            icon: "success",
            title: "Free Approved User Block Successful",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "free_user_approved_list.php";
        });
    });
  </script>
  <?php
  } else {
  ?>
  <script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Use SweetAlert for error message
        Swal.fire({
            icon: "error",
            title: "Free Approved User Block Failed",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "free_user_approved_list.php";
        });
    });
  </script>
  <?php
  }
?>
