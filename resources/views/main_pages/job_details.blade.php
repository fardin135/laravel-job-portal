
@extends('main_page_layout.main')
@push('title')
    <title>Job Details Page</title>
@section('content')
    <a href="javascript:history.back()" class="btn btn-primary mt-3 mx-2"><i class="fa fa-arrow-left" aria-hidden="true"></i> Go Back</a>
        <div class="row">
            <div class="col-8 grid-item">
                <div class="container my-5 border">
                    <div class="d-flex align-items-center">
                        <div class="my-2">
                            <img src="{{ asset('images/default_company_image.jpg') }}"  style="width: 100px; height: 100px" alt="Company Image"/>
                            {{-- <img src="{{ $job->image_url ? asset($job->image_url) : asset('images/default_company_image.jpg') }}" alt="Company Image" class="img-fluid mb-3"> --}}
                        </div>
                            <div class="mx-5">
                                <h5 class="card-title fw-bold">{{ $job_details->job_title }}</h5>
                                    <span class="card-subtitle mb-2 text-muted me-3"><i class="fas fa-map-marker-alt"></i>{{ $job_details->company_name }}</span>
                                    <span class="card-subtitle mb-2 text-muted me-3"><i class="fas fa-map-marker-alt"></i>{{ $job_details->location }}</span>
                                    <span class="card-subtitle text-muted me-3"><i class="fas fa-briefcase"></i>{{ $job_details->job_type }}</span>
                                    <span class="card-subtitle text-muted">{{ $job_details->salary }}</span>
                            </div>
                    </div>
                        <h3 class="mt-5 textSteelBlue fw-bold">Job Describtion:</h3>
                            <p>{{ $job_details->description ?? "No Data Available" }}</p>
                            <h3 class="mt-5 textSteelBlue fw-bold">Job Responsibility:</h3>
                            <p>{{ $job_details->responsibility ?? "No Data Available" }}</p>
                            <h3 class="mt-5 textSteelBlue fw-bold">Job Qualification:</h3>
                            <p>{{ $job_details->qualifications ?? "No Data Available" }}</p>
                                <div class="d-flex justify-content-center">
                                    {{-- Check if the user is authenticated if-1--}}
                                    @if (!(Auth::check()))
                                        <form method="POST" action="{{ route('savedJob') }}">
                                            @csrf
                                            <input type="hidden" name="job_id" value="{{ $job_details->id }}">
                                            <button type="submit" class="btn btn-primary ">Save This Job Now !!!</button>
                                        </form>
                                        <form method="POST" action="{{ route('storeJobApplication') }}">
                                            @csrf
                                            <input type="hidden" name="job_id" value="{{ $job_details->id }}">
                                            <button type="submit" class="btn btn-danger ">Login To Apply Now !!!</button>
                                        </form>
                                    {{-- Check if the user is authenticated else-1--}}
                                    @else
                                        {{-- Check if the user is company if-2--}}
                                        @if (Auth::user()->user_role === "Company")
                                            <form method="POST" action="{{ route('company.active.deactive') }}">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $job_details->id }}">
                                                    {{-- Check active status if-3--}}
                                                    @if($job_details->active_status == 1)
                                                        <button type="submit" class="btn btn-success me-3">Active</button>
                                                    {{-- Check active status else-3--}}
                                                    @else
                                                        <button type="submit" class="btn btn-danger me-3">Deactive</button>
                                                    {{-- Check active status endif-3--}}
                                                    @endif
                                            </form>
                                                <button onclick="myFunction()" class="btn btn-danger">Delete</button>
                                            <form id="deleteForm" method="POST" action="{{ route('company.delete.job') }}" style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="job_id" value="{{ $job_details->id }}">
                                            </form>
                                        {{-- Check if the user is not company if-2--}}
                                        @else
                                            {{-- Restrict candidates to apply again --}}
                                            @php
                                                $saved = Auth::user()->savedJobs->contains('job_id', $job_details->id);
                                                $applied = Auth::user()->applications->contains('job_id', $job_details->id);
                                            @endphp      
                                                <form method="POST" action="{{ route('jobs.savedJobDestroy') }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="job_id" value="{{ $job_details->id }}">
                                                        {{-- Candidate have already saved a job if-3--}}
                                                        @if ($saved)
                                                            <button class="btn btn-success mt-2 mx-2">Remove Like!!!</button>
                                                        {{-- Candidate can saved a job else-3--}}
                                                        @else
                                                            <button type="submit" class="btn btn-primary mt-2 mx-2">Save</button>
                                                        {{-- endif-3 --}}
                                                        @endif
                                                </form>
                                                    {{-- Candidate have already applied to a job --}}
                                                    @if ($applied)
                                                        <!-- Button with Modal Trigger -->
                                                        <button type="button" class="btn btn-success mx-2" data-bs-toggle="modal" data-bs-target="#confirmationModal">Cancel Application</button>
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
                                                                    <input type="hidden" name="job_id" value="{{ $job_details->id }}">
                                                                </form>
                                                                    {{-- Candidate can apply to a job --}}
                                                    @else
                                                        <form method="POST" action="{{ route('storeJobApplication') }}">
                                                            @csrf
                                                            <input type="hidden" name="job_id" value="{{ $job_details->id }}">
                                                            <button type="submit" class="btn btn-danger mt-2 mx-2">Apply Now!!!</button>
                                                        </form>
                                                    @endif
                                        {{-- endif-2 --}}
                                        @endif
                                    {{-- endif-1 --}}
                                    @endif
                                                </div>
                </div>
            </div>
                <div class="col-4 grid-item">
                    <div class="cotainer my-5 text-center border bgLightCyan">
                        <h3 class="mt-2 steelBlue fw-bold">Required Skills:</h3>
                            @foreach ($required_skills as $required_skill)
                                <h6 class="btn btn-info disabled">{{ $required_skill }}</h6>
                            @endforeach
                    </div>
                        <div class="cotainer my-5 text-center border bgLightCyan">
                            <h3 class="mt-2 steelBlue fw-bold">Job Summary:</h3>
                                <p>Published On: {{ $job_details->created_at->format('d-m-Y') ?? "No Data Available" }}</p>
                                    <p>Vacancy: {{ $job_details->vacancy ?? "No Data Available" }}</p>
                                        <p>Job Type: {{ $job_details->job_type ?? "No Data Available" }}</p>
                                            <p>Salary: {{ $job_details->salary ?? "No Data Available" }}</p>
                                                <p>Location: {{ $job_details->location ?? "No Data Available" }}</p>
                                                    <p>Dead-Line: {{ $job_details->deadline->format('d-m-Y') ?? "No Data Available" }}</p>
                        </div>
                            <div class="cotainer my-5 text-center border bgLightCyan">
                                <h3 class="mt-2 steelBlue fw-bold">Company Details:</h3>
                                    <p>{{ $company_details_info }}</p>
                            </div>
                </div>
        </div>
            @extends('main_page_layout.flash_message')
<script>
    function myFunction() {
        let text = "Press OK To Delete This Record";
            if (confirm(text)) {
                document.getElementById('deleteForm').submit();
            }else{
                
            }
    }
</script>
@endsection
