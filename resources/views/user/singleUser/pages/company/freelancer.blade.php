@extends('user.singleUser.layouts.main')
@section('content')
    <div class="container-fluid second-nav">
        <div class="container">

            <div class="container-fluid second-nav">
                <div class="container">

                    <div class="header">
                        <nav class="navbar">
                            <div class="container-fluid p-0">
                                <div>
                                    <img src="{{asset('user')}}/assets/images/landing-page-img/vectorsearch.png" alt="" srcset="">
                                </div>
                                <ul class="navbar-list" id="myDIV">
                                    <li><a class="navbar-link" href="{{ route('company.dashboard')}}">Dashboard</a></li>
                                    <li><a class="navbar-link" href="#">Jobs</a></li>
                                    <li><a class="navbar-link" href="#">Applicants</a></li>
                                    <li><a class="navbar-link" href="#">Individuals</a></li>
                                    <li><a class="navbar-link mylist active" href="{{ route('company.freelancer') }}">Freelancers</a></li>
                                    <li><a class="navbar-link" href="#">Settings</a></li>
                                </ul>
                                <div>
                                    <img src="{{asset('user')}}/assets/images/landing-page-img/Vectorbell.png" alt="" srcset="">
                                    &nbsp;
                                    <img src="{{asset('user')}}/assets/images/landing-page-img/Vector.png" alt="" srcset="">
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

        </div>
    </div>

    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-7 col-sm-9 col-12 text-center">
                <h1 class="advnc-search-heading mt-5">Advanced Search Filters</h1>
                <p class="mt-4 mb-5 john-para-afer-ques-heading">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                    quae ab illo inventore veritatis.
                </p>
            </div>
        </div>
    </div>
    <!-- --------------3rd nav INPUT--FIELD----------------- -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-9 col-md-8 col-10">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                        <div class="location-row">
                            <i class="fa-solid fa-location-dot"></i>&nbsp;
                            <input class="" type="text" placeholder="Location" />
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                        <div class="inputfield">
                            <i class="fa-solid fa-gears"></i>
                            <select required style="width: 100%">
                                <option value="" disabled selected hidden>
                                    Experience Level
                                </option>
                                <option>Fresher</option>
                                <option>Begginer</option>
                                <option>Professional</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                        <div class="inputfield">
                            <i class="fa-solid fa-user-tie"></i>
                            <select required style="width: 100%">
                                <option value="" disabled selected hidden>Job Type</option>
                                <option>Remote</option>
                                <option>OnSite</option>
                                <option>Hybrid</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                        <div class="inputfield">
                            <i class="fa-solid fa-industry"></i>
                            <select required style="width: 100%">
                                <option value="" disabled selected hidden>Industry</option>
                                <option>IT</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3 xs-res">
                        <div class="inputfield">
                            <i class="fa-regular fa-calendar"></i>
                            <select required style="width: 100%">
                                <option value="" disabled selected hidden>Date Posted</option>
                                <option>2023</option>
                                <option>2024</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-12 mb-lg-0 mb-md-2 mb-sm-3">
                        <div class="inputfield">
                            <i class="fa-solid fa-sack-dollar"></i>
                            <select required style="width: 100%">
                                <option value="" disabled selected hidden>
                                    Salary Range
                                </option>
                                <option>50k-1000k</option>
                                <option>10000k-2000k</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ----------button------------- -->
    <div class="container-fluid text-center mt-5 mb-5">
        <button type="button" class="buttonfilled">Save</button>

        <button type="button" class="buttonunfill-clear">Clear all</button>
    </div>
    <!-- ---------cards-------------- -->
    <div class="container-fluid mt-5 p-lg-4 p-md-4 p-sm-3 p-1">
        <div class="container">
            <!-- ------------row--1---Tab------------- -->

            <div class="row text-center ps-lg-5 pe-lg-5 pl-md-5 pr-md-5 crd-row-one">
                @foreach ($freelancers as $freelancer)
                    <div class="col-lg-3 col-md-6 col-12 col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3   mt-4">
                        <div style="background-color: #F9F9F9; border-radius: 21.0305px;" class="">
                            <div class="freelancer-page pt-3">
                                <div class="img-holder-frelancer pt-4">
                                    <img src="{{ $freelancer->image }}" alt="" srcset="" />
                                </div>
                            </div>
                            <div class="p-3">
                                <h3 class="bus-heading mt-5 mb-3">{!! $freelancer->name ?? '' !!}</h3>

                                <h6 class="location-heading">Located in: <span class="place">Barcelona</span> </h6>
                                <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>

                                <button class="buttonfill mt-4 mb-4">Contact</button>
                            </div>

                        </div>
                    </div>
                @endforeach
                <!-- ------------step--2---Tab------------- -->
                {{-- <div class="row text-center mt-5 ps-lg-5 pe-lg-5 pl-md-5 pr-md-5  crd-row-one">
                <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3  mt-4">
                    <div style="background-color: #F9F9F9; border-radius: 21.0305px;" class="">
                        <div class="freelancer-page pt-3">
                            <div class="img-holder-frelancer pt-4">
                                <img src="../../../Assets/Images/profile-imges/user.png" alt="" srcset="" />
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="bus-heading mt-5 mb-3">Freelancer Name</h3>

                            <h6 class="location-heading">Located in: <span class="place">Barcelona</span> </h6>
                            <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>

                            <button class="buttonfill mt-4 mb-4">Contact</button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3  mt-4">
                    <div style="background-color: #F9F9F9; border-radius: 21.0305px;" class="">
                        <div class="freelancer-page pt-3">
                            <div class="img-holder-frelancer pt-4">
                                <img src="../../../Assets/Images/profile-imges/user.png" alt="" srcset="" />
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="bus-heading mt-5 mb-3">Freelancer Name</h3>

                            <h6 class="location-heading">Located in: <span class="place">Barcelona</span> </h6>
                            <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>

                            <button class="buttonfill mt-4 mb-4">Contact</button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3  mt-4">
                    <div style="background-color: #F9F9F9; border-radius: 21.0305px;" class="">
                        <div class="freelancer-page pt-3">
                            <div class="img-holder-frelancer pt-4">
                                <img src="../../../Assets/Images/profile-imges/user.png" alt="" srcset="" />
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="bus-heading mt-5 mb-3">Freelancer Name</h3>

                            <h6 class="location-heading">Located in: <span class="place">Barcelona</span> </h6>
                            <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>

                            <button class="buttonfill mt-4 mb-4">Contact</button>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 col-lg-3 col-md-6 col-12 mb-lg-4 mb-md-3  mt-4">
                    <div style="background-color: #F9F9F9; border-radius: 21.0305px;" class="">
                        <div class="freelancer-page pt-3">
                            <div class="img-holder-frelancer pt-4">
                                <img src="../../../Assets/Images/profile-imges/user.png" alt="" srcset="" />
                            </div>
                        </div>
                        <div class="p-3">
                            <h3 class="bus-heading mt-5 mb-3">Freelancer Name</h3>

                            <h6 class="location-heading">Located in: <span class="place">Barcelona</span> </h6>
                            <h6 class="location-heading">Experience: <span class="place">6 Years</span> </h6>

                            <button class="buttonfill mt-4 mb-4">Contact</button>
                        </div>

                    </div>
                </div>
            </div> --}}
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
