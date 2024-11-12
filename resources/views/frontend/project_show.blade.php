@extends('layouts.main')  {{-- ye main-section.blade file se header or footer lyga --}}

@section('main-section')  {{-- ye main-section header, footer k beech ka material btanay k lye --}}<html>
  <head>
    <title>Projects</title>

    <link rel="icon" type="image/x-icon" href="{{url('/pic/logo-1.png')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{url('/styles/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('/styles/projectStyles.css')}}" />
  </head>

  <body>
    <!--topbar-->

    <!--topbar end-->

    <!--navbar-->

    <!--navbar end-->

    <!--picture title-->
    @foreach ($show as $item )


    <section class="title">
      <div>
        <h1 class="display-5 fw-medium text-white">{{$item ->title}}</h1> {{-- title DB --}}
      </div>
    </section>
    <!--picture title end-->

    <!--heading-->
    <section class="text-center mb-5">
      <div class="pb-3">
        <h2 class="mt-5 display-6 fw-medium">{{$item ->heading }}</h2>  {{--heading DB--}}

        <p class="mt-4 text-secondary">{{$item ->heading_para}}</p>   {{--heading para DB--}}
      </div>
    </section>
    <!--heading end-->

    <!--project 1-->
    <section class="container">
      <div class="row">
        <div class="container col-lg-5 col-md-10 col-sm-8 col-8">
          <div class="col-lg-12 border border-5 border-warning mt-5 mb-5">
            <img
              style="position: relative; top: -45px; right: 45px"
              class="img-fluid"
              src="{{url('/pic/sadiq.png')}}"
              alt=""
            />
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
          <h5>Al Sadiq Group</h5>
          <h2 class="border-bottom border-4 d-inline pb-2 border-warning">
            Sadiq Trade Centre
          </h2>
          <p class="pt-4">    {{--Al sadiq para DB--}}
            {{$item ->al_sadiq_para}}
          </p>

          <div class="pt-3">
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >Modern amenities
            </p>
            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              Available on Pre-launching Price
            </p>
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >Registered in FBR Amnesty Scheme
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--project 1 end-->

    <!--project 2-->
    <section class="container mt-lg-0 mt-5">
      <div class="row">
        <div
          class="col-lg-6 col-md-12 col-sm-12 col-12 order-lg-1 order-2 m-auto"
        >
          <h5>M&H Builders & Developers</h5>
          <h2 class="border-bottom border-4 d-inline pb-2 border-warning">
            M&H 12
          </h2>
          <p class="pt-4">       {{--M&H para DB--}}
            {{$item ->mh_para}}
          </p>

          <div class="pt-3">
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >42 month Payment schedule
            </p>
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >Flexible office spaces
            </p>
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >Prime Location of Captain Fareed Bukhari Road, SMCHS
            </p>
          </div>

          <button class="btn btn-lg view-btn btn-warning text-white">
            View Project
          </button>
        </div>

        <div
          class="container col-lg-5 col-md-10 col-sm-8 col-8 order-lg-2 order-1"
        >
          <div class="col-lg-12 border border-5 border-warning mt-5 mb-5">
            <img
              style="position: relative; top: -45px; right: 45px"
              class="img-fluid"
              src="{{url('/pic/m&h.png')}}"
              alt=""
            />
          </div>
        </div>
      </div>
    </section>
    <!--project 2 end-->

    <!--project 3-->
    <section class="container mt-5">
      <div class="row">
        <div class="container col-lg-5 col-md-10 col-sm-8 col-8">
          <div class="col-lg-12 border border-5 border-warning mt-5 mb-5">
            <img
              style="position: relative; top: -45px; right: 45px"
              class="img-fluid"
              src="{{url('/pic/RJ.png')}}"
              alt=""
            />
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
          <h5>RJ Group Builders & Developers</h5>
          <h2 class="border-bottom border-4 d-inline pb-2 border-warning">
            RJ Heaven
          </h2>     {{--RJ para DB--}}
          <p class="pt-4">
            {{$item ->rj_para}}
          </p>

          <div class="pt-3">
            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              Easy Payment Plans
            </p>
            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              Prime Location of Allama Iqbal Road
            </p>
            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              All Basic Amenities of Life are Present within the Project
              Boundary
            </p>
          </div>

          <button class="btn btn-lg view-btn btn-warning text-white">
            View Project
          </button>
        </div>
      </div>
    </section>
    @endforeach
    <!--project 3 end-->

    <!--end-header-->
    <section class="text-center mt-5">
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
    <!--end-header end-->

    <!--footer-->

    <!--footer end-->

@endsection
    </body>
</html>

