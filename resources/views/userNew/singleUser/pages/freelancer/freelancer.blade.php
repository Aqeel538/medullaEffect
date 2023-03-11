@extends('userNew.singleUser.layouts.main2')
@section('content')
    <style>
        .colum_2nd {
            padding: 44px 116px 12px 116px;
        }
    </style>
    <link rel="stylesheet" href="{{ asset('user') }}/assets/styles/loader.css" />

    <?php
    $blink = 0;
    ?>
    <!-- -----------freelancer----signup------------ -->
    <div class="container-fluid">
        <div class="row justify-content-center" style="height:100vh">
            <div class="col-lg-4 col-md-4 col-12 company_bg">

                <div class="d-flex justify-content-center align-item-center">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedsignup.png" class="company_img"
                        alt="w8">
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-12 ">
                <div id="loader-container">
                    <div class="loader"></div>
                </div>
                <div class="arrow-back">
                    <a href="{{ route('index') }}"> <i class="fa-solid fa-arrow-left"></i></a>
                </div>
                <div class="row form-row text-center">
                    <div class="d-flex justify-content-center mb-5">

                        <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedlogo.svg" alt="w8">


                    </div>
                    <div class="col-lg-9 col-md-9 col-11 central-data-signup ">
                        <div class="row text-center justify-content-center">
                            <div class="col-lg-7 col-md-7 col-12">
                                <h5 class="job-headings pb-4">Freelancer Sign Up</h5>
                                <p class="job-view-para-2 pb-4">You’re one step closer to uploading your services and
                                    growing your business</p>
                            </div>
                        </div>
                        <form id="register">
                            @csrf
                            <input required type="hidden" name="check" value="1" />
                            <div class="row justify-content-center Poppins mb-lg-2 mb-md-2 mb-0">
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-user"></i>
                                        <input class="input-fields" type="text" name="first_name"
                                            placeholder="First Name">
                                    </div>
                                    <div class="text-danger d-flex">
                                        <span class="text-danger error-text first_name_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-user"></i>
                                        <input class="input-fields" type="text" name="last_name" placeholder="Last Name">
                                    </div>
                                    <div class="text-danger d-flex">
                                        <span class="text-danger error-text last_name_error"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-center Poppins  mb-lg-2 mb-md-2 mb-0">

                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-envelope"></i>
                                        <input class="input-fields" type="email" name="email"placeholder="Email">
                                    </div>
                                    <div class="text-danger d-flex">
                                        <span class="text-danger error-text email_error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">

                                    <div class="input-container ">
                                        <i class="fa-solid fa-lock"></i>
                                        <input class="input-fields" type="password" name="password"placeholder="Password">
                                    </div>
                                    <div class="text-danger d-flex">
                                        <span class="text-danger error-text Password_error"></span>
                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-center Poppins  mb-lg-2 mb-md-2 mb-0">
                                {{-- <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <span><i class="fa-solid fa-business-time"></i></span>
                                        <input class="input-fields" type="text"
                                            name="company_name"placeholder="Company Name">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('company_name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div> --}}
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <input class="input-fields" type="text" name="website"
                                            placeholder="Website(Optional)">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('website')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-industry"></i>
                                        <input class="input-fields" type="text" name="industry" placeholder="industry">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('industry')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row justify-content-center Poppins">


                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">

                                        {{-- <input class="input-fields" type="number" name="phone"
                                            placeholder="Phone Number" id="mobile_code"> --}}

                                        <input class="input-fields int" type="text" name="phone"
                                            placeholder="Phone Number" id="mobile_code">
                                        <input type="hidden" name="dial_code" class="dial">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12  mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <input class="input-fields" type="text" name="address" placeholder="Street">
                                    </div>
                                    <div class="text-danger d-flex">
                                        @error('address')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row Poppins mb-lg-2 mb-md-2 mb-0  mt-2">

                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-city"></i>
                                        <input class="input-fields" type="text" name="city"
                                            placeholder="City(Optional)">
                                    </div>
                                    <div class="text-danger d-flex">
                                        {{-- @error('city')
                                            {{ $message }}
                                        @enderror --}}


                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 mb-lg-0 mb-md-0 mb-3 ">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-flag"></i>
                                        <input class="input-fields" type="text" name="state"
                                            placeholder="State(Optional)">
                                    </div>
                                    <div class="text-danger d-flex">
                                        {{-- @error('state')
                                            {{ $message }}
                                        @enderror --}}

                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-12 mb-lg-0 mb-md-0 mb-3  mt-2">
                                    <div class="input-container ">
                                        <i class="fa-solid fa-file-zipper"></i>
                                        <input class="input-fields" type="number" name="zip_code"
                                            placeholder="Zip code(Optional)">
                                    </div>
                                    <div class="text-danger d-flex">
                                        {{-- @error('zip_code')
                                            {{ $message }}
                                        @enderror --}}

                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">

                                {{-- <button type="submit" class="buttonfilled">Register</button> --}}
                                <button type="submit" onclick="registerloader()" class="buttonfilled">Register</button>
                            </div>
                            <div class="pt-5">
                                <p class="Halvetica phara_16 mb-4" style="font-weight: 700;">Already have an account?
                                    <span class="log_company"><a href="/login">Log In</a></span>
                                </p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $("#register").on('submit', function(e) {
                e.preventDefault();
                var loader = document.getElementById("loader-container");
                loader.style.display = "flex";
                $(".se-pre-con").fadeOut();

                //alert("on submit ajax")
                $.ajax({
                    url: "/freelancer/create",
                    method: "post",
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            jQuery('#loader').fadeOut();
                            $('.email_error').html(data.error.email);
                            $('.first_name_error').html(data.error.first_name);
                            $('.last_name_error').html(data.error.last_name);
                            $('.Password_error').html(data.error.password);
                            loader.style.display = "none";

                        } else {

                            window.location.href = "/otp-verification-page";
                            toastr.success(data.message, data.title);
                        }
                    }
                });
            });
        });
    </script>
@endsection
