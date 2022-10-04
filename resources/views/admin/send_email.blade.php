

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
        <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-8 ">
              <div class="card">
                <div class="card-body">
                   @if(session()->has('message'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">X</button>

                      {{session()->get('message')}}
                  </div>
                    @endif
                  
                
                  <h4 class="card-title">Send Email</h4>
                  
                  <form method="POST" action="{{url('sendemail',$data->id)}}" class="forms-sample" >
                    @csrf
                    <div class="form-group">
                      <label >Greeting</label>
                      <input type="text" name="greeting" class="form-control" id="greeting"  required>
                    </div>

                      <div class="form-group">
                      <label >Body</label>
                      <input type="text" name="body" class="form-control" id="body"   required>
                      
                    </div>
                    <div class="form-group">
                      <label >Action Text</label>
                      <input type="text" name="actiontext" class="form-control"   required>
                    </div>
                     <div class="form-group">
                      <label>Action Url</label>
                      <input type="text" name="actionurl" class="form-control"  required>
                    </div>
                     <div class="form-group">
                      <label>End Part</label>
                      <input type="text" name="endpart" class="form-control"  required>
                    </div style="padding-left: 400px;">
                   <center>
                    <button type="submit" class="btn btn-primary bn">Send</button>
                    <a href="{{url()->previous()}}" class="btn btn-light"> Cancel</a>
                    </center>
                  </form>
                </div>
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

