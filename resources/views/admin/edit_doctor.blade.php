

<!DOCTYPE html>
<html lang="en">

<head>
	<base href="/public">
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
                  <h4 class="card-title">Edit Doctor</h4>
                  <form class="form-sample" method="post" action="{{url('editdoctor',$data->id)}}" enctype="multipart/form-data">
                    @csrf
                    <p class="card-description">
                      Personal Information
                    </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">First Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="fname" class="form-control" value="{{$data->fname}}"required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Last Name</label>
                          <div class="col-sm-9">
                            <input type="text" name="lname" value="{{$data->lname}}"  class="form-control" required />
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
                              <option value="{{$data->gender}}">{{$data->gender}}</option>
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
                            <input name="dob" class="form-control" value="{{$data->dob}}" type="date" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Experience</label>
                          <div class="col-sm-9">
                            <input type="number" name="experience" value="{{$data->experience}}" class="form-control"required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Age</label>
                          <div class="col-sm-9">
                            <input type="number" name="age" value="{{$data->age}}" class="form-control" required />
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
                              <option value="{{$data->specialist}}">{{$data->specialist}}</option>
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
                                <input type="radio" name="duty" class="form-check-input" name="membershipRadios" id="day" required value="Day" {{ $data->duty == 'Day' ? 'checked' : '' }} >
                                Day
                              </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" name="duty" class="form-check-input" name="membershipRadios" id="night" value="Night" {{ $data->duty == 'Night' ? 'checked' : '' }}>
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
                            <input type="text" name="qualification" value="{{$data->qualification}}" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Profile</label>
                          <div class="col-sm-9">
                            <img height="100px" width="100px" src="doctorimage/{{$data->image}}">
                            <input type="file" name="image" value="{{$data->image}}"class="form-control"  />
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
                            <input type="textarea" name="address" value="{{$data->address}}"class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">State</label>
                          <div class="col-sm-9">
                            <input type="text" name="state" value="{{$data->state}}" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Phone</label>
                          <div class="col-sm-9">
                            <input type="text" name="phone" value="{{$data->phone}}" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="email" name="email" value="{{$data->email}}" class="form-control" required />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">City</label>
                          <div class="col-sm-9">
                            <input type="text" name="city" value="{{$data->city}}" class="form-control" required />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country</label>
                          <div class="col-sm-9">
                            <select name="country" class="form-control" >
                              <option value="{{$data->country}}">{{$data->country}}</option>
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
                         
                          <button type="submit" class="btn btn-primary mr-3" >Submit</button>
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

