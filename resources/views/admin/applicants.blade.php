@extends('layouts.admin')
@section('program')
<div class="d-flex justify-content-between">
    <div class="p-2"><h2 class="text-uppercase" style="font-weight: 700;">Program Code: {{ $program }}</h2></div>
    <div class="p-2"><a href="{{ route('export', $program) }}" class="btn btn-success"><i class="fa fa-download"></i> Download List</a></div>
</div>
@endsection
@section('content')
<div class="row content-wrapper">
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    @if(count($concour_registrations) > 0)
                        <tr>
                            <th>SN</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>POB</th>
                            <th>DOB</th>
                            <th>App. Date</th>
                        </tr>
                    @endif
                </thead>
                <tbody>
                    @forelse ($concour_registrations as $key => $applicant)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $applicant->user->first_name }}</td>
                            <td>{{ $applicant->user->last_name }}</td>
                            <td>{{ $applicant->user->gender }}</td>
                            <td>{{ $applicant->user->pob }}</td>
                            <td>{{ $applicant->user->dob }}</td>
                            <td>{{ $applicant->created_at->format('Y-m-d') }}</td>
                        </tr>
                    @empty
                        <div class="card card-body rounded"><h5>No Applicant</h5></div>
                    @endforelse
                </tbody>
            </table>
           
                <div class="text-right p-5">{{ $concour_registrations->links() }}</div>
            
        </div>
    </div>
</div>
@endsection