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
                            <li><a class="navbar-link" href="{{ route('businesses.list') }}">Businesses</a></li>
                            <li><a class="navbar-link  mylist active"
                                    href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
                            <li><a class="navbar-link" href="#">Settings</a></li>
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
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 arrow ">
                <a href="../Tagline.html">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
            <br />
            <br />
            <div class="col-lg-12 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">{{ $aboutService->title }}</h2>
                    <p class="job-view-para-2">{{ $aboutService->Categories->category }}</p>
                </div>
                <div class="col-lg-8 col-12 ps-0">
                    <div class="tabsrow d-flex justify-content-between">
                        <div class="allitems d-flex">
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase"
                                            aria-hidden="true"></i>&nbsp;${!! $aboutService->rate ?? '' !!}</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Top Rated
                                        Service</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;145
                                        Reviews</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tabs of nav -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="job-details">
                            {!! $aboutService->discription ?? 'There is no detail provided!' !!}
                        </p>
                    </div>
                </div>
                <div class="jobviewbtns mt-5 mb-4">
                    <a href="{{ route('edit.service', $aboutService->id) }}"><button class="buttonfill-apply">Edit
                            Service</button></a>
                    @if ($aboutService->status == 1)
                        <a href="{{ route('pouse.service', $aboutService->id) }}"><button class="buttonunfill-save">Pause
                                for now</button></a>
                    @else
                        <a href="{{ route('pouse.service', $aboutService->id) }}"><button
                                class="buttonunfill-save">Enable</button></a>
                    @endif
                </div>
            </div>
            <!-- right side of view job page -->
        </div>
    </div>
@endsection
