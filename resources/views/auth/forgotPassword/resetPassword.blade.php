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
        <div class="row justify-content-center" style="height:100vh">
            <div class="col-lg-4 col-md-4 col-12 company_bg">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('user') }}/assets/images/profile-imges/companysignup.png" class="company_img"
                        alt="w8">
                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-12 mt-lg-5 mt-md-0 mt-5 pt-5 text-center ">
                <div class="res-on-375 mx-auto mt-5  d-flex justify-content-center mt-5">

                        <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedlogo.svg" alt="w8" >
                    
                </div>
                <div class="mt-5 pt-5 crd-row-one">

                    <p class="pt-2 pb-2 " style="font-weight: 400;">Create new password.</p>
                </div>
                <form action="{{ route('reset.password') }}" method="POST">
                    @csrf
                    <div class="row justify-content-center Poppins">
                        <div class="col-lg-6 col-md-8 col-10">
                            <div class="input-container ">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input class="input-fields" type="hidden" name="email" value="{{ $user->email }}">
                                <input class="input-fields" type="password" placeholder="New password" name="password">
                            </div>
                        </div>

                    </div>


                    <div class="mt-5">

                        <button type="submit" class="buttonfill Poppins phara_16">Reset password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
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
