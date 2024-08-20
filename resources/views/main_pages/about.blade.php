@extends('main_page_layout.main')
@push('title')
    <title>About Page</title>
@section('content')
    <div class="container-fluid bg-secondary p-3 rounded shadow">
        <img src="{{ asset('images/about_1.jpg') }}" class="img-fluid w-100 h-25" alt="Job Pulse Banner">
    </div>

        {{-- ------------------------------------------------------------company_history@if_else --}}
        @if (!empty($company_info->about_company_history))
            {!! $company_info->about_company_history !!}
        @else
            <div class="mt-5 mb-5 container p-3 rounded shadow">
                <h1 class="text-center">Company History</h1>
                <section>
                    <p>
                        At Job Pulse, our story is one of passion, dedication, and relentless pursuit of empowering careers and
                        connecting futures.
                        It all began with a simple yet profound vision to revolutionize the way individuals navigate their
                        professional journeys
                        and how businesses discover top talent.
                    </p>
                    <h3>Founding Inspiration</h3>
                    <p>
                        In the early stages of Job Pulse, our founders, driven by their own experiences in the job market,
                        recognized a fundamental
                        gap between job seekers and employers. They saw the potential for technology to bridge this gap, to
                        create a
                        platform where
                        aspirations meet opportunities.
                    </p>
                    <h3>Birth of Job Pulse</h3>
                    <p>
                        In 2024, Job Pulse was born. With a small team but boundless ambition, we set out to build more than
                        just
                        a job board; we aimed to create a vibrant ecosystem where dreams flourish and businesses thrive.
                    </p>
                    <h3>Early Challenges, Enduring Resolve</h3>
                    <p>
                        Like any startup, our journey was not without its challenges. We faced skeptics who doubted the
                        viability of
                        our vision,
                        technical hurdles that seemed insurmountable, and moments of uncertainty that tested our resolve. Yet,
                        through unwavering
                        determination and a commitment to our values, we pressed forward.
                    </p>
                    <h3>Milestones and Achievements</h3>
                    <p>
                        As time went on, Job Pulse began to gain momentum. We celebrated our first thousand users, our first
                        successful job
                        placements, and the expansion of our team. With each milestone, we reaffirmed our belief in the
                        transformative power of
                        connecting people with opportunities.
                    </p>
                    <h3>Embracing Innovation</h3>
                    <p>
                        Innovation has always been at the heart of Job Pulse. We embraced emerging technologies, experimented
                        with
                        new features,
                        and listened intently to feedback from our community. This relentless pursuit of improvement allowed us
                        to
                        stay ahead of
                        the curve and deliver an unparalleled experience to our users.
                    </p>
                    <h3>A Vision Fulfilled</h3>
                    <p>
                        Today, Job Pulse stands as a testament to the power of vision and perseverance. We have empowered
                        countless
                        individuals
                        to pursue their dreams, facilitated connections that have transformed businesses, and played a pivotal
                        role
                        in shaping the
                        future of work.
                    </p>
                    <h3>Looking Ahead</h3>
                    <p>
                        As we reflect on our journey thus far, we are reminded that our work is far from over. The landscape of
                        employment is
                        ever-evolving, presenting new challenges and opportunities. But with the same passion and dedication
                        that
                        drove us from
                        the beginning, we look ahead to a future where every individual's potential is unlocked, and every
                        business
                        thrives.
                    </p>
                    <p>
                        Join us at Job Pulse as we continue to empower dreams and connect futures.
                    </p>
                </section>
            </div>
        @endif
        {{-- ------------------------------------------------------------company_history@if_else --}}


        {{-- ------------------------------------------------------------vision@if_else --}}
        @if (!empty($company_info->about_company_vision))
            {!! $company_info->about_company_vision !!}
        @else
            <div class="mt-5 mb-5 container p-3 rounded shadow">
                <h1 class="text-center">Our Vision</h1>
                <section>
                    <h2>"Empowering Dreams, Connecting Futures"</h2>
                    <p>
                        At Job Pulse, we envision a world where every individual's career journey is empowered, and the future
                        of
                        businesses
                        is transformed by the right talents. Our vision is anchored in three core principles that drive our
                        commitment to
                        excellence:
                    </p>
                    <ol>
                        <li>
                            <h3>Empowering Careers:</h3>
                            <p>
                                We aspire to empower the dreams and aspirations of individuals seeking meaningful careers. Job
                                Pulse
                                is
                                dedicated to providing a platform that transcends traditional job searching, offering
                                personalized
                                tools and
                                resources to guide each user towards their professional goals. We believe that empowered
                                individuals
                                create a
                                ripple effect, positively influencing communities and industries.
                            </p>
                        </li>
                        <li>
                            <h3>Connecting Opportunities:</h3>
                            <p>
                                In our vision, opportunities are not just job listings; they are life-changing moments waiting
                                to be
                                seized.
                                Job Pulse is committed to connecting job seekers with opportunities that align with their
                                skills,
                                values, and
                                aspirations. We envision a seamless platform where candidates and employers forge connections
                                that
                                go beyond
                                the transactional, leading to enduring professional relationships and collective success.
                            </p>
                        </li>
                        <li>
                            <h3>Transforming Businesses:</h3>
                            <p>
                                We foresee a future where businesses thrive through the transformative power of exceptional
                                talent.
                                Job Pulse
                                aims to be the catalyst for this transformation by providing innovative hiring solutions,
                                predictive
                                analytics,
                                and a dynamic platform that enables employers to discover and secure the talents that will drive
                                their
                                organizations forward. We believe that when businesses thrive, communities prosper.
                            </p>
                        </li>
                    </ol>
                </section>
                <section>
                    <h2>Our Path Forward:</h2>
                    <p>
                        Job Pulse's vision is not just a statement; it's a compass guiding our journey. As we work towards
                        empowering
                        careers and connecting futures, we are committed to:
                    </p>
                    <ul>
                        <li>
                            <strong>Innovation:</strong> Embracing emerging technologies to enhance user experiences and
                            redefine
                            industry standards.
                        </li>
                        <li>
                            <strong>Inclusivity:</strong> Ensuring our platform is a diverse and inclusive space, reflecting the
                            global tapestry of talents and opportunities.
                        </li>
                        <li>
                            <strong>Continuous Growth:</strong> Evolving and adapting to the dynamic needs of the employment
                            landscape, always
                            staying one step ahead.
                        </li>
                    </ul>
                </section>
            </div>
        @endif
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
        {{-- ------------------------------------------------------------vision@else --}}
    @endsection
