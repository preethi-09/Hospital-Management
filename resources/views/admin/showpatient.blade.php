

<!DOCTYPE html>
<html lang="en">

<head>
 @include('admin.css')
</head>
<body>
  
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')

    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
        @include('admin.sidebar')
      <!-- partial:partials/_sidebar.html -->
       
       <div class="col-lg-10 grid-margin stretch-card">

              <div class="card">
                <div class="card-body">
                  <a href="{{url()->previous()}}"> <button style="margin-left: 900px; " class="btn btn-primary">Back</button></a>
                  
                  <h4 class="card-title">Patient Details</h4>
                 
                   
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                           <th>ID</th>
                          <th>PATIENT</th>
                          <th>EMAIL</th>
                          <th>PHONE</th>
                          
                          <th>DOCTOR</th>
                          <th>STATUS</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                       @forelse($data as $key=>$patient)
                        <tr>
                          <td>{{$patient->id}}</td>
                          <td>{{$patient->patient}}</td>
                          <td>{{$patient->email}}</td>
                          <td>{{$patient->phone}}</td>
                          <td>{{$patient->doctor}}</td>
                          <td>{{$patient->status}}</td>
                          
                        </tr>
                        
                      </tbody>

                       @empty
                        <div class="d-flex justify-content-center">
                      <h3 style="color: red;">  No Patients!</h3>
                    </div>

                    @endforelse
                    </table>
                     <div class="d-flex justify-content-center">
                        {!! $data->links() !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
      <!-- partial -->
     
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  @include('admin.script')
 
  <!-- End custom js for this page-->
</body>

</html>

