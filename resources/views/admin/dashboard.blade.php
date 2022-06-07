@extends('layouts.admin')
@section('content')
<style>
    a:hover{
        text-decoration:none;
        color: red;
    }
    h3{
        color: #ccc !important;
    }
</style>
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
                        <h3 class="fw-semi-bold mb-0"><span class="fi flaticon-users"></span> {{ $applicants->count() }}</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-end col-sm-4">
                        <p class="text-success">more <i class="fa-solid fa-arrow-right"></i></p>
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
                            <h3 class="fw-semi-bold mb-0">
                                <span class="fi flaticon-users"></span>
                                @if($program->code == 'btech') {{ $btech->count() }} 
                                @elseif ($program->code == 'htech') {{ $htech->count() }} 
                                @elseif ($program->code == 'eng') {{ $eng->count() }}
                                @elseif ($program->code == 'arc') {{ $arc->count() }}
                                @endif
                            </h3>
                        </div>
                        <div class="d-flex align-items-center justify-content-end col-sm-4">
                            <p class="text-success"><a href="{{ route('get.applicants', $program->code) }}">more <i class="fa-solid fa-arrow-right"></i></p></a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endforeach
</div>
@endsection
