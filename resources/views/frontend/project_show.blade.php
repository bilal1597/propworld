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



    <section class="title">
      <div>
        <h1 class="display-5 fw-medium text-white">Projects</h1> {{-- title DB --}}
      </div>
    </section>
    <!--picture title end-->

    <!--heading-->
    <section class="text-center mb-5">
      <div class="pb-3">
        <h2 class="mt-5 display-6 fw-medium">Recent Projects </h2>  {{--heading DB--}}

        <p class="mt-4 text-secondary">Discover our quality latest products</p>   {{--heading para DB--}}
      </div>
    </section>
    <!--heading end-->

    <!--project 1-->
    @foreach ($project as $item )

    <section class="container">
      <div class="row">
        <div class="container col-lg-5 col-md-10 col-sm-8 col-8">
          <div class="col-lg-12 border border-5 border-warning mt-5 mb-5">
            <img
              style="position: relative; top: -45px; right: 45px"
              class="img-fluid"
              src="{{asset($item ->main_image)}}"
              alt=""
            />
          </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12 m-auto">
          <h5>{{$item ->project_name}}</h5>
          <h2 class="border-bottom border-4 d-inline pb-2 border-warning">
            {{$item ->builder_name}}
          </h2>
          <p class="pt-4">    {{--Al sadiq para DB--}}
            {{$item ->project_description}}
          </p>

          <div class="pt-3">
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >{{$item ->prj_point1}}
            </p>
            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              {{$item ->prj_point2}}
            </p>
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >{{$item ->prj_point3}}
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--project 1 end-->


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

