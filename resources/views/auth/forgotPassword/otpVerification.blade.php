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
        <div class="row justify-content-center" style="height:100vh">
            <div class="col-lg-4 col-md-4 col-12 company_bg">

                <div class="d-flex justify-content-center">
                    <img src="{{ asset('user') }}/assets/images/profile-imges/companysignup.png" class="company_img"
                        alt="w8" />
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-lg-0 mt-md-0 mt-5 text-center ">

                <div class="d-flex justify-content-center mt-5 pt-5">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedlogo.svg" alt="w8">
                </div>
                <div class="row mt-5 Halvetica">
                    <div class="col-12 text-center crd-row-one">
                        <h1 class="head_text">OTP Verification</h1>
                        <p class="pt-2 pb-2" style="font-weight: 400">
                            Please check your email for the OTP verification code..
                        </p>
                    </div>

                </div>


                {{-- <form>
                    <input id="input1" type="text" maxlength="1">
                    <input id="input2" type="text" maxlength="1" disabled>
                    <input id="input3" type="text" maxlength="1" disabled>
                    <input id="input4" type="text" maxlength="1" disabled>
                    <input id="input5" type="text" maxlength="1" disabled>
                    <input id="input6" type="text" maxlength="1" disabled>
                </form> --}}


                <form method="POST" action="{{ route('otp.verification') }}">
                    @csrf
                    <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2">

                        {{-- <div class="div1"> </div>

                        <div class="div1"> </div>

                        <div class="div1"> </div>

                        <div class="div1"> </div>
                        <div class="div1"> </div>
                        <div class="div1"> </div> --}}
                        {{-- <input type="text" maxlength="1"  required> --}}

                        <input id="input1" type="text" maxlength="1" class="m-2 text-center form-control rounded">
                        <input id="input2" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded">
                        <input id="input3" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded">
                        <input id="input4" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded">
                        <input id="input5" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded">
                        <input id="input6" type="text" maxlength="1" disabled
                            class="m-2 text-center form-control rounded">
                        {{-- <input class="m-2 text-center form-control rounded otp-input" id="first" required type="text"
                            name="o" maxlength="1" oninput="this.value=this.value.replace(/[^0-9]/g,'');">
                        <input class="m-2 text-center form-control rounded otp-input" id="second" required type="text"
                            name="t" maxlength="1" onkeypress="return allowNumbersOnly(event)">
                        <input class="m-2 text-center form-control rounded otp-input" id="third" required type="text"

                            name="p" maxlength="1" onkeypress="return allowNumbersOnly(event)">
                        <input class="m-2 text-center form-control rounded otp-input" id="fourth" required type="text"
                            name="v" maxlength="1" onkeypress="return allowNumbersOnly(event)">
                        <input class="m-2 text-center form-control rounded otp-input" id="fifth" required type="text"
                            name="e" maxlength="1" onkeypress="return allowNumbersOnly(event)">
                        <input class="m-2 text-center form-control rounded otp-input" id="sixth" required type="text"
                            name="r" maxlength="1" onkeypress="return allowNumbersOnly(event)"> --}}
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="buttonfill Poppins phara_16">
                            Verify
                        </button>
                    </div>
                </form>
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
                    // function allowNumbersOnly() {
                    // Get the ASCII value of the entered key
                    // var charCode = event.which ? event.which : event.keyCode;

                    // Allow numeric characters (0-9)
                    // if (charCode >= 48 && charCode <= 57 || (charCode >= 97 && charCode <= 122)) {
                    //     return true;
                    // } else{
                    //     return false;
                    // }
                    // // Allow other special characters like backspace, delete, tab, enter
                    // return true;
                    // alert($('#first').val())
                    //     var numbers = /^[0-9]+$/;
                    //     if ($('#first').val().match(numbers)) {
                    //         // alert('Your Registration number has accepted....');

                    //         return true;
                    //     } else {
                    //         $('#first').val('')
                    //         $('#first').focus()
                    //         // alert('Please input numeric characters only');
                    //         return false;
                    //     }
                    // }


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
                <div class="pt-5">
                    <form id="resendEmail" method="POST" action="{{ route('send.email') }}">
                        @csrf
                        <p class="Halvetica phara_16 mb-0" style="font-weight: 700">
                            Did not recieve the OTP ?
                            <input class="input-fields" type="hidden" name="email" value="{{ $user->email }}">
                            <span class="log_company"><a href="#"
                                    onclick="document.getElementById('resendEmail').submit()">Resend</a></span>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>
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
    </script> --}}
@endsection
