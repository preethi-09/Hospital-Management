
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
  <!-- Table css -->
   <link href="{{asset('app.css')}}" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>

  <!-- ======= Top Bar ======= -->
   
 

  <!-- ======= End Top Bar ======= -->
	
  <!-- ======= Header ======= -->
    <header id="header" class="">
    <div class="container d-flex align-items-center">

      <a href="" class="logo me-auto"><img src="{{asset('assets/img/hospital.jpg')}}" width="160px" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{url('myappointment')}}">My Appointment</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
       <x-app-layout>
            
            </x-app-layout>

      


    </div>

  </header>

   
  <!-- End Header -->
  		 <section id="appointment" class="appointment section-bg">
       
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-3 col-xs-12">
                            <h4 class="title">My Appointment</h4>
                        </div>
                        <div class="col-sm-9 col-xs-12 text-right">
                            <div class="">
                                <a  class="btn btn-danger" style="background-color: #d9232d; color: #fff" href="{{url()->previous()}}">Back</a>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                           <tr>
                          <th>DOCTOR</th>
                          <th>DATE</th>
                          <th>TIME</th>
                          <th>STATUS</th>
                          <th>CANCEL</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($appoint as $appoints)
                        <tr>
                        
                          <td>{{$appoints->doctor}}</td>
                          <td>{{$appoints->date}}</td>
                          <td>{{$appoints->time}}</td>
                          
                       
                          
                          <td>{{$appoints->status}}</td>
                          <td><a class="fa fa-trash" onclick="return confirm('Are You Sure to delete this?')" href="{{url('cancel_appoint',$appoints->id)}}"></a></td>
                        </tr>
                        @endforeach
                            
                            
                            
                            
                                    
               
            </div>
        </div>
    </div>
</div>





        
    </section>

                 

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
