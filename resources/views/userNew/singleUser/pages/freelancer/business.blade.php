@extends('userNew.singleUser.layouts.main')
@section('content')
    <style>
        a {
            text-decoration: none !important;
        }
    </style>

    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.freelancer.secondNav')


    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-8 col-9 text-center Halvetica">
                <h1 class="headings-profile mt-5">Businesses</h1>
                <p class="mt-4  john-para-afer-ques-heading-filter mb-5">
                    Sed utt perspiciatis unde omnis iste natus error sit voluptatem
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
                <form action="{{ route('company.search') }}" method="GET">
                    @csrf
                    <div class="row industry-dropdown-input">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="inpus-industry">&nbsp;
                                <i class="fa-solid fa-industry"></i>
                                <div class="">
                                    <input list="browsers" name="industry" class="widths" placeholder="Industry" />
                                </div>

                                <datalist id="browsers">
                                    @foreach ($industryOption->unique('industry') as $company)
                                        <option value="{{ $company->industry }}"></option>
                                    @endforeach
                                </datalist>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="inpus-industry-2">
                                <i class="fa-solid fa-location-dot"></i>

                                <div class="pos">
                                    <input type="search" class="width" name="searchLocation" placeholder="Location" />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-4 btns_main  text-end respn-btn">
                            <button type="submit" class=" buttonfill text-center">
                                Search
                            </button>
                            <button type="button" class="non">Filter</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1 col-md-12 filter-buton-thrd-nav justify-content-center">
                <a href="{{ route('company.advanceSearchFilter') }}">
                    <button type="button" class="display-btn">Filter</button>
                </a>
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
                    <a href="{{ route('business.details', $company->id) }}"
                        style=" text-decoration: none !important;color: #141313;">
                        <div style="background-color: #f9f9f9; border-radius: 20px" class="p-5 ">
                            <div class="img-holders">
                                <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png" alt=""
                                    srcset="" />
                            </div>
                            <div class="text-center">
                                <h3 class="bus-heading mt-3 mb-3" style="height: 70px;overflow:hidden">
                                    {!! $company->company_name ?? '' !!}</h3>
                                <p class="john-para-afer-ques-heading">
                                    {!! $company->description ?? 'There is no description about company!' !!}
                                </p>
                            </div>

                            <a href="{{ route('show_chat', $company->id) }}">
                                <button class="buttonfill mt-4 mb-4">
                                    Contact
                                </button>
                            </a>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>
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
        var btns = header.getElementsByClassName("businesslist");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>
@endsection
