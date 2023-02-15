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
                        <li><a class="navbar-link" href="{{ route('company.freelancer') }}">Freelancers</a>
                        </li>
                        <li><a class="navbar-link" href="#">Settings</a></li>

                    </ul>
                    <div>
                        <a class="navbar-link" href="{{ route('see.notifications') }}">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                                alt="" srcset="">
                        </a>
                        &nbsp;
                        <a class="navbar-link" href="{{ route('company.jobPost') }}">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" class="bell"
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

        <div class="content-wrapper crd-row-one">
            <!-- ------------step--1---Tab------------- -->
            <div id="tab-1" class="tab-content active">
                <div class="row justify-content-center mt-5 mb-3">
                    @foreach ($jobsPosted as $job)
                        <div class="col-lg-4 col-md-4 col-12  mt-lg-0 mt-md-0 mt-3 ">
                            <a href="{{ route('company.jodDetails', $job->id) }}">
                                <div class="p-3" style="background: #F4F4F4;border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                            <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
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
                                    <p class="abutnexa-text pt-4 pb-3"> {!! $job->description ?? '' !!}</p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <button class="buttonfill-apply">Apply Now</button>
                                        <a href="{{ route('company.archiveJob', $job->id) }}">
                                            <button class="buttonunfill-creates">Archive Job</button>
                                        </a>

                                    </div>
                                </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <!-- ------------step--2---Tab------------- -->
            <div id="tab-2" class="tab-content ">
                <div class="row justify-content-center mt-5 mb-3">
                    @foreach ($archiveJobs as $archiveJob)
                        <div class="col-lg-4 col-md-4 col-12  mt-lg-0 mt-md-0 mt-3 ">
                            <div class="p-3" style="background: #F4F4F4;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 35px;"><b>
                                                {!! $archiveJob->getjob->title ?? '' !!}
                                            </b>
                                        </p>
                                        <p class="job-posted" style="margin: 0; padding: 0 35px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3"> {!! $archiveJob->getjob->description ?? '' !!}</p>
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
