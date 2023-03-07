@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->

    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.individual.secondNav')
    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9 col-12 text-center">
                <h1 class="advnc-search-heading mt-5">Advanced Search Filters</h1>
                <p class="mt-4 mb-5 john-para-afer-ques-heading-filter">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                    quae ab illo inventore veritatis.
                </p>
            </div>
        </div>
    </div>
    <!-- --------------3rd nav INPUT--FIELD----------------- -->
    <form id="filter" action="{{ route('individual.jobs.advanceSearch') }}" method="GET">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-8 col-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                        <div class="inputfield-2">
                                <i class="fa-solid fa-location-dot"></i>
                                <select name="searchLocation" style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Location
                                    </option>
                                    <option>Rahim yar khan</option>
                                    <option>USA</option>
                                    <option>UAE</option>
                                    <option>Paris</option>
                                    <option>Landon</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield-2">
                                <img src="{{ asset('user') }}/assets/images/profile-imges/exp-level.png" alt=""
                                    srcset="">
                                <select name="experience" required style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Experience Level
                                    </option>
                                    <option>Fresher</option>
                                    <option>Begginer</option>
                                    <option>Professional</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield-2">
                                <i class="fa-solid fa-user-tie"></i>
                                <select name="job_type" required style="width: 100%">
                                    <option value="" disabled selected hidden>Job Type</option>
                                    <option>Remote</option>
                                    <option>OnSite</option>
                                    <option>Hybrid</option>
                                    <option value="No-preference">No-preference</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield-2">
                                <i class="fa-solid fa-industry"></i>
                                <select name="industry" required style="width: 100%">
                                    <option value="" disabled selected hidden>Industry</option>
                                    <option>IT</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield-2">
                                <img src="{{ asset('user') }}/assets/images/profile-imges/calendar-icon.png" alt=""
                                    srcset="">
                                <input class="w-100" type="date" name="created_at" placeholder="created_at" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield-2">
                                <i class="fa-solid fa-sack-dollar"></i>
                                <select name="pay_range" required style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Salary Range
                                    </option>
                                    <option>50k-1000k</option>
                                    <option>10000k-2000k</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------button------------- -->
        <div class="container-fluid text-center mt-5 mb-5">
            <button type="submit" class="buttonfilled">Save</button>

            <button type="button" class="buttonunfill-clear" value="Clear"
                onclick="document.getElementById('filter').reset();">Clear all</button>
        </div>
    </form>
    <!-- ---------cards-------------- -->
    <div class="container-fluid mt-5 p-lg-3 p-md-3 p-sm-1 p-1">
        <div class="row">
            @foreach ($allJobs as $getjobs)
                {{-- @foreach ($allJob->jobs as $getjobs) --}}
                <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-4 pt-0 ">
                    <div class="p-3 mb-3" style="background: #F9F9F9;;border-radius: 20px;">
                        <div class="row">
                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png" class="w-5"
                                    alt="w8" />
                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                <p class="single-job-heading" style="margin: 0; padding: 0 35px;">
                                    <b>{!! $getjobs->title ?? '' !!} </b>
                                </p>
                                <p class="job-posted" style="margin: 0; padding: 0 35px;">Most Popular</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                            </div>
                        </div>
                        <p class="abutnexa-text pt-4 pb-3"
                            style="height: 90px!important;
                        overflow: hidden;">
                            {!! $getjobs->description ?? '' !!}</p>
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
                </div>
                {{-- @endforeach --}}
            @endforeach
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
