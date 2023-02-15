@extends('userNew.singleUser.layouts.main')
@section('content')
    <style>
        .cardsimg img {
            border: 2px solid #7C2342;
            border-radius: 50%;
            width: 40px;
            height: 35px !important;
        }
    </style>
    <!----- ---------2nd--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
                            class="search-icon-index" alt="" srcset="">
                    </div>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="{{ route('individual.jobs') }}">View Jobs</a></li>
                        <li><a class="navbar-link" href="{{ route('individual.appliedJobs') }}">View Applications</a>
                        </li>
                        <li><a class="navbar-link" href="#">Saved Jobs</a></li>
                        <li><a class="navbar-link" href="#">Resume</a></li>

                    </ul>
                    <div>
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                            alt="" srcset="">
                        &nbsp;
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" class="bell"
                            alt="" srcset="">
                    </div>
                </nav>

                <div class="mobile-navbar-btns">
                    <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                    <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 job-view-crd-res-575">
                <a href="../Tagline.html">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorarrow.png" alt=""
                        srcset=""></a>
            </div>
            <br />
            <br />
            <div class="col-lg-8 col-12 job-view-crd-res-575">
                <div class="col-lg-8 col-12" style="padding: 0;">
                    <h2 class="job-headings">{!! $company->company_name ?? '' !!}</h2>
                    <p class="job-view-para-2">{!! $company->industry ?? '' !!}</p>
                </div>
                <div class="tabsrow d-flex justify-content-between">
                    <div class="allitems d-flex ">
                        <div class="icon-text">
                            <p class="job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Marketing &
                                    Advertising</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;51-200
                                    employees</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;51-200 employees
                                    Hiring</span>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- tabs of nav -->
                <div class="container-fluid p-0 mt-5">
                    <div class="tab-wrapper-job-view-2">
                        <ul class="tabs-job-view Halvetica">
                            <label class="tab-link active option_radio" data-tab="1" for="jobs">
                                <input type="radio" id="jobs" name="tag" checked />
                                <span></span>Overview</label>

                            <label class="tab-link option_radio" data-tab="2" for="sav">
                                <input type="radio" id="sav" name="tag" />
                                <span></span> Posts</label>
                            <label class="tab-link option_radio" data-tab="3" for="pe">
                                <input type="radio" id="pe" name="tag" />
                                <span></span> people</label>

                        </ul>
                        <hr class="bottom-row-job">
                    </div>

                    <div class="col-lg-12 col-12 p-0">
                        <div class="content-wrapper ">
                            <!-- ------------step--1---Tab------------- -->
                            <div id="tab-1" class="tab-content active">

                                <div>
                                    <p class="job-details">

                                        Since6; we have been driving growth for hundreds of high profile clients throughout
                                        the region, and have since expanded our business on a global scale. Through digital
                                        marketing and growth marketing strategies, we help companies realize their true
                                        potential in a frictionless and innovative environment, where Sales, Marketing &
                                        Customer Service work together to increase sales and retain customers.
                                    </p>
                                    <p class="job-details">

                                        We also know that in the world of business, no word is more important than GROWTH
                                        and standing still should never be an option. As a growth agency, we are always
                                        moving forward as the digital space continues to evolve. With this in mind, we
                                        understand and appreciate the magnitude of the digital evolution and have our finger
                                        on the pulse of all things Web3.
                                    </p>
                                    <p class="job-details">


                                        Since Web3 came onto our radar, we have invested our time and resources in studying
                                        the space and learning about the enormous opportunities that exist within this
                                        arena, and how these opportunities can benefit our clients and their business goals.
                                        We are at the forefront of Web 3.0 commercial opportunities and provide a variety of
                                        services for leading brands as they make this new-age transition. Through digital
                                        marketing, growth marketing and Web3 solutions, Nexa offers fast, sustainable and
                                        efficient growth for all our clients.
                                    </p>

                                </div>
                            </div>
                            <!-- ------------step--2---Tab------------- -->
                            <div id="tab-2" class="tab-content ">

                                <div>
                                    <p class="job-details">

                                        We have been driving growth for hundreds of high profile clients throughout the
                                        region, and have since expanded our business on a global scale. Through digital
                                        marketing and growth marketing strategies, we help companies realize their true
                                        potential in a frictionless and innovative environment, where Sales, Marketing &
                                        Customer Service work together to increase sales and retain customers.
                                    </p>
                                    <p class="job-details">

                                        We also know that in the world of business, no word is more important than GROWTH
                                        and standing still should never be an option. As a growth agency, we are always
                                        moving forward as the digital space continues to evolve. With this in mind, we
                                        understand and appreciate the magnitude of the digital evolution and have our finger
                                        on the pulse of all things Web3.
                                    </p>
                                    <p class="job-details">


                                        came onto our radar, we have invested our time and resources in studying the space
                                        and learning about the enormous opportunities that exist within this arena, and how
                                        these opportunities can benefit our clients and their business goals. We are at the
                                        forefront of Web 3.0 commercial opportunities and provide a variety of services for
                                        leading brands as they make this new-age transition. Through digital marketing,
                                        growth marketing and Web3 solutions, Nexa offers fast, sustainable and efficient
                                        growth for all our clients.
                                    </p>

                                </div>


                            </div>
                            <!-- ------------step--3---Tab------------- -->
                            <div id="tab-3" class="tab-content ">
                                <div>
                                    <p class="job-details">

                                        Since 2006; we have been driving growth for hundreds of high profile clients
                                        throughout the region, and have since expanded our business on a global scale.
                                        Through digital marketing and growth marketing strategies, we help companies realize
                                        their true potential in a frictionless and innovative environment, where Sales,
                                        Marketing & Customer Service work together to increase sales and retain customers.
                                    </p>
                                    <p class="job-details">

                                        We also know that in the world of business, no word is more important than GROWTH
                                        and standing still should never be an option. As a growth agency, we are always
                                        moving forward as the digital space continues to evolve. With this in mind, we
                                        understand and appreciate the magnitude of the digital evolution and have our finger
                                        on the pulse of all things Web3.
                                    </p>
                                    <p class="job-details">


                                        Since Web3 came onto our radar, we have invested our time and resources in studying
                                        the space and learning about the enormous opportunities that exist within this
                                        arena, and how these opportunities can benefit our clients and their business goals.
                                        We are at the forefront of Web 3.0 commercial opportunities and provide a variety of
                                        services for leading brands as they make this new-age transition. Through digital
                                        marketing, growth marketing and Web3 solutions, Nexa offers fast, sustainable and
                                        efficient growth for all our clients.
                                    </p>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="jobviewbtns mt-5 mb-4">
                </div>
            </div>
            <!-- right side of view job page -->
            <div class="col-lg-4 col-12 job-view-crd-res-575">
                <div class="row">
                    <div class="col-lg-12 col-md-12  pt-3 pb-3 res"
                        style="background-color: #F9F9F9;border-radius: 20px;">
                        <div class=" abutnexa d-flex justify-content-between">
                            <h4 class="about-nexa-heading ">About Nexa</h4>
                            <button class=" buttonunfill-save-follow
                              ">Follow</button>
                        </div>
                        <div class="mt-3 icon-text d-flex justify-content-between">
                            <p class="me-2 job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Marketing &
                                    Advertising</span>
                            </p>

                            <p class="res-p-1200">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;51-200
                                    employees</span>
                            </p>
                        </div>

                        <p class="abutnexa-text">Since 2005; we have been driving growth for hundreds of high profile
                            clients throughout the region, and have since expanded our business on a global scale. Through
                            digital marketing and growth marketing strategies, we help companies realize their true
                            potential in a frictionless and innovative environment, where Sales, Marketing & Customer
                            Service work together to increase sales and retain customers... <span class="fw-bolder"
                                style="color: #7C2342;">Learn More</span> </p>
                    </div>
                </div>
                <h4 class="pt-4 ml-0 other-job-txt">Others Jobs</h4>
                <div class="row">
                    @foreach ($otherJobs as $otherJob)
                        @foreach ($otherJob->jobs as $getjobs)
                            <a href="{{ route('individual.jodDetails', $getjobs->id) }}">
                                <div class="col-lg-12 pt-3 pb-3  res"
                                    style="background-color: #F9F9F9;border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-2 cardsimg">
                                            <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                class="w-5" alt="w8">
                                        </div>
                                        <div class="col-8">
                                            <p class="single-job-heading" style="margin: 0;padding: 0;"><b>
                                                    {{ $getjobs->title }}
                                                </b>
                                            </p>
                                            <p class="job-posted" style="margin: 0;padding: 0;">
                                                {{ \Carbon\Carbon::parse($getjobs->created_at)->diffForHumans() }}</p>
                                        </div>
                                        <div class="col-2">
                                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <p class="abutnexa-text pt-4 pb-3"> {{ $getjobs->description }}</p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <a href="{{ route('individual.apply.now', $getjobs->id) }}">
                                            <button class="buttonfill-apply">Apply Now</button>
                                        </a>
                                        <a href="{{ route('individual.saveForLater', $getjobs->id) }}">
                                            <button class="buttonunfill-save">Save for Later</button>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <script>
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
