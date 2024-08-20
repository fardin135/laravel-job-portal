@extends('main_page_layout.main')
@push('title')
    <title>Contact Page</title>

    @section('content')
        <div class="container bg-secondary p-3 rounded shadow">
            <img src="{{ asset('images/contact_2.jpg') }}" class="img-fluid h-25 w-100" alt="Job Pulse Banner">
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Contact Us</h5>
                        <h6 class="card-text">
                            Address: Mirpur 13, Dhaka, Bangladesh
                        </h6>
                        <h6 class="card-text">
                            Phone: +8801741469635
                        </h6>
                        <h6 class="card-text">
                            Email: fardinfaiaz5@gmail.com
                        </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                   @if (session('success'))
                <div class="alert alert-success mt-3 text-center">
                    {{ session('success') }}
                </div>
            @endif
                  <h5 class="card-title text-center">Contact Us</h5>
                    <div class="card-body d-flex justify-content-center align-items-center">
                      
                        <form style="width: 26rem;" action="{{ route('contact_us') }}" method="post">
                          @csrf
                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="contact_form_name" class="form-control" name="contact_form_name"/>
                            <label class="form-label" for="contact_form_name">Name</label>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="contact_form_email" class="form-control" name="contact_form_email"/>
                            <label class="form-label" for="contact_form_email">Email address</label>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="contact_form_subject" class="form-control" name="contact_form_subject"/>
                            <label class="form-label" for="contact_form_subject">Subject</label>
                          </div>
                          <div data-mdb-input-init class="form-outline mb-4">
                            <input type="text" id="contact_form_mobile" class="form-control" name="contact_form_mobile"/>
                            <label class="form-label" for="contact_form_mobile">Your Mobile</label>
                          </div>

                          <div data-mdb-input-init class="form-outline mb-4">
                            <textarea class="form-control" id="contact_form_query" rows="4" name="contact_form_query"></textarea>
                            <label class="form-label" for="contact_form_query">Your Query</label>
                          </div>

                          <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
