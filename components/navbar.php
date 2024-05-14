<div class="container-fluid bg-dark" id="nav_bar">
        <div class="container">
            <nav class="navbar navbar-dark navbar-expand-lg py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <img src="./img/logo.png" class="brand_logo" alt="">
                </a>
                <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-dark"></span>
                </button>
                <div class="collapse navbar-collapse me-n3" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link <?php if($page=='home') echo 'active' ?>">Home</a>
                        <a href="service.php" class="nav-item nav-link <?php if($page=='service') echo 'active' ?>">Services</a>
                        <!-- <a href="blog.php" class="nav-item nav-link <?php if($page=='blog') echo 'active' ?>">Blog</a> -->
                        <a href="contact.php" class="nav-item nav-link <?php if($page=='contact') echo 'active' ?>">Contact</a>
                        <a href="about.php" class="nav-item nav-link <?php if($page=='about') echo 'active' ?>">About</a>
                        <a href="faq.php" class="nav-item nav-link <?php if($page=='faq') echo 'active' ?>">FAQ</a>
                        <a href="feedback.php" class="nav-item nav-link <?php if($page=='feedback') echo 'active' ?>">Feedback</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>