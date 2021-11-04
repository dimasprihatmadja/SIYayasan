   @extends('navbar')
   @section('content')
<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Pengurus</h2>
        </div>
    </div><!-- End Breadcrumbs -->

 <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
@foreach($okmek as $key => $data)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
               @php
              $path = Storage::url('public/pengurus/'.$data->foto);
              @endphp 
              <img src="{{url($path)}}" class="img-fluid" alt="..." style="width:350px;height:200px;">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{$data->posisi}}</h4>
                  
                </div>

                
                <div class="align-items-center">
                  <h3><a href="#">{{$data->nama}}</a></h3>
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->
 @endforeach
        </div>

      </div>
    </section><!-- End Courses Section --

  </main><!-- End #main -->

    @endsection