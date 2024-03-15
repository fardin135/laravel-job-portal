@extends('1_candidate.candidate_boiler')
@push('title')
    <title>Candidate Professional and Education Info</title>
    @section('content')
<div class="container">
    <a class="btn btn-secondary btn-sm" href="{{ url('/candidate/profile') }}">GO BACK</a>
<h1 class="text-center">Candidate Professional and Education Info</h1>
<form action="{{ route('candidate.save_pro_and_exp_info') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="training_name" class="form-label">Training Name:</label>
        <input type="text" class="form-control" id="training_name" name="training_name">
    </div>

    <div class="mb-3">
        <label for="training_institution_name" class="form-label">Training Institution Name:</label>
        <input type="text" class="form-control" id="training_institution_name" name="training_institution_name">
    </div>

    <div class="mb-3">
        <label for="training_completed_year" class="form-label">Training Completed Year:</label>
        <input type="text" class="form-control" id="training_completed_year" name="training_completed_year">
    </div>

    <div class="mb-3">
        <label for="job_exp_designation" class="form-label">Job Experience Designation:</label>
        <input type="text" class="form-control" id="job_exp_designation" name="job_exp_designation">
    </div>

    <div class="mb-3">
        <label for="job_exp_company_name" class="form-label">Job Experience Company Name:</label>
        <input type="text" class="form-control" id="job_exp_company_name" name="job_exp_company_name">
    </div>

    <div class="mb-3">
        <label for="job_exp_joining_date" class="form-label">Job Experience Joining Date:</label>
        <input type="text" class="form-control" id="job_exp_joining_date" name="job_exp_joining_date">
    </div>

    <div class="mb-3">
        <label for="job_exp_departure_date" class="form-label">Job Experience Departure Date:</label>
        <input type="text" class="form-control" id="job_exp_departure_date" name="job_exp_departure_date">
    </div>

    <div class="mb-3">
        <label for="skills" class="form-label">Skills:</label>
        <textarea class="form-control" id="skills" name="skills"></textarea>
    </div>

    <div class="mb-3">
        <label for="current_salary" class="form-label">Current Salary:</label>
        <input type="text" class="form-control" id="current_salary" name="current_salary">
    </div>

    <div class="mb-3">
        <label for="expected_salary" class="form-label">Expected Salary:</label>
        <input type="text" class="form-control" id="expected_salary" name="expected_salary">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection