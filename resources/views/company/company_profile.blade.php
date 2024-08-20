@extends('company.company_boiler')
@push('title')
	<title>Company Profile</title>
@section('content')
@extends('main_page_layout.flash_message')

<h1 class="text-center">Complete Your Profile</h1>
        <form action="{{ route('company.profile.completation') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container mb-5 mt-5 ">

                <div class="mb-3">
                    <label class="form-label">Company Name:*</label>
                    <input type="text" class="form-control" name="company_name">
                </div>

                <div class="mb-3">
                    <label class="form-label">Upload Image:*</label>
                    <input type="file" class="form-control"  name="company_image">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Company Contact No:*</label>
                    <input type="number" class="form-control" name="company_mobile_num">
                </div>

                <div class="mb-3">
                    <label class="form-label">Company Location:</label>
                    <input type="text" class="form-control" name="company_location">
                </div>

                <div class="mb-3">
                    <label class="form-label">Current Employees:</label>
                    <input type="number" class="form-control" name="current_employees">
                </div>

                <div class="mb-3">
                    <label class="form-label">Company Mission:</label>
                    <textarea class="form-control" name="company_mission"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Company Vision:</label>
                    <textarea class="form-control" name="company_vision"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Company History:</label>
                    <textarea class="form-control" name="company_history"></textarea>
                </div>

                <div class="d-flex mt-5">
                    <button type="submit" class="btn btn-primary d-flex justify-content-end">Submit</button>
                </div>
            </div>
        </form>
</div>
@endsection