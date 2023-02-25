@extends('userNew.singleUser.layouts.main2')
@section('content')
    <style>
        body {
            background-color: red
        }

        .height-100 {
            height: 100vh
        }

        .card {
            width: 400px;
            border: none;
            height: 300px;
            box-shadow: 0px 5px 20px 0px #d2dae3;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .card h6 {
            color: red;
            font-size: 20px
        }

        .inputs input {
            width: 40px;
            height: 40px
        }

        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0
        }

        .card-2 {
            background-color: #fff;
            padding: 10px;
            width: 350px;
            height: 100px;
            bottom: -50px;
            left: 20px;
            position: absolute;
            border-radius: 5px
        }

        .card-2 .content {
            margin-top: 50px
        }

        .card-2 .content a {
            color: rgb(173, 172, 172)
        }

        .form-control:focus {
            box-shadow: none;
            border: 2px solid rgb(173, 172, 172)
        }

        .validate {
            border-radius: 20px;
            height: 40px;
            background-color: rgb(173, 172, 172);
            border: 1px solid rgb(173, 172, 172);
            width: 140px
        }
    </style>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-4 col-12 company_bg">
                <div class="d-flex justify-content-between">
                    <div>
                        <span><i class="ri-instagram-line text-white Remix_icon"></i></span>
                        <span><i class="ri-youtube-line ms-1 text-white Remix_icon"></i>
                        </span>
                    </div>
                    <div>
                        <span><i class="fa-solid fa-phone text-white phara_16"></i></span>
                        <span><i class="fa-regular fa-envelope ms-1 text-white phara_16"></i></span>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('user') }}/assets/images/profile-imges/companysignup.png" class="company_img"
                        alt="w8" />
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-lg-0 mt-md-0 mt-5 text-center ">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('user') }}/assets/images/profile-imges/job-search-company.png" alt="w8" />
                    <h3 class="Poppins">Medulla Effects</h3>
                </div>
                <div class="row mt-5 Halvetica">
                    <div class="col-12 text-center crd-row-one">
                        <h1 class="head_text">OTP Verification</h1>
                        <p class="pt-2 pb-2" style="font-weight: 400">
                            Lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Omnis, asperiores. repudiandae a.
                        </p>
                    </div>

                </div>
                <form method="POST" action="{{ route('company.otp.verification') }}">
                    @csrf
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">

                        {{-- <div class="div1"> </div>

                        <div class="div1"> </div>

                        <div class="div1"> </div>

                        <div class="div1"> </div>
                        <div class="div1"> </div>
                        <div class="div1"> </div> --}}
                        <input class="m-2 text-center form-control rounded" id="first" required type="number"
                            name="o">
                        <input class="m-2 text-center form-control rounded" id="second" required type="number"
                            name="t">
                        <input class="m-2 text-center form-control rounded" id="third" required type="number"
                            name="p">
                        <input class="m-2 text-center form-control rounded" id="fourth" required type="number"
                            name="v">
                        <input class="m-2 text-center form-control rounded" id="fifth" required type="number"
                            name="e">
                        <input class="m-2 text-center form-control rounded" id="sixth" required type="number"
                            name="r">
                    </div>
                    <div class="mt-5">

                        <button type="submit" class="buttonfill Poppins phara_16">
                            Verify
                        </button>
                    </div>

                </form>
                <div class="pt-5">
                    <form id="resendEmail" method="POST" action="{{ route('register.send.email') }}">
                        @csrf
                        <p class="Halvetica phara_16 mb-0" style="font-weight: 700">
                            Dont Recieve an email?
                            <input class="input-fields" type="hidden" name="email" value="{{ $user->email }}">
                            <span class="log_company"><a href="#"
                                    onclick="document.getElementById('resendEmail').submit()">Resend</a></span>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            function OTPInput() {
                const inputs = document.querySelectorAll('#otp > *[id]');
                for (let i = 0; i < inputs.length; i++) {
                    inputs[i].addEventListener('keydown', function(event) {
                        if (event.key === "Backspace") {
                            inputs[i].value = '';
                            if (i !== 0) inputs[i - 1].focus();
                        } else {
                            if (i === inputs.length - 1 && inputs[i].value !== '') {
                                return true;
                            } else if (event.keyCode > 47 && event.keyCode < 58) {
                                inputs[i].value = event.key;
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            } else if (event.keyCode > 64 && event.keyCode < 91) {
                                inputs[i].value = String.fromCharCode(event.keyCode);
                                if (i !== inputs.length - 1) inputs[i + 1].focus();
                                event.preventDefault();
                            }
                        }
                    });
                }
            }
            OTPInput();


        });
    </script>
@endsection
