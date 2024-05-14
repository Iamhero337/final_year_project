<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
  session_start();
  include('../config/db_con.php');
  $deact = $_GET["dect"];
  $sql = "UPDATE `agent_service` SET auth='1' WHERE id='$deact'";
  $data = mysqli_query($conn, $sql);
  if ($data) { 
  ?>
  <script>
    // Wait for the document to be fully loaded
    document.addEventListener("DOMContentLoaded", function() {
        // Use SweetAlert for success message
        Swal.fire({
            icon: "success",
            title: "Service Deactive Successful",
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
            title: "Service Deactive Failed",
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
