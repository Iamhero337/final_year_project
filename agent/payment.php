<?php 
session_start();
  include('../config/db_con.php');
  if(!isset($_SESSION['UID']))
  {
    header('location:index.php');
    die();
  }
?>
<?php $page="payment"; require './assets/components/head.php' ?>
<title>Services</title>
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
            <h1>Payment Details</h1>
            <!-- <div class="btns">
              <a href="./new_services.php" class="btn btn-primary btn-sm" >+ New Service</a>
            </div> -->
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
                            <th>Full Name</th>
                            <th>User Mobile Number</th>
                            <th>Transaction Id</th>
                            <th>Upload Sc</th>
                            <th>Payment Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- data-->

                                <?php
                                    $user_id=$_SESSION['UID'];
                                    $sql="SELECT * FROM `register` where id='$user_id' order by id desc";
                                    $data=mysqli_query($conn,$sql);
                                    $r=mysqli_fetch_assoc($data);
                                    $mobile_number=$r['mobile_number'];


                                    $sql1="SELECT * FROM payment WHERE user_mobile_no='$mobile_number'";
                                    $data1=mysqli_query($conn,$sql1);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data1))
                                    {
                                      
                                      ?>

                                          <tr>
                                            <td> <?php echo $i;$i++; ?></td>
                                            <td><?php echo $r['full_name'] ?></td>
                                            <td><?php echo $result['user_mobile_no'] ?></td>
                                            <td><?php echo $result['transaction_id'] ?></td>
                                            <td>
                                              <img src="../<?php echo $result['upload_sc'] ?>" height="50" width="50">
                                            </td>
                                            <td><?php echo $result['payment_date'] ?></td>
                                            
                                             <td>
                                                <div class="btns">
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="delete_payment.php?del=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
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