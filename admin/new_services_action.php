<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    session_start();
    date_default_timezone_set('Asia/Kolkata');
    include("../config/db_con.php");
    if (isset($_POST['submit'])) 
    {
        $categories_name = mysqli_real_escape_string($conn, $_POST['categories_name']);
        $filename = $_FILES['service_image']['name'];
        $tempname = $_FILES['service_image']['tmp_name'];
        $folder = "service_image/" . $filename;
        $service_name= mysqli_real_escape_string($conn, $_POST['service_name']);
        $register_date = date('Y-m-d');
        $sql = "INSERT INTO `service`(`id`, `category_name`, `image`, `service_name`, `register_date`, `status`, `highlight`) VALUES ('','$categories_name','$folder','$service_name','$register_date','On','Off')";
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
