@extends('candidate.candidate_boiler')
@push('title')
    <title>Candidate Education Info</title>
@section('content')
<div class="container">
    <a class="btn btn-secondary btn-sm" href="{{ url('/candidate/profile') }}">GO BACK</a>
<h1 class="text-center">Candidate Education Info</h1>
<form action="{{ route('candidate.save.education.info') }}" method="POST">
    @csrf
<div class="container mb-5 mt-5 ">
    <!-- Bachelor's Degree Information -->
<h3>Bachelor's Degree Information</h3>
    <div class="mb-3">
        <label class="form-label">Degree Type</label>
        <input type="text" class="form-control" name="bachelor_degree_type">
    </div>
    <div class="mb-3">
        <label class="form-label">Institution Name</label>
        <input type="text" class="form-control" name="bachelor_institution_name">
    </div>
    <div class="mb-3">
    </div>
        <div class="mb-3">
        <label class="form-label">Department</label>
        <input type="text" class="form-control" name="bachelor_department">
    </div>
    <div class="mb-3">
        <label class="form-label">Passing Year</label>
        <input type="date" class="form-control" name="bachelor_passing_year">
    </div>
    <div class="mb-3">
        <label class="form-label">CGPA</label>
        <input type="text" class="form-control" name="bachelor_cgpa">
    </div>

    <!-- HSC Information -->
<h3>HSC Information</h3>
    <div class="mb-3">
        <label class="form-label">Institution Name</label>
        <input type="text" class="form-control" name="hsc_institution_name">
    </div>
    <div class="mb-3">
        <label class="form-label">Passing Year</label>
        <input type="date" class="form-control" name="hsc_passing_year">
    </div>
    <div class="mb-3">
        <label class="form-label">GPA</label>
        <input type="text" class="form-control" name="hsc_cgpa">
    </div>
    <!-- SSC Information -->
<h3>SSC Information</h3>
    <div class="mb-3">
        <label class="form-label">Institution Name</label>
        <input type="text" class="form-control" name="ssc_institution_name">
    </div>
    <div class="mb-3">
        <label class="form-label">Passing Year</label>
        <input type="date" class="form-control" name="ssc_passing_year">
    </div>
    <div class="mb-3">
        <label class="form-label">GPA</label>
        <input type="text" class="form-control" name="ssc_cgpa">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
@endsection