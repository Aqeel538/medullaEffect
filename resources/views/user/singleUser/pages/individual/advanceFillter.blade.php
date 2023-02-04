@extends('user.singleUser.layouts.main')
@section('content')
    <div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
        <header>

            <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div>
                        <span><i class="ri-search-line start_16_respons"></i></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list Halvetica " id="myDIV">
                            <li><a href="{{ route('advance.fillter') }}" class="mylist active">View Jobs</a></li>
                            <li><a href="{{ route('individual.appliedJobs') }}" class="mylist">View Applications</a></li>
                            <li><a href="#" class="mylist">Resume</a></li>
                        </ul>

                    </div>
                    <div>
                        <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                        <span><i class="fa-regular fa-user ms-1 start_16_respons"></i></span>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9 col-12 text-center">
                <h1 class="advnc-search-heading mt-5">Advanced Search Filters</h1>
                <p class="mt-4 mb-5 john-para-afer-ques-heading">
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
                            <div class="location-row">
                                <i class="fa-solid fa-location-dot"></i>&nbsp;
                                <input class="" type="text" name="searchLocation" placeholder="Location" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
                                <img src="../Assets/Images/profile-imges/exp-level.png" alt="" srcset="">
                                <select name="experience" required style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Experience Level
                                    </option>
                                    <option value="Fresher">Fresher</option>
                                    <option value="Begginer">Begginer</option>
                                    <option value="Professional">Professional</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield">
                                <i class="fa-solid fa-user-tie"></i>
                                <select name="job_type" required style="width: 100%">
                                    <option value="" disabled selected hidden>Job Type</option>
                                    <option value="Remote">Remote</option>
                                    <option value="OnSite">OnSite</option>
                                    <option value="Hybrid">Hybrid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
                                <i class="fa-solid fa-industry"></i>
                                <select name="industry" required style="width: 100%">
                                    <option value="" disabled selected hidden>Industry</option>
                                    <option value="IT">IT</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
                                <img src="../Assets/Images/profile-imges/calendar-icon.png" alt="" srcset="">
                                <select name="created_at" required style="width: 100%">
                                    <option value="" disabled selected hidden>Date Posted</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield">
                                <i class="fa-solid fa-sack-dollar"></i>
                                <select name="pay_range" required style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Salary Range
                                    </option>
                                    <option value="20-30">20k-30k</option>
                                    <option value="30-40">30k-40k</option>
                                    <option value="50-1000">50k-1000k</option>
                                    <option value="10000-20000">10000k-20000k</option>
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
    <div class="container-fluid  p-lg-5 p-md-3 p-3">
        <div class="row">
            @foreach ($allJobs as $allJob)
                @foreach ($allJob->jobs as $getjobs)
                    <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-4 pt-0 ">
                        <div class="p-3 mb-3" style="background: #F9F9F9;;border-radius: 20px;">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                    <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png"
                                        class="w-5" alt="w8" />
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
                            <p class="abutnexa-text pt-4 pb-3"> {!! $getjobs->description ?? '' !!}</p>
                            <div class="jobviewbtns mt-1 mb-1">
                                <a href="{{ route('individual.apply.now', $getjobs->id) }}"><button
                                        class="buttonfill-apply">Apply Now</button></a>
                            </div>
                        </div>
                    </div>
                @endforeach
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
