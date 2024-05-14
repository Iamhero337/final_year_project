<?php 
include('../config/db_con.php');
$page="provider"; 
$page1="blocked1"; 
require './assets/components/head.php' 
?>
<title>Paid User Reject List</title>
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
            <h1>Paid User Reject List</h1>
            <div class="btns">
              <!-- <a href="./new_category.php" class="btn btn-primary btn-sm" >+ New Category</a> -->
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
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Profession</th>
                            <th>Pincode</th>
                            <th>Password</th>
                            <th>Mobile Number</th>
                            <th>Register Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>                                 
                          <?php 
                              $sql="SELECT * FROM `register` WHERE user_type='Paid User' AND status='Reject' order by id desc";
                              $data=mysqli_query($conn,$sql);
                              $i=1;
                              while($result=mysqli_fetch_assoc($data))
                              {
                                ?>
                                 <tr>
                                   <td> <?php echo $i;$i++; ?></td>
                                   <td><?php echo $result['full_name']?></td>
                                   <td><?php echo $result['email'] ?></td>
                                   <td><?php echo $result['profession'] ?></td>
                                   <td><?php echo $result['pincode'] ?></td>
                                   <td><?php echo $result['password'] ?></td>
                                   <td><?php echo $result['mobile_number'] ?></td>
                                   <td><?php echo $result['register_date'] ?></td>    
                                   <td>
                                     <div class="btns">
                                        <a href="delete_pending_user.php?del=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
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
  <?php  require './assets/components/script.php' ?>
  <script>
    let table = new DataTable('#myTable');
  </script>
</body>
</html>