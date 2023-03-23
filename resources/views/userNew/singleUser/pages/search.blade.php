@extends('userNew.singleUser.layouts.main')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!----- ---------2nd--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare3">
                    <form method="POST" action="{{ route('search') }}" class="form-inline">
                        @csrf
                        <div class="search-container">

                            <div class="search-icon-container">
                                <i class="fa fa-search" id="search-icon"></i>
                            </div>
                            <div class="search-form" id="search-form">

                                <!-- -------------3rd---Navbar---------- -->
                                <div class="container-fluid">
                                    <!-- <div class="container"> -->
                                    <div class="row text-center justify-content-center">
                                        <div class="col-lg-12 col-md-10 col-12 ">
                                            <h1>
                                                Search
                                            </h1>
                                            <p class="text-phara-respns  hero-sec-paragrph pt-4">
                                                Where Business Professionals Meet Other Business Professionals.Company
                                            </p>
                                        </div>

                                    </div>
                                    <div class="row justify-content-center filter-trd-nav-row mt-3">
                                        <div class="col-lg-9 col-md-12 row-bg-color">


                                            <form action="{{ route('individual.jobs.search') }}" method="GET">
                                                @csrf
                                                <div class="row industry-dropdown-input">
                                                    <div class="col-lg-5 col-md-4 col-12">
                                                        <div class="inpus-industry">&nbsp;
                                                            <i class="fa-solid fa-industry"></i>
                                                            <div class="">
                                                                <input list="browsers" name="industry" class="widths"
                                                                    placeholder="Industry" />
                                                            </div>


                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-4 col-12">
                                                        <div class="inpus-industry-2">
                                                            <i class="fa-solid fa-location-dot"></i>

                                                            <div class="pos">
                                                                <input type="search" name="searchLocation" class="width"
                                                                    placeholder="Location" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-4 btns_main  text-end respn-btn">
                                                        <button type="submit" class=" buttonfill text-center">
                                                            Search
                                                        </button>
                                                        <a href="{{ route('individual.advanceSearchFilter') }}">
                                                            <button type="button" class="non">Filter</button>
                                                        </a>

                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-1 col-md-12 filter-buton-thrd-nav justify-content-center">
                                            <a href="{{ route('individual.advanceSearchFilter') }}">
                                                <button type="button" class="display-btn">Filter</button>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- </div> -->
                                </div>
                                {{-- <input name="search" type="search" placeholder="Search..." style="width: 30%" />
                                <div class="select-searhbar">
                                    <select name="category" class="openselect" aria-label=".form-select-sm example">
                                        <option value="">Categories</option>
                                        <option value="service">Service</option>
                                        <option value="job">Jobs</option>
                                    </select>
                                </div> --}}
                                {{-- <div class="cross-srch">
                                    <i class="fa fa-times" id="close-icon"></i>
                                </div> --}}
                            </div>

                        </div>
                    </form>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="#aboutUs">About us</a>
                        </li>
                        <li><a class="navbar-link" href="#ourServices">Services</a></li>
                        <li><a class="navbar-link" href="#faqs">FAQ's</a></li>
                        <li><a class="navbar-link" href="#contactUs">Contact</a></li>

                        </li>

                    </ul>

                    <div class="">
                        <a href="{{ route('login') }}">
                            <button type="button" class="log-in-btn">Log in</button>
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



    {{-- 2nd nav end --}}




    <!-- hero section -->
    <div class="container herosecion mt-lg-5 mt-md-5 mt-2">
        <div class="row text-center justify-content-center">
            <div class="col-lg-12 col-md-10 col-12 ">
                <h1>
                    Home Of Business Opportunities.
                </h1>
                <p class="text-phara-respns  hero-sec-paragrph pt-4">
                    Where Business Professionals Meet Other Business Professionals.
                </p>
            </div>

        </div>

    </div>
    <!-- cards row -->

    <div class="content-wrapper">
        <!-- ------------step--1---Tab------------- -->
        <div id="tab-1" class="tab-content active">
            <div class="row mt-5 mb-3">
                @foreach ($results as $result)
                    {{-- @if ($job->status == 1) --}}
                    <div class="col-lg-4 col-md-6 col-12  mt-lg-0 mt-md-0 mt-3 ">
                        {{-- <a href="{{ route('company.jodDetails', $job->id) }}"> --}}
                        <div class=" job-posted-radius">
                            <div class="cards-scroll p-3 mt-3 ">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading " style="margin: 0; padding-left:35px;"><b>
                                                {!! $result->title ?? '' !!}
                                            </b>
                                        </p>
                                        <p class="job-posted" style="margin: 0; padding-left:35px;">
                                            {!! $result->located_in ?? '' !!} <span class="text-reds">({!! $job->job_type ?? '' !!})</span>
                                        </p>
                                        <p class="job-posted" style="margin: 0; padding: 0 35px;">
                                            {!! $result->work_type ?? '' !!}</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis "></i>

                                        {{-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                                href="/company/job/status/1/{{ $job->id }}">Active</a>
                                            <a class="dropdown-item"
                                                href="/company/job/status/2/{{ $job->id }}">Inactive</a>
                                            <a class="dropdown-item"
                                                href="/company/job/status/3/{{ $job->id }}">Pause</a>
                                        </div> --}}

                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <div>
                                        <p class="job-posted">
                                            {!! $result->rate ?? '' !!}

                                        </p>
                                    </div>
                                    <div>
                                        <p class="job-posted">
                                            {{ \Carbon\Carbon::parse($result->created_at)->diffForHumans() }}
                                        </p>
                                    </div>
                                </div>
                                <div style="height:100px;overflow:hidden;">
                                    <p class="abutnexa-text
                                        pt-3"
                                        style="overflow: hidden;">
                                        {!! $result->description ?? '' !!}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>


    </div>











    <!-- ======= Footer ======= -->
    <footer id="footer">

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form id="submitSubscriberForm">
                            @csrf
                            <div class="input-subscribe">
                                <br>
                                <input type="email" name="email" placeholder="Your-Email">

                                <button type="submit">Subscribe now</button>

                            </div>
                            <span class="text-danger error-text email_error"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="footer-top">
            <div class="container">
                <div class="row res-footer-575">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <div class="d-flex">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedlogo.svg" alt="">
                        </div>
                        <p class="mt-2">
                            A108 Adam Street
                            New <br> York, NY 535022
                            United States

                        <div class="email-phone">

                            <div class="phone-foter">
                                <a href=""><i class="fa-solid fa-phone"></i>&nbsp;(305) 400 - 4033</a>
                            </div>
                            <div class="mt-2">
                                <a href=""><i class="fa-solid fa-envelope"></i>&nbsp;
                                    &nbsp;Sales@medullaeffect.com</a>
                            </div>
                        </div>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4 class="abt-heading">Useful Links</h4>
                        <ul>
                            <li class="footer-nav-links"><i class="fa-solid fa-angle-right"></i> &nbsp;<a
                                    href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i> &nbsp; <a href="#aboutUs">About us</a></li>
                            <li><i class="fa-solid fa-angle-right"></i> &nbsp; <a href="#ourServices">Services</a></li>
                            <li><i class="fa-solid fa-angle-right"></i> &nbsp; <a href="#">Terms of service</a></li>
                            <li><i class="fa-solid fa-angle-right"></i> &nbsp; <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4 class="abt-heading">Our Social Networks</h4>
                        <p class="abt-para">Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies
                        </p>
                        <div class="social-links">
                            <a href="" class="social-icon-bg"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="social-icon-bg"><i class="fa-brands fa-instagram"></i></a>
                            <a href="" class="social-icon-bg"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=" " class="social-icon-bg"><i class="fa-brands fa-twitter"></i></a>
                            <a href="" class="social-icon-bg"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Medulla Effect</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">CodingSolution24.com</a>
            </div>
        </div>
    </footer><!-- End Footer -->




    <script>
        $(document).ready(function() {
            let cards = document.querySelectorAll(".accordian-item");
            [...cards].forEach((card) => {
                card.addEventListener("click", function() {
                    $(".accordian-item .answer")
                        .not($(this).find(".answer"))
                        .removeClass("open");
                    $(".accordian-item i")
                        .not($(this).find("i"))
                        .removeClass("ion-md-remove");
                    $(this).find(".accordian-link , .answer").toggleClass("open");
                    $(this).find("i").toggleClass("ion-md-remove");
                });
            });
        });
    </script>





    {{-- submit lead form --}}
    <script>
        $(function() {
            $("#submitLeadForm").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "/submit/lead/form",
                    method: "post",
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            $('.name_error').html(data.error.name);
                            $('.email_error').html(data.error.email);
                            $('.phone_error').html(data.error.phone);
                            $('.message_error').html(data.error.message);
                        } else if (data.status == 1) {
                            toastr.success(data.message, data.title);
                            $('#submitLeadForm').each(function() {
                                this.reset();
                            });
                        } else {
                            toastr.error(data.message, data.title);
                        }
                    }
                });
            });
        });
    </script>

    {{-- Subscriber form --}}
    <script>
        $(function() {
            $("#submitSubscriberForm").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "/submit/subscriber/form",
                    method: "post",
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            $('.email_error').html(data.error.email);
                        } else if (data.status == 1) {
                            toastr.success(data.message, data.title);
                            $('#submitSubscriberForm').each(function() {
                                this.reset();
                            });
                        } else {
                            toastr.error(data.message, data.title);
                        }
                    }
                });
            });
        });
    </script>

    {{-- search --}}
    <script>
        // search icon
        const searchIcon = document.getElementById('search-icon');
        const searchForm = document.getElementById('search-form');
        const closeIcon = document.getElementById('close-icon');
        const searchIconContainer = document.querySelector('.search-icon-container');

        searchIconContainer.addEventListener('click', () => {
            searchIconContainer.classList.add('active');
            searchForm.classList.add('active');
            searchIcon.classList.add('active');
            closeIcon.classList.add('active');
        });

        closeIcon.addEventListener('click', () => {
            searchIconContainer.classList.remove('active');
            searchForm.classList.remove('active');
            searchIcon.classList.remove('active');
            closeIcon.classList.remove('active');
        });
    </script>
@endsection
