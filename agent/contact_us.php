<?php
  session_start();
  include('../config/db_con.php');
  if (!isset($_SESSION['UID'])) {
    header('location:index.php');
    die();
  }
?>
<?php $page = "contact_us"; require './assets/components/head.php' ?>
<title>Contact Us</title>
</head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>

      <?php require './assets/components/navbar.php' ?>

      <?php require './assets/components/sidebar.php' ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header d-flex justify-content-between">
            <h1>Contact Us</h1>
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
                      <th class="text-center">#</th>
                      <th>Name</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>Subject</th>
                      <th>Message</th>
                      <th>Register Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    // Fetch data from your database and populate the table here
                    // Example:
                    $sql = "SELECT * FROM `contact_us` order by id desc";
                    $data = mysqli_query($conn, $sql);
                    $i = 1;
                    while ($result = mysqli_fetch_assoc($data)) {
                    ?>
                      <tr>
                        <td><?php echo $i;
                          $i++; ?></td>
                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $result['phone_number'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['subject'] ?></td>
                        <td><?php echo $result['message'] ?></td>
                        <td><?php echo $result['register_date'] ?></td>
                        <td>
                          <div class="btns">
                           
                            <a href="delete_contact_us.php?del=<?php echo $result['id'] ?>" class="btn btn-danger">Delete</a>
                           
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
  <?php require './assets/components/script.php' ?>
  <script>
    let table = new DataTable('#myTable');
  </script>
</body>
</html>
