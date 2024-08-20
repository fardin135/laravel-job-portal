@extends('candidate.candidate_boiler')
@push('title')
    <title>Candidate Dashboard</title>
@section('content')
    <div class="container bg-success p-4 mt-5">
        <div class="row">
            <a href="{{ route('candidate.saved_jobs') }}" class="container col-4 bg-white">
                <div class="card text-center">
                    <div class="card-header">Jobs Saved</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $count_saved_jobs}}</h5>
                        </div>
                </div>
            </a>
                <a href="{{ route('candidate.applied_jobs') }}" class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header">Jobs Applied</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $count_applied_jobs }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
@if(($completed_profile->completed_basic_infos && $completed_profile->completed_edu_infos && $completed_profile->completed_professional_infos) == 0)
    <h1 style="background: linear-gradient( skyblue, lightgreen); text-align: center;" class="mt-5">***Please Complete Your Profile First***</h1>
        <a href="{{ route('candidate.profile') }}" class="d-flex justify-content-center mt-5">Click Here To Complete Your Profile</a>
@endif
@endsection
