@extends('1_layout.main')
@push('title')
    <title>Registration Page</title>

    @section('content')
        <section class="section-5">
            <div class="container my-5">
                <div class="py-lg-2">&nbsp;</div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-5">
                        <div class="card shadow border-0 p-5">
                            <h1 class="h3">Register</h1>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="mb-2">Full Name*</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Enter Your Name" class="block mt-1 w-full" value="{{ old('lname') }}"
                                        required autocomplete="fname">
                                </div>
                                <div class="mb-3">
                                    <label for="user_role" class="mb-2">Your Role*</label>
                                    <select class="form-select" id="user_role" name="user_role" required>
                                        <option value="Candidate">Candidate</option>
                                        <option value="Company">Company</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="mb-2">Email*</label>
                                    <input type="email" id="email" name="email" class="form-control"
                                        placeholder="Enter Email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="mb-2">Password*</label>
                                    <input type="password" id="password" name="password" class="form-control"
                                        placeholder="Enter Password">
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="mb-5">
                                    <label for="password_confirmation" class="mb-2">Confirm Password*</label>
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="form-control" placeholder="Enter Password">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                {{-- <div class="mb-4">
                                    <label for="profile_image">Choose A Profile picture:</label>
                                    <input type="file" name="image" id="profile_image">
                                </div> --}}

                        </div>
                        <div class="mt-4 text-center">
                            <button class="btn btn-primary mt-2">Register</button>
                            </form>
                        </div>
                        <div class="mt-4 text-center">
                            <p>Already Have An Account? <a href={{ url('/login') }}>Login</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
