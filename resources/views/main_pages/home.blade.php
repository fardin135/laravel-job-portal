@extends('main_page_layout.main')
@push('title')
    <title>Home Page</title>
    @section('content')

        <div class="container-fluid bg-secondary p-3 rounded shadow">
            <img src="{{ asset('images/job_pulse_banner.png') }}" class="img-fluid w-100 h-50" alt="Job Pulse Banner">
        </div>
        <div class="container">
            <h1 class="text-center">Home Page</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit nisi, non animi dolores quo perferendis.
                Exercitationem doloremque soluta perspiciatis est sed sunt molestias nostrum expedita eius recusandae inventore vel
                omnis totam, ea, nam suscipit quos nesciunt necessitatibus fugiat maxime sequi? Maiores fugiat voluptas
                necessitatibus enim pariatur porro dicta obcaecati dolore.</p>
            </div>
        <div class="mt-5 mb-5 container-fluid bg-secondary p-4 rounded shadow">
            <h3 class="text-center text-white">Top Companies</h3>
            <div class="container-fluid bg-white p-4 rounded shadow">

                <div class="row">
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class=" hover-overlay shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://www.sourcewatch.org/images/thumb/6/65/Nestle-logo.jpg/300px-Nestle-logo.jpg"
                                class="w-100" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class=" hover-overlay shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://blog.rebrandly.com/wp-content/uploads/2030/12/rebrandly-url-shortener-010.png"
                                class="w-100" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class=" hover-overlay shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/800px-Google_2015_logo.svg.png" class="w-100 img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class=" hover-overlay shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTVLF20GgKqEx65SWRbOm88YVOFzkrfmY_ganiv4Y05V5cEj1GX_y9sb0FQwi51A_1GiBw&usqp=CAU" class="w-100" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class=" hover-overlay shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHtXk5ZwDGCj7n77dOOY592z28ufBeqgpdF_mFwolLnNIY0cna7Lk2Wo42KHnvI8r4wS4&usqp=CAU" class="w-75" />
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class=" hover-overlay shadow-1-strong rounded" data-ripple-color="light">
                            <img src="https://mdbcdn.b-cdn.net/img/new/fluid/city/116.webp" class="w-100" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header">
                <h6>Recent Publisher Jobs</h6>
                <div class="row">
                    <div class="col">
                        <a href="/jobs/Developer" class="btn btn-primary shadow-3">Developers ({{ $developers }})</a>
                    </div>
                    <div class="col">
                        <a href="/jobs/Designer" class="btn btn-primary shadow-3">Designers ({{ $designers }})</a>
                    </div>
                    <div class="col">
                        <a href="/jobs/Marketer" class="btn btn-primary shadow-3">Marketers ({{ $marketers }})</a>
                    </div>
                    <div class="col">
                        <a href="/jobs/UI" class="btn btn-primary shadow-3">UI/UX ({{ $uiUx }})</a>
                    </div>
                    <div class="col">
                        <a href="/jobs/Other" class="btn btn-primary shadow-3">Others ({{ $others }})</a>
                    </div>
                </div>
            </div>
            <div class="card-body mt-5">
                @foreach ($latestJobs as $latestJob)
                    <div class="container border border-secondary mt-3 mb-2">
                        <div class="row">
                            <div class="col-8 float-start p-2">
                                <h1>{{ $latestJob->company_name }}</h1>
                                <h5>{{ $latestJob->job_title }}</h5>
                                @php
                                    $required_skills = json_decode($latestJob->required_skills);
                                @endphp
                                @foreach ($required_skills as $required_skill)
                                    <h6 class="btn btn-info">{{ $required_skill }}</h6>
                                @endforeach
                            </div>
                            <div class="col-4 float-end text-right p-2 mt-4">
                                <h6 class="btn btn-info disabled">{{ $latestJob->salary }}</h6>
                                <br>
                                <a href="{{ url('/job-details/' . $latestJob->id) }}" class="btn btn-lightGreen">View Details</a>
                                {{-- @php
                                    $candidate = Auth::user()->candidate ?? null;
                                    $applied = $candidate ? $candidate->applications()->where('job_id', $latestJob->id)->exists() : false;
                                @endphp

                                @if ($applied)
                                    <button class="btn btn-success" disabled>Already Applied</button>
                                @else
                                    <form method="POST" action="{{ route('home.storeHomeApplication') }}">
                                        @csrf
                                        <input type="hidden" name="job_id" value="{{ $latestJob->id }}">
                                        <button type="submit" class="btn btn-danger">Apply</button>
                                    </form>
                                @endif --}}
                            </div>
                        </div>
                    </div>

                @endforeach
                    <div class="container mt-5">
                        {{ $latestJobs->links('pagination::bootstrap-5') }}
                    </div>
                <a href="/jobs_form" class="btn btn-primary mt-5 bg-success text-dark bg-opacity-50">Add New Job Post</a>
                    <a href="/jobs" class="btn btn-primary mt-5 bg-opacity-50">View More</a>
            </div>
        </div>
    @endsection