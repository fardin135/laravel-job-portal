@extends('1_layout.main')
@push('title')
    <title>Job Posting Page</title>

    @section('content')
            @if (session('success'))
                <div class="alert alert-success mt-3 text-center">
                    {{ session('success') }}
                </div>
            @endif

            <div class="container mt-5 mb-5">
                <h2 class="text-center">Create A New Job Post</h2>
                <form action="{{ route('insert_jobs') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name" required>
                    </div>

                    <div class="mb-3">
                        <label for="job_title" class="form-label">Job Title</label>
                        <input type="text" class="form-control" id="job_title" name="job_title" required>
                    </div>

                    <div class="mb-3">
                        <label for="role" class="form-label">Role</label>
                        <select class="form-select" id="role" name="role" required>
                            <option value="Developer">Developer</option>
                            <option value="Designers">Designers</option>
                            <option value="Marketers">Marketers</option>
                            <option value="UI/UX">UI/UX</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Required Skills</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Remote" name="required_skills[]" value="Remote">
                            <label class="form-check-label" for="Remote">Remote</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="On-Site" name="required_skills[]" value="On-Site">
                            <label class="form-check-label" for="On-Site">On-Site</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Meta" name="required_skills[]" value="Meta">
                            <label class="form-check-label" for="Meta">Meta</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="X" name="required_skills[]" value="X">
                            <label class="form-check-label" for="X">X</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="HTML" name="required_skills[]" value="HTML">
                            <label class="form-check-label" for="HTML">HTML</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="JavaScript" name="required_skills[]" value="JavaScript">
                            <label class="form-check-label" for="JavaScript">JavaScript</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Mysql" name="required_skills[]" value="Mysql">
                            <label class="form-check-label" for="Mysql">Mysql</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="PHP" name="required_skills[]" value="PHP">
                            <label class="form-check-label" for="PHP">PHP</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Laravel" name="required_skills[]" value="Laravel">
                            <label class="form-check-label" for="Laravel">Laravel</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="Vue JS" name="required_skills[]" value="Vue JS">
                            <label class="form-check-label" for="Vue JS">Vue JS</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location">
                    </div>
                    <div class="mb-3 form-outline" data-mdb-input-init>
                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                        <label class="form-label" for="description">Job Description</label>
                    </div>
                    <div class="mb-3">
                        <label for="salary" class="form-label">Salary</label>
                        <input type="text" class="form-control" value="$100" id="salary" name="salary" required>
                    </div>

                    <button type="submit" class=" mt-3 btn btn-primary btn-block">Submit</button>
                </form>
            </div>
    @endsection
