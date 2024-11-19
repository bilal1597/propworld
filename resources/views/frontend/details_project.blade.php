@extends('layouts.main')  {{-- ye main-section.blade file se header or footer lyga --}}

@section('main-section')  {{-- ye main-section header, footer k beech ka material btanay k lye --}}
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

<main>
    <section>
        <div class="container mt-5 mb-5">
            <div class="row g-3">
                <div class="col-md-6 mt-lg-5 mt-md-0 mt-sm-0">
                    <div class="detail-1 mt-lg-5 mt-md-0 mt-sm-0">
                        <h1>{{ $project->main_heading }}</h1>
                        <p class="text-secondary">{{ $project->main_description }}</p>
                        <h2>{{ $project->first_heading }}</h2>
                        <p class="text-secondary">{{ $project->first_description }}</p>
                    </div>
                    <p><i class="arrow right"></i> {{ $project->point1 }}</p>
                    <p><i class="arrow right"></i> {{ $project->point2 }}</p>
                    <p><i class="arrow right"></i> {{ $project->point3 }}</p>
                    <div class="button mt-5">
                        <a target="_blank" href="{{ asset($project ->pdf) }}"
                            class="btn-read btn text-dark ">Download Brochure <i class="fa-solid fa-file-pdf"></i></a>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div class="img ">
                        <img src="{{ asset($project ->main_image) }}" alt="Responsive Image"
                            width="500px" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        @if (!$images->isEmpty())
            <div class="container mt-5">
                <h2 class="mt-4 mb-4 text-center"> {{ $project->image_heading }}</h2>
                <div class="row">

                    @foreach ($images as $image)
                    <div class="col-md-4 mb-3">
                        <img src="{{ asset($image->multi_image) }}" alt="Project Image" class="img-fluid">
                    </div>
                    @endforeach

                </div>
            </div>
        @endif
    </section>
    <!-- section property - description  ends-->

    <!-- video presentation  -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2 class="mt-5 mb-5 text-center">{{ $project->vid_heading }}</h2>
                <!-- Video container -->
                <div class="video-container mb-5">
                    <!-- Replace the src attribute with your actual YouTube video URL -->
                    <iframe width="100%" height="315" src="{{ asset($project->video ) }}"
                        title="project video player" frameborder="0" autoplay></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- video presentation ends  -->
</main>

@endsection
    </body>
</html>
