@extends('user.singleUser.layouts.main2')
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
                <img src="{{ asset('user') }}/images/Copany-bg-img.png" class="company_img" alt="w8">
            </div>

        </div>
        <div class="col-lg-8 col-md-8 col-12 mt-lg-0 mt-md-0 mt-5 text-center colum_2nd">
            <div class="d-flex justify-content-center">
                <img src="{{ asset('user') }}/images/job-search-company.png" alt="w8">
                <h3 class="Poppins">Medulla
                    Effects</h3>
            </div>
            <div class="mt-4 Halvetica">
                <h1 class="head_text">Company Sign Up</h1>
                <p class="pt-2 pb-2 phara_16" style="font-weight: 400;">Post job Hire people through Medulla...nis iste natus error sit
                    voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
            </div>
            <form action="{{ route('individual.store') }}" method="POST">
                @csrf
                <input required type="hidden" name="check" value="1" />
                <div class="row justify-content-center Poppins">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text border border-0 phara_16" style="background-color: rgba(244, 244, 244, 1);"><i class="fa-regular fa-user"></i></span>
                            <input required type="text" name="name" class="form-control padd_12_input ps-0 border border-0" style="border-left: none; background-color: rgba(244, 244, 244, 1);" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text border border-0 phara_16" style="    background-color: rgba(244, 244, 244, 1);"><i class="fa-regular fa-envelope"></i></span>
                            <input required type="email" name="email" class="form-control padd_12_input ps-0 border border-0" style="border-left: none; background-color: rgba(244, 244, 244, 1);" placeholder="Email ID">
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center Poppins">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text phara_16 border border-0" style="background-color: rgba(244, 244, 244, 1);"><i class="fa-solid fa-phone"></i></span>
                            <input required type="text" name="phone" class="form-control ps-0 border border-0 padd_12_input" style="border-left: none; background-color: rgba(244, 244, 244, 1);" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text phara_16 border border-0" style="    background-color: rgba(244, 244, 244, 1);"><i class="fa-regular fa-envelope"></i></span>
                            <input required type="text" name="address" class="form-control ps-0 border border-0 padd_12_input" style="border-left: none; background-color: rgba(244, 244, 244, 1);" placeholder="Address">
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center Poppins">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text phara_16 border border-0" style="    background-color: rgba(244, 244, 244, 1);"><i class="fa-regular fa-user"></i></span>
                            <input required type="text" name="company_name" class="form-control ps-0 border border-0 padd_12_input" style="border-left: none; background-color: rgba(244, 244, 244, 1);" placeholder="Company Name">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text phara_16 border border-0" style="background-color: rgba(244, 244, 244, 1);"><i class="fa-regular fa-user"></i></span>
                            <input required type="text" name="website" class="form-control ps-0 border border-0 padd_12_input" style="background-color: rgba(244, 244, 244, 1); border-left: none;" placeholder="Website (optional)">
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center Poppins">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text phara_16 border border-0" style="background-color: rgba(244, 244, 244, 1);"><i class="fa-solid fa-phone"></i></span>
                            <input required type="text" name="phone" class="form-control ps-0 border border-0 padd_12_input" style="border-left: none; background-color: rgba(244, 244, 244, 1);" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 dropdown">
                        <div class="input-group mb-3">
                            <span class="input-group-text phara_16 border border-0" style="background-color: rgba(244, 244, 244, 1);"><i class="fa-regular fa-user"></i></span>
                            <input required type="text" name="industry" class="form-control ps-0 border border-0 padd_12_input" style="background-color: rgba(244, 244, 244, 1); border-left: none;" placeholder="Industry">
                            <button type="button" class=" dropdown-toggle drop_btn border border-0" style="background-color: rgba(244, 244, 244, 1);" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropend</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Action two</a></li>
                                <li><a class="dropdown-item" href="#">Action three</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div class="row justify-content-center Poppins">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="input-group mb-3">
                            <span class="input-group-text phara_16 border border-0" style="    background-color: rgba(244, 244, 244, 1);"><i class="fa-regular fa-user"></i></span>
                            <input required type="text" name="contact" class="form-control ps-0 border border-0 padd_12_input" style="background-color: rgba(244, 244, 244, 1); border-left: none;" placeholder="Source of Contact">
                            <button type="button" class=" dropdown-toggle drop_btn border border-0" style="    background-color: rgba(244, 244, 244, 1);" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropend</span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Action two</a></li>
                                <li><a class="dropdown-item" href="#">Action three</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn_fill Poppins phara_16">Register</button>
                </div>
                <div class="pt-4">
                    <p class="Halvetica phara_16 mb-0" style="font-weight: 700;">Already have an account? <span class="log_company"><a href="#">Log In</a></span></p>
                </div>

            </form>



        </div>

    </div>
</div>
@endsection