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
                            <li><a href="#">View Applications</a></li>
                            <li><a href="#">Saved Jobs</a></li>
                            <li><a href="#">Resume</a></li>
                        </ul>

                    </div>
                    <div>
                        <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                        <span><i class="fa-regular fa-user ms-1 start_16_respons"></i></span>
                        <i class="ri-logout-circle-line">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                        </a>
                      </i>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="container-fluid mt-5">
        <h1 class="headings-profile">Profile</h1>
        <div class="row mt-3 justify-content-center p-4 ">
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
                    <form action="{{ route('update.user.profile', $user->id) }}" method="POST" class="pt-3 pb-5">
                        @csrf
                        <div class="row">
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input class="input-field" type="text" name="name"
                                        value="<?= isset($user->name) && !empty($user->name) ? $user->name : '' ?>"
                                        placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-envelope icon"></i>
                                    <input class="input-field" type="email" name="email"
                                        value="<?= isset($user->email) && !empty($user->email) ? $user->email : '' ?>"
                                        placeholder="Email ID" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input class="input-field" type="text" name="phone"
                                        value="<?= isset($user->phone) && !empty($user->phone) ? $user->phone : '' ?>"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="gender" required style="width: 100%;">
                                        <option value="" disabled selected hidden> Gender...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="job_type" required style="width: 100%;">
                                        <option value="" disabled selected hidden>Are you interested in full time or
                                            part time work?</option>
                                        <option>Full Time</option>
                                        <option>Part Time</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <input class="input-field" type="text" name="located_in"
                                        value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                        placeholder="In which city are you located?" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="work_type" style="width: 100%;">
                                        <option value="" disabled selected hidden>Are you interested to work
                                            In-person, remote or hybrid?</option>
                                        <option>In-Person</option>
                                        <option>Remote</option>
                                        <option>Hybrid</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <input class="input-field" type="text" name="industry_and_position"
                                        placeholder="State your desired industry and position" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="pay_range" style="width: 100%;">
                                        <option value="" disabled selected hidden>State your desired pay range
                                        </option>
                                        <option>0-5</option>
                                        <option>5-10</option>
                                        <option>10-15</option>
                                        <option>15-20</option>
                                        <option>20-25</option>
                                        <option>25-30</option>
                                        <option>30-35</option>
                                        <option>35-40</option>
                                        <option>40-45</option>
                                        <option>45-50</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <input class="input-field" type="text" name="nationality"
                                        placeholder="State your nationality" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-lg-right">
                                <button type="submit" class="buttonfill">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-3 mt-md-5 mt-lg-0 col-10 mt-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center res-top-margin">
                <div class=" pt-2 pb-2 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="pt-5 pb-5 pr-3 pl-3 right-card"
                        style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                        <h6 class="john-text justify-content-center">Resume</h6>
                        <p class="john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                        </p>
                        <button type="" class="buttonunfillborder">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
