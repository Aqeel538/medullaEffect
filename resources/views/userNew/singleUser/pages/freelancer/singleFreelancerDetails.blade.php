@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- -----1st--Navbar--------- -->

    <!----- ---------2st--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
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
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                                alt="" srcset="">
                        </a>
                        &nbsp;
                        <a class="navbar-link" href="{{ route('chatbot') }}">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" class="bell"
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




    <div class="container   mt-4">
        <div class="row crd-row-one">
            <div class="col-12  ">
                <a href="../Tagline.html">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorarrow.png" alt=""
                        srcset=""></a>
            </div>
            <br />
            <br />
            <div class="col-lg-8 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">{{ $freelancer->name }}</h2>
                    <p class="job-view-para-2">145 Reviews</p>
                </div>

                <div class="tabsrow d-flex justify-content-between">
                    <div class="allitems d-flex">
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Top Rated</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;{{ $count }}
                                    Services</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $freelancer->job_type ?? 'Job Type' !!}</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                    </div>
                    <div class="time">
                        <p class="">Online
                        </p>

                    </div>
                </div>

                <!-- tabs of nav -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="job-details">
                            {!! $service->discription ?? 'There is no description' !!}
                        </p>
                    </div>
                </div>

                <div class="jobviewbtns mt-5 mb-4">
                    <a href="{{ route('chatbot') }}">
                        <button class="buttonfill-apply pl-4 pr-4">Contact</button>
                    </a>
                    <a href="{{ route('save_service', $freelancer->id) }}">
                        <button class="buttonunfill-save">Save for Later</button>
                    </a>
                </div>
            </div>
            <!-- right side of view job page -->
            <div class="col-lg-4 col-12">
                <h4 class="mb-5 ml-0 other-job-txt">Services</h4>
                @foreach ($freelancerServices as $freelancers)
                    @foreach ($freelancers->services as $service)
                        <a href="{{ route('about.service', $service->id) }}">
                            <div class="row">
                                <div class="col-lg-12 pt-3 pb-3  " style="background-color: #F9F9F9;border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-2 cardsimg">
                                            <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                class="w-5" alt="w8">
                                        </div>
                                        <div class="col-8">
                                            <p class="single-job-heading" style="margin: 0;padding: 0;">
                                                <b>{{ $service->title }}</b>
                                            </p>
                                            <p class="job-posted" style="margin: 0;padding: 0;">Most Liked</p>
                                        </div>
                                        <div class="col-2">
                                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <p class="abutnexa-text pt-4 pb-3">
                                        {!! $service->discription ?? 'There is no description' !!}
                                    </p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <a href="">
                                            <button class="buttonfill-apply pl-4 pr-4">Contact</button>
                                        </a>
                                        <a href="{{ route('save_service', $freelancer->id) }}">
                                            <button class="buttonunfill-save">Save for Later</button>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </a>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection