@extends('1_company.company_boiler')
@push('title')
    <title>Company Dashboard</title>
    @section('content')
        <h1>Company Dashboard</h1>
        <div class="container p-4 mt-5">
            <div class="row">
                <div class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header bg-info">Jobs Posts</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $count_published_jobs }}</h5>
                        </div>
                    </div>
                </div>
                <div class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header bg-info">Jobs Approval</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $count_published_jobs }}</h5>
                        </div>
                    </div>
                </div>
                <div class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header bg-info">Employee</div>
                        <div class="card-body">
                            <h5 class="card-title">23</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
