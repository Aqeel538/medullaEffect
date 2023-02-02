@extends('user.singleUser.layouts.main')
@section('content')
    <div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
        <header>
            <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
                <div class="container-fluid p-0">
                    <div>
                        <span><i class="ri-search-line start_16_respons"></i></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <ul class="navbar-list" id="myDIV">
                        <li><a class="navbar-link" href="{{ route('businesses.list') }}">Businesses</a></li>
                        <li><a class="navbar-link" href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
                        <li><a class="navbar-link" href="#">Settings</a></li>

                    </ul>
                    <div>
                        <a class="navbar-link mylist active" href="{{ route('see.notifications') }}">
                            <i class="fa-regular fa-bell start_16_respons"></i>
                        </a>
                        <span>
                            <a class="navbar-link" href="{{ route('chatbot') }}">
                                <i class="fa-regular fa-user ms-1 start_16_respons"></i>
                            </a>
                        </span>
                    </div>

                </div>
            </nav>
        </header>
    </div>
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <div class="container-fluid tagline-1">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 col-sm-9 col-12 text-center Halvetica">
                    <h1 class="headings-profile mt-5">Notifications</h1>
                    <p class="ps-4 mt-4 john-para-afer-ques-heading mb-4">
                        Loremis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                        ipsa qua.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">

            <div class="col-lg-7 ps-4 pe-4 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12">
                <div class="pr-2 pl-2">

                    <!-- cards -->
                    <div class="pt-3 pb-5">
                        <div class="row">
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 cardsimg">
                                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-6">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b> Lorem Ipsum
                                            </b></p>
                                        <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                    voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed
                                    ut perspiciatis unde omnis ie natnatusus error... </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Dismiss</button>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 cardsimg">
                                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-6">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b> Lorem Ipsum
                                            </b></p>
                                        <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                    voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed
                                    ut perspiciatis unde omnis ie natnatusus error... </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Dismiss</button>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 cardsimg">
                                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-6">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b> Lorem Ipsum
                                            </b></p>
                                        <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                    voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed
                                    ut perspiciatis unde omnis ie natnatusus error... </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Dismiss</button>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-2 cardsimg">
                                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-6">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b> Lorem Ipsum
                                            </b></p>
                                        <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                    voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed
                                    ut perspiciatis unde omnis ie natnatusus error... </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Dismiss</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
