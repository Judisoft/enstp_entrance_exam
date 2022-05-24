@extends('layouts.admin')
@section('content')
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
                        <h3 class="fw-semi-bold mb-0">00</h3>
                    </div>
                    <div class="d-flex align-items-center justify-content-end col-sm-4">
                        <p class="text-success">more <i class="fa-solid fa-arrow-right"></i></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="apexcharts">
                            <div id="first-apex-chart"></div>
                        </div>
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
                            <h3 class="fw-semi-bold mb-0">{{ $program_counter }}</h3>
                        </div>
                        <div class="d-flex align-items-center justify-content-end col-sm-4">
                            <p class="text-success">more <i class="fa-solid fa-arrow-right"></i></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="apexcharts">
                                <div id="first-apex-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endforeach
</div>
@endsection
