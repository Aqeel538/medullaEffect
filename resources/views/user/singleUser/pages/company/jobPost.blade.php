@extends('user.singleUser.layouts.main')
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
                            <li><a class="navbar-link" href="{{ route('company.dashboard') }}">Dashboard</a>
                            </li>
                            <li><a class="navbar-link mylist active" href="{{ route('company.jobs') }}">Jobs</a></li>
                            <li><a class="navbar-link" href="#">Applicants</a></li>
                            <li><a class="navbar-link" href="{{ route('company.individual') }}">Individuals</a></li>
                            <li><a class="navbar-link" href="{{ route('company.freelancer') }}">Freelancers</a></li>
                            <li><a class="navbar-link" href="#">Settings</a></li>
                        </ul>
                        <div>
                            <span>
                                <a class="navbar-link" href="{{ route('see.notifications') }}">
                                    <i class="fa-regular fa-bell start_16_respons"></i>
                                </a>
                            </span>
                            <span>
                                <a class="navbar-link" href="{{ route('company.jobPost') }}">
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
    <!---------------- -Navend--------------- -->
    <div class="container-fluid mt-5 plg-4 p-md-4 p-sm-3 p-1">

        <div class="tab-wrapper">
            <ul class="tabs Halvetica">


                <label class="tab-link active option_radio" data-tab="1" for="jobs">
                    <input type="radio" id="jobs" name="fuck" checked> <span></span>
                    Jobs posted</label>


                <label class="tab-link option_radio" data-tab="2" for="sav">
                    <input type="radio" id="sav" name="fuck"> <span></span>
                    Archieved Job</label>

            </ul>


        </div>

        <div class="content-wrapper ">
            <!-- ------------step--1---Tab------------- -->
            <div id="tab-1" class="tab-content active">
                <div class="row mt-5 p-lg-4 p-md-3 p-2">
                    @foreach ($jobsPosted as $job)
                        <div class="col-lg-4 col-md-4 col-12  Halvetica res">
                            <a href="{{ route('company.jodDetails', $job->id) }}">
                                <div class="p-3 mb-3" style="background: #F9F9F9;;border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                            <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png"
                                                class="w-5" alt="w8">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                            <p class="single-job-heading" style="margin: 0; padding: 0 35px;"><b>
                                                    {!! $job->title ?? '' !!}
                                                </b>
                                            </p>
                                            <p class="job-posted" style="margin: 0; padding: 0 35px;">Most Popular</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <p class="abutnexa-text pt-4 pb-3" style="height: 120px!important;overflow:hidden">
                                        {!! $job->description ?? '' !!}
                                    </p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <button class="buttonfill-apply">Apply Now</button>
                                        <a href="{{ route('company.archiveJob', $job->id) }}"><button
                                                class="buttonunfill-save">Archive</button></a>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- ------------step--2---Tab------------- -->
            <div id="tab-2" class="tab-content ">
                <div class="row justify-content-center mt-5 p-lg-4 p-md-3 p-2">
                    @foreach ($archiveJobs as $archiveJob)
                        <div class="col-lg-4 col-md-4 col-12  Halvetica res">
                            <div class="p-3" style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 35px;"><b>
                                                {!! $archiveJob->getjob->title ?? '' !!} </b>
                                        </p>
                                        <p class="job-posted" style="margin: 0; padding: 0 35px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3" style="height: 68px!important;overflow:hidden">
                                    {!! $archiveJob->getjob->description ?? '' !!}
                                </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Apply Now</button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
        // --------Tabes-----------
        $(".tab-link").click(function() {
            var tabID = $(this).attr("data-tab");

            $(this).addClass("active").siblings().removeClass("active");

            $("#tab-" + tabID)
                .addClass("active")
                .siblings()
                .removeClass("active");
        });
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
