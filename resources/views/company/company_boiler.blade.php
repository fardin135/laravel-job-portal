 <!doctype html>
 <html lang="en">
 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="icon" type="image/x-icon" href="{{ asset('images/job_pulse_logo.png') }}">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main_pages.css') }}">
     <title>@stack('title')</title>
 </head>
 <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div
                        class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                            <div
                                class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">Company Dashboard:</span>
                            </div>
                                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link align-middle px-0">
                                            <span class="ms-1 d-none d-sm-inline">Home Page</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('company.dashboard') }}" class="{{ request()->is('company/dashboard') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('company.jobs') }}" class="{{ request()->is('company/jobs') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">Job Postings</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('company.applicant.list') }}" class="{{ request()->is('company/applicant-list') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">Applicant List</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('company.profile') }}" class="{{ request()->is('company/profile') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">Profile</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('company.plugin') }}" class="{{ request()->is('company/plugin') ? 'nav-link text-white ms-5' : 'nav-link align-middle px-0'}}">plugins</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown pb-4">
                         <a href="#"
                             class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                             id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                             <img src="{{ Auth::user()->user_img ? asset('images/' . Auth::user()->user_img) : asset('images/avatar.jpg') }}"
                                 alt="hugenerd" width="30" height="30" class="rounded-circle">
                             <span class="d-none d-sm-inline mx-1">{{ Auth::User()->name }}</span>
                         </a>
                         <ul class="dropdown-menu dropdown-menu-dark text-small shadow">

                             {{-- <li>
                            <hr class="dropdown-divider">
                        </li> --}}
                             <a class="dropdown-item" href="{{ route('logout') }}">
                                 <form method="POST" action="{{ route('logout') }}">
                                     @csrf
                                     <button type="submit" class="btn btn-danger mx-auto d-block">Logout</button>

                                 </form>
                             </a>
                         </ul>
                     </div>
                 </div>
             </div>



             <div class="col py-3">
                 @yield('content')
             </div>
         </div>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
     </script>
 </body>

 </html>
