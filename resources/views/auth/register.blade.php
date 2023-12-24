@extends('layouts.app')
@section('Style')
 <link rel="stylesheet" href="{{ asset('assets/FrontEnd/style.css') }}">
@endsection
@section('content')
<!-- Page disgn  -->
<div class="row">
    <section class="background-radial-gradient overflow-hidden" >
        <div class="container text-center text-lg-start">
            <div class="row gx-lg-5 align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="mt-2 display-5 fw-bold ls-tight animate__animated animate__fadeInUp" id="carPoolingHeading" style="color: hsl(218, 81%, 95%)">
                        {{ __('CarPooling') }}<br />
                        <span style="color: hsl(218, 81%, 75%)"> {{ __('Share rides and save money') }}</span>
                    </h1>
                    <img src="{{ asset("assets/img/loginimg.png") }}" alt="vector1">
                </div>
                <div class="col-lg-6 mb-3 mb-lg-0 position-relative">
                    <!-- Background shapes -->
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-4 px-md-5">
                        <!-- Sign Up Form -->
                            <div id="signup" class="tab-content signup">
                                <form method="POST" action="{{ route('register') }}" class="text-center">
                                    <h1 class="display-6" style="color: rgb(92, 18, 107); font-size:30px;font-weight:bolder">{{ __('Sign Up') }}</h1>
                                    @csrf
                                    <div class="row">
                                        <!-- First Name input -->
                                        <div class="col-md-6 mb-2">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example1" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="First name"/>
                                                @error('firstname')
                                                    <span class="helper-text" data-error="wrong" data-success="right">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <!-- Last Name input -->
                                        <div class="col-md-6 mb-4">
                                            <div class="form-outline">
                                                <input type="text" id="form3Example2" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Last name" />
                                                @error('lastname')
                                                    <span class="helper-text" data-error="wrong" data-success="right">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Matricule input -->
                                    <div class="form-outline mb-4">
                                        <input type="text" id="form3Example3" class="form-control @error('matricule') is-invalid @enderror" name="matricule" placeholder="Matricule" />
                                        @error('matricule')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Phone number input -->
                                    <div class="form-outline mb-4">
                                        <input type="tel" id="form3Example4" class="form-control @error('phoneNumber') is-invalid @enderror" name="phoneNumber" placeholder="Phone number"/>
                                        @error('phoneNumber')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example5" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Address"/>
                                        @error('email')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    {{-- Gender input  --}}
                                    <div class="form-outline mb-4">
                                        <select class="form-control" id="gender" name="gender" required>
                                            <option value="femme" {{ old('gender') == 'femme' ? 'selected' : '' }}>Femme</option>
                                            <option value="homme" {{ old('gender') == 'homme' ? 'selected' : '' }}>Homme</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <!-- Password input -->
                                    <div class="form-outline mb-4">
                                        <input type="password" id="form3Example6" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password"/>
                                        @error('password')
                                            <span class="helper-text" data-error="wrong" data-success="right">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <!-- Role selection labels with increased width and height in the same line -->
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('role') is-invalid @enderror" type="radio" name="role" id="role1" value="driver">
                                            <label class="form-check-label" for="role1">Driver</label>
                                            @error('role')
                                                <span class="helper-text" data-error="wrong" data-success="right">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input @error('role') is-invalid @enderror" type="radio" name="role" id="role2" value="client" checked>
                                            <label class="form-check-label" for="role2">Client</label>
                                            @error('role')
                                                <span class="helper-text" data-error="wrong" data-success="right">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <br><br>
                                        <!-- Submit button -->
                                        <button type="submit" style="background-color: #aa51a5;border:none" class="btn btn-primary btn-block mb-4 col-10">
                                            {{ __('Sign up') }}
                                        </button>
                                        <br>
                                        <p style="color: blue ">{{ __('Already have an account?') }} <a style="color:#aa51a5;font-weight:bold" href="{{ route('login') }}" class="tab-link">{{ __('Login') }}</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@endsection
@section('scripte')
<script>

document.addEventListener("DOMContentLoaded", function () {
        document.location.hash = document.location.hash || 'signup';
    });
// title animation
    $(document).ready(function() {
            // Show the heading with a fade-in and upward movement effect
        $('#carPoolingHeading').removeClass('d-none').hide().addClass('animate__fadeInUp').fadeIn(1000);
    });
</script>
@endsection
