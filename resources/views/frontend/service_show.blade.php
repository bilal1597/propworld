@extends('layouts.main')  {{-- ye main-section.blade file se header or footer lyga --}}

@section('main-section')  {{-- ye main-section header, footer k beech ka material btanay k lye --}}
<html>
  <head>
    <title>Services</title>
    <link rel="icon" type="image/x-icon" href="{{url('/pic/logo-1.png')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{url('/styles/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('/styles/serviceStyles.css')}}" />
  </head>
  <body>
    <!--topbar-->

    <!--topbar end-->

    <!--navbar-->

    <!--navbar end-->

    <!--picture title-->
    @foreach ($show as $item)

    <section class="title">
      <div>
        <h1 class="display-5 fw-medium text-white">{{$item ->title}}</h1> {{--title DB--}}
      </div>
    </section>
    <!--picture title end-->

    <!--header 1-->
    <section class="container mt-5">
      <div class="row">
        <div class="text-center pb-4 mb-2">
          <h2 class="border-4 border-warning border-bottom d-inline pb-2">
            {{$item ->heading}}                 {{--heading DB--}}
          </h2>

          <p class="pt-4 mt-3">   {{--heading-para DB--}}
            {{$item ->headinng_para}}
          </p>
        </div>

        <div
          class="col-lg-3 col-md-6 col-sm-8 col-8 m-auto text-lg-start text-center ps-lg-4"
        >
          <h5 class="text-warning fw-bold pb-2">01.</h5>
          <h5 class="fw-semibold pb-2">Meticulous Planning</h5>
          <p>              {{--service-1-para DB--}}
            {{$item ->service1_para}}
          </p>
        </div>

        <div
          class="col-lg-3 col-md-6 col-sm-8 col-8 m-auto text-lg-start text-center ps-lg-4"
        >
          <h5 class="text-warning fw-bold pb-2">02.</h5>
          <h5 class="fw-semibold pb-2">Completion On Time</h5>
          <p>        {{--service-2-para DB--}}
            {{$item ->service2_para}}
          </p>
        </div>

        <div
          class="col-lg-3 col-md-6 col-sm-8 col-8 m-auto text-lg-start text-center ps-lg-4"
        >
          <h5 class="text-warning fw-bold pb-2">03.</h5>
          <h5 class="fw-semibold pb-2">Perfect Execution</h5>
          <p>         {{--service-3-para DB--}}
            {{$item ->service3_para}}
          </p>
        </div>

        <div
          class="col-lg-3 col-md-6 col-sm-8 col-8 m-auto text-lg-start text-center ps-lg-4"
        >
          <h5 class="text-warning fw-bold pb-2">04.</h5>
          <h5 class="fw-semibold pb-2">Affordable Prices</h5>
          <p>          {{--service-4-para DB--}}
            {{$item ->service4_para}}
          </p>
        </div>

        <div class="row mt-5 text-lg-start m-auto">
          <div class="col-lg-6 col-md-6 col-sm-6 col-6 m-auto">
            <img class="shadow img-fluid" src="{{url('/pic/services-1.png')}}" alt="" />
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-6 m-auto">
            <img class="shadow img-fluid" src="{{url('/pic/services-2.png')}}" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!--header 1 end-->

    <!--header 2-->
    <section class="container mt-5 mb-5">
      <div class="row">
        <div class="text-center pb-4 mb-2">
          <h2 class="border-4 border-warning border-bottom d-inline pb-2">
            Our Specialization
          </h2>

          <p class="pt-4 mt-3">
            Discover the core areas where Property World excels, delivering
            expertise and innovation in.
          </p>
        </div>

        <div class="px-5">
          <div class="row">
            <div
              class="col-lg-4 col-md-6 col-sm-12 col-12 text-lg-start text-center pb-4 pe-4 py-lg-5"
            >
              <h3 class="mb-3"><i class="far fa-square text-warning"></i></h3>
              <h5 class="fw-semibold">Architectural Design and Planning</h5>
              <p>   {{--design-para DB--}}
                {{$item ->design_para}}
              </p>
            </div>
            <div
              class="col-lg-4 col-md-6 col-sm-12 col-12 text-lg-start text-center pb-4 pe-4 py-lg-5"
            >
              <h3 class="mb-3"><i class="far fa-edit text-warning"></i></h3>
              <h5 class="fw-semibold">Construction and Building</h5>
              <p>  {{--build-para DB--}}
                {{$item ->build_para}}
              </p>
            </div>
            <div
              class="col-lg-4 col-md-6 col-sm-12 col-12 text-lg-start text-center pb-4 pe-4 py-lg-5"
            >
              <h3 class="mb-3">
                <i class="far fa-hourglass text-warning"></i>
              </h3>
              <h5 class="fw-semibold">Project Management</h5>
              <p>  {{--management-para DB--}}
                {{$item ->management_para}}
              </p>
            </div>

            <div
              class="col-lg-4 col-md-6 col-sm-12 col-12 text-lg-start text-center pb-4 pe-4"
            >
              <h3 class="mb-3"><i class="far fa-images text-warning"></i></h3>
              <h5 class="fw-semibold">Consultation and Advisory Services</h5>
              <p>  {{--consult-para DB--}}
                {{$item ->consult_para}}
              </p>
            </div>
            <div
              class="col-lg-4 col-md-6 col-sm-12 col-12 text-lg-start text-center pb-4 pe-4"
            >
              <h3 class="mb-3">
                <i class="far fa-object-group text-warning"></i>
              </h3>
              <h5 class="fw-semibold">Quality Assurance</h5>
              <p>   {{--QA-para DB--}}
                {{$item ->QA_para}}
              </p>
            </div>
            <div
              class="col-lg-4 col-md-6 col-sm-12 col-12 text-lg-start text-center pe-4"
            >
              <h3 class="mb-3">
                <i class="far fa-object-ungroup text-warning"></i>
              </h3>
              <h5 class="fw-semibold">Customer Support and Maintenance</h5>
              <p>  {{--support-para DB--}}
                {{$item ->support_para}}
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--header 2 end-->

    <!--end-header-->
    <section class="text-center">
      <div
        style="
          background-image: url({{url('/pic/bg.jpg')}});
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover;
          background-position-x: center;
          height: 300px;
        "
      >
        <h2 class="header-1 fw-medium" style="padding-top: 100px">
          Ready to Build Your Vision?
        </h2>
        <div class="pb-2">
          <p class="pb-5 pt-2">
            Connect with us today for a consultation, project assessment, or any
            inquiries.
          </p>
        </div>
      </div>

      <div class="d-flex justify-content-center mt-5">
        <button class="btn btn-warning text-white rounded btn-mix btn-lg">
          Contact Us
        </button>
      </div>
    </section>
    @endforeach
    <!--end-header end-->

    <!--footer-->

    <!--footer end-->

@endsection
  </body>
</html>

