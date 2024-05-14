<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    session_start();
    date_default_timezone_set('Asia/Kolkata');
    include("./config/db_con.php");

    if (isset($_POST['submit'])) 
    {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['phone']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $subject = mysqli_real_escape_string($conn, $_POST['subject']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        $register_date = date('Y-m-d');
        $sql = "INSERT INTO `contact_us`(`id`, `name`, `phone_number`, `email`, `subject`, `message`, `register_date`) VALUES ('','$name','$phone_number','$email','$subject','$message','$register_date')";
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
                    title: "Message Send Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "contact.php";
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
                    title: "Message Send Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "contact.php";
                });
            });
        </script>
        <?php
        }
    }
?>
