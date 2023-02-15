@extends('userNew.singleUser.layouts.main2')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- ---------JAVA--Bootsrap---- -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- ---font--cdn--------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ---------Remix----Icon--cdn---------- -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/Styles/Style.css" />
    <!-- --------fontfamily--------- -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <!-- -----------company----signup------------ -->
    <div class="container-fluid">
        <div class="row justify-content-center">
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
                    <img src="{{ asset('user') }}/assets/images/profile-imges/companysignup.png" class="company_img"
                        alt="w8">
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-lg-0 mt-md-0 mt-5 text-center ">
                <div class="res-on-375 mx-auto mt-5  d-flex justify-content-center">

                    <img src="{{ asset('user') }}/assets/images/profile-imges/job-search-company.png" alt="w8"
                        class="logo-img">
                    &nbsp; <h4 class="Logo-text">Medulla
                        Effects</h4>
                </div>
                <div class="mt-5 crd-row-one">
                    <h1 class="head_text">Forget Password</h1>
                    <p class="pt-2 pb-2 " style="font-weight: 400;">Please enter your email address or mobile number to
                        search for your account.</p>
                </div>
                <form action="{{ route('send.email') }}" method="POST">
                    @csrf
                    <div class="row justify-content-center Poppins">
                        <div class="col-lg-6 col-md-8 col-10">
                            <div class="input-container ">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input class="input-fields" type="email" placeholder="Email ID" name="email">
                            </div>
                        </div>

                    </div>


                    <div class="mt-5">
                        <a href="./Sana/Questinare.html">
                            <button type="submit" class="buttonfill Poppins phara_16">Submit</button></a>
                    </div>
                    <div class="pt-5">
                        <p class="Halvetica phara_16 mb-3" style="font-weight: 700;">Dont Recieve an email? <span
                                class="log_company"><a href="#">Resend</a></span></p>
                    </div>

                </form>



            </div>

        </div>
    </div>

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
