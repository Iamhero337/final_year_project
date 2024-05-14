<?php
  session_start();
  include('../config/db_con.php');
  if(!isset($_SESSION['UID']))
  {
    header('location:index.php');
    die();

  }
?>


<?php $page="dashboard"; require './assets/components/head.php' ?>
<title>Dashboard</title>
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
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Service</h4>
                  </div>
                  <div class="card-body">
                    <?php
                       $id=$_SESSION['UID'];
                       echo $data=mysqli_num_rows(mysqli_query($conn,"select * from agent_service where user_id='$id'"));
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Coming Soon</h4>
                  </div>
                  <div class="card-body">
                    0
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Coming Soon</h4>
                  </div>
                  <div class="card-body">
                    0
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Coming Soon</h4>
                  </div>
                  <div class="card-body">
                    0
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Top 5 Service List</h4>
                  <div class="card-header-action">
                    <a href="services.php" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th class="text-center">
                              #
                            </th>
                            <th>Service Image</th>
                            <th>Service Name</th>
                            <th>Description</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            
                      </tr>
                            <?php 
                                    $user_id=$_SESSION['UID'];
                                    $sql="SELECT * FROM `agent_service` where user_id='$user_id' order by id desc limit 4";
                                    $data=mysqli_query($conn,$sql);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data))
                                    {
                                      ?>
                                          <tr>
                                             <td> <?php echo $i;$i++; ?></td>
                                             <td>
                                                <img src="<?php echo $result['service_image']?>" height="50" width="50">
                                             </td>
                                             <td><?php echo $result['service_name']?></td>
                                             <td><?php echo $result['description']?></td>
                                             <td><?php echo $result['email']?></td>
                                             <td><?php echo $result['mobile_number']?></td>
                                             
                                        </tr>
                                      <?php
                                    }
                                ?>     
                    </tbody></table>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
        </section>
      </div>
    </div>
  </div>
  <?php  require './assets/components/script.php' ?>
</body>
</html>