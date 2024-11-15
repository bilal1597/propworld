{{-- header start--}}


{{-- header end --}}
<!--topbar-->
<section class="text-secondary bg-light">
    <div class="container d-flex justify-content-between">
      <div>
        <p class="m-0 header">
          <i class="fa fa-phone text-secondary me-3"></i>Tel: 021-34545479
        </p>
      </div>
      <div class="d-flex gap-3 mt-1">
        <i class="fa-brands fa-square-facebook text-secondary"> </i>
        <i class="fa-brands fa-square-instagram text-secondary"> </i>
      </div>
    </div>
  </section>
  <!--topbar end-->

  <!--navbar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand ms-lg-5" href=""
        ><img class="img-fluid logo" src="{{url('/pic/title-main.png')}}" alt=""
      /></a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-lg-3">
          <li class="nav-item">
            <a class="nav-link links" href="{{route('show.home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link links" href="{{route('show.project')}}">Project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link links" href="{{route('show.about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link links" href="{{route('show.service')}}">Services</a>
          </li>
          <li class="nav-item me-2">
            <a class="nav-link links" href="{{route('show.contact')}}">Contact</a>
          </li>
          <li class="nav-item me-lg-5">
            <button class="btn btn-warning text-white fw-bold contact-nav">
              <i class="fa fa-phone me-2"></i> Call Now
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--navbar end-->
