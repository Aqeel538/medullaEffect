@extends('user.singleUser.layouts.main')
@section('content')
    <style>
        .contect {
            text-decoration: none !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }
    </style>
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

    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9 col-12 text-center Halvetica">
                <h1 class="headings-profile mt-5">Freelancers</h1>
                <p class="mt-4 john-para-afer-ques-heading mb-5">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                    quae ab illo inventore veritatis.
                </p>
            </div>
        </div>
    </div>
    <!-- -------------3rd---Navbar---------- -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="p-1 col-lg-8 offset-2 col-md-12 row-bg-color">
                    <form action="{{ route('freelancer.search') }}" method="GET">
                        @csrf
                        <div class="row industry-dropdown-input">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="inpus-industry">&nbsp;
                                    <i class="fa-solid fa-briefcase text-dark start_16_respons"></i>
                                    &nbsp; Industry
                                    <div class="pos">
                                        <input list="browsers" name="industry" class="widths" />
                                    </div>

                                    <datalist id="browsers">
                                        @foreach ($industryOption->unique('industry') as $freelancer)
                                            <option value="{{ $freelancer->industry }}"></option>
                                        @endforeach
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-12">
                                <div class="inpus-industry-2">
                                    <i class="fa-solid fa-location-dot text-dark"></i> &nbsp;Location &nbsp;
                                    <div class="pos">
                                        <input type="search" class="width" name="searchLocation" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 respn-btn">
                                <button type="submit" class="buttonfill text-center">
                                    Search
                                </button>
                                <button type="button" class="non">Filter</button>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 col-md-12 filter-buton-thrd-nav ">
                    <button type="button" class="non2 buttonunfill">
                        Filter
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- -----------Tabs------------- -->
    <div class="container-fluid mt-5 p-lg-5 p-md-4 p-sm-3 p-1">
        <div class="container">
            <!-- ------------row--1---Tab------------- -->
            <div class="row text-center">
                @foreach ($freelancers as $freelancer)
                    <div class="col-lg-3 col-md-6 col-12 col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3   mt-4">
                        <a href="{{ route('freelancer.details', $freelancer->id) }}">
                            <div style="background-color: #F9F9F9; border-radius: 21.0305px;" class="">
                                <div class="freelancer-page pt-3">
                                    <div class="img-holder-frelancer pt-4">

                                        <?php $image = isset($freelancer->image) && !empty($freelancer->image) ? $freelancer->image : ''; ?>

                                        <img src="<?= $image ?>" style="height: 75px;" alt="" srcset="" />
                                    </div>
                                </div>
                                <div class="p-3">
                                    <h3 class="bus-heading mt-5 mb-3">{!! $freelancer->name ?? '' !!}</h3>

                                    <h6 class="location-heading">Located in: <span
                                            class="place">{!! $freelancer->located_in ?? '' !!}</span>
                                    </h6>
                                    <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>
                                    <a href="{{ route('show_chat', $freelancer->id) }}">
                                        <button class="buttonfill mt-4 mb-4">
                                            Contact
                                        </button>
                                    </a>

                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach

                {{-- OLD CARDS --}}
                {{-- @foreach ($freelancers as $freelancer)
                    <div class="col-lg-3 col-md-3 col-6 mt-5">
                        <div style="background-color: #F9F9F9 ; border-radius: 21.0305px;" class="pt-4 pb-2 ps-2 pe-2">
                            <div class="img-holder">
                                <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" alt=""
                                    srcset="" />
                            </div>

                            <h3 class="bus-heading mt-3 mb-3">{!! $freelancer->name ?? '' !!}</h3>
                            <p class="john-para-afer-ques-heading mb-5" style="height:120px">
                                {!! $freelancer->company_name ?? '' !!}
                            </p>

                            <a href="{{ route('freelancer.details', $freelancer->id) }}"
                                class="buttonfill mt-4 mb-4">Contact</a>
                        </div>
                    </div>
                @endforeach --}}

            </div>
            <!-- ------------step--2---Tab------------- -->
        </div>
    </div>
@endsection
