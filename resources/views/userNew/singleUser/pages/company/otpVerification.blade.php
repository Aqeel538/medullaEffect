@extends('userNew.singleUser.layouts.main2')
@section('content')
    <link rel="stylesheet" href="{{ asset('user') }}/assets/styles/loader.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
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

    @if ($toasterValue == 1)
        <script>
            toastr.success('registered successfully! please enter OTP for verification.');
        </script>
    @else
        <script>
            toastr.success('OTP resend successfully!');
        </script>
    @endif
    <div class="container-fluid">
        <div class="row justify-content-center" style="height: 100vh">
            <div class="col-lg-4 col-md-4 col-12 company_bg">

                <div id="loader-container">
                    <div class="loader"></div>
                </div>

                <div class="d-flex justify-content-center">
                    <img src="{{ asset('user') }}/assets/images/profile-imges/companysignup.png" class="company_img"
                        alt="w8" />
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-lg-0 mt-md-0 mt-5 text-center ">
                <div class="d-flex justify-content-center">
                    <div class="res-on-375 mx-auto mt-5  d-flex justify-content-center">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedlogo.svg" alt="w8">
                    </div>
                </div>
                <div class="row mt-5 Halvetica">
                    <div class="col-12 text-center crd-row-one">
                        <h1 class="head_text">OTP Verification</h1>
                        <p class="pt-2 pb-2" style="font-weight: 400">
                            Please check your email for the OTP verification code, then enter it below.
                        </p>
                    </div>

                </div>
                <form id="registerVerifyOtp">
                    @csrf
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">



                        <input id="input1" type="text" maxlength="1" class="m-2 text-center form-control rounded"
                            name="o">
                        <input id="input2" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded" name="t">
                        <input id="input3" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded" name="p">
                        <input id="input4" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded" name="v">
                        <input id="input5" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded" name="e">
                        <input id="input6" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded" name="r">

                    </div>
                    <div class="mt-5">

                        <button type="submit" class="buttonfill Poppins phara_16">
                            Verify
                        </button>
                    </div>

                </form>
                <div class="pt-5">
                    <?php $user = session()->get('userMail'); ?>
                    <form id="resendEmail" method="POST" action="{{ route('register.send.email') }}">
                        @csrf
                        <p class="Halvetica phara_16 mb-0" style="font-weight: 700">
                            Did not receive the email?
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
        const input1 = document.getElementById("input1");
        const input2 = document.getElementById("input2");
        const input3 = document.getElementById("input3");
        const input4 = document.getElementById("input4");
        const input5 = document.getElementById("input5");
        const input6 = document.getElementById("input6");

        input1.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 1) {
                input2.removeAttribute("disabled");
                input2.focus();
            }
        });

        input2.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 1) {
                input3.removeAttribute("disabled");
                input3.focus();
            }
        });

        input3.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 1) {
                input4.removeAttribute("disabled");
                input4.focus();
            }
        });

        input4.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 1) {
                input5.removeAttribute("disabled");
                input5.focus();
            }
        });

        input5.addEventListener("input", function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value.length == 1) {
                input6.removeAttribute("disabled");
                input6.focus();
            }
        });

        input1.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input1.blur();
            }
        });

        input2.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input1.focus();
            }
        });

        input3.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input2.focus();
            }
        });

        input4.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input3.focus();
            }
        });

        input5.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input4.focus();
            }
        });

        input6.addEventListener("keydown", function(event) {
            if (event.keyCode == 8 && !this.value) {
                input5.focus();
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {
            // $('#first').on('keydown', allowNumbersOnly);
            $("#first, #second, #third, #fourth, #fifth").on("input", function() {
                if (this.value.length === this.maxLength) {
                    $(this).next(":input").focus();
                }
            });

            $("#sixth").on("input", function() {
                if (this.value.length === this.maxLength) {
                    // Do something after entering the final digit in the last input field
                } else {
                    return false
                }
            });
        });
    </script>

    <script>
        $(function() {
            $("#registerVerifyOtp").on('submit', function(e) {
                e.preventDefault();
                var loader = document.getElementById("loader-container");
                loader.style.display = "flex";
                $(".se-pre-con").fadeOut();

                //alert("on submit ajax")
                $.ajax({
                    url: "/company/otpVerification",
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
                            toastr.error('all field must required');
                            loader.style.display = "none";

                        } else if (data.status == 1) {
                            jQuery('#loader').fadeOut();
                            toastr.error('invalid OTP');
                            loader.style.display = "none";

                        } else {
                            window.location.href = "/login";
                            toastr.success(data.message, data.title);
                        }
                    }
                });
            });
        });
    </script>
@endsection
