
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hospital Management</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons --> 

<link href="{{asset('assets/img/top.png')}}" rel="icon"> 

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.9.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->

  @include('user.include.top')

  <!-- ======= End Top Bar ======= -->

  <!-- ======= Header ======= -->
     @include('user.include.header')

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
      @include('user.include.hero')
 <!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
       @include('user.include.featureServices')
   <!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
        <!-- @include('user.include.cta') -->
    <!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
      @include('user.include.aboutus')
   <!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
      <!-- @include('user.include.count') -->
   <!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    @include('user.include.feature')
   <!-- End Features Section -->

    <!-- ======= Services Section ======= -->
       @include('user.include.services')
   <!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
   @include('user.include.appointment')
<!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
      @include('user.include.department')
   <!-- End Departments Section -->

    <!-- ======= Testimonials Section ======= -->
       <!--  -->
    <!-- End Testimonials Section -->

    <!-- ======= Doctors Section ======= -->
      @include('user.include.doctor')
   <!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
      @include('user.include.gallery')
   <!-- End Gallery Section -->

    <!-- ======= Pricing Section ======= -->
       <!-- @include('user.include.pricing') -->
   <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
     <!-- @include('user.include.questions') -->
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
      @include('user.include.contact')
  <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
       @include('user.include.footer')
 <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
