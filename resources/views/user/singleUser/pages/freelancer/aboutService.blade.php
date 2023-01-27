@extends('user.singleUser.layouts.main')
@section('content')
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

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 arrow ">
                <a href="../Tagline.html">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
            <br />
            <br />
            <div class="col-lg-12 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">Service Name</h2>
                    <p class="job-view-para-2">Service Category</p>
                </div>
                <div class="col-lg-8 col-12 ps-0">
                    <div class="tabsrow d-flex justify-content-between">
                        <div class="allitems d-flex">
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;$120</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Top Rated
                                        Service</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;145
                                        Reviews</span>
                                </p>
                            </div>

                        </div>

                    </div>

                </div>


                <!-- tabs of nav -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="job-details">
                            Since 2005; we have been driving growth for hundreds of high
                            profile clients throughout the region, and have since
                            expanded our business on a global scale. Through digital
                            marketing and growth marketing strategies, we help companies
                            realize their true potential in a frictionless and
                            innovative environment, where Sales, Marketing & Customer
                            Service work together to increase sales and retain
                            customers.
                            <br> <br> We also know that in the world of business, no
                            word is more important than GROWTH and standing still should
                            never be an option. As a growth agency, we are always moving
                            forward as the digital space continues to evolve. With this
                            in mind, we understand and appreciate the magnitude of the
                            digital evolution and have our finger on the pulse of all
                            things Web3. <br> <br> Since Web3 came onto our radar, we have
                            invested our time and resources in studying the space and
                            learning about the enormous opportunities that exist within
                            this arena, and how these opportunities can benefit our
                            clients and their business goals. We are at the forefront of
                            Web 3.0 commercial opportunities and provide a variety of
                            services for leading brands as they make this new-age
                            transition. Through digital marketing, growth marketing and
                            Web3 solutions, Nexa offers fast, sustainable and efficient
                            growth for all our clients.
                        </p>
                    </div>
                </div>

                <div class="jobviewbtns mt-5 mb-4">
                    <button class="buttonfill-apply pl-4 pr-4">Edit Service</button>
                    <button class="buttonunfill-save">Pause for now</button>
                </div>
            </div>
            <!-- right side of view job page -->

        </div>
    </div>
@endsection
