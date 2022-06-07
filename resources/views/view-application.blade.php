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
                            <div class="row mr-auto">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-9">
                                    <h3 class="form_title text-uppercase pt-2">My Applications</h3>
                                    @if (Session::has('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ Session::get('success') }}</strong> 
                                        </div>
                                    @elseif(Session::has('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>{{ Session::get('error') }}</strong> 
                                        </div>
                                    @endif
                                        {{-- @if(count($user_application) > 0)
                                            <ul class="list-group list-group-flush">
                                                @foreach($user_application as $application)
                                                    <li class="list-group-item"><a href="{{ route('print.form', $application->id) }}" class="text-uppercase text-dark">{{ $application->program_choice}}</a>
                                                        @if($application->status == 1) 
                                                            <span class="iconify" data-icon="ep:document-checked" style="color: #4bb543;" data-width="20"></span>
                                                        @else
                                                        <span class="iconify" data-icon="ep:document" style="color: #4e4746;" data-width="20"></span>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                         @else
                                            <small>You have no application yet. Click <a href="{{ route('create.register') }}">here</a> to apply</small>
                                        @endif --}}
                                    @if(count($user_application) > 0)
                                        <table class="table table-bordered table-hover table-light">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Application ID</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($user_application as $key => $application)
                                                    <tr class="alert alert-primary">
                                                        <th scope="row">{{ $key + 1 }}</th>
                                                        <td><a href="{{ route('print.form', $application->id) }}" class="text-uppercase">{{ $application->program_choice.$application->id}}</a></td>
                                                        <td>
                                                            @if($application->status == 1) 
                                                                <span class="iconify" data-icon="ep:document-checked" style="color: #4bb543;" data-width="20"></span><small> completed</small>
                                                            @else
                                                            <small><span class="iconify" data-icon="fluent:document-error-20-regular" style="color: #4e4746;" data-width="20"></span>incomplete</small>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($application->status == 1)
                                                                <a href="{{ route('print.form', $application->id) }}"> [preview]</a>&nbsp;
                                                                <a href="#" class="btn btn-sm btn-success rounded-0"><span class="iconify" data-icon="carbon:document-pdf" data-width="20"></span> download pdf</a>
                                                            @else
                                                                <a href="{{ route('view-application', auth()->user()->id) }}" ><span class="iconify" data-icon="fluent:document-bullet-list-20-regular" data-width="20"></span> continue my application</a>
                                                            @endif
                                                            <a href="{{ route('delete.application', $application->id) }}" class="btn btn-sm btn-danger rounded-0"><span class="iconify" data-icon="icon-park-twotone:delete" data-width="20"></span> delete</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <small>You have no application yet. Click <a href="{{ route('create.register') }}">here</a> to apply</small>
                                    @endif
                                    <h3 class="form_title text-uppercase pt-2">sponsorship</h3>
                                    <p>Download sponsorship form <a href="#">here</a></p>
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