<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{ asset('dist/css/font_awesome_5_free.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/select2.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/bootstrap-datepicker.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/bootstrap-timepicker.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/bootstrap-tagsinput.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/duotone-dark.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/dataTables.bootstrap4.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/iziToast.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/fontawesome-iconpicker.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/bootstrap4-toggle.min.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/summernote-bs4.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/style.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/components.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/spacing.css') }} ">
    <link rel="stylesheet" href=" {{ asset('dist/css/custom.css') }} ">

    <script src="{{asset('dist/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('dist/js/popper.min.js')}}"></script>
    <script src="{{asset('dist/js/tooltip.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dist/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('dist/js/moment.min.js')}}"></script>
    <script src="{{asset('dist/js/stisla.js')}}"></script>
    <script src="{{asset('dist/js/jscolor.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('dist/js/summernote-bs4.js')}}"></script>
    <script src="{{asset('dist/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('dist/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('dist/js/iziToast.min.js')}}"></script>
    <script src="{{asset('dist/js/fontawesome-iconpicker.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap4-toggle.min.js')}}"></script>
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto" method="POST">
                @csrf
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right w-100-p justify-content-end">
                <li class="nav-link">
                    <a href="{{route('show.home')}}" target="_blank" class="btn btn-warning">Front End</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle no-hover-effect" href="" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img alt="image" src="{{asset(Auth::user()->image)}}"
                            class="rounded-circle-custom">
                {{-- <td> <a class="btn  btn-info" href="{{route('view.product',$user->id)}}">Edit</a></td> --}}

                <div class="d-sm-none d-lg-inline-block no-hover-effect">{{Auth::user()->name}}</div>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('view.profile')}}"><i class="far fa-user"></i> Edit
                                Profile</a></li>
                <li>
                    <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt"></i>
                                    Logout
                            </button>
                    </form>
                </li>
                    </ul>
                </li>
            </ul>
        </nav>


        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="{{route('view.dashboard')}}">Admin Panel</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="{{route('view.dashboard')}}"></a>
                </div>

                <ul class="sidebar-menu">

                    <li class="active"><a class="nav-link" href="{{route('view.dashboard')}}"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

                    <li class=""><a class="nav-link" href="{{route('view.home')}}"><i class="fas fa-hand-point-right"></i> <span>Home</span></a></li>

                    <li class=""><a class="nav-link" href="{{route('list.project')}}"><i class="fas fa-hand-point-right"></i> <span>Projects</span></a></li>

                    <li class=""><a class="nav-link" href="{{route('view.about')}}"><i class="fas fa-hand-point-right"></i> <span>About</span></a></li>

                    <li class=""><a class="nav-link" href="{{route('view.service')}}"><i class="fas fa-hand-point-right"></i> <span>Services</span></a></li>

                    <li class=""><a class="nav-link" href="{{route('view.contact')}}"><i class="fas fa-hand-point-right"></i> <span>Contact</span></a></li>

                    <li class=""><a class="nav-link" href="{{route('view.message')}}"><i class="fas fa-hand-point-right"></i> <span>Messages</span></a></li>




                </ul>
            </aside>
        </div>
