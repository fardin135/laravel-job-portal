@include('main_page_layout.header')

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #45526e">
        <div class="container-fluid">
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <a class="navbar-brand mt-2 mt-lg-0" href="/">
                    <img src="{{ asset('images/logo.png') }}" height="20" alt="MDB Logo" loading="lazy" />
                    <a class="navbar-brand text-white" href="/">Job Pulse</a>
                </a>
                <!-- Left links -->
                <div class="container">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="{{ request()->is('/') ? 'nav-link nav-active' : 'nav-link nav-hover'}}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('about') ? 'nav-link nav-active' : 'nav-link nav-hover'}}" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('jobs') ? 'nav-link nav-active' : 'nav-link nav-hover'}}" href="/jobs">Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('blogs') ? 'nav-link nav-active' : 'nav-link nav-hover'}}" href="/blogs">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="{{ request()->is('contact') ? 'nav-link nav-active' : 'nav-link nav-hover'}}" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
            @auth
                {{-- User is authenticated, show profile --}}
                <div class="d-flex align-items-center">
                    <!-- Avatar -->
                    <div class="dropdown">
                        <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow"
                            href="#" id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                            <h6 class="m-3 text-white">{{ Auth::User()->name }}</h6>
                            <img src="{{ asset('images/upload/companies/'. Auth::user()->companyDetail->company_image) ?? asset('images/avatar.jpg') }}" class="rounded-circle"
                                height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                            <li>
                                @if (Auth::user()->user_role == 'Candidate')
                                    <a class="dropdown-item" href="/candidate/dashboard">Dashboard</a>
                                @elseif(Auth::user()->user_role == 'Company')
                                    <a class="dropdown-item" href="/company/dashboard">Dashboard</a>
                                @elseif(Auth::user()->is_admin)
                                    <a class="dropdown-item" href="/admin/dashboard">Dashboard</a>
                                @endif
                            </li>
                            <hr>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Logout</button>
                                    </form>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- User is not authenticated, show login and register --}}
            @else
                {{-- User is not authenticated, show login and register dropdown --}}
                <div class="d-flex align-items-center ">
                    <a data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2 nav-hover" href="/login">Login</a>
                        <a data-mdb-ripple-init type="button" class="btn btn-primary me-3 nav-hover" href="/register">Sign up</a>
                </div>
                {{-- ---------------------- --}}
                {{-- ====================== --}}
            @endauth

            <!-- Right elements -->

            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->




    @yield('content')



    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #45526e">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Job Pulse</h6>
                        <p class="text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem
                            adipisci,
                            quae error aperiam
                            magnam consectetur dolores perferendis est placeat deserunt.</p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Grid column -->

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Start Your Carrer</h6>
                        <p><a class="text-white-50">Software Full-Time</a></p>
                        <p><a class="text-white-50">Software Internship</a></p>
                        <p><a class="text-white-50">Product Full-Time</a></p>
                        <p><a class="text-white-50">Product Internship</a></p>
                    </div>
                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p class="text-white-50"><i class="fas fa-home mr-3"></i> Mirpur 13, Dhaka, Bangladesh </p>
                        <p class="text-white-50"><i class="fas fa-envelope mr-3"></i> fardinfaiaz5@gmail.com </p>
                        <p class="text-white-50"><i class="fas fa-phone mr-3"></i> +8801741469635 </p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->
            <hr class="my-3" />
            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-facebook-f"></i></a>
                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-twitter"></i></a>
                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-google"></i></a>
                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>
    <footer class="bg-light text-center py-3">© 2024 Job Pulse</footer>
    <!-- Footer -->
    {{-- </div> --}}
    <!-- End of .container -->
    @include('main_page_layout.footer')
