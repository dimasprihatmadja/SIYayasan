<!-- ======= Top ======= -->
   @extends('navbar')
   @section('content')
     <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Karir</h2>
         </div>
    </div><!-- End Breadcrumbs -->
 <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach($okmek as $key => $data)
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              @php
              $path = Storage::url('public/karir/'.$data->foto);
              @endphp 
              <img src="{{url($path)}}" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{$data->kategori}}</h4>
                  
                </div>

                <h3><a href="/detailkarir/{{$data->id}}">{{$data->lowongan}}</a></h3>
                <p>{{$data->deskripsi}}</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

          @endforeach

        </div>

      </div>
    </section><!-- End Courses Section -->


  </main><!-- End #main -->

  @endsection