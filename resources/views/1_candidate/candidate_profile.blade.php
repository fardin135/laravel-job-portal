@extends('1_candidate.candidate_boiler')
@push('title')
    <title>Candidate Profile</title>
    @section('content')
        <div class="container">
            <h1>Complete Your Profile:</h1>
            @if ($basicInfo)
                <a class="btn btn-sm btn-primary mt-2" href="{{ route('candidate.basic_info_form') }}">Complete Basic Info</a>
                <br>
                <a class="btn btn-sm btn-primary mt-2" href="{{ route('candidate.edu_info_form') }}">Complete Education Info</a>
                <br>
                <a class="btn btn-sm btn-primary mt-2" href="{{ route('candidate.pro_and_exp_info_form') }}">Complete Professional And Experieces Info</a>
            @else
                <h1>Profile Completed</h1>
            @endif
        </div>
    @endsection
