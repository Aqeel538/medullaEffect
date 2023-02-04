@extends('user.singleUser.layouts.main')
@section('content')
    <div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
        <header>

            <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div>
                        <span><i class="ri-search-line start_16_respons"></i></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list">
                            <li><a href="../Tagline.html">View Jobs</a></li>
                            <li><a href="{{ route('individual_appliedJobs') }}" class="mylist">View Applications</a></li>
                            <li><a href="#">Saved Jobs</a></li>
                            <li><a href="#">Resume</a></li>
                        </ul>

                    </div>
                    <div>
                        <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                        <span><i class="fa-regular fa-user ms-1 start_16_respons"></i></span>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="container mb-5 mt-5">
        <h1 class="headings-profile">Profile</h1>
        <div class="row mt-3 justify-content-center p-4">
            <div class="col-lg-3 mt-md-5 mb-lg-0 mb-sm-4 mt-lg-0 mb-xs-4   col-10 text-center">
                <div class=" pt-5 pb-5 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/Assets/Images/profile-imges/user.png" alt="" srcset="">
                    </div>
                    <h6 class="justify-content-center pt-2 john-text">John Doe</h6>
                    <p class="john-para">123 Avenue Park City, Bhurban
                        4 Years Experience</p>
                </div>
            </div>
            <div class="col-lg-6 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="pr-2 pl-2">
                    <h1 class="pt-4 profile-text-ques-heading">Fill out the questionnaire</h1>
                    <p class="john-para-afer-ques-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                    <form action="" class="pt-3 pb-5">
                        <div class="row">
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input class="input-field" type="text" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-envelope icon"></i>
                                    <input class="input-field" type="email" placeholder="Email ID" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input class="input-field" type="text" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden> Gender...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>Are you interested in full time or
                                            part time work?
                                        </option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>Where are you located?</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>Are you interested to work
                                            In-person, remote or hybrid?
                                        </option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your desired industry and
                                            position</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your desired pay range
                                        </option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your nationality</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <dic class="col-12 text-lg-right"> <button class="buttonfill">Update</button>
                            </dic>
                        </div>
                    </form>
                </div>

            </div>

            <div class="col-lg-3 mt-md-5 mt-lg-0 col-10 mb-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center">
                <div class="pt-5 pb-5 pr-3 pl-3 right-card" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                    <h6 class="john-text justify-content-center">Resume</h6>
                    <p class="john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.</p>
                    <button type="" class="buttonunfillborder">Upload</button>
                </div>
                <!-- 2nd col -->
                <div class="">
                    <div class="mt-5 pt-2 pb-2 pr-3 pl-3" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                        <p class="aplied-jobs-para pt-4 pb-2">
                            Jobs Applied<span style="color: #9A1029;">&nbsp;12</span> <br> <br>
                            Resumes <br> Downloaded by Company <span style="color: #9A1029">10</span> <br><br>
                            Profile Views <span style="color: #9A1029;
                        ;">20</span>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
