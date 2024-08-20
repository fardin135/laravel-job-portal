@extends('candidate.candidate_boiler')
    @push('title')
        <title>Candidate Profile</title>
@section('content')
    <div class="container">
        @extends('main_page_layout.flash_message')
            <h1>Complete Your Profile:</h1>
                @if (Auth::user()->candidate->completed_basic_infos == 0 )
                    <a class="btn btn-sm btn-primary mt-2" href="{{ route('candidate.basic_info_form') }}" >Complete Basic Info</a>
                @else
                    <a class="btn btn-sm btn-primary mt-2 disabled-link" href="#">Already Submitted Basic Info !!!</a>
                @endif
                    <br>
                        @if (Auth::user()->candidate->completed_edu_infos == 0 )
                            <a class="btn btn-sm btn-primary mt-2" href="{{ route('candidate.edu_info_form') }}">Complete Education Info</a>
                        @else
                            <a class="btn btn-sm btn-primary mt-2 disabled-link" href="#">Already Submitted Education Info !!!</a>
                        @endif
                            <br>
                                @if (Auth::user()->candidate->completed_professional_infos == 0 )
                                    <a class="btn btn-sm btn-primary mt-2" href="{{ route('candidate.pro_and_exp_info_form') }}">Complete Professional And Experieces Info</a>
                                @else
                                    <a class="btn btn-sm btn-primary mt-2 disabled-link" href="#">Already Submitted Professional And Experieces Info !!!</a>
                                @endif
    </div>
@endsection
