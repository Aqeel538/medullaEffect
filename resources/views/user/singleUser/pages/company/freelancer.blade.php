@extends('user.singleUser.layouts.main')
@section('content')
    <div class="container-fluid second-nav">
        <div class="container">

            <div class="header">
                <nav class="navbar">
                    <div class="container-fluid p-0">
                        <div>
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorsearch.png" alt=""
                                srcset="">
                        </div>
                        <ul class="navbar-list" id="myDIV">
                            <li><a class="navbar-link" href="{{ route('company.dashboard') }}">Dashboard</a>
                            </li>
                            <li><a class="navbar-link " href="{{ route('company.jobs') }}">Jobs</a></li>
                            <li><a class="navbar-link" href="#">Applicants</a></li>
                            <li><a class="navbar-link" href="#">Individuals</a></li>
                            <li><a class="navbar-link mylist active"
                                    href="{{ route('company.freelancer') }}">Freelancers</a></li>
                            <li><a class="navbar-link" href="#">Settings</a></li>
                        </ul>
                        <div>
                            <span>
                                <a class="navbar-link" href="{{ route('see.notifications') }}">
                                    <i class="fa-regular fa-bell start_16_respons"></i>
                                </a>
                            </span>
                            <span>
                                <a class="navbar-link" href="{{ route('company.jobPost') }}">
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
            <div class="col-lg-5 col-md-7 col-sm-9 col-12 text-center Halvetica">
                <h1 class="headings-profile mt-5">Freelancers</h1>
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
                <div class="p-1 col-lg-8 offset-lg-1 col-md-12 row-bg-color">
                    <form action="{{ route('company_freelancer.search') }}" method="GET">
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
                <div class="col-lg-3 col-md-12 filter-buton-thrd-nav ">
                    <a href="{{ route('company.advanceSearchFilter') }}"><button type="button" class="display-btn">
                            Filter
                        </button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- -----------Freelancer cards------------- -->
    <div class="container-fluid mt-5 p-lg-4 p-md-4 p-sm-3 p-1">
        <div class="container">
            <!-- ------------row--1---Tab------------- -->
            <div class="row text-center ps-lg-5 pe-lg-5 pl-md-5 pr-md-5 crd-row-one">
                @foreach ($freelancers as $freelancer)
                    <div class="col-lg-3 col-md-6 col-12 col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3   mt-4">
                        <div style="background-color: #F9F9F9; border-radius: 21.0305px;" class="">
                            <div class="freelancer-page pt-3">
                                <div class="img-holder-frelancer pt-4">
                                    <?php $image = isset($freelancer->image) && !empty($freelancer->image) ? $freelancer->image : ''; ?>

                                    <img src="<?= $image ?>" style="height: 75px;" alt="" srcset="" />
                                </div>
                            </div>
                            <div class="p-3">
                                <h3 class="bus-heading mt-5 mb-3">{!! $freelancer->name ?? '' !!}</h3>

                                <h6 class="location-heading">Located in: <span class="place">{!! $freelancer->located_in ?? '' !!}</span>
                                </h6>
                                <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>

                                <button class="buttonfill mt-4 mb-4">Contact</button>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- -------------javascript--inner-link------------- -->
    <!-- ---------TABS--------- -->
    <script
type="module"
src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        // --------Tabes-----------
        $(".tab-link").click(function() {
            var tabID = $(this).attr("data-tab");

            $(this).addClass("active").siblings().removeClass("active");

            $("#tab-" + tabID)
                .addClass("active")
                .siblings()
                .removeClass("active");
        });
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

        //mbil toggle

        const mobile_nav = document.querySelector(".mobile-navbar-btn");
        const nav_header = document.querySelector(".header");

        const toggleNavbar = () => {
            // alert("Plz ");
            nav_header.classList.toggle("active");
        };

        mobile_nav.addEventListener("click", () => toggleNavbar());
    </script>
@endsection
