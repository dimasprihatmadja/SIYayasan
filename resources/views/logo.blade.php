@extends('navbar')
@section('content')
 <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Logo</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            @php
            $path = Storage::url('public/logo/'.$okmek->foto);
            @endphp 
            
            <img alt="Avatar" class="table-avatar" src="{{url($path)}}">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Logo Disamping Memiliki Makna</h3>
            <p >
                {{$okmek->penjelasan}}
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
 </main>
@endsection