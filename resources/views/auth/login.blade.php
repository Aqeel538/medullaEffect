@extends('userNew.singleUser.layouts.main2')
@section('content')
    <style>
        .colum_2nd {
            padding: 44px 116px 12px 116px;
        }
    </style>
    <!-- -----------company----signup------------ -->
    <div class="container-fluid">
        <div class="row justify-content-center signup_height">
            <div class="col-lg-4 col-md-4 col-12 company_bg">
                <div class="d-flex justify-content-between">
                    <div>
                        <span><i class="ri-instagram-line text-white Remix_icon"></i></span>
                        <span><i class="ri-youtube-line ms-1  text-white Remix_icon"></i>
                        </span>

                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone text-white phara_16"></i></span>
                        <span><i class="fa-regular fa-envelope ms-1 text-white phara_16"></i></span>

                    </div>

                </div>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('user') }}/assets/images/Copany-bg-img.png" class="company_img" alt="w8">
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-lg-0 mt-md-0 mt-5 text-center colum_2nd">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('user') }}/assets/images/job-search-company.png" alt="w8">
                    <h3 class="Poppins">Medulla
                        Effects</h3>
                </div>
                <div class="mt-4 Halvetica">
                    <h1 class="head_text">Login</h1>
                    <p class="pt-2 pb-2 phara_16" style="font-weight: 400;">Post job Hire people through Medulla...nis iste
                        natus error sit
                        voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                </div>
                <form method="POST" action="{{ route('login') }}" class="pt-5">
                    @csrf
                    <input required type="hidden" name="check" value="1" />
                    <div class="row justify-content-center Poppins">

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group">
                                <span class="input-group-text border border-0 phara_16"
                                    style="    background-color: rgba(244, 244, 244, 1);"><i
                                        class="fa-regular fa-envelope"></i></span>
                                <input required type="email" name="email"
                                    class="form-control padd_12_input ps-0 border border-0"
                                    style="border-left: none; background-color: rgba(244, 244, 244, 1);"
                                    placeholder="Email ID">
                            </div>
                            <div class="text-danger d-flex">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row justify-content-center Poppins">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="input-group mt-3">
                                <span class="input-group-text phara_16 border border-0"
                                    style="background-color: rgba(244, 244, 244, 1);">
                                    <i class="ri-lock-unlock-line"></i>
                                </span>
                                <input type="password" name="password"
                                    class="form-control ps-0 border border-0 padd_12_input"
                                    style="border-left: none; background-color: rgba(244, 244, 244, 1);"
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
                            <span class="log_company"><a href="{{ route('forgot.password') }}">Forgot password?</a></span>
                        </p>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="buttonfilled">Login</button>
                    </div>
                    <div class="pt-3">
                        <p class="Halvetica phara_16 mb-0" style="font-weight: 700">
                            Don't have an account?
                            <span class="log_company"><a href="{{ url()->previous() }}">Register</a></span>
                        </p>
                    </div>

                </form>



            </div>

        </div>
    </div>
@endsection
