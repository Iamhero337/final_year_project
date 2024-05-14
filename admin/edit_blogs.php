<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
session_start();
include('../config/db_con.php');

// Fetch category data for editing
$id = $_REQUEST["edt"];
$sql = "SELECT * FROM `blog` WHERE id='$id'";
$data = mysqli_query($conn, $sql);
$result = mysqli_fetch_assoc($data);

// Handle category edit submission
if (isset($_POST['submit'])) {
    $blog_title = mysqli_real_escape_string($conn, $_POST['blog_title']);
    $blog_content = mysqli_real_escape_string($conn, $_POST['blog_content']);
    $filename = $_FILES['blog_image']['name'];
    $tempname = $_FILES['blog_image']['tmp_name'];
    $folder = "blog_image/" . $filename;

    $sql = "UPDATE `blog` SET `blog_title`='$blog_title',`blog_content`='$blog_content',`blog_image`='$folder' WHERE id='$id'";
    $data = mysqli_query($conn, $sql);

    if ($data) {
        move_uploaded_file($tempname, $folder);
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "success",
                    title: "Blogs Edit Successful",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "blogs.php";
                });
            });
        </script>
        <?php
    } else {
        ?>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                Swal.fire({
                    icon: "error",
                    title: "Blogs Edit Failed",
                    showConfirmButton: false,
                    timer: 1500
                }).then(function () {
                    window.location.href = "blogs.php";
                });
            });
        </script>
        <?php
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $page="edit_blogs"; require './assets/components/head.php' ?>
    <title>Edit Blogs</title>
</head>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <?php require './assets/components/navbar.php' ?>
            
            <?php require './assets/components/sidebar.php' ?>
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header d-flex justify-content-between">
                        <h1>Edit Blogs</h1>
                        <div class="btns">
                            <a href="./blogs.php" class="btn btn-danger btn-sm" >Cancel</a>
                        </div>
                    </div>
                    <!-- Row start -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">  
                                <div class="card-body">
                                    <form class="row g-3" method="POST" enctype="multipart/form-data">
                                        <div class="col-md-12 form-group">
                                            <label for="blogs" class="form-label">Blog Title</label>
                                            <input type="text" class="form-control" id="blogs" name="blog_title" placeholder="Blogs" value="<?php echo $result['blog_title'] ?>" required="">
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <label for="blogs" class="form-label">Blog Content</label>
                                            <input type="text" class="form-control" id="blogs" name="blog_content" placeholder="Blogs" value="<?php echo $result['blog_content'] ?>" required="">
                                        </div>

                                        <div class="col-md-12 form-group">
                                            <label for="blogs" class="form-label">Blog Image</label>
                                            <input type="file" class="form-control" id="blogs" name="blog_image" placeholder="Blogs"  value="<?php echo $result['blog_image'] ?>" required="">
                                        </div>

                                        <div class="col-12 mt-4">
                                            <input type="submit" name="submit" value="Edit Blog" class="btn btn-primary px-5">
                                        </div>
                                    </form>               
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
