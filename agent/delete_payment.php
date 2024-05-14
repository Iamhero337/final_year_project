<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
  session_start();
  include('../config/db_con.php');
  $id = $_GET["del"];
  $sql = "DELETE FROM `payment` WHERE id='$id'";
  $data = mysqli_query($conn, $sql);
  if ($data) { 
  ?>
  <script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Use SweetAlert for success message
        Swal.fire({
            icon: "success",
            title: "Payment Details Deleted Successful",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "payment.php";
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
            title: "Payment Details Delete Failed",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "payment.php";
        });
    });
  </script>
  <?php
  }
?>
