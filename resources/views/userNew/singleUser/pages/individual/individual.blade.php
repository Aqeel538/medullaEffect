@extends('userNew.singleUser.layouts.main2')
@section('content')
    <style>
        .colum_2nd {
            padding: 44px 116px 12px 116px;
        }
    </style>
    <!-- -----------company----signup------------ -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-12 company_bg">
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="#">
                            <span><i class="ri-instagram-line text-white Remix_icon"></i></span>
                        </a>
                        <a href="#">
                            <span><i class="ri-youtube-line ms-1  text-white Remix_icon"></i>
                            </span>
                        </a>

                    </div>
                    <div>
                        <a href="#">
                            <span><i class="fa-solid fa-phone text-white phara_16"></i></span>
                        </a>
                        <a href="#">
                            <span><i class="fa-regular fa-envelope ms-1 text-white phara_16"></i></span>
                        </a>

                    </div>

                </div>
                <div class="d-flex justify-content-center align-item-center">
                    <img src="{{ asset('user') }}/assets/images/profile-imges/companysignup.png" class="company_img"
                        alt="w8">
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-12 ">
                <div class="arrow-back">
                    <a href="{{ route('index') }}"> <img
                            src="{{ asset('user') }}/assets/images/landing-page-img/vectorarrow.png" alt="w8"></a>
                </div>
                <div class="row form-row text-center">
                    <div class="d-flex justify-content-center mb-5">
                        <img src="{{ asset('user') }}/assets/images/profile-imges/job-search-company.png" alt="w8"
                            class="logo-img">
                        &nbsp; <h4 class="Logo-text">Medulla
                            Effects</h4>
                    </div>
                    <div class="col-9 central-data-signup ">
                        <div>
                            <h5 class="job-headings pb-4">Individual Sign Up</h5>
                            <p class="job-view-para-2 pb-4">Post job Hire people through Medulla...nis iste
                                natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                        </div>
                        <form method="POST" action="{{ route('individual_register') }}">
                            @csrf
                            <input required type="hidden" name="check" value="1" />
                            <div class="row justify-content-center Poppins mb-lg-2 mb-md-2 mb-0">
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <ion-icon name="person-outline"></ion-icon>
                                        <input class="input-fields" type="text" name="first_name"
                                            placeholder="First Name">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('first_name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <ion-icon name="person-outline"></ion-icon>
                                        <input class="input-fields" type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('last_name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center Poppins  mb-lg-2 mb-md-2 mb-0">
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <ion-icon name="mail-outline"></ion-icon>
                                        <input class="input-fields" type="email" name="email" placeholder="Email ID">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="ri-lock-unlock-line" style="font-size: 20px"></i>
                                        <input class="input-fields" type="password" name="password"placeholder="Password">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center Poppins  mb-lg-2 mb-md-2 mb-0">
                                <div class="col-lg-12 col-md-12 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <ion-icon name="call-outline"></ion-icon>
                                        <input class="input-fields" type="number" name="phone"
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">

                                <button type="submit" class="buttonfilled">Register</button>
                            </div>
                            <div class="pt-5">
                                <p class="Halvetica phara_16 mb-0" style="font-weight: 700;">Already have an account?
                                    <span class="log_company"><a href="/login">Log In</a></span>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>






            </div>

        </div>
    </div>
@endsection
