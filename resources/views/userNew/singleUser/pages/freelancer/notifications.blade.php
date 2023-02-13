@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- -----1st--Navbar--------- -->

    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorsearch.png"
                            class="search-icon-index" alt="" srcset="">
                    </div>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="{{ route('businesses.list') }}">Businesses</a></li>
                        <li><a class="navbar-link  mylist active"
                                href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
                        <li><a class="navbar-link" href="#">Settings</a></li>

                    </ul>
                    <div>
                        <a class="navbar-link" href="{{ route('see.notifications') }}">
                            <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorbell.png" class="bells"
                                alt="" srcset="">
                        </a>
                        &nbsp;
                        <a class="navbar-link" href="">
                            <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vector.png" class="bell"
                                alt="" srcset="">
                        </a>
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
    <div class="container mb-5 mt-5">
        <div class="container-fluid tagline-1">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 col-sm-9 col-12 text-center Halvetica">
                    <h1 class="headings-profile mt-5">Notisfication</h1>
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
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 " style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="../Assets/Images/profile-imges/jobview-img.png" class="w-5"
                                            alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
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
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3" style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="../Assets/Images/profile-imges/jobview-img.png" class="w-5"
                                            alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
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
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3" style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="../Assets/Images/profile-imges/jobview-img.png" class="w-5"
                                            alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
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
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 " style="background: #F9F9F9;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="../Assets/Images/profile-imges/jobview-img.png" class="w-5"
                                            alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
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
    <!-- scrpt -->
@endsection
