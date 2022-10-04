   <style type="">
     .button{
      background: #3fbbc0;
      border: 0;
      margin-left: 450px;
      color: #fff;
      transition: 0.4s;
      border-radius: 50px;
      text-align: center !important;
     }
   </style>


    <section id="appointment" class="appointment section-bg">
      <div class="container  " data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          
        </div>

        <form action="{{url('appointment')}}" method="post" id="app" class="row g-3 needs-validation form" novalidate>
          @csrf
          <div class="row">
            <div class="col-md-4 form-group">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name"  required>
              <div class="invalid-feedback">
                Enter Name
              </div>
            </div>
            <div class="col-md-4 form-group">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email"  required>
              <div class="invalid-feedback">
                Enter Email
              </div>
            </div>
            <div class="col-md-4 form-group">
              <label for="phone" class="form-label">Phone</label>
             
                <input type="text" class="form-control" id="phone" name="phone" required>
                <div class="invalid-feedback">
                  Enter Phone
                </div>
              </div>
            </div>
            
            <div class="row">
            <div class="col-md-4 form-group">
              <label for="appointmentDate" class="form-label">Appointment Date</label>
              <input type="date" class="form-control" id="appointmentDate" name="date" required>
              <div class="invalid-feedback">
                Enter Appointment Date
              </div>
            </div>
            <div class="col-md-4 form-group">
              <label for="appointmentTime" class="form-label">Appointment Time</label>
              <input type="time" class="form-control" id="appointmentTime" name="time" required>
              <div class="invalid-feedback">
                Enter Appointment Time
              </div>
            </div>
            <div class="col-md-4 form-group">
              <label for="patientName" class="form-label">Patient Name</label>
              <input type="text" class="form-control" id="patientName"  name="patient" required>
              <div class="invalid-feedback">
                Enter Patient Name
              </div>
            </div>
            </div>
             <div class="row">
            <div class="col-md-4 form-group">
              <label for="gender" class="form-label">Gender</label>
              <select class="form-select" id="gender" name="gender" required>
                <option selected disabled value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option> 
              </select>
              <div class="invalid-feedback">
                Choose Gender
              </div>
            </div>
            <div class="col-md-4 form-group">
              <label for="doctor" class="form-label">Doctor</label>
              <select class="form-select" id="doctor" name="doctor" required>
                
                <option selected disabled value="">Select Doctor</option>
                @foreach($doctor as $doctors)
                 <option  value="{{$doctors->fname}}">{{$doctors->fname}} - {{$doctors->specialist}}</option>
                @endforeach
              </select>
              <div class="invalid-feedback">
                choose Doctor
              </div>
            </div>
          
            </div>
            <div class="col-md-4 form-group">
               <button class="appointment-btn scrollto button" type="submit" onclick="myFunction()" style="align:right;">Make an Apppointment</span> 
            </button>

              </div>
            </form>

      </div>
    </section>
    <script type="text/javascript">
            (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
      })()
    </script>
    <script type="text/javascript">
      var form = document.getElementById('app');

function myFunction() {
  if (form.checkValidity()) {
    alert("Appointment Request Successful. We will Contact with you soon!");
  }
}
    </script>