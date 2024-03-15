@extends('1_candidate.candidate_boiler')
@push('title')
    <title>Candidate Dashboard</title>
    @section('content')
                @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        <div class="container bg-success p-4 mt-5">
            <div class="row">
                <div class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header">Jobs Applied</div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $count_applied_jobs }}</h5>
                        </div>
                    </div>
                </div>
                <div class="container col-4 bg-white">
                    <div class="card text-center">
                        <div class="card-header">Jobs Saved</div>
                        <div class="card-body">
                            <h5 class="card-title">NONE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
