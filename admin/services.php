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
            <h1>Services</h1>
            <div class="btns">
              <a href="./new_services.php" class="btn btn-primary btn-sm" >+ New Services</a>
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
                            <th>Service Name</th>
                            <th>Register Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- data-->

                                <?php 
                                    $sql="SELECT * FROM `service` order by id desc";
                                    $data=mysqli_query($conn,$sql);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data))
                                    {
                                      ?>
                                          <tr>
                                             <td> <?php echo $i;$i++; ?></td>
                                             <td><?php echo $result['category_name']?></td>
                                             <td>
                                                <img src="<?php echo $result['image']?>" height="50" width="50">
                                             </td>
                                             <td><?php echo $result['service_name'] ?></td>
                                              <td><?php echo $result['register_date'] ?></td>

                                             <td>
                                                <div class="btns">
                                                    <?php
                                                        if($result['status']=='Off')
                                                        {
                                                          ?>
                                                             <a href="active_services.php?id=<?php echo $result['id']?>" class="btn btn-success">Service On</a>
                                                          <?php 
                                                        }
                                                        else
                                                        {
                                                          ?>
                                                             <a href="deactive_services.php?id=<?php echo $result['id']?>" class="btn btn-danger">Service Off</a>
                                                          <?php 
                                                        }
                                                      ?>
                                                    <a href="edit_services.php?ed=<?php echo $result['id'] ?>"class="btn btn-warning">Edit</a>
                                                    <a href="delete_services.php?del=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
                                                     <?php
                                                        if($result['highlight']=='Off')
                                                        {
                                                          ?>
                                                             <a href="active_highlight.php?id=<?php echo $result['id']?>" class="btn btn-success">Highlight On</a>
                                                          <?php 
                                                        }
                                                        else
                                                        {
                                                          ?>
                                                             <a href="deactive_highlight.php?id=<?php echo $result['id']?>" class="btn btn-danger">Highlight Off</a>
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