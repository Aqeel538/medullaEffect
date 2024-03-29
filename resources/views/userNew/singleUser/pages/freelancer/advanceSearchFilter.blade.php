@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->
    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.freelancer.secondNav')
    <!---------------- -Navend--------------- -->
    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9 col-12 text-center">
                <h1 class="advnc-search-heading mt-5">Advanced Search Filters</h1>
                <p class="mt-4 mb-5 john-para-afer-ques-heading-filter">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                    quae ab illo inventore veritatis.
                </p>
            </div>
        </div>
    </div>
    <!-- --------------3rd nav ----------------- -->
    <form id="filter" action="{{ route('freelancer.advanceSearch') }}" method="GET">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-8 col-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
                            <div class="inputfield-2">
                                <i class="fa-solid fa-location-dot"></i>
                                <select name="searchLocation" style="width: 100%">
                                    {{-- <option value="" disabled selected hidden>
                                        Location
                                    </option>
                                    <option>USA</option>
                                    <option>UAE</option>
                                    <option>Paris</option>
                                    <option>Landon</option> --}}
                                    @foreach ($freelancers->unique('located_in') as $freelancer)
                                        <option value="{{ $freelancer->located_in }}">{{ $freelancer->located_in }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3 ">
                            <div class="inputfield-2">
                                <img src="{{ asset('user') }}/assets/images/profile-imges/exp-level.png" alt=""
                                    srcset="">
                                <select name="experience" style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Experience Level
                                    </option>
                                    <option value="Fresher">Begginer</option>
                                    <option value="Begginer">Intermediate</option>
                                    <option value="Professional">Advanced</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
                            <div class="inputfield-2">
                                <i class="fa-solid fa-user-tie"></i>
                                <select name="job_type" style="width: 100%">
                                    <option value="" disabled selected hidden>Job Type</option>
                                    <option>Remote</option>
                                    <option>OnSite</option>
                                    <option>Hybrid</option>
                                    <option>No-preference</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-lg-3 mt-md-0 mt-2">
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
                            <div class="inputfield-2">
                                <i class="fa-solid fa-industry"></i>
                                <select name="industry" style="width: 100%">
                                    <option value="" disabled selected hidden>Industry</option>
                                    <option>IT</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
                            <div class="inputfield-2">
                            
                                <input class="w-100" type="date" value="{{ old('created_at') }}" name="created_at"
                                    placeholder="created_at" style="width: 100%!important" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-3 mb-sm-3 mb-3">
                            <div class="inputfield-2">
                                <i class="fa-solid fa-sack-dollar"></i>
                                <select name="pay_range" style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Salary Range
                                    </option>
                                    <option value="0-50k">0-50k</option>
                                    <option value="50k-100k">50k-100k</option>
                                    <option value="100k-1500k">100k-150k</option>
                                    <option value="150k-200k">150k-200k</option>
                                    <option value="200k-250k">200k-250k</option>
                                    <option value="250k-300k">250k-300k</option>
                                    <option value="300k-350k">300k-350k</option>
                                    <option value="350k-400k">350k-400k</option>
                                    <option value="400k-450k">400k-450k</option>
                                    <option value="450k-500k">450k-500k</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ----------button------------- -->
        <div class="container-fluid text-center mt-5 mb-5">
            <button type="submit" class="buttonfilled">Save</button>

            <button type="button" class="buttonunfill-clear" value="Clear"
                onclick="document.getElementById('filter').reset();">Clear all</button>
        </div>
    </form>

    <!-- ------------row--1---Tab------------- -->
    <div class="container-fluid mt-5 p-lg-3 p-md-3 p-sm-1 p-1">
        <!-- ------------row--1---Tab------------- -->
        <div class="row text-center ">
            @foreach ($freelancers as $freelancer)
                <div class="col-lg-3 col-md-3 col-12 crd-row-one mt-5">
                    <a href="{{ route('freelancer.details', $freelancer->id) }}"
                        style=" text-decoration: none !important;color: #141313;">
                        <div style="background-color: #F9F9F9 ; border-radius: 21.0305px;" class="pt-4 pb-2 ps-2 pe-2">
                            <div class="img-holder">
                                <?php $image = isset($freelancer->image) && !empty($freelancer->image) ? $freelancer->image : ''; ?>

                                <img src="<?= $image ?>" style="height: 75px;" alt="" srcset="" />
                            </div>

                            <h3 class="bus-heading mt-3 mb-3">{!! $freelancer->name ?? '' !!}</h3>
                            <h6 class="location-heading">Industry: <span class="place">{!! $freelancer->industry ?? '' !!}</span>
                            </h6>
                            <h6 class="location-heading">Job type: <span class="place">{!! $freelancer->job_type ?? '' !!}</span>
                            </h6>
                            <h6 class="location-heading">Located in: <span class="place">{!! $freelancer->located_in ?? '' !!}</span>
                            </h6>
                            <h6 class="location-heading">Experience: <span class="place">{!! $freelancer->experience ?? '' !!}</span>
                            </h6>

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
    <script>
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
    </script>
@endsection
