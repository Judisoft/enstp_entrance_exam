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
                            data-disable-interaction="false" style="font-weight: 700;">
                                <span class="rounded-circle bg-light p-2 px-3">@php echo substr( auth()->user()->first_name, 0, 1); @endphp</span>
                            </a>
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
                                        <img class="rounded-circle bg-light p-1" height="35" width="35" src="{{ asset('admin/img/avatars/user.png')}}" alt="..." >
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav id="sidebar" class="sidebar" role="navigation">
            <!-- need this .js class to initiate slimscroll -->
            <div class="js-sidebar-content">
                <header class="logo d-md-block" style="background-color: #323232;">
                {{-- <header class="logo d-md-block"> --}}
                    <img src="{{ asset('admin/img/logo_enstp.png')}}" style="height:65px;width:150px;" alt="...">
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
                        <a href="{{ Auth::logout() }}">
                            <i class="sidebar-icon logout-icon"></i>
                            <span class="icon">Logout</span>
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
                    @yield('program')
                    <div class="d-flex align-items-start justify-content-center pr-0 dashboard-buttons mt-1 mb-5 col-lg-7">
                        <div class="ml-lg-auto ml-md-0 mr-lg-4 btn-group dropdown">
                           <h4 style="font-weight: 700" id="demo"></h4>
                        </div>
                        <a href="{{ route('export') }}" class="btn btn-success"><i class="fa-solid fa-download"></i> Download Lists</a>
                    </div>
                </div>
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
        <script src="{{ asset('admin/js/dashboard/index.js') }}"></script>\
        <script>
            // Set the date we're counting down to
            var countDownDate = new Date("Jul 5, 2022 15:37:25").getTime();
            
            // Update the count down every 1 second
            var x = setInterval(function() {
            
              // Get today's date and time
              var now = new Date().getTime();
                
              // Find the distance between now and the count down date
              var distance = countDownDate - now;
                
              // Time calculations for days, hours, minutes and seconds
              var days = Math.floor(distance / (1000 * 60 * 60 * 24));
              var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
              var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
              var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                
              // Output the result in an element with id="demo"
              document.getElementById("demo").innerHTML = days + "d " + hours + "h "
              + minutes + "m " + seconds + "s ";
                
              // If the count down is over, write some text 
              if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
              }
            }, 1000);
        </script>
            
    </body>
</html>