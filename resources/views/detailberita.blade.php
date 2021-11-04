@extends('navbar')
@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Judul Berita</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            @php
              $path = Storage::url('public/berita/'.$okmek->foto);
              @endphp 
              <img src="{{url($path)}}" class="img-fluid" alt="..." style="width:480px;height:300px;">
            <h3>{{$okmek->judul}}</h3>
            <p>
              {{$okmek->isi}}
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Cource Details Section -->

   
  </main><!-- End #main -->
    @endsection