<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/font_awesome_5_free.min.css">
    <link rel="stylesheet" href="dist/css/select2.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap-tagsinput.css">
    <link rel="stylesheet" href="dist/css/duotone-dark.css">
    <link rel="stylesheet" href="dist/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/iziToast.min.css">
    <link rel="stylesheet" href="dist/css/fontawesome-iconpicker.min.css">
    <link rel="stylesheet" href="dist/css/bootstrap4-toggle.min.css">
    <link rel="stylesheet" href="dist/css/summernote-bs4.css">
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/components.css">
    <link rel="stylesheet" href="dist/css/spacing.css">
    <link rel="stylesheet" href="dist/css/custom.css">

    <script src="dist/js/jquery-3.6.0.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/tooltip.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="dist/js/jquery.nicescroll.min.js"></script>
    <script src="dist/js/moment.min.js"></script>
    <script src="dist/js/stisla.js"></script>
    <script src="dist/js/jscolor.js"></script>
    <script src="dist/js/bootstrap-datepicker.min.js"></script>
    <script src="dist/js/bootstrap-timepicker.min.js"></script>
    <script src="dist/js/bootstrap-tagsinput.min.js"></script>
    <script src="dist/js/select2.full.min.js"></script>
    <script src="dist/js/summernote-bs4.js"></script>
    <script src="dist/js/jquery.dataTables.min.js"></script>
    <script src="dist/js/dataTables.bootstrap4.min.js"></script>
    <script src="dist/js/iziToast.min.js"></script>
    <script src="dist/js/fontawesome-iconpicker.js"></script>
    <script src="dist/js/bootstrap4-toggle.min.js"></script>
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                    <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                </ul>
            </form>
            <ul class="navbar-nav navbar-right w-100-p justify-content-end">
                <li class="nav-link">
                    <a href="" target="_blank" class="btn btn-warning">Front End</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle no-hover-effect" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <img alt="image" src=""
                            class="rounded-circle-custom">
                        <div class="d-sm-none d-lg-inline-block no-hover-effect">John</div>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href=""><i class="far fa-user"></i> Edit
                                Profile</a></li>
                        <li><a class="dropdown-item" href=""><i class="fas fa-sign-out-alt"></i>
                                Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>



        <div class="main-sidebar">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html">Admin Panel</a>
                </div>
                <div class="sidebar-brand sidebar-brand-sm">
                    <a href="index.html"></a>
                </div>

                <ul class="sidebar-menu">

                    <li class="active"><a class="nav-link" href="index.html"><i class="fas fa-hand-point-right"></i> <span>Dashboard</span></a></li>

                    <li class="nav-item dropdown active">
                        <a href="#" class="nav-link has-dropdown"><i class="fas fa-hand-point-right"></i><span>Dropdown Items</span></a>
                        <ul class="dropdown-menu">
                            <li class="active"><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 1</a></li>
                            <li class=""><a class="nav-link" href=""><i class="fas fa-angle-right"></i> Item 2</a></li>
                        </ul>
                    </li>

                    <li class=""><a class="nav-link" href="setting.html"><i class="fas fa-hand-point-right"></i> <span>Setting</span></a></li>

                    <li class=""><a class="nav-link" href="{{route('view.about')}}"><i class="fas fa-hand-point-right"></i> <span>About</span></a></li>

                    <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i> <span>Table</span></a></li>

                    <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li>

                </ul>
            </aside>
        </div>

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>About Content</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('post.about') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $about->id }}" name="id">

                                        <div class="form-group mb-3">
                                            <label>Main Heading*</label>
                                            <input type="text" class="form-control" name="main_heading" value="{{ old('main_heading', $about->main_heading) }}">
                                            @error('main_heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Image</label>
                                            <div><img src="{{asset($about ->main_image)}}" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image*</label>
                                            <input type="file" class="form-control" name="main_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Heading*</label>
                                            <input type="text" class="form-control" name="first_heading" value="{{old('first_heading',$about->first_heading)}}">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>First Description*</label>
                                            <input type="text" class="form-control" name="first_description" value="{{old('main_description',$about->first_description)}}">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Story Image</label>
                                            <div><img src="" alt="image" width="100px"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image* </label>
                                            <input type="file" class="form-control" name="existing_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Heading*</label>
                                            <input type="text" name="second_heading" value="{{old('second_heading',$about->second_heading)}}" class="form-control"></input>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Description*</label>
                                            <input type="text" value="{{old('second_description', $about->second_description)}}" name="second_description" class="form-control"></input>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Heading*</label>
                                            <input type="text" name="third_heading" value="{{old('third_heading',$about->third_heading)}}" class="form-control"></input>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Description*</label>
                                            <input type="text" name="third_description" value="{{old('third_description',$about->third_description)}}" class="form-control"></input>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Ceo Image</label>
                                            <div><img src="" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image*</label>
                                            <input type="file" class="form-control" name="ceo_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Ceo 2 Image</label>
                                            <div><img src="" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image*</label>
                                            <input type="file" class="form-control" name="ceo2_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Title</label>
                                            <input type="text" name="title" value="title" class="form-control"></input>
                                        </div>


                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script src="dist/js/scripts.js"></script>
<script src="dist/js/custom.js"></script>

</body>
</html>
