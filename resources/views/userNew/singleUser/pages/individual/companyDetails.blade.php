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

    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.individual.secondNav')
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
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $company->industry ?? '' !!}</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $company->employees ?? '' !!}
                                    employees</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $company->employees_limit ?? '' !!} employees
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
                                <div class="row">
                                    @foreach ($otherJobs as $otherJob)
                                        @foreach ($otherJob->companyJobs as $job)
                                            @if ($job->user_id == $company->id)
                                                <div class="col-lg-6 col-md-6 col-12  mt-lg-0 mt-md-0 mt-3 ">
                                                    <a href="{{ route('individual.jodDetails', $job->id) }}">
                                                        {{-- <a href="{{ route('company.jodDetails', $job->id) }}"> --}}
                                                        <div class=" job-posted-radius">
                                                            <div class="cards-scroll p-3 mt-3 "
                                                                style="height: 200px!important">
                                                                <div class="row">
                                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                                        <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                                            class="w-5" alt="w8">
                                                                    </div>
                                                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                                                        <p class="single-job-heading "
                                                                            style="margin: 0; padding-left:35px;"><b>
                                                                                {!! $job->title ?? '' !!}
                                                                            </b>
                                                                        </p>
                                                                        <p class="job-posted"
                                                                            style="margin: 0; padding-left:35px;">
                                                                            {!! $job->located_in ?? '' !!} <span
                                                                                class="text-reds">({!! $job->job_type ?? '' !!})</span>
                                                                        </p>
                                                                        <p class="job-posted"
                                                                            style="margin: 0; padding: 0 35px;">
                                                                            {!! $job->work_type ?? '' !!}</p>
                                                                    </div>
                                                                    {{-- <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                                                        <i class="fas-elip fa-solid fa-ellipsis fasq"
                                                                            onclick="openmyFunction(<?= $job->id ?>)"></i>

                                                                        <div style="position: relative;">
                                                                            <div class="cliked"
                                                                                id="openmyDIV<?= $job->id ?>">
                                                                                <div class="stsuts ">

                                                                                    <a class=""
                                                                                        href="/company/job/status/1/{{ $job->id }}">Active</a>
                                                                                    <a class=""
                                                                                        href="/company/job/status/2/{{ $job->id }}">Inactive</a>
                                                                                    <a class=""
                                                                                        href="/company/job/status/3/{{ $job->id }}">Pause</a>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div> --}}
                                                                </div>
                                                                <div class="d-flex justify-content-between mb-0">
                                                                    <div class="row">
                                                                        <div class="col-lg-12 ">
                                                                            <p class="job-posted mb-0 mt-1">
                                                                                {!! $job->rate ?? '' !!}

                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <p class="job-posted mb-0 mt-1">
                                                                                {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                                                                            </p>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <p class="abutnexa-text">

                                                                                {!! $job->description ?? 'There is no short description yet...' !!} </p>

                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                {{-- <div style="height: 50px;;overflow:hidden;">
                                                                    <p class="abutnexa-text">

                                                                        {!! $job->description ?? 'There is no short description yet...' !!} </p>

                                                                </div> --}}

                                                                {{-- <a href="{{ route('individual.jodDetails', $job->id) }}"
                                                                    class="crds-read-more mt-3 mb-3">read more...</a> --}}
                                                            </div>

                                                        </div>
                                                    </a>
                                                </div>
                                            @endif
                                        @endforeach
                                    @endforeach
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

                <h4 class="pt-4 ml-0 other-job-txt">Others Jobs</h4>
                <div class="row">
                    @foreach ($otherJobs as $otherJob)
                        @foreach ($otherJob->jobs as $getjobs)
                            <a href="{{ route('individual.jodDetails', $getjobs->id) }}">
                                <div class="col-lg-12 pt-3 pb-3 mt-3 res"
                                    style="background-color: #F9F9F9;border-radius: 20px;">
                                    <div class="row ">
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
                                    <p class="abutnexa-text pt-4 pb-3"> {{ $getjobs->short_description }}</p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <?php
                                        if (isset($getjobs->applied_jobs) && !empty($getjobs->applied_jobs)) {
                                            $check = $getjobs->applied_jobs->where('applicant_id', auth()->user()->id)->first();
                                        } else {
                                            $check = null;
                                        }
                                        ?>
                                        @if (isset($check) && !empty($check))
                                            <a href="#">
                                                <button class="buttonfill-apply">Applied</button>
                                            </a>
                                        @else
                                            <a href="{{ route('individual.apply.now', $getjobs->id) }}">
                                                <button class="buttonfill-apply">Apply Now</button>
                                            </a>
                                        @endif
                                        {{-- CHECK IF JOB IS SAVED --}}
                                        <?php
                                        if (isset($getjobs->saved_jobs) && !empty($getjobs->saved_jobs)) {
                                            $check = $getjobs->saved_jobs->where('user_id', auth()->user()->id)->first();
                                        } else {
                                            $check = null;
                                        }
                                        ?>
                                        @if (isset($check) && !empty($check))
                                            <a href="#">
                                                <button class="buttonunfill-save">Saved</button>
                                            </a>
                                        @else
                                            <a href="{{ route('individual.saveForLater', $getjobs->id) }}"><button
                                                    class="buttonunfill-save">Save for Later</button></a>
                                        @endif
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
