@extends('userNew.singleUser.layouts.main')
@section('content')
    <style>
        .contect {
            text-decoration: none !important;
            margin-top: 1.5rem !important;
            margin-bottom: 1.5rem !important;
        }
    </style>
    <!-- 2nd nav -->
    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.freelancer.secondNav')


    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9 col-12 text-center Halvetica">
                <h1 class="headings-profile mt-5">Freelancers</h1>
                <p class="mt-4 john-para-afer-ques-heading-filter mb-5">
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
                <form action="{{ route('freelancer.search') }}" method="GET">
                    @csrf
                    <div class="row industry-dropdown-input">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="inpus-industry">&nbsp;
                                <i class="fa-solid fa-industry"></i>
                                <div class="">
                                    <input list="browsers" name="industry" class="widths" placeholder="Industry" />
                                </div>

                                <datalist id="browsers">
                                    @foreach ($industryOption->unique('industry') as $freelancer)
                                        <option value="{{ $freelancer->industry }}"></option>
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
                            <a href="{{ route('freelancer.advanceSearchFilter') }}">
                                <button type="button" class="non">Filter</button>
                            </a>
    
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1 col-md-12 filter-buton-thrd-nav justify-content-center">
                <a href="{{ route('freelancer.advanceSearchFilter') }}">
                    <button type="button" class="display-btn">Filter</button>
                </a>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- -----------Tabs------------- -->
    <div class="container-fluid mt-5 p-lg-3 p-md-3 p-sm-1 p-1">

        <!-- ------------row--1---Tab------------- -->
        <div class="row text-center">
            @foreach ($freelancers as $freelancer)
                <div class="col-lg-3 col-md-3 col-12 crd-row-one mb-3">
                    <a href="{{ route('freelancer.details', $freelancer->id) }}"
                        style=" text-decoration: none !important;color: #141313;">
                        <div style="background-color: #F9F9F9 ; border-radius: 21.0305px;" class="pt-4 pb-2 ps-2 pe-2">
                            <div class="img-holder">
                                <?php $image = isset($freelancer->image) && !empty($freelancer->image) ? $freelancer->image : ''; ?>

                                <img src="<?= $image ?>" style="height: 75px; width: 75px" alt="" srcset="" />
                            </div>

                            <h3 class="bus-heading mt-3 mb-3" style="height: 70px !important;">{!! $freelancer->name ?? '' !!}</h3>
                            <h6 class="location-heading">Industry: <span class="place">{!! $freelancer->industry ?? '' !!}</span>
                            </h6>
                            <h6 class="location-heading">Job type: <span class="place">{!! $freelancer->job_type ?? '' !!}</span>
                            </h6>
                            <h6 class="location-heading">Located in: <span class="place">{!! $freelancer->located_in ?? '' !!}</span>
                            </h6>
                            <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>

                            <a href="{{ route('show_chat', $freelancer->id) }}">
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
    <!-- -------------javascript--inner-link------------- -->
    <!-- ---------TABS--------- -->
@endsection
