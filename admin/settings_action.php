<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php 
    session_start();
    include("../config/db_con.php");
    if (isset($_POST['submit'])) 
    {
        $id=$_SESSION['UID'];
        $old_pass = mysqli_real_escape_string($conn, $_POST['old_pass']);
        $new_pass = mysqli_real_escape_string($conn, $_POST['new_pass']);
        $con_pass = mysqli_real_escape_string($conn, $_POST['con_pass']);

        if($new_pass!=$old_pass && $con_pass!=$old_pass)
        {
            if($new_pass==$con_pass)
            {

                    $sql = "UPDATE `admin_login` SET `password`='$con_pass' WHERE id='$id'";
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
                                title: "Change Password Successful",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                window.location.href = "settings.php";
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
                                title: "Change Password Failed",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                window.location.href = "settings.php";
                            });
                        });
                    </script>
                    <?php
                    }
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
                                title: "Change Password Failed",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                window.location.href = "settings.php";
                            });
                        });
                    </script>
                    <?php
            }
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
                                title: "Change Password Failed",
                                showConfirmButton: false,
                                timer: 1500
                            }).then(function() {
                                window.location.href = "settings.php";
                            });
                        });
                    </script>
                    <?php
        }



    }
?>
