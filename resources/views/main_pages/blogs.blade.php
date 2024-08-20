@extends('main_page_layout.main')
@push('title')
    <title>Blogs Page</title>

    @section('content')
        <img src="{{ asset('images/blog.jpg') }}" class="mx-auto d-block mt-3" alt="Job Pulse Banner">
        <div class="container bg-secondary  rounded shadow mt-5 mb-5">
            <div class="container bg-white text-center">
                <h2>Resume Writing Tips:</h2>
                <p>How to create a compelling resume.</p>
                <p>The importance of tailoring your resume for each job application.</p>
                <p>Dos and don'ts of resume writing.</p>
                <br>
                <h2>Cover Letter Advice:</h2>
                <p>Crafting a powerful cover letter that stands out.</p>
                <p>Addressing common cover letter mistakes.</p>
                <p>Tips for customizing cover letters for different industries.</p>
                <br>
                <h2>Interview Preparation:</h2>
                <p>Common interview questions and how to answer them.</p>
                <p>Dressing for success in job interviews.</p>
                <p>The importance of body language in interviews.</p>
                <br>
                <h2>Networking Strategies:</h2>
                <p>Building and leveraging your professional network.</p>
                <p>Tips for effective networking at events and online.</p>
                <p>Utilizing social media platforms for professional networking.</p>
                <br>
                <h2>Job Search Strategies:</h2>
                <p>How to use job search engines and platforms effectively.</p>
                <p>Leveraging niche job boards for specialized roles.</p>
                <p>The benefits of informational interviews in your job search.</p>
            </div>
        </div>
        <div class="container bg-secondary  rounded shadow mt-5 mb-5">
            <div class="container bg-white text-center">
                <br>
                <h2>Career Development:</h2>
                <p>Setting and achieving career goals.</p>
                <p>Continuing education and skill development opportunities.</p>
                <p>Balancing work and personal life for long-term career success.</p>
                <br>
                <h2>Industry Insights:</h2>
                <p>Trends and developments in specific industries.</p>
                <p>Analysis of job market demands in different sectors.</p>
                <p>Guest posts or interviews with professionals in various fields.</p>
                <br>
                <h2>Remote Work Tips:</h2>
                <p>Strategies for successful remote job applications.</p>
                <p>Maintaining productivity while working remotely.</p>
                <p>Navigating virtual interviews and meetings.</p>
                <br>
                <h2>Job Search Success Stories:</h2>
                <p>Highlight success stories of individuals who found jobs through your platform.</p>
                <p>Showcase diverse career paths and unique journeys to employment.</p>
                <p>Utilizing social media platforms for professional networking.</p>
                <br>
                <h2>Company Culture and Employer Branding:</h2>
                <p>Understanding and evaluating company culture during the job search.</p>
                <p>How to research and assess potential employers.</p>
                <p>The impact of employer branding on attracting top talent.</p>
            </div>
        </div>
    @endsection
