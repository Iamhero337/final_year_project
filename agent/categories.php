<?php 
session_start();
  include('../config/db_con.php');
  if(!isset($_SESSION['UID']))
  {
    header('location:index.php');
    die();
  }
?>
<?php $page="categories"; require './assets/components/head.php' ?>
<title>Categories</title>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <?php  require './assets/components/navbar.php' ?>
      
      <?php  require './assets/components/sidebar.php' ?>
      

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header d-flex justify-content-between">
            <h1>Categories</h1>
            <div class="btns">
              <a href="./new_category.php" class="btn btn-primary btn-sm" >+ New Category</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
              <div class="col-12">
                    <div class="table-responsive">
                      <table class="table table-striped" id="myTable">
                        <thead>                                 
                          <tr>
                            <th class="text-center">
                              #
                            </th>
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- data-->

                                <?php 
                                    $sql="SELECT * FROM `categories` order by id desc";
                                    $data=mysqli_query($conn,$sql);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data))
                                    {
                                      ?>
                                          <tr>
                                             <td> <?php echo $i;$i++; ?></td>
                                             <td><?php echo $result['categories_name']?></td>
                                             <td>
                                                <img src="<?php echo $result['image']?>" height="50" width="50">
                                             </td>
                                             <td>
                                                <div class="btns">
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="delete_categories.php?del=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
                                                    <a href="#" class="btn btn-success">Highlight</a>
                                                </div>
                                             </td>
                                          </tr>
                                      <?php
                                    }
                                ?>
                          
                          <!-- data-->
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
  <?php  require './assets/components/script.php' ?>
  <script>
    let table = new DataTable('#myTable');
  </script>
</body>
</html>