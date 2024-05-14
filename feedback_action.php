<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    session_start();
    date_default_timezone_set('Asia/Kolkata');
    include("./config/db_con.php");

    if (isset($_POST['submit'])) 
    {
        $username = mysqli_real_escape_string($conn, $_POST['name']);
        $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $feedback_title = mysqli_real_escape_string($conn, $_POST['feedback_title']);
        $feedback_details = mysqli_real_escape_string($conn, $_POST['feedback_details']);
        $register_date = date('Y-m-d');
        $sql = "INSERT INTO `feedback`(`id`, `username`, `phone_number`, `email`, `feedback_title`, `feedback_details`, `register_date`) VALUES ('','$username','$phone_number','$email','$feedback_title','$feedback_details','$register_date')";
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
                    title: "Feedback Send Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "feedback.php";
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
                    title: "Feedback Send Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "feedback.php";
                });
            });
        </script>
        <?php
        }
    }
?>
