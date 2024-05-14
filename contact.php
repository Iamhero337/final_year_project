<?php $page='contact'; require './components/head.php'?>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?php require './components/top_nav.php' ?>
    <!-- Topbar End -->
    
    <!-- Navbar Start -->
    <?php require './components/navbar.php' ?>
    <!-- Navbar End -->

    
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                    <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                    <li class="breadcrumb-item text-white" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
                <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Get In Touch</h5>
                <h1 class="display-5 w-50 mx-auto">Contact for any query</h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="h-100">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235850.27042420284!2d88.18253565744779!3d22.535660583743923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1698202482559!5m2!1sen!2sin"class="border-0 rounded w-100 h-100" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                  <div class="col-lg-6 wow fadeInUp" data-wow-delay=".5s">
                     <form method="POST" action="contact_action.php">
                    <div class="rounded contact-form">
                        <div class="mb-4">
                            <input type="text"  class="form-control p-3" name="name" placeholder="Your Name">
                        </div>
                        <div class="mb-4">
                            <input type="number" class="form-control p-3" name="phone" placeholder="Your Phone Number">
                        </div>
                        <div class="mb-4">
                            <input type="email" class="form-control p-3" name="email" placeholder="Your Email">
                        </div>
                        <div class="mb-4">
                            <input type="text" class="form-control p-3" name="subject" placeholder="Subject">
                        </div>
                        <div class="mb-4">
                            <textarea class="w-100 form-control p-3" name="message" rows="6" cols="10" placeholder="Message"></textarea>
                        </div>
                        <input type="submit" name="submit" value="Send Message" class="btn btn-primary px-5">
                    </div>
                    </form>
                </div>                                 
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay=".3s">
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex bg-light p-3 rounded contact-btn-link">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                            <i class="fa fa-share text-dark"></i>
                        </div>
                        <div class="ms-3 contact-link">
                            <h4 class="text-dark">fallow Us</h4>
                            <div class="d-flex justify-content-center">
                                <a class="pe-2" href="#"><i class="fab fa-facebook-f text-dark"></i></a>
                                <a class="px-2" href="#"><i class="fab fa-twitter text-dark"></i></a>
                                <a class="px-2" href="#"><i class="fab fa-instagram text-dark"></i></a>
                                <a class="px-2" href="#"><i class="fab fa-linkedin-in text-dark"></i></a>
                                <a class="px-2" href="#"><i class="fab fa-youtube text-dark"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex bg-light p-3 rounded contact-btn-link">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                            <i class="fas fa-map-marker-alt text-dark"></i>
                        </div>
                        <div class="ms-3 contact-link">
                            <h4 class="text-dark">Address</h4>
                            <a href="#">
                                <h5 class="text-dark d-inline fs-6">Kolkata, India</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex bg-light p-3 rounded contact-btn-link">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                            <i class="fa fa-phone text-dark"></i>
                        </div>
                        <div class="ms-3 contact-link">
                            <h4 class="text-dark">Call Us</h4>
                            <a class="h5 text-dark fs-6" href="tel:+91 7788778877">+91 7788778877</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex bg-light p-3 rounded contact-btn-link">
                        <div class="d-flex align-items-center justify-content-center bg-primary rounded-circle p-3 ms-3" style="width: 64px; height: 64px;">
                            <i class="fa fa-envelope text-dark"></i>
                        </div>
                        <div class="ms-3 contact-link">
                            <h4 class="text-dark">Email Us</h4>
                            <a class="h5 text-dark fs-6" href="#">simplesolvehub@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


     <?php require './components/footer.php' ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>

    
    <?php require './components/scripts.php' ?>
</body>

</html>