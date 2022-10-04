 <div class="main-panel">
        <div class="content-wrapper">

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Patients</p>
                      <h1 class="mb-0">{{$patients}}</h1>
                    </div>
                    <i class="fa fa-wheelchair" style="font-size:80px;color:orange;"></i>
                  </div>
                  <canvas id="expense-chart" height="80"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Doctors</p>
                      <h1 class="mb-0">{{$doctors}}</h1>
                    </div>
                   <i class="fa fa-stethoscope" style="font-size:80px;color:orange;"></i>
                  </div>
                  <canvas id="budget-chart" height="80"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between justify-content-md-center justify-content-xl-between flex-wrap mb-4">
                    <div>
                      <p class="mb-2 text-md-center text-lg-left">Total Users</p>
                      <h1 class="mb-0">{{$users}}</h1>
                    </div>
                    <i class="fa fa-user-o" style="font-size:80px;color:orange;"></i>
                  </div>
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
              </div>
            </div>
          </div>
         
            
          <div class="row">
            <div class="col-md-12">
              <div class="card">

                <div class="table-responsive pt-3">
                   
                  <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th >ID</th>
                         <th>PATIENT</th>
                        
                          <th>PHONE</th>
                          <th>DATE</th>
                          
                          <th>DOCTOR</th>
                          <th>VIEW</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($days as $appointment) 
                          
                            
                      <tr>
                        <td>{{$appointment->id}}</td>
                        <td>{{$appointment->patient}}</td>
                        <td>{{$appointment->phone}}</td>
                        <td>{{$appointment->date}} {{$appointment->time}}</td>
                        <td>{{$appointment->doctor}}</td>
                        <td> <a  href="{{url('viewappointment')}}" class="btn btn-primary btn-sm btn-icon-text mr-3">
                              View
                              <i class="typcn typcn-eye-outline btn-icon-append"></i>

                            </a></td>
                        
                      </tr>
                       
                      @empty
                        <div class="d-flex justify-content-center">
                      <h3>  No Appointments for Today!</h3>
                    </div>
                     
                     @endforelse
                     
                      
                    </tbody>
                   
                  </table>
                </div>
              </div>
            </div>
          </div>
        

        </div>
       
        <!-- partial -->
      </div>
