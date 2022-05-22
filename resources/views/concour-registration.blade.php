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
                                @if (Session::has('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>All good!</strong> {{ Session::get('success') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                @elseif(Session::has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>Oups!</strong> {{ Session::get('error') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                  </div>
                                @endif
                                    <h4 class="form_title">Personal Information <a href="{{ route('home') }}"><span class="iconify" data-icon="akar-icons:edit"></span></a></h4>
                                    <table class="table table-borderless table-responsice">
                                        <tbody>
                                          <tr>
                                            <th class="text-bold">First Name:</th>
                                            <td>{{ $user->first_name }}</td>
                                            <td class="text-bold">Last Name:</td>
                                            <td>{{ $user->last_name }}</td>
                                          </tr>
                                          <tr>
                                            <th class="text-bold">Email:</th>
                                            <td>{{ $user->email }}</td>
                                            <td class="text-bold">Telephone:</td>
                                            <td>{{ $user->telephone }}</td>
                                          </tr>
                                          <tr>
                                            <th class="text-bold">Gender:</th>
                                            <td>{{ $user->gender }}</td>\
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <th class="text-bold">Date of Birth:</th>
                                            <td>{{ $user->dob }}</td>
                                            <td class="text-bold">Place of Birth:</td>
                                            <td>{{ $user->pob }}</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                    <h4 class="form_title">Program Choice</h4>
                                    <form action="{{ route('concour.register') }}" method="POST" class="signup_form row">
                                        @csrf
                                        <div class="form-group col-lg-12">
                                            <label class="input_title" for="firstName">Choose Program</label>
                                            <select name="program_choice" id="programChoice" class="niceselect @error('program_choice') border-danger @enderror">
                                                <option value="">Choose a program</option>
                                                @foreach($programs as $program)
                                                    <option value="{{$program->code}}" class="text-uppercase">{{$program->title}}</option>
                                                @endforeach
                                            </select>
                                            @error('program_choice') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <h4 class="form_title">Payment Details</h4>
                                            <label class="input_title" for="firstName">Enter Transaction ID</label>
                                            <input type="text" class="form-control @error('program_choice') border-danger @enderror" placeholder="Enter Transaction ID" name="transaction_id" value="{{ old('transaction_id') }}">
                                            @error('transaction_id') <small class="text-danger">{{ $message }}</small>  @enderror
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="assets/vendors/bootstrap/js/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>