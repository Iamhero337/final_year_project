<?php 
session_start();
  include('../config/db_con.php');
  if(!isset($_SESSION['UID']))
  {
    header('location:index.php');
    die();
  }
?>
<?php $page="banners"; require './assets/components/head.php' ?>
<title>Banners</title>
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
            <h1>Banners</h1>
            <div class="btns">
              <a href="./new_banners.php" class="btn btn-primary btn-sm" >+ New Banners</a>
            </div>
          </div>
          <!-- Row start -->
          <div class="row">
              <div class="col-12">
                    <div class="table-responsive">
                      <table class="table table-striped" id="myTable">
                        <thead>                                 
                          <tr>
                            <th class="text-center">#</th>
                            <th>Image</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <!-- data-->

                                <?php 
                                    $sql="SELECT * FROM `banner` order by id desc";
                                    $data=mysqli_query($conn,$sql);
                                    $i=1;
                                    while($result=mysqli_fetch_assoc($data))
                                    {
                                      ?>
                                          <tr>
                                             <td> <?php echo $i;$i++; ?></td>
                                             
                                                  
                                                <td> 
                                                  <img src="<?php echo $result['banners_image']; ?>" height="100" width="200">
                                                </td>
                                              
                                             <td>
                                                <div class="btns">
                                                     <a href="delete_banners.php?del=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
                                                    
                                                    <?php
                                                      if($result['status']=='0')
                                                       {
                                                         ?>
                                                              <a href="deactive_banners.php?dect=<?php echo $result['id'] ?>" class="btn btn-danger">Deactive</a>
                                                          <?php
                                                       }
                                                       else{
                                                          ?>
                                                               <a href="active_banners.php?act=<?php echo $result['id'] ?>" class="btn btn-success">Active</a>
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