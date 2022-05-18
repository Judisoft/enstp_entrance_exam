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

    <title>ENSTP User Account</title>
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
                                    <a href="{{ route('logout') }}">logout</a>
                                </div> 
                            </div>
                            <div class="col-lg-9 formify_content_right">
                                <div class="formify_box">
                                    <h6>Step 1 of 3</h6>
                                    <h4 class="form_title">Please fill with your personal details</h4>
                                    <form action="POST" class="signup_form row">
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="firstName"
                                                placeholder="First Name" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="lastName">last Name</label>
                                            <input type="text" class="form-control" id="lastName"
                                                placeholder="last Name" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="phone">Phone Number</label>
                                            <input type="text" class="form-control" id="phone"
                                                placeholder="Phone Number" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="inputaddress">Email Address</label>
                                            <input type="email" class="form-control" id="inputaddress"
                                                placeholder="Email Address" value="{{ $user->email }}" >
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="age">Age</label>
                                            <input type="text" class="form-control" id="age" placeholder="Age">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title">Gender</label>
                                            <select class="niceselect">
                                                <option value="1">Male</option>
                                                <option value="2">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button type="submit"
                                                class="btn btn-block thm_btn text-transform-inherit">Save and Continue</button>
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