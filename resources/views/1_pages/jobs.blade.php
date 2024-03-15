@extends('1_layout.main')
@push('title')
    <title>Jobs Page</title>

    @section('content')
        <div class="container-fluid bg-secondary p-3 rounded shadow">
            <img src="{{ asset('images/job_pulse_banner.png') }}" class="img-fluid w-100 h-50" alt="Job Pulse Banner">
        </div>



        {{-- ---------------------------------- --}}
        <div class="card text-center mt-5">
            <div class="card-header">
                <h6>Recent Publisher Jobs</h6>
                <div class="row">
                    <div class="col">
                        <a href="/jobs/Developer" class="btn btn-primary shadow-3">Developers ({{ $developers_count }})</a>
                    </div>
                    <div class="col">
                        <a href="/jobs/Designer" class="btn btn-primary shadow-3">Designers ({{ $designers_count }})</a>
                    </div>
                    <div class="col">
                        <a href="/jobs/Marketer" class="btn btn-primary shadow-3">Marketers ({{ $marketers_count }})</a>
                    </div>
                    <div class="col">
                        <a href="/jobs/UI" class="btn btn-primary shadow-3">UI/UX ({{ $uiUx_count }})</a>
                    </div>
                    <div class="col">
                        <a href="/jobs/Other" class="btn btn-primary shadow-3">Others ({{ $others_count }})</a>
                    </div>
                </div>
            </div>
            <div class="container mt-5 d-flex justify-content-end">
                <form action="" class="col-3 ">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Search Your Jobs"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>Search Jobs</button>
                    </div>
                </form>
            </div>
            <div class="card-body mt-3 mb-5">

                {{-- --------------------------------------------------------------- --}}
                @foreach ($jobs as $job)
                    <div class="container border border-secondary mt-2 mb-2">
                        <div class="row">
                            <div class="col-8 float-start p-2">
                                <h5>{{ $job->job_title }}</h5>
                                @php
                                    $required_skills = json_decode($job->required_skills);
                                @endphp
                                @foreach ($required_skills as $required_skill)
                                    <h6 class="btn btn-info">{{ $required_skill }}</h6>
                                @endforeach
                            </div>

                            <div class="col-4 float-end text-right  p-2">
                                <h6 class="btn btn-info disabled">{{ $job->salary }}</h6>
                                <br>
@php
    $candidate = Auth::user()->candidate ?? null;
    $applied = $candidate ? $candidate->applications()->where('job_id', $job->id)->exists() : false;
@endphp

                                @if ($applied)
                                    <button class="btn btn-success" disabled>Already Applied</button>
                                @else
                                    <form method="POST" action="{{ route('jobs.storeJobsApplication') }}">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                                        <button type="submit" class="btn btn-danger">Apply</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach


                {{-- --------------------------------------------------------------- --}}
                <a href="/jobs_form" class="btn btn-primary mt-5 bg-success text-dark bg-opacity-50">Add New Job Post</a>

                <div class="container mt-5">
                    {{ $jobs->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    @endsection
