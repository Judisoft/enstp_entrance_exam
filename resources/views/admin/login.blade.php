<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Admin - Login</title>
    <link href="{{ asset('admin/css/application.min.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

</head>

<body class="login-page">
    <div class="container-fluid">
        <main id="content" class="widget-login-container" role="main">
            <!-- Page content -->
        <div class="row align-item-center">
            <div class="col-md-3 m-auto">
                <section class="widget widget-login bg-transparent animated fadeInUp">
                    <h3 class="text-center" style="font-weight:700;">ENSTP | Admin</h3>
                    <div class="widget-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ Session::get('success') }} </strong>
                            </div>
                        @elseif(Session::has('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ Session::get('error') }}</strong> 
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.login') }}"  class="login-form mt-lg">
                            @csrf
                            <div role="group" class="form-group">
                                <label for="email" class="d-block">Email</label>
                                <div>
                                    <div role="group" class="input-group">
                                        <input id="email" type="email" name="email"  placeholder="Email" class="form-control input-transparent pl-3">
                                    </div>
                                    @error('email') <small class="text-danger">{{ $message }}</small>  @enderror
                                </div>
                            </div>
                            <div role="group" class="form-group">
                                <label for="password" class="d-block">Password</label>
                                <div>
                                    <div role="group" class="input-group">
                                        <input id="password" type="password" name="password" placeholder="Password" class="form-control input-transparent pl-3">
                                    </div>
                                    @error('password') <small class="text-danger">{{ $message }}</small>  @enderror
                                </div>
                            </div>
                            <div class="checkbox abc-checkbox mb-4 d-flex form-check">
                                <input id="checkbox1" type="checkbox" class="form-check-input">
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="clearfix">
                                <div class="btn-toolbar">
                                    <button type="submit" class="btn btn-warning btn-block">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>

        <footer class="page-footer">
            Verion 1.0
        </footer>
        </main>
    </div>
    <!-- The Loader. Is shown when pjax happens -->
    <div class="loader-wrap hiding hide">
        <i class="fa fa-circle-o-notch fa-spin-fast"></i>
    </div>

    <!-- common app js -->
    <script src="js/settings.js"></script>
    <script src="js/app.js"></script>

    <!-- Page scripts -->
</body>
</html>
