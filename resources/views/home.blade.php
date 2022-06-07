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
                        @include('layouts.navbar')
                        <div class="d-flex justify-content-end bg-dark rounded">
                            <div class="p-2"><a href="{{ route('view-application', auth()->user()->id) }}"  style="font-weight: 700;color:white;font-size:12.8px;"><span class="iconify" data-icon="bxs:folder-open"></span> my application</a></div>
                            <div class="p-2"><span class="small text-white" style="font-weight: 700;"> <span class="iconify" data-icon="bx:user" style="color: white;font-weight:700;"></span>{{ auth()->user()->first_name }}</span></div>
                            <div class="p-2"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();" style="font-weight: 700;color:white;font-size:12.8px;"><span class="iconify" data-icon="entypo:log-out" style="color: white;"></span> Logout</a></div>
                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 formify_content_right">
                                <div class="formify_box">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show p-3" role="alert">
                                            <strong> {{ Session::get('success') }}  <a href="{{ route('create.register') }}" class="btn btn-secondary btn-sm float-right"> Next <span class="iconify" data-icon="akar-icons:arrow-right"></span></a></strong>
                                        </div>
                                    @elseif(Session::has('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Oups!</strong> {{ Session::get('error') }}
                                        </div>
                                    @endif
                                    <h4 class="form_title">Personal Information</h4>
                                    <form action="{{ route('user.update', $user->id) }}" method="POST" class="signup_form row">
                                        @csrf
                                        @method('PATCH')
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="firstName" name="first_name"
                                                placeholder="First Name" value="{{ $user->first_name }}" >
                                            @error('first_name') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="lastName">last Name</label>
                                            <input type="text" class="form-control" id="lastName" name="last_name"
                                                placeholder="last Name" value="{{ $user->last_name }}">
                                                @error('last_name') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="inputaddress">Email Address</label>
                                            <input type="email" class="form-control" id="inputaddress" name="email"
                                                placeholder="Email Address" value="{{ $user->email }}" >
                                                @error('email') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="phone">Phone Number</label>
                                            <input type="tel" class="form-control"  maxlength="9" id="phone" name="telephone"
                                                placeholder="Phone Number" value="{{ $user->telephone }}">
                                                @error('telephone') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title" for="age">Date of Birth</label>
                                            <input type="date" class="form-control" name="dob" id="dob" value="{{ $user->dob }}">
                                            @error('dob') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label class="input_title">Gender</label>
                                            <select class="niceselect" name="gender">
                                                <option value="">Select gender</option>
                                                <option value="M" @if($user->gender === 'M') selected="selected" @endif>Male</option>
                                                <option value="F" @if($user->gender === 'F') selected="selected" @endif>Female</option>
                                            </select>
                                            @error('gender') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label class="input_title" for="pob">Place of Birth</label>
                                            <input type="text" class="form-control" id="pob" name="pob"
                                                placeholder="Place of birth" value="{{ $user->pob }}" >
                                                @error('pob') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label class="input_title" for="region_of_origin">Region of Origin</label>
                                            <select class="niceselect" name="region_of_origin">
                                                <option value="">Select region of origin</option>
                                                <option value="AD" class="text-uppercase" @if($user->region_of_origin === 'AD') selected="selected" @endif>Adamawa</option>
                                                <option value="CE" class="text-uppercase" @if($user->region_of_origin === 'CE') selected="selected" @endif>Centre</option>
                                                <option value="EN" class="text-uppercase" @if($user->region_of_origin === 'EN') selected="selected" @endif>Extrem North</option>
                                                <option value="ES" class="text-uppercase" @if($user->region_of_origin === 'ES') selected="selected" @endif>East</option>
                                                <option value="LT" class="text-uppercase" @if($user->region_of_origin === 'LT') selected="selected" @endif>Littoral</option>
                                                <option value="NO" class="text-uppercase" @if($user->region_of_origin === 'NO') selected="selected" @endif>North</option>
                                                <option value="NW" class="text-uppercase" @if($user->region_of_origin === 'NW') selected="selected" @endif>North West</option>
                                                <option value="OU" class="text-uppercase" @if($user->region_of_origin === 'OU') selected="selected" @endif>West</option>
                                                <option value="SU" class="text-uppercase" @if($user->region_of_origin === 'SU') selected="selected" @endif>South</option>
                                                <option value="SW" class="text-uppercase" @if($user->region_of_origin === 'SW') selected="selected" @endif>South West</option>
                                            </select>
                                            @error('region_of_origin') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label class="input_title">Are you a state Agent?</label>
                                            <select class="niceselect" name="sa_status">
                                                <option value="">select state agent status</option>
                                                <option value="1" @if($user->state_agent === 'M') selected="selected" @endif>Yes</option>
                                                <option value="0" @if($user->state_agent === 'F') selected="selected" @endif>No</option>
                                            </select>
                                            @error('sa_status') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <button type="submit"class="btn thm_btn text-transform-inherit text-right" id="submitBtn">Save and Continue</button>
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