<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons 
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index2.php">Khairaat</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index2.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index2.php">Home</a></li>
          <li><a class="active" href="about.php">About</a></li>
          <li><a href="books.php">Books</a></li>
          <li><a href="donate.php">Donate</a></li>
          <li><a href="request.php">Request</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
          session_start();
          if(isset($_SESSION["id"]) && isset($_SESSION["pwd"]))
              {
        ?>
        <li><a href="logout.php">Logout</a></li>
        <?php
              }
              else
              {
        ?>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Signup</a></li>
        <?php
              session_destroy();
              }
              
        ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index2.php">Home</a></li>
          <li>About Us</li>
        </ol>
        <h2>About Us</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container">
    
        <div class="section-title">
          <h2>Our Motto</h2>
          <p>Help those in need by donating what they read :)</p>
        </div>
    
      </div>
    </section><!-- End Clients Section -->


    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/b6.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Khairaat welcomes you!</h3>
            <p class="fst-italic">
            We act as middle men between generous donors and grateful recievers of books. We welcome everyone here. 
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i>If you're a donor, looking to donate books to the underprivileged</li>
              <li><i class="bi bi-check-circle"></i>If you're a reciever, looking for free textbooks</li>
              <li><i class="bi bi-check-circle"></i> If you're someone who wishes to join the Khairaat family as a volunteer</li>
            </ul>
            <p>
            If "Education is a right" then isn't it unfair that it's become a privilege? We at Khairaat 
              aim to dissolve this disparity and make it easier for the underprivileged to gain easy and free access 
              to textbooks and other books that they need for their growth and education.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Khairaat has already helped hundreds of people. </p>
        </div>

        <div class="row">

          <div class="col-lg-6">
            <div class="testimonial-item">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Harshul Varshney</h3>
              <h4>Donor</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I was able to easily donate my previous year's textbooks, thanks to Khairaat
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4 mt-lg-0">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Ananya Chopda</h3>
              <h4>Reciever</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Khairaat helped me gain easy and free access to books for my next semester
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Drishtant Maurya</h3>
              <h4>Donor</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                I donated almost all of my old novels. Great service.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Ayush Bansal</h3>
              <h4>Reciever</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Amazing initiative, hats off.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>Akshat Jain</h3>
              <h4>Donor</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                Easy to use platform, very convenient.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="testimonial-item mt-4">
              <img src="assets/img/testimonials/testimonials-6.jpg" class="testimonial-img" alt="">
              <h3>Snigdh Kulsheshtra</h3>
              <h4>Reciever</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
               Very extensive book list. Quite happy.
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="index2.php">Home</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="about.php">About us</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="team.php">Team</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="books.php">Books</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="donate.php">Donate</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="request.php">Request</a></li>
              </ul>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                Jaypee Institute <br>
                Of Information Technology <br>
                Noida- 62, UP<br>
                India <br><br>
                <strong>Phone:</strong> +91 7419170809<br>
                <strong>Email:</strong> khairaat@gmail.com<br>
              </p>
  
            </div>
  
            <div class="col-lg-3 col-md-6 footer-info">
              <h3>About ख़ैरात</h3>
              <p>An initiative that aims to make used books readily available to those who need it.</p>
          
            </div>
  
          </div>
        </div>
      </div>
     <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Eterna</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>