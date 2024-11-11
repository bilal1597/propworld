@extends('layouts.main')  {{-- ye main-section.blade file se header or footer lyga --}}

@section('main-section')  {{-- ye main-section header, footer k beech ka material btanay k lye --}}
<html>
  <head>
    <title>Contact Us</title>
    <link rel="icon" type="image/x-icon" href="{{url('/pic/logo-1.png')}}" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{url('/styles/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{url('/styles/contactStyles.css')}}" />
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
        <h1 class="display-5 fw-medium text-white">{{$item ->main_heading}}</h1>  {{-- title DB --}}
      </div>
    </section>
    <!--picture title end-->

    <!--contact/form-->
    <section class="container mt-5">
      <div class="row">
        <div class="col-lg-6 col-md-12 text-lg-start text-center ps-lg-5">
          <iframe
            class="rounded-circle"
            width="400"
            height="400"
            frameborder="0"
            scrolling="no"
            marginheight="0"
            marginwidth="0"
            src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
            ><a href="https://www.gps.ie/">gps tracker support</a></iframe
          >
        </div>

        <div class="col-lg-6 mt-lg-0 mt-5">
          <h1 style="font-size: 50px">{{$item ->contact_heading}}</h1>  {{--heading DB--}}

          <p class="pt-2">           {{--heading-para DB--}}
            {{$item ->contact_description}}
          </p>

          <div class="pt-2 container">
            <form class="row" action="#">
              <input
                class="col-lg-6 col-md-5 me-lg-4 me-md-4 border rounded p-2"
                type="text"
                placeholder="Name *"
                required
              />
              <input
                class="col-lg-5 mt-lg-0 mt-md-0 mt-3 col-md-6 border rounded p-2"
                type="email"
                placeholder="Email *"
                required
              />
              <input
                class="col-lg-12 mt-3 border rounded p-2"
                type="text"
                placeholder="Subject *"
                required
              />
              <textarea
                class="col-lg-12 mt-3 border rounded p-2"
                style="height: 150px"
                type="text"
                placeholder="Your Message *"
                required
              ></textarea>
            </form>

            <button class="btn btn-warning mb-5">Send</button>
          </div>
        </div>
      </div>
    </section>
    @endforeach
    <!--contact/form end-->

    <!--footer-->

    <!--footer end-->
@endsection
  </body>
</html>

