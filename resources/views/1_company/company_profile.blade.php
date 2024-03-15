@extends('1_company.company_boiler')
@push('title')
	<title>Company Profile</title>
@section('content')
    <div class="container">
        @if(session('Success'))
    <div class="alert alert-success">
        {{ session('Success') }}
    </div>
@endif

<h1 class="text-center">Complete Your Profile</h1>
        <form action="{{ route('company.profile-completation') }}" method="POST">
            @csrf
            <div class="container mb-5 mt-5 ">

                <div class="mb-3">
                    <label for="company_name" class="form-label">Company Name:*</label>
                    <input type="text" class="form-control" id="company_name" name="company_name">
                </div>

                <div class="mb-3">
                    <label for="company_location" class="form-label">Company Location:</label>
                    <input type="text" class="form-control" id="company_location" name="company_location">
                </div>

                <div class="mb-3">
                    <label for="company_cell_no" class="form-label">Company Contact No:</label>
                    <input type="text" class="form-control" id="company_cell_no" name="company_cell_no">
                </div>

                <div class="mb-3">
                    <label for="company_mission" class="form-label">Company Mission:</label>
                    <textarea class="form-control" id="company_vision" name="company_vision"></textarea>
                </div>

                <div class="mb-3">
                    <label for="company_vision" class="form-label">Company Vision:</label>
                    <textarea class="form-control" id="company_vision" name="company_vision"></textarea>
                </div>

                <div class="mb-3">
                    <label for="company_history" class="form-label">Company History:</label>
                    <textarea class="form-control" id="company_history" name="company_history"></textarea>
                </div>

                <div class="mb-3">
                    <label for="company_employees" class="form-label">Company Employees:</label>
                    <input type="text" class="form-control" id="company_employees" name="company_employees"
                        value="{{ old('portfolio_website') }}">
                </div>
                <div class="d-flex justify-content-end mt-5">
                    <button type="submit" class="btn btn-primary d-flex justify-content-end">Submit</button>
                    </div>
        </div>
    </form>
    </div>
@endsection