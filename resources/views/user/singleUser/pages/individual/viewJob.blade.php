@extends('user.singleUser.layouts.main')
@section('content')
    <style>
        .cardsimg img {
            border: 2px solid #7C2342;
            border-radius: 50%;
            width: 40px;
            height: 35px !important;
        }
    </style>
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


    <div class="container mt-4">
        <div class="row">
            <div class="col-12 arrow">
                <a href="{{ route('tagline') }}">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
            <br>
            <br>
            <div class="col-lg-8 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">{!! $jobDetail->title ?? '' !!}</h2>
                    <p class="job-view-para">Nexa - Digital Marketing</p>
                </div>
                <div class="tabsrow d-flex justify-content-between">
                    <div class="allitems d-flex">
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $jobDetail->Users->work_type ?? '' !!}</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $jobDetail->Users->job_type ?? '' !!}</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Urgent
                                    Hiring</span>
                            </p>
                        </div>
                    </div>
                    <div class="time">
                        <p class="">
                            {{ \Carbon\Carbon::parse($jobDetail->created_at)->diffForHumans() }}
                        </p>

                    </div>
                </div>
                <p class="pt-3 job-details">
                    {!! $jobDetail->description ?? '' !!}
                </p>
                <div class="jobviewbtns mt-5 mb-4">
                    <a href="{{ route('individual.apply.now', $jobDetail->id) }}"><button class="buttonfill-apply">Apply
                            Now</button></a>
                    <a href="{{ route('individual.saveForLater', $jobDetail->id) }}"><button class="buttonunfill-save">Save
                            for Later</button></a>
                </div>
            </div>
            <!-- right side of view job page -->
            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12  pt-3 pb-3 res" style="background-color: #F9F9F9;border-radius: 20px;">
                        <div class="abutnexa d-flex justify-content-between">
                            <h4 class="about-nexa-heading">About {!! $jobDetail->Users->company_name ?? '' !!}</h4>
                            <button class="buttonunfill-save-follow
                                    ">Follow</button>
                        </div>
                        <div class="icon-text d-flex justify-content-between">
                            <p class="me-2 job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $jobDetail->Users->industry ?? '' !!}</span>
                            </p>

                            <p>
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;51-200
                                    employees</span>
                            </p>
                        </div>

                        <p class="abutnexa-text">Since 2005; we have been driving growth for hundreds of high profile
                            clients throughout the region, and have since expanded our business on a global scale. Through
                            digital marketing and growth marketing strategies, we help companies realize their true
                            potential in a frictionless and innovative environment, where Sales, Marketing & Customer
                            Service work together to increase sales and retain customers...
                            <a href="{{ route('individual.companyDetails', $jobDetail->Users->id) }}">
                                <span class="fw-bolder" style="color: #7C2342;">Learn More</span>
                        </p></a>
                    </div>
                </div>
                <h4 class="pt-4 ml-0 other-job-txt">Others Jobs</h4>
                <div class="row">
                    @foreach ($otherJobs as $otherJob)
                        @foreach ($otherJob->jobs as $getjobs)
                            @if ($jobDetail->id != $getjobs->id)
                                <a href="{{ route('individual.jodDetails', $getjobs->id) }}">
                                    <div class="col-lg-12 pt-3 pb-3  res mb-3"
                                        style="background-color: #F9F9F9;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-2 cardsimg">
                                                <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png"
                                                    class="w-5" alt="w8">
                                            </div>
                                            <div class="col-8">
                                                <p class="single-job-heading" style="margin: 0;padding: 0;"><b>
                                                        {{ $getjobs->title }}</b></p>
                                                <p class="job-posted" style="margin: 0;padding: 0;">
                                                    {{ \Carbon\Carbon::parse($getjobs->created_at)->diffForHumans() }}
                                                </p>
                                            </div>
                                            <div class="col-2">
                                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3">{!! $getjobs->description ?? '' !!} </p>
                                        <div class="jobviewbtns mt-1 mb-1">
                                            <a href="{{ route('individual.apply.now', $getjobs->id) }}"><button
                                                    class="buttonfill-apply">Apply Now</button></a>
                                            <a href="{{ route('individual.saveForLater', $getjobs->id) }}"><button
                                                    class="buttonunfill-save">Save for Later</button></a>
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>

    </div>
    <script>
        // -----------active----class--------
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var btns = header.getElementsByClassName("mylist");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
@endsection
