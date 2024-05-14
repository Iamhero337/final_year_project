<?php 
session_start();
  include('../config/db_con.php');
  if(!isset($_SESSION['UID']))
  {
    header('location:index.php');
    die();
  }
?>
<?php $page="services"; require './assets/components/head.php' ?>
<title>Add New Service</title>
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
            <h1>Add New Service</h1>
            <div class="btns">
              <a href="./services.php" class="btn btn-danger btn-sm" >Cancel</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
              <div class="col-12">
              <div class="card">  
                  <div class="card-body">
                    <form class="row g-3" method="POST" action="new_services_action.php" enctype="multipart/form-data">
                      <div class="col-md-12 form-group">
                        <label for="service" class="form-label">Category Name</label>
                        <select name="categories_name" id="service" class="form-control">
                          <option>Select Category</option>
                          <?php 
                                    $sql="SELECT categories_name FROM `categories` order by id desc";
                                    $data=mysqli_query($conn,$sql);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data))
                                    {
                          ?>
                                      <option value="<?php echo $result['categories_name'] ?>"><?php echo $result['categories_name'] ?></option>
                          <?php
                                    }
                          ?>
                          
                        </select>
                      </div>

                      <div class="col-md-12 form-group">
                        <label for="service" class="form-label">Choose Image</label>
                        <input type="file" class="form-control" id="service" name="service_image" placeholder="Service" required="">
                      </div>

                      <div class="col-md-12 form-group">
                        <label for="service" class="form-label">Service Name</label>
                        <input type="text" class="form-control" id="service" name="service_name" placeholder="Service" required="">
                      </div>

                      

                      <div class="col-12 mt-4">
                        <input type="submit" name="submit" value="Add Service" class="btn btn-primary px-5">
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