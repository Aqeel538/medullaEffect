@extends('userNew.singleUser.layouts.main2')
@section('content')
    <link rel="stylesheet" href="{{ asset('user') }}/assets/styles/loader.css" />
   

    <!-- -----------company----signup------------ -->
    <div class="container-fluid">
        <div class="row justify-content-center" style="height:100vh">
            <div class="col-lg-4 col-md-4 col-12 company_bg">
                <div id="loader-container">
                    <div class="loader"></div>
                </div>

                <div class="d-flex justify-content-center">
                    <img src="{{ asset('user') }}/assets/images/profile-imges/companysignup.png" class="company_img"
                        alt="w8">
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-lg-0 mt-md-0 mt-5 text-center ">
                <div class="res-on-375 mx-auto mt-5 pt-5 d-flex justify-content-center">

                    <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedlogo.svg" alt="w8">



                </div>
                <div class="mt-5 pt-5 crd-row-one">
                    <h1 class="head_text">Forgot Password</h1>
                    <p class="pt-2 pb-2 " style="font-weight: 400;">Please enter your email address to receive a forgot password token.</p>
                </div>
                <form id="sendOtp">
                    @csrf
                    <div class="row justify-content-center Poppins">
                        <div class="col-lg-6 col-md-8 col-10">
                            <div class="input-container ">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input class="input-fields" type="email" placeholder="Email" name="email">
                            </div>
                            <span style="color:brown;text-align: left">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                    </div>


                    <div class="mt-5">

                        <button type="submit" class="buttonfill Poppins phara_16">Submit</button></ </div>
                        <div class="pt-5">
                            <p class="Halvetica phara_16 mb-3" style="font-weight: 700;">Did not receive the email ? <span
                                    class="log_company"><a href="#">Resend</a></span></p>
                        </div>

                </form>



            </div>

        </div>
    </div>




    <script>
        $(function() {
            $("#sendOtp").on('submit', function(e) {
                e.preventDefault();
                var loader = document.getElementById("loader-container");
                loader.style.display = "flex";
                $(".se-pre-con").fadeOut();

                //alert("on submit ajax")
                $.ajax({
                    url: "/sendEmail",
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
                            toastr.error('email required');
                            loader.style.display = "none";

                        } else if (data.status == 1) {
                            jQuery('#loader').fadeOut();
                            toastr.error('invalid OTP');
                            loader.style.display = "none";

                        } else {
                            window.location.href = "/otpVerificationPage";
                            toastr.success(data.message, data.title);
                        }
                    }
                });
            });
        });
    </script>

    <script
type="module"
src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
@endsection
