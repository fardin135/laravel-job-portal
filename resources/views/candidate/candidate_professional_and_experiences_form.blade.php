@extends('candidate.candidate_boiler')
@push('title')
    <title>Candidate Professional and Education Info</title>
    @section('content')
<div class="container">
    <a class="btn btn-secondary btn-sm" href="{{ url('/candidate/profile') }}">GO BACK</a>
<h1 class="text-center">Candidate Professional and Education Info</h1>
<form action="{{ route('candidate.save_pro_and_exp_info') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Training Name:</label>
        <input type="text" class="form-control" name="training_name">
    </div>

    <div class="mb-3">
        <label class="form-label">Training Institution Name:</label>
        <input type="text" class="form-control" name="training_institution_name">
    </div>

    <div class="mb-3">
        <label class="form-label">Training Completed time:</label>
        <input type="date" class="form-control" name="training_completed_time">
    </div>

    <div class="mb-3">
        <label class="form-label">Job Experience Designation:</label>
        <input type="text" class="form-control" name="job_exp_designation">
    </div>

    <div class="mb-3">
        <label class="form-label">Job Experience Company Name:</label>
        <input type="text" class="form-control" name="job_exp_company_name">
    </div>

    <div class="mb-3">
        <label class="form-label">Job Experience Joining Date:</label>
        <input type="date" class="form-control" name="job_exp_joining_date">
    </div>

    <div class="mb-3">
        <label class="form-label">Job Experience Departure Date:</label>
        <input type="date" class="form-control" name="job_exp_departure_date">
    </div>

    <div class="mb-3">
        <label class="form-label">Skills:</label>
        <textarea class="form-control" name="skills" placeholder="Use a Comma (,) and Write Your Skills"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Current Salary:</label>
        <input type="text" class="form-control" name="current_salary">
    </div>

    <div class="mb-3">
        <label class="form-label">Expected Salary:</label>
        <input type="text" class="form-control" name="expected_salary">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection