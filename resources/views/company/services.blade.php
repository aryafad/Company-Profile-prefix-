@extends('layouts.navbar')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Services</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Services</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          @foreach($data as $view)
          <div class="col-md-6">
                <div class="icon-box">
                    <i class="icofont-computer"></i>
                    <h4><a href="#">{{ $view -> judul }}</a></h4>
                    <p>{{ $view -> deskripsi }}</p>
                </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->

@endsection