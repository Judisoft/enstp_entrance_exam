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
                            {{-- <div class="col-lg-3 formify_content_left content-bg">
                                <div class="overlay_bg" data-bg-color="rgba(43, 45, 58, 0.85)"></div>
                                <div class="formify_logo_wrapper">
                                    <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                                    <a href="{{ route('logout') }}"></a>
                                </div> 
                            </div> --}}
                            <div class="col-lg-12 formify_content_right">
                                <div class="formify_box">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show pb-4" role="alert">
                                            <strong> {{ Session::get('success') }}  <a href="{{ route('view-application', auth()->user()->id) }}" class="btn btn-outline-success float-right">Review my  application<span class="iconify" data-icon="akar-icons:arrow-right"></span></a></strong>
                                        </div>
                                    @elseif(Session::has('error'))
                                        <div class="alert alert-danger alert-dismissible fade show pb-4" role="alert">
                                            <strong> {{ Session::get('error') }}  </strong>
                                        </div>
                                    @endif
                                    <h4 class="form_title">Personal Information <a href="{{ route('home') }}"><span class="iconify" data-icon="akar-icons:edit"></span></a></h4>
                                    <table class="table table-borderless table-striped">
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
                                            <td>{{ $user->gender }}</td>
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
                                            <label class="input_title" for="writingCenter">Choose writing center</label>
                                            <select name="writing_center" id="writingCenter" class="niceselect @error('writing_center') border-danger @enderror">
                                                <option value="">Choose a program</option>
                                                <option value="AD" class="text-uppercase">Adamawa</option>
                                                <option value="CE" class="text-uppercase">Centre</option>
                                                <option value="EN" class="text-uppercase">Extrem North</option>
                                                <option value="ES" class="text-uppercase">East</option>
                                                <option value="LT" class="text-uppercase">Littoral</option>
                                                <option value="NO" class="text-uppercase">North</option>
                                                <option value="NW" class="text-uppercase">North West</option>
                                                <option value="OU" class="text-uppercase">West</option>
                                                <option value="SU" class="text-uppercase">South</option>
                                                <option value="SW" class="text-uppercase">South West</option>
                                            </select>
                                            @error('writing_center') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <h4 class="form_title">Payment Details</h4>
                                            <label class="input_title" for="transaction_id">Enter Transaction ID</label>
                                            <input type="text" class="form-control @error('program_choice') border-danger @enderror" placeholder="Enter Transaction ID" name="transaction_id" value="{{ old('transaction_id') }}">
                                            @error('transaction_id') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                            <h4 class="form_title">Sponsorship</h4>
                                            <div class="form-group col-lg-12">
                                                <label class="input_title" for="sponsor">Full name of your sponsor as witten on his/her identification document</label>
                                                <input type="text" class="form-control @error('sponsor') border-danger @enderror" placeholder="Enter sponsor's full name" name="sponsor" value="{{ old('sponsor') }}">
                                                @error('sponsor') <small class="text-danger">{{ $message }}</small>  @enderror
                                            </div>
                                            <div class="form-group col-lg-12">
                                            <label class="input_title" for="firstName">Identification Document</label>
                                            <select name="identification_document" id="identificationDocument" class="niceselect @error('identification_document') border-danger @enderror">
                                                <option value="">Select identification  document</option>
                                                <option value="nic" class="text-uppercase">National Identity Card</option>
                                                <option value="passport" class="text-uppercase">passport</option>
                                            </select>
                                            @error('identification_document') <small class="text-danger">{{ $message }}</small>  @enderror
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <label class="input_title" for="identificationDocumentNumber">Identification document number</label>
                                            <input type="text" class="form-control @error('identification_number') border-danger @enderror" placeholder="Enter Identification number: NIC or Passport" name="identification_number" value="{{ old('identification_number') }}">
                                            @error('identification_number') <small class="text-danger">{{ $message }}</small>  @enderror
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