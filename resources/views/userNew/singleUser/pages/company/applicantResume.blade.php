@extends('userNew.singleUser.layouts.main')
@section('content')
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="../Assets/Images/landing-page-img/Vectorsearch.png" class="search-icon-index" alt=""
                            srcset="">
                    </div>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="{{ route('company.dashboard') }}">Dashboard</a>
                        </li>
                        <li><a class="navbar-link" href="{{ route('company.jobs') }}">Jobs</a></li>
                        <li><a class="navbar-link" href="{{ route('company.allApplicants') }}">Applicants</a></li>
                        <li><a class="navbar-link" href="{{ route('company.individual') }}">Individuals</a></li>
                        <li><a class="navbar-link  " href="{{ route('company.freelancer') }}">Freelancers</a>
                        </li>
                        <li><a class="navbar-link" href="#">Settings</a></li>

                    </ul>
                    <div>
                        <a class="navbar-link" href="{{ route('see.notifications') }}">
                            <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorbell.png" class="bells"
                                alt="" srcset="">
                        </a>
                        &nbsp;
                        <a class="navbar-link" href="{{ route('company.jobPost') }}">
                            <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vector.png" class="bell"
                                alt="" srcset="">
                        </a>
                        <i style="cursor:pointer;" class="ri-logout-circle-line"
                            onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                        </i>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </nav>

                <div class="mobile-navbar-btns">
                    <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                    <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
                </div>
            </div>
        </div>
    </div>

    <!-- 2nd nav end -->

    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-12 text-center justify-content-center">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="headings">Applicant Resume</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-10 pt-2 pb-3 offset-1">
                        <p class="descriptions">Post job Hire people through Medulla...nis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12  col-lg-6 col-md-6">
                        <div class="input-container">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/vector.png" alt=""
                                srcset="">
                            <input value="{!! $applicantResume->name ?? '' !!}" class="input-fields" type="text"
                                placeholder="Full Name" name="name">
                        </div>

                    </div>
                    <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                        <div class="input-container">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/vectoremailblack.png"
                                alt="" srcset="">
                            <input value="{!! $applicantResume->email ?? '' !!}" class="input-fields" type="email"
                                placeholder="Email ID" name="email">
                        </div>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12  col-lg-6 col-md-6">
                        <div class="input-container">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorphoneblack.png"
                                alt="" srcset="">
                            <input value="{!! $applicantResume->phone ?? '' !!}" class="input-fields" type="text"
                                placeholder="Phone Number" name="phone">
                        </div>

                    </div>
                    <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                        <div class="inputfield">
                            <i class="fa-regular fa-user"></i>
                            <input value="{!! $applicantResume->gender ?? '' !!}" class="input-fields" type="text"
                                placeholder="Phone Number"name="gender">
                        </div>

                    </div>
                </div>
                <div class="row">

                    <div class="col-12 form-group mt-3">
                        <div class="inputfield">
                            <i class="fa-regular fa-user"></i>

                            <input value="{!! $applicantResume->job_type ?? '' !!}" class="input-fields" type="text"
                                placeholder="Job type">

                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 form-group mt-3">
                        <div class="inputfield">
                            <i class="fa-regular fa-user"></i>
                            <input class="input-field" type="text" value="{!! $applicantResume->located_in ?? '' !!}"
                                placeholder="In which city are you located?" />
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 form-group">
                        <div class="inputfield mt-3">
                            <i class="fa-regular fa-user"></i>

                            <input value="{!! $applicantResume->work_type ?? '' !!}" class="input-fields" type="text"
                                placeholder="Phone Number" name="phone">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12  mt-3">
                        <div class="inputfield">
                            <i class="fa-regular fa-user"></i>
                            <input class="input-field" type="text" name="industry_and_position"
                                placeholder="{!! $applicantResume->industry_and_position ?? 'State your desired industry and position' !!}" />

                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 form-group mt-3">
                        <div class="inputfield">
                            <i class="fa-regular fa-user"></i>

                            <input value="{!! $applicantResume->phone ?? '' !!}" class="input-fields" type="text"
                                placeholder="Phone Number" name="phone">
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-12 form-group mt-3">
                        <div class="inputfield">
                            <i class="fa-regular fa-user"></i>
                            <input class="input-field" type="text" name="nationality"
                                placeholder="{!! $applicantResume->nationality ?? 'State your nationality' !!}" />
                        </div>
                    </div>
                </div>


                <button type="submit" style="cursor: pointer;" class="buttonfill-update mt-4">Download resume</button>


            </div>
        </div>
    </div>


    <!-- navbar res js end -->
@endsection
