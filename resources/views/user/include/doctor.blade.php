 <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          
        </div>

        <div class="row">

        

          

         @foreach($doctor as $doctors)

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img  src="doctorimage/{{$doctors->image}}" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>{{$doctors->fname}}</h4>
                <h5>{{$doctors->specialist}}</h5>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section>