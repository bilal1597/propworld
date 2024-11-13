@extends('layouts.main')  {{-- ye main-section.blade file se header or footer lyga --}}

@section('main-section')  {{-- ye main-section header, footer k beech ka material btanay k lye --}}

<html>
  <head>
    <title>Home</title>
    <link rel="icon" type="image/x-icon" href="{{url('/pic/logo-1.png')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{url('/styles/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('/styles/homeStyles.css')}}" />
  </head>
  <body>
    <!--topbar-->

    <!--topbar end-->

    <!--navbar-->

    <!--navbar end-->

    <!--slider-->
    @foreach ($show as $item)

    <section>
      <div>
        <h4
          class="text-warning carousel-text"
          style="
            background-image: url('{{url($item ->main_image)}}');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
          "
        >                            {{--title DB--}}
          {{$item ->main_heading}}
          <br />
          <div class="mt-lg-2 pt-lg-1"></div>
          <span class="text-white fs-6"  {{--title-heading DB--}}
            >{{$item ->main_description}}
          </span>
        </h4>
      </div>
    </section>
     @endforeach
    <!--slider end-->

    <!--project 1-->
    @foreach ($project as $proj )

    <section class="container mt-5">
      <div class="row">
        <div
          class="col-lg-6 col-md-6 col-sm-12 text-lg-start text-md-start text-center m-auto"
        >
          <h1>
            {{$proj ->first_project}}
            <br />
            {{$proj ->first_heading}}
          </h1>
                                 {{-- rj-para DB--}}
          <p class="pt-lg-3">
            {{-- {{$item ->rj_para }} --}}
          </p>

          <div class="row pt-lg-0 pt-md-0 pt-3">
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >Easy Payment Plans
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

          <a target="_blank" href="{{url('/project-details/project-23.html')}}">
            <button
              class="btn btn-warning pt-lg-1 mt-lg-0 mt-md-0 mt-3 mb-lg-0 mb-5"
              style="border-radius: 0%"
            >
              READ MORE
            </button>
          </a>
        </div>

        <div class="col-lg-6 col-md-6">
          <img class="img-fluid" src="{{url($proj->first_image)}}" alt="" />
        </div>

        <div class="mdi bg-white border w-75 m-lg-0 m-md-0 m-auto mt-lg-0 mt-5">
          <div class="row p-4">
            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/house.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">100</h2>
                <p class="text-secondary">Apartments</p>
              </div>
            </div>

            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/cabinet.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">50</h2>
                <p class="text-secondary">Storages</p>
              </div>
            </div>

            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/ruler.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">2500M</h2>
                <p class="text-secondary">Site Area</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--project 1 end-->

    <!--project 2-->
    <section class="container">
      <div class="row">
        <div
          class="col-lg-6 col-md-6 text-lg-start text-md-start text-center m-auto"
        >
          <h1>
            {{$proj ->second_project}}
            <br />
            {{$proj ->second_heading}}
          </h1>

          <p class="pt-lg-3"> {{-- mh-para DB--}}
            {{-- {{$item ->mh_para }} --}}
          </p>

          <div class="row pt-lg-0 pt-md-0 pt-3">
            <p>
              <i class="far fas fas fa-angle-double-right text-warning pe-2"></i
              >42 month Payment schedule
            </p>

            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              Available on Pre-launching Price
            </p>

            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              Registered in FBR Amnesty Scheme
            </p>
          </div>

          <a target="_blank" href="{{url('/project-details/project-24.html')}}"
            ><button
              class="btn btn-warning pt-lg-1 mt-lg-0 mt-md-0 mt-3 mb-lg-0 mb-5"
              style="border-radius: 0%"
            >
              READ MORE
            </button></a
          >
        </div>

        <div class="col-lg-6 col-md-6">
          <img class="img-fluid" src="{{url($proj ->second_image)}}" alt="" />
        </div>

        <div
          class="mdi bg-white border w-75 m-lg-0 m-md-0 m-auto mt-lg-0 mt-5 mb-5"
        >
          <div class="row p-4">
            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/house.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">100</h2>
                <p class="text-secondary">Apartments</p>
              </div>
            </div>

            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/cabinet.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">50</h2>
                <p class="text-secondary">Storages</p>
              </div>
            </div>

            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/ruler.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">2500M</h2>
                <p class="text-secondary">Site Area</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--project 2 end-->

    <!--project 3-->
    <section class="container">
      <div class="row">
        <div
          class="col-lg-6 col-md-6 text-lg-start text-md-start text-center m-auto"
        >
          <h1>
            {{$proj ->third_project}}
            <br />
            {{$proj ->third_heading}}
          </h1>

          <p class="pt-lg-3">  {{-- sadiq-para DB--}}
            {{-- {{$item ->sadiq_para }} --}}
          </p>

          <div class="row pt-lg-0 pt-md-0 pt-3">
            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              Modern amenities
            </p>

            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              Flexible office spaces
            </p>

            <p>
              <i
                class="far fas fas fa-angle-double-right text-warning pe-2"
              ></i>
              Prime Location of Captain Fareed Bukhari Road, SMCHS
            </p>
          </div>

          <a target="_blank" href="{{url('/project-details/project-25.html')}}"
            ><button
              class="btn btn-warning pt-lg-1 mt-lg-0 mt-md-0 mt-3 mb-lg-0 mb-5"
              style="border-radius: 0%"
            >
              READ MORE
            </button></a
          >
        </div>

        <div class="col-lg-6 col-md-6 mb-lg-0 mb-5 pb-lg-0 pb-md-5">
          <img class="img-fluid" src="{{url($proj ->third_image)}}" alt="" />
        </div>

        <div class="mdi bg-white border w-75 m-lg-0 m-md-0 m-auto">
          <div class="row p-4">
            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/house.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">100</h2>
                <p class="text-secondary">Apartments</p>
              </div>
            </div>

            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/cabinet.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">50</h2>
                <p class="text-secondary">Storages</p>
              </div>
            </div>

            <div class="d-lg-flex col-lg-4 col-md-4 col-sm-4 col-4">
              <div>
                <img class="img-fluid" src="{{url('/pic/ruler.png')}}" alt="" />
              </div>
              <div class="mt-2 ms-2">
                <h2 class="col-lg-2 text-warning fw-semibold">2500M</h2>
                <p class="text-secondary">Site Area</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endforeach
    <!--project 3 end-->

    <!--like it or no >:(-->
    <section
      style="
        padding: 100px;
        background-image: url('{{url('/pic/like.png')}}');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
      "
    >
      <div class="mt-lg-5">
        <div class="text-center">
          <p class="text-warning">CONTACT US</p>
          <h1
            class="fw-bold"
            style="
              text-underline-offset: 10px;
              text-decoration: underline black;
              text-decoration-style: wavy;
            "
          >
            {{$item ->last_heading}}
          </h1>
          <p class="pt-3">
            {{$item ->last_description}}
          </p>

          <button class="btn btn-warning text-white mt-4 px-4">
            {{$item ->last_button}}
          </button>
        </div>
      </div>
    </section>
    <!--like it or no >:( end-->

    <!-- footer-->

    <!--footer end -->

    @endsection
</body>
</html>
