@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorsearch.png"
                            class="search-icon-index" alt="" srcset="">
                    </div>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="{{ route('individual.jobs') }}">View Jobs</a></li>
                        <li><a class="navbar-link mylist active" href="{{ route('individual.appliedJobs') }}">View
                                Applications</a>
                        </li>
                        <li><a class="navbar-link" href="#">Saved Jobs</a></li>
                        <li><a class="navbar-link" href="#">Resume</a></li>

                    </ul>
                    <div>
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorbell.png" class="bells"
                            alt="" srcset="">
                        &nbsp;
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vector.png" class="bell"
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
    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-7 col-md-7 col-sm-9 col-12 text-center">
                <h1 class="advnc-search-heading">Applied Jobs</h1>

            </div>
        </div>
    </div>
    <!-- ---------cards-------------- -->
    <div class="container-fluid  p-lg-5 p-md-3 p-3">
        <div class="row">
            @foreach ($appliedJobs as $appliedJob)
                <div class="col-lg-4 col-md-4 col-12 mt-lg-0 mt-4 pt-0 ">
                    <a href="{{ route('individual.jodDetails', $appliedJob->job_id) }}">
                        <div class="p-3" style="background: #F9F9F9;;border-radius: 20px;">
                            <div class="row">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                    <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png"
                                        class="w-5" alt="w8" />
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                    <p class="single-job-heading" style="margin: 0; padding: 0 35px;"><b>
                                            {!! $appliedJob->getAppliedJobs->title ?? '' !!} </b>
                                    </p>
                                    <p class="job-posted" style="margin: 0; padding: 0 35px;">
                                        {{ \Carbon\Carbon::parse($appliedJob->getAppliedJobs->created_at)->diffForHumans() }}
                                    </p>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                    <i class="fas-elip fa-solid fa-ellipsis"></i>
                                </div>
                            </div>
                            <p class="abutnexa-text pt-4 pb-3"
                                style="height: 90px!important;
                            overflow: hidden;">
                                {!! $appliedJob->getAppliedJobs->description ?? '' !!}</p>

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
