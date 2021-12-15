<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Books</title>
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
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">khairaat@example.com</a></i>
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
          <li><a href="about.php">About</a></li>
          <li><a class="active" href="books.php">Books</a></li>
          <li><a href="donate.php">Donate</a></li>
          <li><a href="request.php">Request</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a  href="contact.php">Contact</a></li>
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
          <li>Books</li>
        </ol>
        <h2>Books</h2>

      </div>
    </section><!-- End Breadcrumbs -->


<div class="section-title">
  <h2>SELECT THE TYPE OF BOOK YOU NEED</h2>
</div>
<section id="featured" class="featured">
  <div class="container">

    <div class="row">
      <div class="col-lg-4">
        <div class="icon-box">
          <i class="bi bi-card-checklist"></i>
          <h3><a href="academic_books.php">ACADEMIC BOOKS</a></h3>
          <p>Maths, Science, History, take your pick!</p>
        </div>
      </div>
      
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <i class="bi bi-binoculars"></i>
          <h3><a href="nonacademic_books.php">NON ACADEMIC BOOKS</a></h3>
          <p>Classics, Thriller, Romance, whatever you need!</p>
        </div>
      </div>
    </div>

  </div>
</section>



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

        <div class="row">

          <div class="col-lg-6">
            <form action=" " method="post" role="form" class="php-email-form">
              
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

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
                <p>An initiative that aims to make used books readily available to those who need it</p>
                
              </div>
    
            </div>
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