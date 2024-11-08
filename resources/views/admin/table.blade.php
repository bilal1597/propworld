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
                <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                    <img alt="image" src="uploads/user.jpg" class="rounded-circle mr-1">
                    <div class="d-sm-none d-lg-inline-block">John Doe</div></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Edit Profile
                        </a>
                        <a href="login.html" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
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

                    <li class=""><a class="nav-link" href="form.html"><i class="fas fa-hand-point-right"></i> <span>Form</span></a></li>

                    <li class=""><a class="nav-link" href="table.html"><i class="fas fa-hand-point-right"></i> <span>Table</span></a></li>

                    <li class=""><a class="nav-link" href="invoice.html"><i class="fas fa-hand-point-right"></i> <span>Invoice</span></a></li>

                </ul>
            </aside>
        </div>

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Table</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="example1">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Item Name</th>
                                                <th>Price</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Laptop</td>
                                                <td>$100</td>
                                                <td class="pt_10 pb_10">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Detail</button>
                                                    <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                </td>
                                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Item Name</label></div>
                                                                    <div class="col-md-8">Laptop</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Description</label></div>
                                                                    <div class="col-md-8">This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Headphone</td>
                                                <td>$40</td>
                                                <td class="pt_10 pb_10">
                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Detail</button>
                                                    <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                </td>
                                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Item Name</label></div>
                                                                    <div class="col-md-8">Headphone</div>
                                                                </div>
                                                                <div class="form-group row bdb1 pt_10 mb_0">
                                                                    <div class="col-md-4"><label class="form-label">Description</label></div>
                                                                    <div class="col-md-8">This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. This is a very good product. </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
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