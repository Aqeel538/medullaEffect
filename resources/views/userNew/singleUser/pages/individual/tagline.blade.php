@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- -----1st--Navbar--------- -->

    <!----- ---------2nd--Navbar------------- -->

    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.individual.secondNav')
    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9 col-10 text-center">
                <h1 class="advnc-search-heading mt-5">
                    This is going to be the tagline
                </h1>
                <p class="mt-4 mb-4 phara_16">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                    quae ab illo inventore veritatis.
                </p>
            </div>
        </div>
    </div>
    <!-- -------------3rd---Navbar---------- -->
    <div class="container-fluid">
        <!-- <div class="container"> -->
        <div class="row justify-content-center filter-trd-nav-row">
            <div class="col-lg-9 col-md-12 row-bg-color">
                <form action="{{ route('individual.jobs.search') }}" method="GET">
                    @csrf
                    <div class="row industry-dropdown-input">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="inpus-industry">&nbsp;
                                <i class="fa-solid fa-industry"></i>
                                <div class="">
                                    <input list="browsers" name="industry" class="widths" placeholder="Industry" />
                                </div>

                                <datalist id="browsers">
                                    @foreach ($industryOption->unique('industry') as $freelancer)
                                        <option value="{{ $freelancer->users->industry }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="inpus-industry-2">
                                <i class="fa-solid fa-location-dot"></i>

                                <div class="pos">
                                    <input type="search" name="searchLocation" class="width" placeholder="Location" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 btns_main  text-end respn-btn">
                            <button type="submit" class=" buttonfill text-center">
                                Search
                            </button>
                            <a href="{{ route('individual.advanceSearchFilter') }}">
                                <button type="button" class="non">Filter</button>
                            </a>
           
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1 col-md-12 filter-buton-thrd-nav justify-content-center">
                <a href="{{ route('individual.advanceSearchFilter') }}">
                    <button type="button" class="display-btn">Filter</button>
                </a>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- -----------Tabs------------- -->
    <div class="container-fluid mt-5 p-lg-4 p-md-4 p-sm-3 p-1">
        <div class="tab-wrapper">
            <ul class="tabs Halvetica">
                <label class="tab-link active option_radio" data-tab="1" for="jobs">
                    <input type="radio" id="jobs" name="tag" checked />
                    <span></span> Recent Jobs</label>

                <label class="tab-link option_radio" data-tab="2" for="sav">
                    <input type="radio" id="sav" name="tag" />
                    <span></span> Saved</label>
            </ul>
        </div>

        <div class="content-wrapper">
            <!-- ------------step--1---Tab------------- -->
            <div id="tab-1" class="tab-content active">
                <div class="row mt-5 p-lg-4 p-md-3 p-2">
                    {{-- @if ($matchSearch == 1)
                        <p>{{ $message }}</p>
                    @else --}}
                    @foreach ($allJobs as $getjobs)
                        {{-- @foreach ($allJob->jobs as $getjobs) --}}
                        <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                            <a href="{{ route('individual.jodDetails', $getjobs->id) }}">
                                <div class="p-3 mb-3" style="background: #f9f9f9; border-radius: 20px">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                            <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                class="w-5" alt="w8" />
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                            <p class="single-job-heading" style="margin: 0; padding: 0 35px">
                                                <b> {!! $getjobs->title ?? '' !!}</b>
                                            </p>
                                            <p class="job-posted" style="margin: 0; padding: 0 35px">
                                                Most Popular
                                            </p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <p class="abutnexa-text pt-4 pb-3"
                                        style="height: 70px!important;
                                        overflow: hidden;">
                                        {!! $getjobs->short_description ?? '' !!}
                                    </p>
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
                                        {{-- <a href="{{ route('individual.saveForLater', $getjobs->id) }}"><button
                                                class="buttonunfill-save">Save for Later</button></a> --}}
                                    </div>
                                </div>
                            </a>
                        </div>
                        {{-- @endforeach --}}
                    @endforeach
                    {{-- @endif --}}
                </div>
            </div>
            <!-- ------------step--2---Tab------------- -->
            <div id="tab-2" class="tab-content">
                <div class="row mt-5 p-lg-4 p-md-3 p-2">
                    @foreach ($savedJobs as $jobs)
                        <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                            <a href="{{ route('individual.jodDetails', $jobs->savedJobs->id) }}">
                                <div class="p-3 mt-3" style="background: #f9f9f9; border-radius: 20px">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                            <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                class="w-5" alt="w8" />
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                            <p class="single-job-heading" style="margin: 0; padding: 0 35px">
                                                <b>{!! $jobs->savedJobs->title ?? '' !!}</b>
                                            </p>
                                            <p class="job-posted" style="margin: 0; padding: 0 35px">
                                                Most Popular
                                            </p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <p class="abutnexa-text pt-4 pb-3"
                                        style="height: 70px!important;
                                        overflow: hidden;">
                                        {!! $jobs->savedJobs->short_description ?? '' !!}
                                    </p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <?php
                                        if (isset($getjobs->applied_jobs) && !empty($getjobs->applied_jobs)) {
                                            $check = $getjobs->applied_jobs
                                                ->where('applicant_id', auth()->user()->id)
                                                ->where('job_id', auth()->user()->id)
                                                ->first();
                                        } else {
                                            $check = null;
                                        }
                                        ?>
                                        @if (isset($check) && !empty($check))
                                            <a href="#">
                                                <button class="buttonfill-apply">Applied</button>
                                            </a>
                                        @else
                                            <a href="{{ route('individual.apply.now', $jobs->savedJobs->id) }}">
                                                <button class="buttonfill-apply">Apply Now</button>
                                            </a>
                                        @endif
                                    </div>
                                </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>

    <!-- -------------javascript--inner-link------------- -->
    <!-- ---------TABS--------- -->
    <script>
        // --------Tabes-----------
        $('.tab-link').click(function() {

            var tabID = $(this).attr('data-tab');

            $(this).addClass('active').siblings().removeClass('active');

            $('#tab-' + tabID).addClass('active').siblings().removeClass('active');
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
