<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    include('./config/db_con.php');
    session_start();
    date_default_timezone_set('Asia/Kolkata');
    $mobile_number = $_SESSION['MOBILE'];
    if (isset($_POST['submit'])) 
    {   
        $transaction_id = mysqli_real_escape_string($conn, $_POST['tnx']);
        $filename = $_FILES['upload_sc']['name'];
        $tempname = $_FILES['upload_sc']['tmp_name'];
        $folder = "payment_image/" . $filename;
        $payment_date= date('Y-m-d');
        $sql = "INSERT INTO `payment`(`id`, `user_mobile_no`, `transaction_id`, `upload_sc`, `payment_date`) VALUES ('','$mobile_number','$transaction_id','$folder','$payment_date')";
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
                    title: "Payment Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "./index.php";
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
                    title: "Payment Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "./index.php";
                });
            });
        </script>
        <?php
        }
    }
?>
