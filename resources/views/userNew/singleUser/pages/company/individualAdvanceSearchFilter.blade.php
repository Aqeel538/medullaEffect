@extends('userNew.singleUser.layouts.main')
@section('content')
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

                        <li><a class="navbar-link" href="{{ route('company.dashboard') }}">Dashboard</a>
                        </li>
                        <li><a class="navbar-link" href="{{ route('company.jobs') }}">Jobs</a></li>
                        <li><a class="navbar-link" href="{{ route('company.allApplicants') }}">Applicants</a></li>
                        <li><a class="navbar-link mylist active" href="{{ route('company.individual') }}">Individuals</a>
                        </li>
                        <li><a class="navbar-link " href="{{ route('company.freelancer') }}">Freelancers</a>
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
    <!-- --------------3rd nav ----------------- -->
    <form id="filter" action="{{ route('company.individual.advanceSearch') }}" method="GET">
        @csrf

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-8 col-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield">
                                <i class="fa-solid fa-location-dot"></i>
                                <select name="searchLocation" required style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Location
                                    </option>
                                    <option>USA</option>
                                    <option>UAE</option>
                                    <option>Paris</option>
                                    <option>Landon</option>
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
                                <img src="{{ asset('user') }}assets/images/profile-imges/exp-level.png" alt=""
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
                            <div class="inputfield">
                                <i class="fa-solid fa-user-tie"></i>
                                <select name="job_type" required style="width: 100%">
                                    <option value="" disabled selected hidden>Job Type</option>
                                    <option>Remote</option>
                                    <option>OnSite</option>
                                    <option>Hybrid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3 mt-md-0 mt-2">
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
                                <i class="fa-solid fa-industry"></i>
                                <select name="industry" required style="width: 100%">
                                    <option value="" disabled selected hidden>Industry</option>
                                    <option>IT</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
                                <img src="../assets/images/profile-imges/calendar-icon.png" alt="" srcset="">
                                <input class="w-100" type="date" value="{{ old('created_at') }}" name="created_at"
                                    placeholder="created_at" />

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield">
                                <i class="fa-solid fa-sack-dollar"></i>
                                <select name="pay_range" required style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Salary Range
                                    </option>
                                    <option>50-100</option>
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
        <!-- ------------row--1---Tab------------- -->
        <div class="row text-center ">
            @foreach ($individuals as $individual)
                <div class="col-lg-3 col-md-3 col-12 crd-row-one mt-5">
                    <a href="{{ route('freelancer.details', $individual->id) }}"
                        style=" text-decoration: none !important;color: #141313;">
                        <div style="background-color: #F9F9F9 ; border-radius: 21.0305px;" class="pt-4 pb-2 ps-2 pe-2">
                            <div class="img-holder">
                                <?php $image = isset($individual->image) && !empty($individual->image) ? $individual->image : ''; ?>

                                <img src="<?= $image ?>" style="height: 75px;" alt="" srcset="" />
                            </div>

                            <h3 class="bus-heading mt-3 mb-3" style="height:
                            70px!important">
                                {!! $individual->name ?? '' !!}</h3>
                            <h6 class="location-heading">Located in: <span class="place">{!! $individual->located_in ?? '' !!}</span>
                            </h6>
                            <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>

                            <a href="{{ route('company.show.chat', $individual->id) }}">
                                <button class="buttonfill mt-4 mb-4">
                                    Contact
                                </button>
                            </a>


                        </div>
                    </a>
                </div>
            @endforeach
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
