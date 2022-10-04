  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href=""><img src="{{asset('assets/img/hospital.jpg')}}" style="width: 170px;height: 50px;" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href=""><img src="{{asset('assets/img/hospital.jpg')}}" alt="logo"/></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
             
             <h3> Admin Dashboard</h3>
            </a>

            
          </li>
          
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-date dropdown">
            <a class="nav-link d-flex justify-content-center align-items-center" href="javascript:;">
              <h6 class="date mb-0 ">Today :{{  now()->toDateTimeString() }}</h6>
              <i class="typcn typcn-calendar"></i>
            </a>
          </li>     
        </ul>
       
                                <div class="col-sm-2">
           <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ url('/logout') }}" style="text-decoration: none;" class="linkedin"><button class="fa fa-sign-out btn btn-primary" aria-hidden="true">Logout</button> </a>
           </form>
       </div>

                                
        
                                
                            
        
      </div>
      <div class="container">
   
    <div class="card">
     
      
    </div>
  </div>
    </nav>