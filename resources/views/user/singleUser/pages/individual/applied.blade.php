@extends('user.singleUser.layouts.main')
@section('content')
    <div class="container-fluid second-nav">
        <div class="container">

            <div class="header">
                <nav class="navbar">
                    <div class="container-fluid p-0">
                        <div>
                            <img src="../../../Assets/Images/landing-page-img/Vectorsearch.png" alt="" srcset="">
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

            <div class="col-lg-7 col-md-7 col-sm-9 col-12 text-center Halvetica">
                <h1>Applied Jobs</h1>

            </div>
        </div>
    </div>
    <!-- ---------cards-------------- -->
    <div class="container-fluid">
        <div class="row justify-content-center mt-2 p-lg-4 p-md-3 p-2">
            @foreach ($appliedJobs as $appliedJob)
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">
                    <a href="{{ route('individual.jodDetails', $appliedJob->job_id) }}">
                        <div class="inner_tag">
                            <div class="d-flex">
                                <div>
                                    <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                                </div>
                                <div class="me-auto ms-2">
                                    <h5 class="posted-tag">{!! $appliedJob->getAppliedJobs->title ?? '' !!}</h5>
                                    <p class="posted_phara">
                                        {{ \Carbon\Carbon::parse($appliedJob->getAppliedJobs->created_at)->diffForHumans() }}
                                    </p>

                                </div>
                                <div>
                                    <i class="fa-solid fa-ellipsis start_16_respons"></i>

                                </div>

                            </div>
                            <p class="posted_phara">{!! $appliedJob->getAppliedJobs->description ?? '' !!}</p>

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
