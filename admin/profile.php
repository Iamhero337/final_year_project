<?php
  session_start();
  include('../config/db_con.php');
  if (!isset($_SESSION['UID'])) {
    header('location:index.php');
    die();
  }
?>
<?php $page = ""; require './assets/components/head.php' ?>
<title>Blogs</title>
<style>

.border-0 {
    border: 0!important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: 0.25rem;
}

.profile {
    padding: 80px 0;
    overflow: hidden;
    background: #fff;
}
.mb-2-3, .my-2-3 {
    margin-bottom: 2.3rem;
}

.section-title {
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 10px;
    position: relative;
    display: inline-block;
}
.text-primary {
    color: #ceaa4d !important;
}
.text-secondary {
    color: #15395A !important;
}
.font-weight-600 {
    font-weight: 600;
}
.display-26 {
    font-size: 1.3rem;
}

@media screen and (min-width: 992px){
    .p-lg-7 {
        padding: 4rem;
    }
}
@media screen and (min-width: 768px){
    .p-md-6 {
        padding: 3.5rem;
    }
}
@media screen and (min-width: 576px){
    .p-sm-2-3 {
        padding: 2.3rem;
    }
}
.p-1-9 {
    padding: 1.9rem;
}

.bg-secondary {
    background: #15395A !important;
}
@media screen and (min-width: 576px){
    .pe-sm-6, .px-sm-6 {
        padding-right: 3.5rem;
    }
}
@media screen and (min-width: 576px){
    .ps-sm-6, .px-sm-6 {
        padding-left: 3.5rem;
    }
}
.pe-1-9, .px-1-9 {
    padding-right: 1.9rem;
}
.ps-1-9, .px-1-9 {
    padding-left: 1.9rem;
}
.pb-1-9, .py-1-9 {
    padding-bottom: 1.9rem;
}
.pt-1-9, .py-1-9 {
    padding-top: 1.9rem;
}
.mb-1-9, .my-1-9 {
    margin-bottom: 1.9rem;
}
@media (min-width: 992px){
    .d-lg-inline-block {
        display: inline-block!important;
    }
}
.rounded {
    border-radius: 0.25rem!important;
}

  </style>
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
            <h1>Profile</h1>
            <div class="btns">
              <!-- <a href="./new_blogs.php" class="btn btn-primary btn-sm">+ New Blogs</a> -->
            </div>
          </div>
          <section class="bg-light profile">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                        <div class="card card-style1 border-0">
                            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="...">
                                    </div>
                                    <div class="col-lg-6 px-xl-10">
                                        <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                            <h3 class="h2 text-white mb-0">John mark Doe Kyzer</h3>
                                            <span class="text-primary">Coach</span>
                                        </div>
                                        <ul class="list-unstyled mb-1-9">
                                            <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span> Coach</li>
                                            <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> 10 Years</li>
                                            <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> edith@mail.com</li>
                                            <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Website:</span> www.example.com</li>
                                            <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> 507 - 541 - 4567</li>
                                        </ul>
                                        <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                            <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                            <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 mb-4 mb-sm-5">
                        <div>
                            <span class="section-title text-primary mb-3 mb-sm-4">About Me</span>
                            <p>Edith is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
         

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
