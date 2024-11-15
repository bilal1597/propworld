@extends('layouts.main')  {{-- ye main-section.blade file se header or footer lyga --}}

@section('main-section')  {{-- ye main-section header, footer k beech ka material btanay k lye --}}
<html>
  <head>
    <title>About Us</title>
    <link rel="icon" type="image/x-icon" href="{{url('/pic/logo-1.png')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{url('/styles/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('/styles/aboutStyles.css')}}" />
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
        <h1 class="display-5 fw-medium text-white">{{$item ->main_heading}}</h1> {{--title DB--}}
      </div>
    </section>
    <!--picture title end-->

    <!--heading 1-->
    <section class="pt-5 mb-5">
      <div class="container">
        <div class="row">
          <div
            class="col-lg-5 col-md-12 col-sm-12 pb-lg-0 pb-md-5 pb-sm-5 pb-5 ps-5"
          >
            <div class="col-lg-9 border border-5 border-warning mt-5 w-100">
              <img
                style="position: relative; top: -45px; right: 45px"
                class="img-fluid"
                src="{{url('/pic/our-story.jpg')}}"
                alt=""
              />
            </div>
          </div>

          <div
            class="col-lg-6 col-md-12 col-sm-12 text-lg-start text-md-center text-sm-center text-center m-auto"
          >
            <h2 class="border-bottom border-warning border-4 d-inline pb-2">
              {{$item ->first_heading}}
            </h2>

            <p class="mt-4 pt-3">  {{--story_para DB--}}

                {{$item ->first_description }}
            </p>

            <div class="row mt-5">
              <div class="col-lg-6 col-md-6">
                <p>
                  <i class="fas fa-circle-check text-warning pe-4"></i>Expert
                  Craftmanship
                </p>
                <p>
                  <i class="fas fa-circle-check text-warning pe-4"></i>Precision
                  in Execution
                </p>
              </div>

              <div class="col-lg-6 col-md-6">
                <p>
                  <i class="fas fa-circle-check text-warning pe-4"></i
                  >Innovative Solutions
                </p>
                <p>
                  <i class="fas fa-circle-check text-warning pe-4"></i>Round the
                  Clock Support
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--heading 1 end-->

    <!--heading 2-->
    <section class="container mb-5">
      <div class="text-center mb-5">
        <h2 class="border-4 border-warning border-bottom d-inline pb-2">
          {{$item ->second_heading}}
        </h2>

        <p class="pt-4 mt-3">
            {{$item ->second_description}}
        </p>
      </div>

      <div class="container">
        <div class="row text-center">
          <div
            class="col-lg-4 col-md-6 col-sm-11 col-10 m-lg-0 m-auto p-5 shadow-lg card-hover"
          >
            <h3>Architectural Design and Planning</h3>
            <p class="pt-2">  {{--design_para DB--}}
                {{-- {{$item ->design_para }} --}}
            </p>
          </div>

          <div
            class="col-lg-4 col-md-6 col-sm-11 col-10 m-lg-0 m-auto p-5 shadow-lg card-hover"
          >
            <h3>Construction and Building</h3>
            <p class="pt-2">                          {{--build_para DB--}}
              {{-- {{$item ->build_para}} --}}
            </p>
          </div>

          <div
            class="col-lg-4 col-md-6 col-sm-11 col-10 m-lg-0 m-auto p-5 shadow-lg card-hover"
          >
            <h3>Project Management</h3>
            <p class="pt-2">                       {{--management_para DB--}}
              {{-- {{$item ->management_para}} --}}
            </p>
          </div>
        </div>
      </div>
    </section>
    <!--heading 2 end-->

    <!--heading 3-->
    <section class="container">
      <div class="text-center mb-5">
        <h2 class="border-4 border-warning border-bottom d-inline pb-2">
          {{$item ->third_heading}}
        </h2>

        <p class="pt-4 mt-sm-3">
            {{$item ->third_description}}
        </p>
      </div>

      <div class="container mb-5">
        <div class="row text-center">
          <div class="col-lg-6 mb-lg-0 mb-md-5 mb-sm-5 mb-5">
            <img class="shadow" src="{{url('/pic/ceo.png')}}" alt="" />
            <div class="mt-4">
              <h2>Saad Faridi</h2>
              <p class="mt-2">CEO</p>

              <div>
                <a class="text-decoration-none" href="#"
                  ><i
                    class="fab fa-facebook p-2 me-3 rounded-circle"
                    style="background-color: #3b5998; font-size: 20px"
                  ></i
                ></a>

                <a class="text-decoration-none" href="#"
                  ><i
                    class="fab fa-twitter p-2 me-3 rounded-circle"
                    style="background-color: #1da1f2; font-size: 20px"
                  ></i
                ></a>

                <a class="text-decoration-none" href="#"
                  ><i
                    class="fab fa-youtube p-2 rounded-circle"
                    style="background-color: #ff0000; font-size: 20px"
                  ></i
                ></a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <img class="shadow" src="{{asset($item ->ceo2_image)}}" alt="" />
            <div class="mt-4">
              <h2>Hassan Azhar Faridi</h2>
              <p class="mt-2">Head of Operations</p>

              <div>
                <a class="text-decoration-none" href="#"
                  ><i
                    class="fab fa-facebook p-2 me-3 rounded-circle"
                    style="background-color: #3b5998; font-size: 20px"
                  ></i
                ></a>

                <a class="text-decoration-none" href="#"
                  ><i
                    class="fab fa-twitter p-2 me-3 rounded-circle"
                    style="background-color: #1da1f2; font-size: 20px"
                  ></i
                ></a>

                <a class="text-decoration-none" href="#"
                  ><i
                    class="fab fa-youtube p-2 rounded-circle"
                    style="background-color: #ff0000; font-size: 20px"
                  ></i
                ></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--heading 3 end-->

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
