@extends('main_page_layout.main')
@push('title')
<title>Jobs Page</title>
@section('content')
    <div class="container-fluid bg-secondary p-3 rounded shadow">
        <img src="{{ asset('images/job_pulse_banner.png') }}" class="img-fluid w-100 h-50" alt="Job Pulse Banner">
    </div>
        <div class="card text-center mt-5">
            <div class="card-header">
                <h1 class="text-center mb-5 ">Job Listing</h1>
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
        </div>

            <div class="container mt-5 d-flex justify-content-end" >
                <form action="" class="col-3 ">
                    <div class="input-group">
                        <input type="search" name="search" class="form-control rounded" placeholder="Search Your Jobs"
                            aria-label="Search" aria-describedby="search-addon" />
                        <button type="submit" class="btn btn-outline-primary" data-mdb-ripple-init>Search Jobs</button>
                    </div>
                </form>
            </div>
        {{-- Jobs Listing Container left grid --}}
        <div class="container" >
            @foreach ($jobs as $job)
                <div class="row border mt-3 jobs-hover">
                    {{-- 2 div ---------- --}}
                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid border rounded mx-3 my-3" src="{{ asset('images/default_company_image.jpg') }}" alt="Company" style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h5 class="mb-3">{{ $job->job_title }}</h5>
                                    <span class="text-truncate me-3"><i class="fa fas fa-briefcase text-primary me-2"></i>{{ $job->company_name }}</span>
                                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $job->location }}</span>
                                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{ $job->job_type }}</span>
                                                <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{ $job->salary }}</span>
                            </div>
                    </div>
                        {{-- Jobs Listing Container right grid with buttons --}}
                        <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                            <div class="d-flex mb-3">
                                {{-- Users with others role cannot apply --}}
                                @if (!(Auth::check() && Auth::user()->user_role === "Candidate"))
                                    <form method="POST" action="{{ route('savedJob') }}">
                                        @csrf
                                            <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                <button type="submit" class="btn btn-primary btn-square me-3"><i class="far fa-heart text-light"></i></button>
                                    </form>
                                        <form method="POST" action="{{ route('storeJobApplication') }}">
                                            @csrf
                                                <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                    <button type="submit" class="btn btn-success me-3">Login to Apply Now!!!</button>
                                        </form>
                                {{-- Users with Candidate role can apply --}}
                                @else
                                    {{-- Restrict candidates to apply again --}}
                                    @php
                                        $saved = Auth::user()->savedJobs->contains('job_id', $job->id);
                                            $applied = Auth::user()->applications->contains('job_id', $job->id);
                                    @endphp
                                        {{-- Candidate have already saved a job --}}
                                        @if ($saved)
                                            <form method="POST" action="{{ route('jobs.savedJobDestroy') }}">
                                                @csrf
                                                    @method('DELETE')
                                                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                            <button type="submit" class="btn btn-primary me-3 d-flex align-items-center justify-content-center"><i class="fa fa-heart text-danger" aria-hidden="true"></i></button>
                                            </form>
                                        {{-- Candidate can saved a job --}}
                                        @else
                                            <form method="POST" action="{{ route('savedJob') }}">
                                                @csrf
                                                    <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                        <button type="submit" class="btn btn-primary me-3 d-flex align-items-center justify-content-center"><i class="far fa-heart text-light"></i></button>
                                            </form>
                                        @endif
                                            {{-- Candidate have already applied to a job --}}
                                            @if ($applied)
                                                <!-- Form with Modal Trigger Button -->
                                                <button type="button" class="btn btn-success me-3 d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#confirmationModal">Already Applied</button>
                                                    <!-- Modal Structure -->
                                                        <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="confirmationModalLabel">Confirm Action</h5>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                        <div class="modal-body">Are you sure you want to delete this job application?</div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="button" class="btn btn-primary" onclick="document.getElementById('deleteForm').submit();">Confirm</button>
                                                                            </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            {{-- After modal hidden Form to be Submitted --}}
                                                            <form id="deleteForm" method="POST" action="{{ route('jobs.storeJobApplicationDestroy') }}">
                                                                @csrf
                                                                    @method('DELETE')
                                                                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                            </form>
                                            {{-- Candidate can apply to a job --}}
                                            @else
                                                <form method="POST" action="{{ route('storeJobApplication') }}">
                                                    @csrf
                                                        <input type="hidden" name="job_id" value="{{ $job->id }}">
                                                            <button type="submit" class="btn btn-success me-3 d-flex align-items-center justify-content-center">Apply Now!!!</button>
                                                </form>
                                            @endif
                                    
                                @endif
                                    <a class="btn btn-info" href="{{ url('/job-details/'. $job->id) }}">View Details</a>
                            </div>
                                <small class="text-truncate me-2"><i class="far fa-calendar-alt text-primary me-2"></i>Dead-Line: {{ $job->deadline->format('d M, Y') }}</small>
                        </div>
                </div>
            @endforeach
                {{-- Pagination for bootstrap 5 --}}
                <div class="container mt-5">
                    {{ $jobs->links('pagination::bootstrap-5') }}
                </div>
                    {{-- Allow companies to create a new job post --}}
                    <div class="d-flex justify-content-center my-5">
                        <a href="/jobs_form" class="btn btn-primary bg-success text-dark bg-opacity-50">Add New Job Post</a>
                        @extends('main_page_layout.flash_message')
                    </div>
        </div>
@endsection
