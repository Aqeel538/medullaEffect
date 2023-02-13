@extends('user.singleUser.layouts.main')
@section('content')
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
                                <img src="../Assets/Images/profile-imges/Vectorbag.png" alt="icon" />
                                <div class="">
                                    <input list="browsers" name="industry" class="widths" placeholder="Industry" />
                                </div>

                                <datalist id="browsers">
                                    @foreach ($industryOption->unique('industry') as $freelancer)
                                        <option value="{{ $freelancer->industry }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="inpus-industry-2">
                                <img src="../Assets/Images/profile-imges/loction.png" alt="" srcset="" />

                                <div class="pos">
                                    <input type="text" class="width" name="searchLocation" placeholder="Location" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 btns_main  text-end respn-btn">
                            <button type="submit" class=" buttonfill text-center">
                                Search
                            </button>
                            <button type="button" class="non">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1 col-md-12 filter-buton-thrd-nav justify-content-center">
                <a href="{{ route('individual.advanceSearchFilter') }}"><button type="button"
                        class="display-btn">Filter</button></a>
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
                <div class="row justify-content-center mt-5 p-lg-4 p-md-3 p-2">
                    @foreach ($allJobs as $allJob)
                        @foreach ($allJob->jobs as $getjobs)
                            <div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
                                <a href="{{ route('individual.jodDetails', $getjobs->id) }}">
                                    <div class="p-3 mb-3" style="background: #f9f9f9; border-radius: 20px">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png"
                                                    class="w-5" alt="w8" />
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                                <p class="single-job-heading" style="margin: 0; padding: 0 35px">
                                                    <b>{!! $getjobs->title ?? '' !!} </b>
                                                </p>
                                                <p class="job-posted" style="margin: 0; padding: 0 35px">
                                                    Most Popular
                                                </p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3">
                                            {!! $getjobs->description ?? '' !!}
                                        </p>
                                        <div class="jobviewbtns mt-1 mb-1">
                                            <a href="{{ route('individual.apply.now', $getjobs->id) }}"><button
                                                    class="buttonfill-apply">Apply Now</button></a>
                                            <a href="{{ route('individual.saveForLater', $getjobs->id) }}"><button
                                                    class="buttonunfill-save">Save for Later</button></a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            {{-- Tab-2 --}}
            <div id="tab-2" class="tab-content">
                <div class="row justify-content-center mt-5 p-lg-4 p-md-3 p-2">
                    @foreach ($savedJobs as $jobs)
                        <div class="col-lg-4 col-md-4 col-12 Halvetica ">
                            <a href="{{ route('individual.jodDetails', $jobs->savedJobs->id) }}">
                                <div class="p-3 mb-3" style="background: #f9f9f9; border-radius: 20px">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                            <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png"
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
                                    <p class="abutnexa-text pt-4 pb-3" style="height: 80px;overflow:hidden">
                                        {!! $jobs->savedJobs->description ?? '' !!}
                                    </p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <a href="{{ route('individual.apply.now', $jobs->id) }}"><button
                                                class="buttonfill-apply">Apply Now</button></a>
                                    </div>
                                </div>
                            </a>
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
