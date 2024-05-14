<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    session_start();
    include("../config/db_con.php");
    if (isset($_POST['submit'])) 
    {
        $categories_name = mysqli_real_escape_string($conn, $_POST['categories_name']);
        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = "category_image/" . $filename;
        $sql = "INSERT INTO `categories`(`id`, `categories_name`, `image`) VALUES ('','$categories_name','$folder')";
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
                    title: "Category Add Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "new_category.php";
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
                    title: "Category Add Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "new_category.php";
                });
            });
        </script>
        <?php
        }
    }
?>
