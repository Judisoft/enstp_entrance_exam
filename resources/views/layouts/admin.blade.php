<!DOCTYPE html>
<html>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <head>
        <title>Admin</title>
        <link href="{{ asset('admin/css/application.min.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="{{ asset('admin/js/countdown.js') }}"></script>
    </head>
    <style>
        .fa-5x{
            font-size: 75px;
        }
        .fa-3x{
            font-size: 13px;
        }
        .online{
            color: #04B24B;
        }
    </style>
    <body class="">
        <nav class="page-controls navbar navbar-dashboard border-bottom">
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
                            <div class="input-group input-group-no-border mr-3" style="backround-color:#fff;">
                                <input class="form-control" id="main-search" type="text" placeholder="Search" aria-describedby="search-icon">
                                <div class="input-group-append my-auto">
                                <img src="{{ asset('admin/img/icons/search.svg')}}" id="search-icon" alt="search" width="24px" height="23px" style="margin-left: 12px;">
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
                            data-disable-interaction="false" >
                            @if(Auth::check())<span class="rounded-circle bg-warning p-2 px-3"style="font-weight: 900;"> {{ substr(Auth::user()->first_name, 0, 1) }} </span>@endif
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav id="sidebar" class="sidebar border-right" role="navigation">
            <!-- need this .js class to initiate slimscroll -->
            <div class="js-sidebar-content">
                <header class="logo d-md-block border-bottom border-right" style="background-color: #f2fafa;">
                {{-- <header class="logo d-md-block"> --}}
                    <img src="{{ asset('admin/img/logo_enstp.png')}}" style="height:65px;width:150px;" alt="...">
                </header>
                <ul class="sidebar-nav">
                    <li class=" active ">
                        <a>
                            <i class="sidebar-icon account-icon"></i>
                            <span class="icon text-uppercase">{{ auth()->user()->first_name }}</span> <i class="fa fa-circle fa-3x pl-5 online"></i>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="sidebar-icon dashboard-icon"></i>
                            <span class="icon">Admin Dashboard</span>
                        </a>
                    </li>
                    <li class="active">
                        <a>
                            <i class="sidebar-icon ui-elements"></i>
                            <span class="icon text-uppercase">Trainning Programs</span>
                        </a>
                    </li>
                    @foreach ($programs as $program)
                        <li>
                            <a href="{{ route('get.applicants', $program->code) }}">
                                <i class="fa-solid fa-arrow-right"></i>
                                <span class="icon">{{ $program->title }}</span>
                            </a>
                        </li>
                    @endforeach
                    <hr>
                    <li class="active">
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            <i class="sidebar-icon logout-icon"></i>
                            <span class="icon">Logout</span>
                        </a>
                    </li>
                    <hr>
                    <li>
                        <a>
                            <span class="icon">version 1.0</span>
                        </a>
                    </li>
                </ul>
            </div>
            <form id="frm-logout" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>
        <div class="content-wrap">
            <main id="content" class="content" role="main">
                <!-- Page content -->
                <div class="row">
                    <div class="d-flex align-items-start justify-content-center pr-0 mb-5 col-lg-11">
                        <div class="ml-lg-auto ml-md-0">
                            <div class="d-flex flex-row sidebar-nav-title">
                                <div class="p-2 border-right"><i class="fa fa-bank fa-5x"></i></div>
                                <div class="p-2">
                                    <div class="border-bottom mt-2"> ENTRANCE EXAMINATIONS INTO NATIONAL ADVANCED SCHOOL OF PUBLIC WORKS</div>
                                    <div>CONCOUR D'ENTREE A L'ECOLE NATIONAL SUPERIEUR DES TRAVAUX PUBLICS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @yield('program')
                @yield('content')
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