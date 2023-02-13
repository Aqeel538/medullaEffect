@extends('userNew.singleUser.layouts.main')
@section('content')
    <style>
        a {
            text-decoration: none !important;
        }
    </style>
    <!-- -----1st--Navbar--------- -->
    <!-- 2nd nav -->

    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorsearch.png"
                            class="search-icon-index" alt="" srcset="">
                    </div>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link mylist active" href="{{ route('businesses.list') }}">Businesses</a></li>
                        <li><a class="navbar-link  " href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
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


    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-8 col-9 text-center Halvetica">
                <h1 class="headings-profile mt-5">Businesses</h1>
                <p class="mt-4  john-para-afer-ques-heading mb-5">
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
                <div class="row industry-dropdown-input">
                    <div class="col-lg-5 col-md-4 col-12">
                        <div class="inpus-industry">&nbsp;
                            <img src="../Assets/Images/profile-imges/Vectorbag.png" alt="icon" />
                            <div class="">
                                <input list="browsers" name="myBrowser" class="widths" placeholder="Industry" />
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
                    <div class="col-lg-5 col-md-4 col-12">
                        <div class="inpus-industry-2">
                            <img src="{{ asset('user') }}/Assets/Images/profile-imges/loction.png" alt=""
                                srcset="" />

                            <div class="pos">
                                <input type="search" class="width" placeholder="Location" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 btns_main  text-end respn-btn">
                        <button type="button" class=" buttonfill text-center">
                            Search
                        </button>
                        <button type="button" class="non">Filter</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 col-md-12 filter-buton-thrd-nav justify-content-center">
                <button type="button" class="display-btn">Filter</button>
            </div>
        </div>
        <!-- </div> -->
    </div>

    <!-- -----------Tabs------------- -->
    <div class="container-fluid mt-5 p-lg-5 p-md-4 p-sm-3 p-1">
        <!-- ------------row--1---Tab------------- -->
        <div class="row text-center ps-lg-0 pe-lg-0 pl-md-2 pr-md-2 ">
            @foreach ($companies as $company)
                <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4 crd-row-one">

                    <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5 ">
                        <div class="img-holders">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" alt=""
                                srcset="" />
                        </div>
                        <div class="text-center">
                            <h3 class="bus-heading mt-3 mb-3">{!! $company->company_name ?? '' !!}</h3>
                            <p class="john-para-afer-ques-heading">
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                accusantium loru.
                            </p>
                        </div>

                        <a href="{{ route('show_chat', $company->id) }}">
                            <button class="buttonfill mt-4 mb-4">
                                Contact
                            </button>
                        </a>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
@endsection
