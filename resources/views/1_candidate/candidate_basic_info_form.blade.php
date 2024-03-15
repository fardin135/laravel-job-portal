@extends('1_candidate.candidate_boiler')
@push('title')
    <title>Candidate Basic Info</title>
@section('content')
<div class="container">
<a class="btn btn-secondary btn-sm" href="{{ url('/candidate/profile') }}">GO BACK</a>
<h1 class="text-center">Basic Demographic Information</h1>
        <form action="{{ route('candidate.save_basic_info') }}" method="POST">
            @csrf
            <div class="container mb-5 mt-5 ">

                <div class="mb-3">
                    <label for="full_name" class="form-label">Full Name:*</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" value="{{ old('full_name') }}"
                        required>
                </div>

                <div class="mb-3">
                    <label for="fathers_name" class="form-label">Father's Name:*</label>
                    <input type="text" class="form-control" id="fathers_name" name="fathers_name"
                        value="{{ old('fathers_name') }}">
                </div>

                <div class="mb-3">
                    <label for="mothers_name" class="form-label">Mother's Name:*</label>
                    <input type="text" class="form-control" id="mothers_name" name="mothers_name"
                        value="{{ old('mothers_name') }}">
                </div>

                <div class="mb-3">
                    <label for="birth_date" class="form-label">Date of Birth:*</label>
                    <input type="date" class="form-control" id="birth_date" name="birth_date"
                        value="{{ old('birth_date') }}">
                </div>


                <div class="mb-3">
                    <label for="blood_group" class="form-label">Blood Group:</label>
                    <input type="text" class="form-control" id="blood_group" name="blood_group"
                        value="{{ old('blood_group') }}">
                </div>

                <div class="mb-3">
                    <label for="nid_no" class="form-label">Social ID(NID / Any Type of ID):*:</label>
                    <input type="text" class="form-control" id="nid_no" name="nid_no" value="{{ old('nid_no') }}">
                </div>


                <div class="mb-3">
                    <label for="passport_no" class="form-label">Passport Number:</label>
                    <input type="text" class="form-control" id="passport_no" name="passport_no"
                        value="{{ old('passport_no') }}">
                </div>

                <div class="mb-3">
                    <label for="cell_no" class="form-label">Cell No:*</label>
                    <input type="text" class="form-control" id="cell_no" name="cell_no" value="{{ old('cell_no') }}">
                </div>

                <div class="mb-3">
                    <label for="emergency_contact_no" class="form-label">Emergency Contact No:*</label>
                    <input type="text" class="form-control" id="emergency_contact_no" name="emergency_contact_no"
                        value="{{ old('emergency_contact_no') }}">
                </div>

                <div class="mb-3">
                    <label for="emergency_contact_email" class="form-label">Emergency Contact Email:</label>
                    <input type="text" class="form-control" id="emergency_contact_email" name="emergency_contact_email"
                        value="{{ old('emergency_contact_email') }}">
                </div>

                <div class="mb-3">
                    <label for="whatsapp" class="form-label">WhatsApp:</label>
                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}">
                </div>

                <div class="mb-3">
                    <label for="linkedin" class="form-label">LinkedIn Link*:</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{ old('linkedin') }}">
                </div>

                <div class="mb-3">
                    <label for="facebook" class="form-label">Facebook Link:</label>
                    <input type="text" class="form-control" id="facebook" name="facebook"
                        value="{{ old('facebook') }}">
                </div>

                <div class="mb-3">
                    <label for="github" class="form-label">GitHub Link:</label>
                    <input type="text" class="form-control" id="github" name="github" value="{{ old('github') }}">
                </div>

                <div class="mb-3">
                    <label for="behance_dribble" class="form-label">Behance/Dribble Link:</label>
                    <input type="text" class="form-control" id="behance_dribble" name="behance_dribble"
                        value="{{ old('behance_dribble') }}">
                </div>

                <div class="mb-3">
                    <label for="portfolio_website" class="form-label">Portfolio Website:</label>
                    <input type="text" class="form-control" id="portfolio_website" name="portfolio_website"
                        value="{{ old('portfolio_website') }}">
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-primary d-flex justify-content-end">Submit</button>
                    </div>
        </div>
    </form>
    </div>
@endsection