<?php 
session_start();
  include('../config/db_con.php');
  if(!isset($_SESSION['UID']))
  {
    header('location:index.php');
    die();
  }
?>
<?php $page="provider";$page1="service"; require './assets/components/head.php' ?>
<title>Service Provider List</title>
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
            <h1>Service Provider List</h1>
            
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
                            <th>Provider Name</th>
                            <th>Service Name</th>
                            <th>Description</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Mobile Number</th>
                            <th>Service Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- data-->

                                <?php 
                                    $sql="SELECT * FROM `agent_service` order by id desc";
                                    $data=mysqli_query($conn,$sql);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data))
                                    {
                                      $provider_name=$result['user_id'];
                                      $sql1="SELECT full_name FROM register WHERE id='$provider_name'";
                                      $data1=mysqli_query($conn,$sql1);
                                      $result1=mysqli_fetch_assoc($data1);
                                      ?>

                                          <tr>
                                             <td> <?php echo $i;$i++; ?></td>

                                             <td><?php echo $result1['full_name'] ?></td>
                                             <td><?php echo $result['service_name']?></td>
                                             <td><?php echo $result['description']?></td>
                                             <td><?php echo $result['address']?></td>
                                             <td><?php echo $result['email']?></td>
                                             <td><?php echo $result['mobile_number']?></td>
                                             <td>
                                                <img src="../agent/<?php echo $result['service_image']?>" height="50" width="50">
                                             </td>
                                             <td>
                                                <div class="btns">
                                                    <a href="#" class="btn btn-warning">Edit</a>
                                                    <a href="delete_service_provider_list.php?del=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
                                                    <?php
                                                      if($result['auth']=='0')
                                                       {
                                                         ?>
                                                              <a href="deactive_service_provider_byadmin.php?dect=<?php echo $result['id'] ?>" class="btn btn-danger">Deactive</a>
                                                          <?php
                                                       }
                                                       else{
                                                          ?>
                                                               <a href="active_service_provider_byadmin.php?act=<?php echo $result['id'] ?>" class="btn btn-success">Active</a>
                                                <?php
                                             }

                                         ?>
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