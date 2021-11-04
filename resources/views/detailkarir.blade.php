@extends('navbar')
@section('content')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Judul Karir</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-8">
            @php
              $path = Storage::url('public/karir/'.$okmek->foto);
              @endphp 
              <img src="{{url($path)}}" class="img-fluid" alt="...">
            <h3>{{$okmek->lowongan}}</h3>
            <p>
              {{$okmek->deskripsi}}
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Cource Details Section -->

   
  </main><!-- End #main -->
    @endsection