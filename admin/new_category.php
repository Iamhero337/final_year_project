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
<title>Add New Category</title>
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
            <h1>Add New Category</h1>
            <div class="btns">
              <a href="./categories.php" class="btn btn-danger btn-sm" >Cancel</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
              <div class="col-12">
              <div class="card">  
                  <div class="card-body">
                    <form class="row g-3" method="POST" action="new_category_action.php" enctype="multipart/form-data">
                      <div class="col-md-12 form-group">
                        <label for="category" class="form-label">Category Name</label>
                        <input type="text" class="form-control" id="category" name="categories_name" placeholder="Category" required="">
                      </div>

                      <div class="col-md-12 form-group">
                        <label for="category" class="form-label">Category Image</label>
                        <input type="file" class="form-control" id="category" name="image" placeholder="Category" required="">
                      </div>
                      
                      <div class="col-12 mt-4">
                        <input type="submit" name="submit" value="Add Category" class="btn btn-primary px-5">
                      </div>
                    </form>
                  </div>
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