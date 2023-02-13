@extends('user.singleUser.layouts.main')
@section('title', 'Individual-Questinare')
@section('content')
    <!----- ---------2st--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">

            <div class="header">
                <nav class="navbar">
                    <div class="container-fluid p-0">
                        <div>
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorsearch.png" alt=""
                                srcset="">
                        </div>
                        <ul class="navbar-list" id="myDIV">
                            <li><a class="navbar-link" href="{{ route('individual.jobs') }}">View Jobs</a></li>
                            <li><a class="navbar-link" href="{{ route('individual.appliedJobs') }}">View Applications</a>
                            </li>
                            <li><a class="navbar-link" href="#">Saved Jobs</a></li>
                            <li><a class="navbar-link" href="#">Resume</a></li>


                        </ul>
                        <div>
                            <span>
                                <a class="navbar-link" href="{{ route('see.notifications') }}">
                                    <i class="fa-regular fa-bell start_16_respons"></i>
                                </a>
                            </span>
                            <span>
                                <a class="navbar-link" href="{{ route('chatbot') }}">
                                    <i class="fa-regular fa-user ms-1 start_16_respons"></i>
                                </a>
                            </span>
                            <span><i style="cursor:pointer;" class="ri-logout-circle-line"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                </i></span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                </nav>

                <div class="mobile-navbar-btn">
                    <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>

                    <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
                </div>
            </div>

        </div>
    </div>

    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-12 text-center justify-content-center">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="headings">Fill Out Questionnaire</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 pt-2 pb-3">
                        <p class="descriptions">Post job Hire people through Medulla...nis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    </div>
                </div>

                <form action="{{ route('submit.questionair', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-6 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <input class="input-field-profile" type="text" name="name"
                                    value="<?= isset($user->name) && !empty($user->name) ? $user->name : '' ?>"
                                    placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-envelope"></i>
                                <input readonly class="input-field-profile" type="email" name="email"
                                    value="<?= isset($user->email) && !empty($user->email) ? $user->email : '' ?>"
                                    placeholder="Email ID" />
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 col-lg-6 col-md-6 form-group">
                            <div class="inputfield">

                                <i class="fa-solid fa-phone"></i>
                                <input class="input-field-profile" type="text" name="phone"
                                    value="<?= isset($user->phone) && !empty($user->phone) ? $user->phone : '' ?>"
                                    placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%;" name="gender">
                                    <option disabled selected hidden> Gender...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%" name="job_type">
                                    <option value="" disabled selected hidden>Are you interested in full time or part
                                        time work?</option>
                                    <option>Full Time</option>
                                    <option>Part Time</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <input class="input-field-profile" type="text" name="located_in"
                                    placeholder="In which city are you located?" required />
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <select name="work_type" required style="width: 100%;">
                                    <option value="" disabled selected hidden>Are you interested to work In-person,
                                        remote or hybrid?</option>
                                    <option>In-Person</option>
                                    <option>Remote</option>
                                    <option>Hybrid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <input class="input-field-profile" type="text" name="industry_and_position"
                                    placeholder="State your desired industry and position" required />
                            </div>
                        </div>

                        <div class="col-12 form-group mt-2">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <select name="pay_range" required style="width: 100%;">
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


                        <div class="col-12 form-group mt-2">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <input class="input-field-profile" type="text" name="nationality"
                                    placeholder="State your nationality" required />
                            </div>
                        </div>
                        <button type="submit" style="cursor: pointer;" class="buttonfill mt-3">Update</button>
                </form>
                {{-- <form action="{{ route('submit.questionair', $user->id) }}" method="POST" enctype="multipart/form-data"
                    class="pt-3 pb-5">
                    @csrf
                    <div class="row">
                        <div class="col-12  col-lg-6 col-md-6 form-group ">
                            <div class="input-icons">
                                <i class="fa-regular fa-user icon"></i>
                                <input class="input-field-profile" type="text" placeholder="Full Name">
                            </div>
                        </div>
                        <div class="col-12  col-lg-6 col-md-6 form-group">
                            <div class="input-icons">
                                <i class="fa-regular fa-envelope icon"></i>
                                <input class="input-field-profile" type="email" placeholder="Email ID" />
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12  col-lg-6 col-md-6 form-group  ">
                            <div class="input-icons">
                                <i class="fa-regular fa-user icon"></i>
                                <input class="input-field-profile" type="text" placeholder="Phone vNumber">
                            </div>
                        </div>
                        <div class="col-12  col-lg-6 col-md-6 form-group">
                            <div class="inputfield-profile">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%;">
                                    <option value="" disabled selected hidden> Gender...</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12 form-group ">
                            <div class="inputfield-profile">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%;">
                                    <option value="" disabled selected hidden>Are you interested in full time or part
                                        time work?
                                    </option>
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-2">
                            <div class="inputfield-profile">
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
                        <div class="col-12 form-group mt-2">
                            <div class="inputfield-profile">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%;">
                                    <option value="" disabled selected hidden>Are you interested to work In-person,
                                        remote or hybrid?
                                    </option>
                                    <option>In Person</option>
                                    <option>Remote</option>
                                    <option>Hybrid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group mt-2">
                            <div class="inputfield-profile">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%;">
                                    <option value="" disabled selected hidden>State your desired industry and
                                        position</option>
                                    <option>IT</option>
                                    <option>Commercial</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group mt-2">
                            <div class="inputfield-profile">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%;">
                                    <option value="" disabled selected hidden>State your desired pay range</option>
                                    <option>50000 - 100000</option>
                                    <option>100000 150000</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group mt-2">
                            <div class="inputfield-profile">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%;">
                                    <option value="" disabled selected hidden>State your nationality</option>
                                    <option>Idian </option>
                                    <option>Pakistani </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  d-flex justify-content-end text-lg-right mt-4">
                            <button class="buttonfill">Update</button>
                        </div>
                    </div>
                </form> --}}


            </div>
        </div>
    </div>
    {{-- <div class="container-fluid mt-5">
        <h1 class="headings-profile">Profile</h1>
        <div class="row mt-3  p-4 ">
            <div class="col-lg-3 mt-md-5 mb-lg-0 mb-sm-4 mt-lg-0 mb-xs-4  col-10 text-center">
                <div class=" pt-5 pb-5 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="img-holder">
                        <img src="../Assets/Images/profile-imges/user.png" alt="" srcset="">
                    </div>
                    <h6 class="justify-content-center pt-2 john-text">John Doe</h6>
                    <div class="ps-3 pe-3 pt-3">
                        <p class="pr-4 john-para">123 Avenue Park City, Bhurban
                            4 Years Experience</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="">
                    <h1 class="pt-4 profile-text-ques-heading">Fill out the questionnaire</h1>
                    <h6 class="john-para-afer-ques-heading-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis..</h6>
                    <form action="" class="pt-3 pb-5">
                        <div class="row">
                            <div class="col-12  col-lg-6 col-md-6 form-group ">
                                <div class="input-icons">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input class="input-field-profile" type="text" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-envelope icon"></i>
                                    <input class="input-field-profile" type="email" placeholder="Email ID" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12  col-lg-6 col-md-6 form-group  ">
                                <div class="input-icons">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input class="input-field-profile" type="text" placeholder="Phone vNumber">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="inputfield-profile">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden> Gender...</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 form-group ">
                                <div class="inputfield-profile">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>Are you interested in full time or
                                            part time work?
                                        </option>
                                        <option>Part Time</option>
                                        <option>Full Time</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-2">
                                <div class="inputfield-profile">
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
                            <div class="col-12 form-group mt-2">
                                <div class="inputfield-profile">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>Are you interested to work
                                            In-person, remote or hybrid?
                                        </option>
                                        <option>In Person</option>
                                        <option>Remote</option>
                                        <option>Hybrid</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group mt-2">
                                <div class="inputfield-profile">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your desired industry and
                                            position</option>
                                        <option>IT</option>
                                        <option>Commercial</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group mt-2">
                                <div class="inputfield-profile">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your desired pay range
                                        </option>
                                        <option>50000 - 100000</option>
                                        <option>100000 150000</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group mt-2">
                                <div class="inputfield-profile">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your nationality</option>
                                        <option>Idian </option>
                                        <option>Pakistani </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  d-flex justify-content-end text-lg-right mt-4">
                                <button class="buttonfill">Update</button>
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
                        <div class="ps-3 pe-3">
                            <p class="pr-4 john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                voluptatem accn.</p>
                        </div>
                        <button type="" class="buttonunfillborder">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
