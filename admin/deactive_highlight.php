<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
  session_start();
  include('../config/db_con.php');
  $id = $_GET["id"];
  $sql = "update `service` set highlight='Off' WHERE id='$id'";
  $data = mysqli_query($conn, $sql);
  if ($data) { 
  ?>
  <script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Use SweetAlert for success message
        Swal.fire({
            icon: "success",
            title: "Service Highlight Deactive Successful",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "services.php";
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
            title: "Service highlight Deactive Failed",
            showConfirmButton: false,
            timer: 1500
        }).then(function() {
            window.location.href = "services.php";
        });
    });
  </script>
  <?php
  }
?>
