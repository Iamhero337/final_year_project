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
                    <h4>Total Service Provider</h4>
                  </div>
                  <div class="card-body">
                    <?php
                       echo $data=mysqli_num_rows(mysqli_query($conn,"select * from register"));
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
                    <h4>Total Approved Service Provider</h4>
                  </div>
                  <div class="card-body">
                    <?php
                       echo $data=mysqli_num_rows(mysqli_query($conn,"select * from register where status='Approved'"));
                    ?>
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
                    <h4>Total Pending Service Provider</h4>
                  </div>
                  <div class="card-body">
                    <?php
                       echo $data=mysqli_num_rows(mysqli_query($conn,"select * from register where status='Pending'"));
                    ?>
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
                    <h4>Total Offered Services</h4>
                  </div>
                  <div class="card-body">
                    <?php
                       echo $data=mysqli_num_rows(mysqli_query($conn,"select * from service"));
                    ?>
                  </div>
                </div>
              </div>
            </div>                  
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Approval Pending Service Provider List (Paid)</h4>
                  <div class="card-header-action">
                    <a href="paid_user_pending_list.php" class="btn btn-danger">View More <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tbody><tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Profession</th>
                        <th>Mobile Number</th>
                        <th>Register Date</th>
                        <th>Action</th>
                      </tr>
                      <!-- <tr>
                        <td><a href="#">INV-87239</a></td>
                        <td class="font-weight-600">Kusnadi</td>
                        <td><div class="badge badge-warning">Unpaid</div></td>
                        <td>July 19, 2018</td>
                        <td>
                          <a href="#" class="btn btn-primary">Detail</a>
                        </td>
                      </tr> -->
                        <?php 
                                    $sql="SELECT * FROM `register` WHERE user_type='Paid User' AND status='Pending' order by id desc LIMIT 4";
                                    $data=mysqli_query($conn,$sql);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data))
                                    {
                                      ?>
                                          <tr>
                                             <td> <?php echo $i;$i++; ?></td>
                                             <td><?php echo $result['full_name']?></td>
                                             <td><?php echo $result['profession']?></td>
                                             <td><?php echo $result['mobile_number']?></td>
                                             <td><?php echo $result['register_date']?></td>
                                             <td>
                                              <div>
                                                  <a href="approved_user_from_dash.php?app=<?php echo $result['id'] ?>" class="btn btn-success">Approved</a> 
                                                </div>
                                             </td>
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