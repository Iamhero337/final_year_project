<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    session_start();
    include("../config/db_con.php");
    if (isset($_POST['submit'])) 
    {
        $blog_title = mysqli_real_escape_string($conn, $_POST['blog_title']);
        $blog_content = mysqli_real_escape_string($conn, $_POST['blog_content']);
        $filename = $_FILES['blog_image']['name'];
        $tempname = $_FILES['blog_image']['tmp_name'];
        $folder = "blog_image/" . $filename;
        $publish_date = mysqli_real_escape_string($conn, $_POST['publish_date']);
        $sql = "INSERT INTO `blog`(`id`, `blog_title`, `blog_content`, `blog_image`, `publish_date`,`status`) VALUES ('','$blog_title','$blog_content','$folder','$publish_date','Off')";
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
                    title: "Blog Add Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "blogs.php";
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
                    title: "Blog Add Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function() {
                    window.location.href = "blogs.php";
                });
            });
        </script>
        <?php
        }
    }
?>
