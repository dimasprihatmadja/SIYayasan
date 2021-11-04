@extends('navbar')
@section('content')
 <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Visi & Misi</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        @php
            $path = Storage::url('public/logo/'.$logo->foto);
        @endphp
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="/user/assets/img/logo.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Visi & Misi</h3>
            <p >
                Visi
            </p>
            <p >
                {{$okmek->visi}}
            </p>
            <p >
                Misi
            </p>
            <p >
                {{$okmek->misi}} 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
 </main>
@endsection