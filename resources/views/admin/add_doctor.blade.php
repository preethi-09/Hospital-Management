

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

          
               <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                   @if(session()->has('message'))
                    <div class="alert alert-success">
                      <button type="button" class="close" data-dismiss="alert">X</button>

                      {{session()->get('message')}}
                  </div>
                    @endif
                  <h4 class="card-title">Add Doctor</h4>
                  <form class="form-sample" method="post" action="{{url('upload_doctor')}}" enctype="multipart/form-data">
                    @csrf
                    <p class="card-description">
                      Personal Information
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="lname" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select name="gender" class="form-control" required>
                              <option value="" disabled selected>Select Gender</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input name="dob" class="form-control" type="date" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Experience</label>
                          <div class="col-sm-9">
                            <input type="number" name="experience" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Age</label>
                          <div class="col-sm-9">
                            <input type="number" name="age" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">specialist</label>
                          <div class="col-sm-9">
                            <select name="specialist" class="form-control" required>
                              <option value="" disabled selected>Select Speciality</option>
                              <option value="General">General</option>
                              <option value="Pediatrics">Pediatrics</option>
                              <option value="Neurology">Neurology</option>
                              <option value="Cardiology">Cardiology</option>
                              <option value="Obstetrics">Obstetrics</option>
                              <option value="Psychiatry">Psychiatry</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Duty</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="duty" class="form-check-input"  id="day" value="Day" checked required>
                                Day
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="duty" class="form-check-input"  id="night" value="Night">
                               Night
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Qualification</label>
                          <div class="col-sm-9">
                            <input type="text" name="qualification" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profile</label>
                          <div class="col-sm-9">
                            <input type="file" name="image" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description">
                      Address
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Address </label>
                          <div class="col-sm-9">
                            <input type="textarea" name="address" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" name="state" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" name="city" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select name="country" class="form-control" required >
                              <option value="" disabled selected>Select Country</option>
                              <option value="India">India</option>
                              <option value="Sri lanka">Sri lanka</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Other Countries">Other Countries</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    
                    </div>
                     <div class="row">
                        <div class="form-group row" style="padding-left: 400px;">
                         
                          <button type="submit" class="btn btn-primary mr-3 ">Submit</button>
                          <a href="{{url()->previous()}}" class="btn btn-light"> Cancel</a>

                          
                        </div>
                      </div>
                  </form>
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

