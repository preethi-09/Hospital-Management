<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="" class="logo me-auto"><img  src="{{asset('assets/img/hospital.jpg')}}" style="width:170px;" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
         
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>

           </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
           @if(Route::has('login'))
              @auth
              <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
             
          <li><a class="nav-link scrollto" href="{{url('myappointment')}}">My Appointment</a></li>

          
        </ul>
     
      </nav><!-- .navbar -->

        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a><br>
         <x-app-layout>
            
            </x-app-layout>
      
      @else
      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
        <a href="{{route('login')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span> Login</a>
        <a href="{{route('register')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>Register</a>
        @endauth
        @endif
       <!--    -->
 </div>
  
  </header>