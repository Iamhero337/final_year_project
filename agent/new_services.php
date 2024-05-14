<?php 
session_start();
  include('../config/db_con.php');
  if(!isset($_SESSION['UID']))
  {
    header('location:index.php');
    die();
  }
  $user_id=$_SESSION['UID'];
  $sql=mysqli_query($conn,"select * from register where id='$user_id'");
  $res=mysqli_fetch_array($sql);
  $profession=$res['profession'];
?>
<?php $page="services"; require './assets/components/head.php' ?>
<title>Add New Services</title>
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
                      <div class="col-12 form-group mb-3" >
                        <input type="text" name="profession" value="<?php echo $profession; ?>" hidden>
                          <label for="exampleSelect">Select a Service</label>
                          <select name="service_name" id="service" class="form-control">
                               <option>Select Service</option>
                                <?php 
                                          $sql="SELECT * FROM `service` WHERE category_name='$profession' order by id desc";
                                          $data=mysqli_query($conn,$sql);
                                          $i=1;
                                          while($result=mysqli_fetch_assoc($data))
                                          {
                                ?>
                                <option value="<?php echo $result['service_name'] ?>"><?php echo $result['service_name'] ?></option>
                                <?php
                                          }
                                ?>
                         </select>
                      </div>
                      <div class="col-md-12 form-group">
                        <label for="service" class="form-label">Description</label>
                        <textarea class="form-control" id="service" name="description" rows="4" cols="50" placeholder="Write Something About Your Service"></textarea>
                      </div>
                      <div class="col-md-12 form-group">
                        <label for="service" class="form-label">Address</label>
                        <textarea id="service" name="address" class="form-control" rows="4" cols="50" placeholder="Write Something About Your Address"></textarea>
                      </div>
                      <div class=" col-6 form-group mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
                      </div>
                      
                      <div class=" col-6 form-group">
                                <label for="phone">Mobile Number</label>
                                <input type="number" class="form-control" id="phone" name="mobile_number" placeholder="Enter your Mobile No." value="mobile_number">
                      </div>

                      <div class="col-md-12 form-group">
                        <label for="service" class="form-label">Service Image</label>
                        <input type="file" class="form-control" id="category" name="image" placeholder="Category" required="">
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