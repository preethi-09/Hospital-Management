

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
                   @if(session()->has('message'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">X</button>

                      {{session()->get('message')}}
                  </div>
                    @endif
                      <a href="{{url()->previous()}}"> <button style="margin-left: 900px; " class="btn btn-primary">Back</button></a>
                  <h4 class="card-title">Doctor Details</h4>
                 
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>PROFILE</th>
                          <th>NAME</th>
                          <th>SPECIALIST</th>
                          <th>QUALIFICATION</th>
                          <th>EXPERIENCE</th>
                          <th>ACTION</th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                       @forelse($data as $key=>$doctor)
                        <tr>
                          <td>{{$doctor->id}}</td>
                          <td><img height="100px" width="100px" src="{{asset('doctorimage/'.$doctor->image)}}"></td>
                          <td>{{$doctor->fname}}</td>
                          <td>{{$doctor->specialist}}</td>
                          <td>{{$doctor->qualification}}</td>
                          <td>{{$doctor->experience}}</td>
                          
                          <td>

                          <div class="d-flex align-items-center">
                             <a  href="{{url('view',$doctor->id)}}" class="btn btn-info btn-sm btn-icon-text mr-3">
                              View
                              <i class="typcn typcn-eye-outline btn-icon-append"></i>

                            </a>

                            <a  href="{{url('edit',$doctor->id)}}" class="btn btn-success btn-sm btn-icon-text mr-3" >
                              Edit
                              <i class="typcn typcn-edit btn-icon-append"></i>                          
                            </a>
                             <a  href="{{url('delete',$doctor->id)}}" class="btn btn-danger btn-sm btn-icon-text" onclick="return confirm('Are you sure you want to delete this?')">
                              Delete
                              <i class="typcn typcn-delete-outline btn-icon-append"></i>

                            </a>
                          

                          </div>
                        </td>
                        </tr>
                       
                        </tbody>
                        @empty
                        <div class="d-flex justify-content-center">
                      <h3 style="color: red;">  No Doctors!</h3>
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
     
      
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- base:js -->
  @include('admin.script')
  <!-- End custom js for this page-->
</body>

</html>

