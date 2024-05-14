<?php
  session_start();
  include('../config/db_con.php');
  if (!isset($_SESSION['UID'])) {
    header('location:index.php');
    die();
  }
?>
<?php $page = "blogs"; require './assets/components/head.php' ?>
<title>Blogs</title>
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
            <h1>Blogs</h1>
            <div class="btns">
              <a href="./new_blogs.php" class="btn btn-primary btn-sm">+ New Blogs</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
            <div class="col-12">
              <div class="table-responsive">
                <table class="table table-striped" id="myTable">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Blog Title</th>
                      <th>Blog Content</th>
                      <th>Blog Image</th>
                      <th>Publish Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM `blog` order by id desc";
                    $data = mysqli_query($conn, $sql);
                    $i = 1;
                    while ($result = mysqli_fetch_assoc($data)) {
                    ?>
                      <tr>
                        <td><?php echo $i;
                          $i++; ?></td>
                        <td><?php echo $result['blog_title'] ?></td>
                        <td><?php echo $result['blog_content'] ?></td>
                        <td>
                          <img src="<?php echo $result['blog_image'] ?>" height="50" width="50">
                        </td>
                        <td><?php echo $result['publish_date'] ?></td>
                        <td>
                          <div class="btns">
                            <?php
                              if($result['status']=='Off')
                              {
                                ?>
                                   <a href="active_blogs.php?id=<?php echo $result['id']?>" class="btn btn-success">On</a>
                                <?php 
                              }
                              else
                              {
                                ?>
                                   <a href="deactive_blogs.php?id=<?php echo $result['id']?>" class="btn btn-danger">Off</a>
                                <?php 
                              }
                            ?>
                            <a href="edit_blogs.php?edt=<?php echo $result['id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="delete_blogs.php?del=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
                            
                          </div>
                        </td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- row end -->

        </section>
      </div>
    </div>
  </div>
  <?php require './assets/components/script.php' ?>
  <script>
    let table = new DataTable('#myTable');
  </script>
</body>

</html>
