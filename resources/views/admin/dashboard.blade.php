<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Admin</title>
    <link href="css/application.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="">
    <nav class="page-controls navbar navbar-dashboard">
        <div class="container-fluid">
            <div class="navbar-header mobile-hidden">
                <ul class="nav navbar-nav toggle-sidebar">
                    <li class="d-md-none d-flex nav-item">
                        <a id="toggleSidebar" class="nav-link">
                            <i class="la la-bars"></i>
                        </a>
                    </li>
                </ul>
                <form class="navbar-form d-none d-md-block" role="search">
                    <div class="form-group">
                        <div class="input-group input-group-no-border mr-3">
                            <input class="form-control" id="main-search" type="text" placeholder="Search" aria-describedby="search-icon">
                            <div class="input-group-append my-auto">
                               <img src="img/icons/search.svg" id="search-icon" alt="search" width="24px" height="23px" style="margin-left: 12px;">
                            </div>
                        </div>
                    </div>
                </form>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown nav-item">
                        <a href="#"
                           class="nav-link"
                           id="notifications-dropdown-toggle"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-position="bottom-middle-aligned"
                           data-disable-interaction="false"
                        >
                            <i class="icons notifications-icon"></i>
                            <i class="fa fa-circle text-danger"></i>
                        </a>
                        <ul tabindex="-1" class="dropdown-menu dropdown-menu-messages dropdown-menu-right comments">
                            <p class="dropdown-name">Notifications</p>
                            <p class="dropdown-date">Today</p>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="avatar thumb-sm mr-3">
                                            <img src="img/avatars/tn1.png" alt="..." class="rounded-circle pt-1">
                                        </span>
                                    <div>
                                        <span> <span class="fw-bold">Jim Tomson </span> removed you to the project <span class="fw-bold"> Flatlogic One</span> </span>
                                    </div>
                                    <div>
                                        <span class="dropdown-time">9:15 AM</span>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="avatar thumb-sm mr-3">
                                            <img src="img/avatars/tn2.png" alt="..." class="rounded-circle pt-1">
                                        </span>
                                    <div>
                                        <span> <span class="fw-bold">Elena Bureeva </span> invited you to the project <span class="fw-bold">Flatlogic One</span> </span>
                                    </div>
                                    <div>
                                        <span class="dropdown-time">9:15 AM</span>
                                    </div>
                                </a>
                            </li>
                            <p class="dropdown-date">Yesterday</p>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="avatar thumb-sm mr-3">
                                            <img src="img/avatars/tn1.png" alt="..." class="rounded-circle pt-1">
                                        </span>
                                    <div>
                                        <span> <span class="fw-bold">Jim Tomson </span> removed you to the project <span class="fw-bold"> Flatlogic One</span> </span>
                                    </div>
                                    <div>
                                        <span class="dropdown-time">9:15 AM</span>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="avatar thumb-sm mr-3">
                                            <img src="img/avatars/tn3.png" alt="..." class="rounded-circle pt-1">
                                        </span>
                                    <div>
                                        <span> <span class="fw-bold">Elena Bureeva </span> invited you to the project <span class="fw-bold">Flatlogic One</span> </span>
                                    </div>
                                    <div>
                                        <span class="dropdown-time">9:15 AM</span>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <button role="menuitem" type="button" class="dropdown-item">
                                    <span class="ml-auto text-warning">See more
                                        <i class="fa fa-arrow-right ml-1"></i>
                                    </span>
                                </button>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#"
                           class="nav-link"
                           id="notifications-dropdown-toggle"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false"
                           data-position="bottom-middle-aligned"
                           data-disable-interaction="false"
                        >
                            <i class="icons email-icon"></i>
                            <i class="fa fa-circle text-success"></i>
                        </a>
                        <ul tabindex="-1" class="dropdown-menu dropdown-menu-messages dropdown-menu-right comments">
                            <p class="dropdown-name">New Messages</p>
                            <p class="dropdown-date text-warning mt-n2">5 new messages</p>
                            <p class="dropdown-date">Today</p>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="avatar thumb-sm mr-3">
                                            <img src="img/avatars/tn1.png" alt="..." class="rounded-circle">
                                            <span class="dropdown-time">9:15 AM</span>
                                        </span>
                                    <div>
                                         <span class="fw-bold">Jim Tomson </span><br> Hey! How is it going?
                                    </div>
                                    <div class="ml-auto">
                                        <span class="badge badge-secondary badge-pill">2</span>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="avatar thumb-sm mr-3">
                                            <img src="img/avatars/tn2.png" alt="..." class="rounded-circle">
                                            <span class="dropdown-time">9:15 AM</span>
                                        </span>
                                    <div>
                                        <span class="fw-bold">Elena Bureeva </span><br> Good news!
                                    </div>
                                    <div class="ml-auto">
                                        <span class="badge badge-secondary badge-pill">1</span>
                                    </div>
                                </a>
                            </li>
                            <p class="dropdown-date">Yesterday</p>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="avatar thumb-sm mr-3">
                                            <img src="img/avatars/tn1.png" alt="..." class="rounded-circle">
                                            <span class="dropdown-time">9:15 AM</span>
                                        </span>
                                    <div>
                                        <span class="fw-bold">Jim Tomson </span><br> Nice to see you again!
                                    </div>
                                    <div class="ml-auto">
                                        <span class="badge badge-secondary badge-pill">1</span>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="avatar thumb-sm mr-3">
                                            <img src="img/avatars/tn3.png" alt="..." class="rounded-circle">
                                            <span class="dropdown-time">9:15 AM</span>
                                        </span>
                                    <div>
                                        <span class="fw-bold">Jim Tomson </span><br> Nice to see you again!
                                    </div>
                                    <div class="ml-auto">
                                        <span class="badge badge-secondary badge-pill">1</span>
                                    </div>
                                </a>
                            </li>
                            <button role="menuitem" type="button" class="dropdown-item">
                                    <span class="ml-auto text-warning">See more
                                        <i class="fa fa-arrow-right ml-1"></i>
                                    </span>
                            </button>
                        </ul>
                    </li>
                    <li class="dropdown nav-item">
                        <a
                                href="#"
                                role="button"
                                class="dropdown-toggle dropdown-toggle-notifications nav-link profile"
                                id="notifications-dropdown-toggle"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                                data-position="bottom-middle-aligned"
                                data-disable-interaction="false"
                        >
                            <span class="avatar float-left">
                                <img class="rounded-circle" src="img/avatars/a7.png" alt="..." >
                            </span>
                        </a>
                        <ul tabindex="-1" class="dropdown-menu dropdown-menu-messages dropdown-menu-right comments profile">
                            <p class="dropdown-name">Sara Smith</p>
                            <p class="dropdown-date text-warning mt-n2">Sara_smith@gmail.com</p>
    
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                    <span class="mr-3">
                                        <img src="img/icons/settings_outlined.svg" alt="...">
                                    </span>
                                    <div>
                                        <span>Settings </span>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="#" class="dropdown-item">
                                        <span class="mr-3">
                                            <img src="img/icons/profile_outlined.svg" alt="...">
                                        </span>
                                    <div>
                                        <span>Account </span>
                                    </div>
                                </a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" target="_self" href="login.html" class="dropdown-item">
                                        <span class="mr-3">
                                            <img src="img/icons/logout_outlined.svg" alt="...">
                                        </span>
                                    <div>
                                        <span>Log out </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<nav id="sidebar" class="sidebar shadow-none" role="navigation">
    <!-- need this .js class to initiate slimscroll -->
    <div class="js-sidebar-content">
        <header class="logo d-md-block" style="background-color: #323232;">
            <img src="img/logo_enstp.png" style="height:65px;width:150px;" alt="...">
        </header>
        <h5 class="sidebar-nav-title">DASHBOARD</h5>
        <ul class="sidebar-nav">
            <li class=" active ">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="sidebar-icon dashboard-icon"></i>
                    <span class="icon">Dashboard</span>
                </a>
            </li>
        </ul>
        <h5 class="sidebar-nav-title">EXAM CATEGORIES</h5>
        <ul class="sidebar-nav">
            @foreach ($programs as $program)
                <li class="">
                    <a href="{{ route('get.applicants', $program->code) }}">
                        <i class="fa-solid fa-arrow-right"></i>
                        <span class="icon">{{ $program->title }}</span>
                    </a>
                </li>
            @endforeach
        </ul>
        <ul class="sidebar-nav">
            <hr>
            <li class="">
                <a href="#">
                    <i class="sidebar-icon settings-icon"></i>
                    <span class="icon">Settings</span>
                </a>
            </li>
            <li class="">
                <a href="#">
                    <i class="sidebar-icon account-icon"></i>
                    <span class="icon">Account</span>
                </a>
            </li>
            <li class="">
                <a href="login.html" target="_blank" data-no-pjax>
                    <i class="sidebar-icon logout-icon"></i>
                    <span class="icon">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrap">
    <main id="content" class="content" role="main">
        <!-- Page content -->
        <div class="row">
            <div class="col-lg-5"><h1></h1></div>
            <div class="d-flex align-items-start justify-content-center pr-0 dashboard-buttons mt-1 mb-5 col-lg-7">
                <div class="ml-lg-auto ml-md-0 mr-lg-4 btn-group dropdown">
                    <button class="btn btn-outline-default bg-white" type="button">
                        Count down for the different exams here
                    </button>
                </div>
                <button class="btn btn-success"><i class="fa-solid fa-download"></i> Download Lists</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <section class="widget pb-0">
                    <header>
                        <h5>
                            <span class="fw-semi-bold">Stats</span>
                        </h5>
                    </header>
                    <div class="widget-body">
                        <div class="justify-content-between p-3 no-gutters row">
                            <div class="d-flex align-items-center col-sm-8">
                                <h3 class="fw-semi-bold mb-0">00</h3>
                            </div>
                            <div class="d-flex align-items-center justify-content-end col-sm-4">
                                <p class="text-success">more <i class="fa-solid fa-arrow-right"></i></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="apexcharts">
                                    <div id="first-apex-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="row">
            @foreach($programs as $program)
                <div class="col-lg-4">
                    <section class="widget pb-0">
                        <header>
                            <h5>
                                <span class="fw-semi-bold">{{$program->title}}</span>
                            </h5>
                        </header>
                        <div class="widget-body">
                            <div class="justify-content-between p-3 no-gutters row">
                                <div class="d-flex align-items-center col-sm-8">
                                    <h3 class="fw-semi-bold mb-0">00</h3>
                                </div>
                                <div class="d-flex align-items-center justify-content-end col-sm-4">
                                    <p class="text-success">more <i class="fa-solid fa-arrow-right"></i></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="apexcharts">
                                        <div id="first-apex-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
        <footer class="content-footer hidden-print">
            Version 1.0
        </footer>
    </main>
</div>
    <!-- The Loader. Is shown when pjax happens -->
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin-fast"></i>
    </div>

    <!-- common libraries. required for every page-->

    <script src="{{ asset('admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/node_modules/jquery-pjax/jquery.pjax.js') }}"></script>
    <script src="{{ asset('admin/node_modules/popper.js/dist/umd/popper.js') }}"></script>
    <script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin/node_modules/bootstrap/js/dist/util.js') }}"></script>
    <script src="{{ asset('admin/node_modules/widgster/widgster.js') }}"></script>
    <script src="{{ asset('admin/node_modules/hammerjs/hammer.js') }}"></script>
    <script src="{{ asset('admin/node_modules/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('admin/node_modules/jquery-hammerjs/jquery.hammer.js') }}"></script>

    <!-- common app js -->
    <script src="{{ asset('admin/js/settings.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>

    <!-- Page scripts -->
<script src='{{ asset('admin/node_modules/apexcharts/dist/apexcharts.js') }}'></script>
<!-- page specific js -->
<script src="{{ asset('admin/js/dashboard/index.js') }}"></script>
</body>

</html>
