<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    session_start();
    date_default_timezone_set('Asia/Kolkata');
    include("./config/db_con.php");

    if (isset($_POST['submit'])) 
    {
        $full_name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $profession = mysqli_real_escape_string($conn, $_POST['categories_name']);
        $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
        $password = mysqli_real_escape_string($conn , $_POST['password']);        
        $mobile_number = mysqli_real_escape_string($conn, $_POST['mobile_number']);
        $register_date= date('Y-m-d');
        // $sql = "INSERT INTO `register`(`id`, `full_name`, `username`, `profession`, `pincode`, `password`, `mobile_number`,`register_date`) VALUES ('','$full_name','$username','$profession','$pincode','$password','$mobile_number','$register_date')";
        $sql="INSERT INTO `register`(`id`, `full_name`, `email`, `profession`, `pincode`, `password`, `mobile_number`, `register_date`,`user_type`,`status`) VALUES ('','$full_name','$email','$profession','$pincode','$password','$mobile_number','$register_date','Paid User','Pending')";
        $data = mysqli_query($conn, $sql);
        if ($data) 
        {
        ?>
        <script>
            // Wait for the document to be fully loaded
            document.addEventListener("DOMContentLoaded", function() {
                // Use SweetAlert for success message
                Swal.fire({
                    icon: "success",
                    title: "Register Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "payment.php";
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
                    title: "Register Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "paid_register.php";
                });
            });
        </script>
        <?php
        }
    }
?>
