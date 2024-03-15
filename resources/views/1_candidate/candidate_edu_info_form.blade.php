@extends('1_candidate.candidate_boiler')
@push('title')
    <title>Candidate Education Info</title>
@section('content')
<div class="container">
    <a class="btn btn-secondary btn-sm" href="{{ url('/candidate/profile') }}">GO BACK</a>
<h1 class="text-center">Candidate Education Info</h1>
<form action="{{ route('candidate.save_edu_info') }}" method="POST">
    @csrf
<div class="container mb-5 mt-5 ">
    <!-- Bachelor's Degree Information -->
<h3>Bachelor's Degree Information</h3>
    <div class="mb-3">
        <label for="bachelor_degree_type" class="form-label">Degree Type</label>
        <input type="text" class="form-control" id="bachelor_degree_type" name="bachelor_degree_type">
    </div>
    <div class="mb-3">
        <label for="bachelor_institution_name" class="form-label">Institution Name</label>
        <input type="text" class="form-control" id="bachelor_institution_name" name="bachelor_institution_name">
    </div>
    <div class="mb-3">
    </div>
        <div class="mb-3">
        <label for="bachelor_department" class="form-label">Passing Year</label>
        <input type="text" class="form-control" id="bachelor_department" name="bachelor_department">
    </div>
    <div class="mb-3">
        <label for="bachelor_passing_year" class="form-label">Passing Year</label>
        <input type="date" class="form-control" id="bachelor_passing_year" name="bachelor_passing_year">
    </div>
    <div class="mb-3">
        <label for="bachelor_cgpa" class="form-label">CGPA</label>
        <input type="text" class="form-control" id="bachelor_cgpa" name="bachelor_cgpa">
    </div>

    <!-- HSC Information -->
<h3>HSC Information</h3>
    <div class="mb-3">
        <label for="hsc_degre_type" class="form-label">Degree Type</label>
        <input type="text" class="form-control" id="hsc_degre_type" name="hsc_degre_type">
    </div>
    <div class="mb-3">
        <label for="hsc_institution_name" class="form-label">Institution Name</label>
        <input type="text" class="form-control" id="hsc_institution_name" name="hsc_institution_name">
    </div>
    <div class="mb-3">
        <label for="hsc_department" class="form-label">Passing Year</label>
        <input type="text" class="form-control" id="hsc_department" name="hsc_department">
    </div>
    <div class="mb-3">
        <label for="hsc_passing_year" class="form-label">Passing Year</label>
        <input type="text" class="form-control" id="hsc_passing_year" name="hsc_passing_year">
    </div>
    <div class="mb-3">
        <label for="hsc_cgpa" class="form-label">CGPA</label>
        <input type="text" class="form-control" id="hsc_cgpa" name="hsc_cgpa">
    </div>
    <!-- SSC Information -->
<h3>SSC Information</h3>
    <div class="mb-3">
        <label for="ssc_degre_type" class="form-label">Degree Type</label>
        <input type="text" class="form-control" id="ssc_degre_type" name="ssc_degre_type">
    </div>
    <div class="mb-3">
        <label for="hsc_institution_name" class="form-label">Institution Name</label>
        <input type="text" class="form-control" id="hsc_institution_name" name="hsc_institution_name">
    </div>
    <div class="mb-3">
        <label for="ssc_department" class="form-label">Passing Year</label>
        <input type="text" class="form-control" id="ssc_department" name="ssc_department">
    </div>
    <div class="mb-3">
        <label for="ssc_passing_year" class="form-label">Passing Year</label>
        <input type="text" class="form-control" id="ssc_passing_year" name="ssc_passing_year">
    </div>
    <div class="mb-3">
        <label for="ssc_cgpa" class="form-label">CGPA</label>
        <input type="text" class="form-control" id="ssc_cgpa" name="ssc_cgpa">
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</div>
@endsection