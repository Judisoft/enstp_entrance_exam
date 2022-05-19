<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>

    <title>ENSTP Entrance Exams Registration</title>
</head>
<body>
    <div class="body_wrapper frm-vh-md-100">
        <div class="formify_body" data-bg-color="#F3F7F9">
            <div class="f_content">
                <div class="formify_box_three formify_box_four formify_login">
                    <div class="container-fluid custom_height">
                        <div class="row">
                            <div class="col-lg-3 formify_content_left content-bg">
                                <div class="overlay_bg" data-bg-color="rgba(43, 45, 58, 0.85)"></div>
                                <div class="formify_logo_wrapper">
                                    <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                                    <a href="{{ route('logout') }}"></a>
                                </div> 
                            </div>
                            <div class="col-lg-9 formify_content_right">
                                <div class="formify_box">
                                    <h6>Step 1 of 3</h6>
                                    <h4 class="form_title">Program Choice</h4>
                                    <form action="{{ route('concour.register') }}" method="POST" class="signup_form row">
                                        @csrf
                                        <div class="form-group col-lg-12">
                                            <label class="input_title" for="firstName">Choose Program</label>
                                            <select name="program_choice" id="programChoice" class="niceselect">
                                                <option value="">Choose a program</option>
                                                <option value="meng">Masters in Engineering</option>
                                                <option value="arch">Masters in Architecture</option>
                                                <option value="man">Masters in Management</option>
                                                <option value="tech">Senior Technicians</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button type="submit"class="btn thm_btn text-transform-inherit">Save and Continue</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>