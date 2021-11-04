<!-- ======= Top ======= -->
   @extends('navbar')
   @section('content')
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1 align="text-center">Hallo selamat datang,<br>Yayasan Pendidikan </h1>
  
      <a href="/visimisi" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- End Top -->

  <main id="main">

    <!-- ======= Tentang ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>tentang</h2>
          <p>WELCOME</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>SELAMAT DATANG DI WEB YAYASAN PENDIDIKAN</h3>
            <p class="font-italic">
              {{$okmek->isi}}
            </p>
            <ul>
            <p>
          </div>
        </div>

      </div>
    </section><!-- End Tentang -->

    <!-- ======= Berita ======= -->
<section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Berita</h2>
          <p>Berita Terkini</p>
        </div>


        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">
         
        
        @foreach($berita as $key => $berita)

              @php
              $path = Storage::url('public/berita/'.$berita->foto);
              @endphp 
            <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{url($path)}}" class="img-fluid" alt="..." style="width:350px;height:200px;">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>{{$berita->kategori}}</h4>
                  
                </div>

                <h3><a href="/detailberita/{{$berita->id}}">{{$berita->judul}}</a></h3>
                <p>{{$isi = substr($berita->isi,0,25)}}...</p>
              </div>
            </div>
          </div> <!-- End Course Item-->

@endforeach
        </div>

      </div>
</section><!-- End Courses Section -->

    <!-- ======= Portofolio ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portofolio</h2>
          <p>Portofolio</p>
        </div>

        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">
          @foreach($portofolio as $key=>$portofolio)
          @php
          $rot = Storage::url('public/portofolio/'.$portofolio->foto);
          @endphp
          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="{{url($rot)}}" class="testimonial-img" alt="" style="width:350px;height:200px;">
              
            </div>
          </div>
          @endforeach
          
        <!-- <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="user/assets/img/about.jpg" class="testimonial-img" alt="">
              
            </div>
          </div>



          <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="user/assets/img/logo.jpeg" class="testimonial-img" alt="">
              
            </div>
          </div>

        <div class="testimonial-wrap">
            <div class="testimonial-item">
              <img src="user/assets/img/logo.jpeg" class="testimonial-img" alt="">
              
            </div>
          </div> -->


        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  @endsection