@extends('userNew.singleUser.layouts.main2')
@section('content')
    <style>
        .colum_2nd {
            padding: 44px 116px 12px 116px;
        }
    </style>
    <!-- -----------Login---------------- -->
    <div class="container-fluid">
        <div class="row justify-content-center" style="height:100vh">
            <div class="col-lg-4 col-md-4 col-12 company_bg">

                <div class="d-flex justify-content-center align-item-center">
                    <img src="{{ asset('user') }}/assets/images/profile-imges/companysignup.png" class="company_img"
                        alt="w8">
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-12 ">
                <div class="arrow-back">
                    <a href="{{ route('index') }}"> <i class="fa-solid fa-arrow-left"></i></a>
                </div>

                <div class="row form-row text-center">
                    <div class="d-flex justify-content-center mb-5">

                        <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedlogo.svg" alt="w8" >


                    </div>
                    <div class="col-9 central-data-signup ">
                        <div>
                            <h5 class="job-headings pb-4 mt-5">Login</h5>
                            <p class="job-view-para-2 pb-4">Post job Hire people through Medulla...nis iste
                                natus error sit
                                voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                        </div>
                        <form method="POST" action="{{ route('login') }}" class="pt-5">
                            @csrf
                            <input required type="hidden" name="check" value="1" />
                            <div class="row justify-content-center Poppins mb-lg-2 mb-md-2 mb-0">
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-envelope"></i>
                                        <input class="input-fields"required type="email" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center Poppins  mb-lg-2 mb-md-2 mb-0">
                                <div class="col-lg-6 col-md-8 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-lock"></i>
                                        <input class="input-fields" type="password" name="password"
                                            placeholder="Enter Password">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="pt-4">
                                <p class="Halvetica phara_16 mb-0" style="font-weight: 700">
                                    <span class="log_company"><a href="{{ route('forgot.password') }}">Forgot
                                            password ?</a></span>
                                </p>
                            </div>
                            <div class="mt-4">

                                <button type="submit" class="buttonfilled">Login</button>
                            </div>
                            <div class="pt-5">
                                <p class="Halvetica phara_16 mb-5" style="font-weight: 700;"> Don't have an account ?
                                    <span class="log_company"><a href="{{ route('index') }}">Sing Up</a></span>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
