

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
                    <a href="{{url('adminhome')}}"> <button style="margin-left: 900px; " class="btn btn-primary">Back</button></a>
                  <h4 class="card-title">Appointment Details</h4>
                 
                  <div class="table-responsive">
                    <table class="table table-hover" id="example">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>PATIENT</th>
                          <!-- <th>EMAIL</th> -->
                          <th>PHONE</th>
                          <th>DATE</th>
                          
                          <th>DOCTOR</th>
                          <th>STATUS</th>
                          <th>APPROVE</th>
                          <th>CANCEL</th>
                          <th>SEND MAIL</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@forelse($data as $key=>$appoint)
                        <tr>
                          <td>{{$appoint->id}}</td>
                          <td>{{$appoint->patient}}</td>
                          <!-- <td>{{$appoint->email}}</td> -->
                          <td>{{$appoint->phone}}</td>
                          <td>{{$appoint->date}} {{$appoint->time}}</td>
                          
                          <td>{{$appoint->doctor}}</td>
                          <td>{{$appoint->status}}</td>
                          <td><a class="badge badge-success" href="{{url('approved',$appoint->id)}}" >Approve</a></td>
                          <td><a class="badge badge-danger" href="{{url('cancel',$appoint->id)}}" >Cancel</a></td>
                          <td><a class="badge badge-info" href="{{url('emailview',$appoint->id)}}" >Send Mail</a></td>
                        </tr>

                      </tbody>
                       @empty
                        <div class="d-flex justify-content-center">
                      <h3 style="color: red;">  No Appointments!</h3>
                    </div>
                          
                        @endforelse


                    </table>
                      
                      <div class="d-flex justify-content-center">
                        {!! $data->links() !!}
                    </div>
                   <!--   -->
                  </div>
                </div>
              </div>
            </div>
      <!-- partial -->
                        
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

                  
  <!-- base:js -->
  @include('admin.script')
  <!-- End custom js for this page-->
                        



      
</body>


</html>

