@extends('user.singleUser.layouts.main')
@section('content')
    <style>
        a {
            text-decoration: none !important;
        }
    </style>
    <!----- ---------2st--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">

            <div class="header">
                <nav class="navbar">
                    <div class="container-fluid p-0">
                        <div>
                            <img src="../../../Assets/Images/landing-page-img/Vectorsearch.png" alt="" srcset="">
                        </div>
                        <ul class="navbar-list" id="myDIV">
                            <li><a class="navbar-link  mylist active" href="{{ route('businesses.list') }}">Businesses</a>
                            </li>
                            <li><a class="navbar-link" href="{{ route('freelancer.listing.frontend') }}">Freelancers</a>
                            </li>
                            <li><a class="navbar-link" href="#">Settings</a></li>

                        </ul>
                        <div>
                            <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                            <span><i class="fa-regular fa-user ms-1 start_16_respons"></i></span>
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
            <div class="col-lg-5 col-md-7 col-sm-9 col-12 text-center Halvetica">
                <h1 class="headings-profile">Businesses</h1>
                <p class="mt-4 john-para-afer-ques-heading mb-4">
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
                <div class="p-1 col-lg-10 col-md-12 row-bg-color">
                    <div class="row industry-dropdown-input">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="inpus-industry">&nbsp;
                                <i class="fa-solid fa-briefcase text-dark start_16_respons"></i>
                                &nbsp; Industry
                                <div class="pos">
                                    <input list="browsers" name="myBrowser" class="widths" />
                                </div>

                                <datalist id="browsers">
                                    <option value="Chrome"></option>
                                    <option value="Firefox"></option>
                                    <option value="Internet Explorer"></option>
                                    <option value="Opera"></option>
                                    <option value="Safari"></option>
                                    <option value="Microsoft Edge"></option>
                                </datalist>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="inpus-industry-2">
                                <i class="fa-solid fa-location-dot text-dark"></i> &nbsp;Location &nbsp;
                                <div class="pos">
                                    <input type="search" class="width" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 respn-btn">
                            <button type="button" class="buttonfill text-center">
                                Search
                            </button>
                            <button type="button" class="non">Filter</button>

                        </div>
                    </div>
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
        <!-- ------------row--1---Tab------------- -->
        <div class="row text-center ps-lg-5 pe-lg-5 pl-md-5 pr-md-5 crd-row-one">
            @foreach ($companies as $company)
                <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4">
                    <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5 single-crd-row">
                        <div class="img-holder">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                                srcset="" />
                        </div>
                        <div class="text-center">
                            <h3 class="bus-heading mt-3 mb-3">{!! $company->company_name ?? '' !!}</h3>
                            <p class="john-para-afer-ques-heading">{!! $company->website ?? '' !!}</p>
                        </div>
                        <a href="{{ route('business.details', $company->id) }}" class="buttonfill mt-4 mb-4">Contact</a>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4">
                <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                            srcset="" />
                    </div>

                    <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
                    <p class="john-para-afer-ques-heading">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium loru.
                    </p>

                    <a href="{{ route('business.details', $company->id) }}" class="buttonfill mt-4 mb-4">Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4">
                <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                            srcset="" />
                    </div>

                    <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
                    <p class="john-para-afer-ques-heading">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium loru.
                    </p>

                    <a href="{{ route('business.details', $company->id) }}" class="buttonfill mt-4 mb-4">Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4">
                <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                            srcset="" />
                    </div>

                    <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
                    <p class="john-para-afer-ques-heading">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium loru.
                    </p>

                    <a href="{{ route('business.details', $company->id) }}" class="buttonfill mt-4 mb-4">Contact</a>
                </div>
            </div>
        </div>
        <!-- ------------row 2---Tab------------- -->
        <div class="row text-center ps-lg-5 pe-lg-5 pl-md-5 pr-md-5 crd-row-one">
            <div class="col-lg-3 col-md-6 col-12 mt-lg-3 mt-md-3 mt-4">
                <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5 single-crd-row">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                            srcset="" />
                    </div>
                    <div class="text-center">
                        <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
                        <p class="john-para-afer-ques-heading">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium loru.
                        </p>
                    </div>

                    <a href="{{ route('business.details', $company->id) }}" class="buttonfill mt-4 mb-4">Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-lg-3 mt-md-3 mt-4">
                <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                            srcset="" />
                    </div>

                    <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
                    <p class="john-para-afer-ques-heading">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium loru.
                    </p>

                    <a href="{{ route('business.details', $company->id) }}" class="buttonfill mt-4 mb-4">Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-lg-3 mt-md-3 mt-4">
                <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                            srcset="" />
                    </div>

                    <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
                    <p class="john-para-afer-ques-heading">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium loru.
                    </p>

                    <a href="{{ route('business.details', $company->id) }}" class="buttonfill mt-4 mb-4">Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12 mt-lg-3 mt-md-3 mt-4">
                <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                            srcset="" />
                    </div>

                    <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
                    <p class="john-para-afer-ques-heading">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium loru.
                    </p>

                    <a href="{{ route('business.details', $company->id) }}" class="buttonfill mt-4 mb-4">Contact</a>
                </div>
            </div>
        </div>
    </div>
@endsection
