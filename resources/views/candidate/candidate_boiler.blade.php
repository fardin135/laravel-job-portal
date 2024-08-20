 <!doctype html>
 <html lang="en">

 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/main_pages.css') }}">
     <title>@stack('title')</title>
 </head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <span class="fs-5 d-none d-sm-inline mb-5 ">Candidate Dashboard:</span>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link align-middle px-0">
                                    <span class="ms-1 d-none d-sm-inline">Home Page</span>
                                </a>
                            </li>
                                <li class="nav-item">
                                    <a href="{{ route('candidate.dashboard') }}" class="{{ request()->is('candidate/dashboard') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">Dashboard</a>
                                </li>
                                    <li class="nav-item">
                                        <a href="{{ route('candidate.saved_jobs') }}" class="{{ request()->is('candidate/saved-jobs') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">Saved Jobs</a>
                                        </a>
                                    </li>       
                                        <li class="nav-item">
                                            <a href="{{ route('candidate.applied_jobs') }}" class="{{ request()->is('candidate/applied-jobs') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">Applied Jobs</a>
                                            </a>
                                        </li>
                                            <li class="nav-item">
                                                <a href="{{ route('candidate.profile') }}" class="{{ request()->is('candidate/profile') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">Profile</a>
                                                </a>
                                            </li>
                        </ul>
                            <div class="btn-group dropup py-3 dropdown-sticky">
                                <a type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="{{ Auth::user()->user_img ? asset('images/' . Auth::user()->user_img) : asset('images/avatar.jpg') }}" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                        <span class="text-light mx-1">{{ Auth::User()->name }}</span>
                                </a>
                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                                <button type="submit" class="btn btn-danger m-auto d-block">Logout</button>
                                        </form>
                                    </ul>
                            </div>
                </div>
            </div>
             <div class="col py-3">
                    @yield('content')
             </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
