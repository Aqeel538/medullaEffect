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
    <form id="filter" action="{{ route('company.advanceSearch') }}" method="GET">
        @csrf
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-8 col-10">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield">
                                <i class="fa-solid fa-location-dot"></i>

                                {{-- <input type="text" name="searchLocation" style="width: 100%"
                                placeholder="search location"> --}}

                                <select name="searchLocation" style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Location
                                    </option>
                                    @foreach ($companies->unique('located_in') as $company)
                                        <option value="{{ $company->located_in }}">{{ $company->located_in }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
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
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield">
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
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
                                <i class="fa-solid fa-industry"></i>
                                <select name="industry" style="width: 100%">
                                    <option value="" disabled selected hidden>Industry</option>
                                    <option>IT</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                            <div class="inputfield">
                                <img src="{{ asset('user') }}/assets/images/profile-imges/calendar-icon.png" alt=""
                                    srcset="">
                                <input class="w-100" type="date" value="{{ old('created_at') }}" name="created_at"
                                    placeholder="created_at" style="width: 100%!important" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                            <div class="inputfield">
                                <i class="fa-solid fa-sack-dollar"></i>
                                <select name="pay_range" style="width: 100%">
                                    <option value="" disabled selected hidden>
                                        Salary Range
                                    </option>
                                    <option value="0-50">0-50k</option>
                                    <option value="50-100">50k-100k</option>
                                    <option value="100-1500">100k-150k</option>
                                    <option value="1500-2000">150k-200k</option>
                                    <option value="2000-2500">200k-250k</option>
                                    <option value="2500-3000">250k-300k</option>
                                    <option value="3000-3500">300k-350k</option>
                                    <option value="3500-4000">350k-400k</option>
                                    <option value="4000-4500">400k-450k</option>
                                    <option value="4500-5000">450k-500k</option>
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
            @foreach ($companies as $company)
                <div class="col-lg-3 col-md-3 col-12 crd-row-one mt-5">
                    <a href="{{ route('freelancer.details', $company->id) }}"
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
