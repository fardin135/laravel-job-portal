@extends('company.company_boiler')
@push('title')
    <title>Company Dashboard</title>
@section('content')
    <h1>Company Dashboard</h1>
        <div class="container p-4 mt-5">
            <div class="row">
                <a href="{{ route('company.jobs') }}" class="container col-4 bg-white">
                        <div class="card text-center">
                            <div class="card-header bg-info">Active Job Posts</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $count_published_jobs }}</h5>
                                </div>
                        </div>
                </a>
                    <a href="{{ route('company.applicant.list') }}" class="container col-4 bg-white">
                        <div class="card text-center">
                            <div class="card-header bg-info">Total Applicant</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $count_total_applicants }}</h5>
                                </div>
                        </div>
                    </a>
                        <a href="{{ route('company.applicant.list') }}" class="container col-4 bg-white">
                            <div class="card text-center">
                                <div class="card-header bg-info">Seleted Candidates</div>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $count_selected_applicants }}</h5>
                                </div>
                            </div>
                        </a>
                </div>
            </div>
@if($completed_profile == 0)
            <h1 style="background: linear-gradient( skyblue, lightgreen); text-align: center;" class="mt-5">***Complete Company Profile And Get Points***</h1>
        <a href="{{ route('company.profile') }}" class="d-flex justify-content-center mt-5">Click Here To Complete Your Profile</a>


    
@endif
@extends('main_page_layout.flash_message')
        </div>

    @endsection
