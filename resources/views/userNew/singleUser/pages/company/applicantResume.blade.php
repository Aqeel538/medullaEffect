@extends('userNew.singleUser.layouts.main')
@section('content')
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
                            class="search-icon-index" alt="" srcset="">
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
    <div class="container mt-4">
        <div class="row crd-row-one">
            <div class="col-12 arrow ">
                <a href="../Tagline.html">
                    <img src="../Assets/Images/landing-page-img/Vectorarrow.png" alt="" srcset=""></a>
            </div>
            <br />
            <br />
            <div class="col-lg-12 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings"> {!! $applicant->users->name ?? '' !!}</h2>
                    <p class="job-view-para-2">{!! $applicant->users->email ?? '' !!}</p>
                </div>
                <div class="col-lg-12 col-12 ps-0">
                    <div class="tabsrow d-flex justify-content-between">
                        <div class="allitems d-flex">
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp; &nbsp;Applied
                                        {{ \Carbon\Carbon::parse($applicant->created_at)->diffForHumans() }}</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;



                        </div>

                    </div>

                </div>



            </div>
            <!-- right side of view job page -->

        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="questionare-job-respond">
                    <p>{!! $applicant->users->description ?? 'There is no description provided by the user yet!!!' !!}</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 ">
                <div class="questionare-job-respond">
                    <h4 class="mb-4 resume-heading">Resume</h4>
                    <div class="">
                        <h6>Are you interested in full time or part time work?</h6>
                        <p>{!! $applicant->users->work_type ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your desired pay range?</h6>
                        <p>{!! $applicant->users->pay_range ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your nationality?</h6>
                        <p>{!! $applicant->users->nationality ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>Where are you located??</h5>
                            <p>{!! $applicant->users->located_in ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your desired industry and position?</h5>
                            <p>{!! $applicant->users->industry ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>Are you interested to work In-person, remote or hybrid?</h5>
                            <p>{!! $applicant->users->job_type ?? '' !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- navbar res js end -->
@endsection
