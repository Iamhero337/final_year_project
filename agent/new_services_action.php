<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    session_start();
    include("../config/db_con.php");
    if(!isset($_SESSION['UID']))
  {
    header('location:index.php');
    die();
  }
    if (isset($_POST['submit'])) 
    {
        $user_id=$_SESSION['UID'];
        $profession=mysqli_real_escape_string($conn, $_POST['profession']);
        $service_name = mysqli_real_escape_string($conn, $_POST['service_name']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = "service_image/" . $filename;
        $sql = "INSERT INTO `agent_service`(`id`, `user_id`,`service_profession`, `service_name`, `description`, `address`, `email`, `mobile_number`, `service_image`,`auth`) VALUES ('','$user_id','$profession','$service_name','$description','$address','$email','$mobile_number','$folder','0')";
        $data = mysqli_query($conn, $sql);
        if ($data) 
        {
            move_uploaded_file($tempname, $folder);
        ?>
        <script>
            // Wait for the document to be fully loaded
            document.addEventListener("DOMContentLoaded", function() {
                // Use SweetAlert for success message
                Swal.fire({
                    icon: "success",
                    title: "Service Add Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "new_services.php";
                });
            });
        </script>
        <?php
        } 
        else 
        {
        ?>
        <script>
            // Wait for the document to be fully loaded
            document.addEventListener("DOMContentLoaded", function() {
                // Use SweetAlert for error message
                Swal.fire({
                    icon: "error",
                    title: "Service Add Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "new_services.php";
                });
            });
        </script>
        <?php
        }
    }
?>
