<?php
    session_start();
    if(isset($_SESSION["id"]) && isset($_SESSION["pwd"]))
    {
        header("Location: index2.php");
    }
    else
    {
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Signup</title>
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

  <script type="text/javascript">
    function validate()
    {
      if(document.signupform.name.value==""){
        alert("Please provide your name!");
        document.signupform.name.focus();
        return false;
      }
      if(document.signupform.email.value==""){
        alert("Please provide your email!");
        document.signupform.email.focus();
        return false;
      }
      if(document.signupform.mobile.value==""||isNaN(document.signupform.mobile.value)||document.signupform.mobile.value.length!=10){
        alert("Please provide mobile number of format ##########!");
        document.signupform.mobile.focus();
        return false;
      }
      if(document.signupform.password.value==""||document.signupform.password.value.length<6){
        alert("Please provide a password of length of atleast 6 characters!");
        document.signupform.password.focus();
        return false;
      }
      return (true);
    }

  </script>

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
          <li><a href="about.php">About</a></li>
          <li><a href="books.php">Books</a></li>
          <li><a href="donate.php">Donate</a></li>
          <li><a href="request.php">Request</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a  href="contact.php">Contact</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a class="active" href="signup.php">Signup</a></li>
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
          <li>Signup</li>
        </ol>
        <h2>Signup</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
            <div class="col-lg-3"> </div>
         

          <div class="col-lg-6">
            <form action="newsignup.php" method="post" role="form"name="signupform"onsubmit="return(validate());" > <!-- add action here -->
              <div class="row">
                <div class="col-md-6 form-group">
                </div>
                <div class="form-group mt-3">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Mobile number" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required> <br>
              </div>
              
                

              <div class="text-center"><button style="background: #E91E63;
                border: 0;
                border-radius: 50px;
                padding: 10px 24px;
                color: #fff;
                transition: 0.4s;" type="submit" name="submit">Signup</button></div>
              
            </form>
          </div>
          
          <div class="col-lg-3"> </div>

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
                <strong>Email:</strong> anushayadav1401@gmail.com<br>
              </p>
  
            </div>
  
            <div class="col-lg-3 col-md-6 footer-info">
              <h3>About ख़ैरात</h3>
              <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
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

<?php
    }
    session_destroy();
?>
