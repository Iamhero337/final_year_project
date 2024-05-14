<?php $page="provider"; $page1="pending_provider"; require './assets/components/head.php' ?>
<title>Feedback</title>
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
            <h1>Feedback</h1>
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
                            <th>Category Name</th>
                            <th>Date</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>                                 
                          <tr>
                            <td>
                              1
                            </td>
                            <td>Web Application</td>
                            <td>2018-01-20</td>
                            <td>
                              <div class="btns">
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                                <a href="#" class="btn btn-success">Highlight</a>
                              </div>
                            </td>
                          </tr>
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