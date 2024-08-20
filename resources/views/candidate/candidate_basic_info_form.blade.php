@extends('candidate.candidate_boiler')
@push('title')
    <title>Candidate Basic Info</title>
@section('content')
<div class="container">
<a class="btn btn-secondary btn-sm" href="{{ url('/candidate/profile') }}">GO BACK</a>
<h1 class="text-center">Basic Demographic Information</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{ route('candidate.save.basic.info') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container mb-5 mt-5 ">

                <div class="mb-3">
                    <label class="form-label">Full Name:*</label>
                    <input type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Upload Image:*</label>
                    <input type="file" class="form-control"  name="candidate_image">
                </div>
                <div class="mb-3">
                    <label class="form-label">Father's Name:</label>
                    <input type="text" class="form-control" name="fathers_name" value="{{ old('fathers_name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Mother's Name:</label>
                    <input type="text" class="form-control" name="mothers_name" value="{{ old('mothers_name') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Date of Birth:*</label>
                    <input type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Blood Group:</label>
                    <input type="text" class="form-control" name="blood_group" value="{{ old('blood_group') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Cell No:*</label>
                    <input type="text" class="form-control" name="cell_no" value="{{ old('cell_no') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Emergency Contact No:*</label>
                    <input type="text" class="form-control" name="emergency_contact_no" value="{{ old('emergency_contact_no') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Emergency Contact Email:</label>
                    <input type="text" class="form-control" name="emergency_contact_email" value="{{ old('emergency_contact_email') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">WhatsApp:</label>
                    <input type="text" class="form-control" name="whatsapp" value="{{ old('whatsapp') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">LinkedIn Link:</label>
                    <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Facebook Link:</label>
                    <input type="text" class="form-control" name="facebook" value="{{ old('facebook') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">GitHub Link:</label>
                    <input type="text" class="form-control" name="github" value="{{ old('github') }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Portfolio Website:</label>
                    <input type="text" class="form-control" name="portfolio_website" value="{{ old('portfolio_website') }}">
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-primary d-flex justify-content-end">Submit</button>
                    </div>
        </div>
    </form>
    </div>
@endsection