@extends('user.singleUser.layouts.main')
@section('content')
    <style>
        .cardsimg img {
            width: 200px;
            height: auto !important;
        }
    </style>
    <div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
        <header>

            <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div>
                        <span><i class="ri-search-line start_16_respons"></i></span>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list Halvetica " id="myDIV">
                            <li><a href="#" class="mylist active">View Jobs</a></li>
                            <li><a href="{{ route('individual_appliedJobs') }}" class="mylist">View Applications</a></li>
                            <li><a href="#" class="mylist">Resume</a></li>
                        </ul>

                    </div>
                    <div>
                        <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                        <span><i class="fa-regular fa-user ms-1 start_16_respons"></i></span>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 arrow ">
                <a href="../Tagline.html">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
            </div>
            <br />
            <br />
            <div class="col-lg-8 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">Nexa</h2>
                    <p class="job-view-para-2">Digital Marketing</p>
                </div>
                <div class="tabsrow d-flex justify-content-between">
                    <div class="allitems d-flex ">
                        <div class="icon-text">
                            <p class="job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Marketing &
                                    Advertising</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;51-200
                                    employees</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;51-200 employees
                                    Hiring</span>
                            </p>
                        </div>
                    </div>

                </div>
                <!-- tabs of nav -->
                <div class="row mt-4">
                    <div class="col-10 tabs">
                        <ul class="">
                            <label class="tab-link active option_radio" data-tab="1" for="overview">
                                <input type="radio" id="overview" name="people" checked />
                                <span></span>Overview</label>
                            &nbsp; &nbsp;
                            <label class="tab-link option_radio" data-tab="2" for="posts">
                                <input type="radio" id="posts" name="people" />
                                <span></span> Posts</label>&nbsp; &nbsp;
                            <label class="tab-link option_radio" data-tab="3" for="people">
                                <input type="radio" id="people" name="people" />
                                <span></span> People</label>
                        </ul>
                    </div>
                    <div class="col-12">
                        <div id="tab-1" class="tab-content active">
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

                        <div id="tab-2" class="tab-content">
                            <p class="job-details">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Optio unde sunt dolorum eaque iusto esse tenetur incidunt
                                aliquam nulla non voluptates libero nihil ut iure, voluptas
                                sint molestiae! Accusantium, est iure debitis cum aliquid
                                sed. Ab, dolores. Asperiores quos est sequi, cum minus
                                itaque delectus iste doloremque distinctio sed sunt debitis
                                repellat pariatur, harum dolores voluptates vitae possimus
                                et? Assumenda sequi eaque neque ratione maxime at nulla vel
                                quos? Numquam, inventore minima sunt dolorum repellendus
                                excepturi iste voluptates voluptatibus perspiciatis?
                            </p>
                        </div>

                        <div id="tab-3" class="tab-content">
                            <p class="job-details">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Animi ipsum harum nulla veniam, praesentium a, blanditiis
                                corporis nostrum officiis consequatur aliquam necessitatibus
                                assumenda perferendis incidunt aut cum enim doloribus dolor
                                earum magnam? Reiciendis necessitatibus est animi quaerat in
                                exercitationem ea at adipisci ab, explicabo deserunt
                                repudiandae numquam aperiam officiis praesentium laudantium
                                provident mollitia porro rem cupiditate culpa. Obcaecati
                                facilis eos, earum ad assumenda sed, aperiam porro eum quia
                                asperiores ea sapiente repudiandae saepe neque voluptatibus
                                itaque repellat possimus veritatis tempora sunt quis
                                perspiciatis? Asperiores velit quaerat rem voluptate
                                reiciendis iusto voluptatem, natus sit ex aliquam molestias
                                labore voluptates pariatur quibusdam omnis amet vitae modi,
                                explicabo recusandae mollitia nisi quas deleniti dolorem?
                                Ipsa optio nostrum amet modi aperiam alias totam corporis,
                                necessitatibus odit eum non itaque repellendus beatae ex
                                excepturi porro magnam vitae illo, aut eveniet est. Dolorem
                                eum aliquam harum repudiandae rerum itaque inventore
                                officiis ea, saepe, necessitatibus ipsa sit?
                            </p>
                        </div>
                    </div>
                </div>

                <div class="jobviewbtns mt-5 mb-4">
                    <button class="buttonfill-apply">Apply Now</button>
                    <button class="buttonunfill-save">Save for Later</button>
                </div>
            </div>
            <!-- right side of view job page -->
            <div class="col-lg-4 col-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12  pt-3 pb-3 res" style="background-color: #F9F9F9;border-radius: 20px;">
                        <div class=" abutnexa d-flex justify-content-between">
                            <h4 class="about-nexa-heading ">About Nexa</h4>
                            <button class=" buttonunfill-save-follow
                            ">Follow</button>
                        </div>
                        <div class="mt-3 icon-text d-flex justify-content-between">
                            <p class="me-2 job-view-paras">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Marketing &
                                    Advertising</span>
                            </p>

                            <p>
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;51-200
                                    employees</span>
                            </p>
                        </div>

                        <p class="abutnexa-text">Since 2005; we have been driving growth for hundreds of high profile
                            clients throughout the region, and have since expanded our business on a global scale. Through
                            digital marketing and growth marketing strategies, we help companies realize their true
                            potential in a frictionless and innovative environment, where Sales, Marketing & Customer
                            Service work together to increase sales and retain customers... <span class="fw-bolder"
                                style="color: #7C2342;">Learn More</span> </p>
                    </div>
                </div>
                <h4 class="pt-4 ml-0 other-job-txt">Others Jobs</h4>
                <div class="row">
                    <div class="col-lg-12 pt-3 pb-3  res" style="background-color: #F9F9F9;border-radius: 20px;">
                        <div class="row">
                            <div class="col-2 cardsimg">
                                <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png" class="w-5"
                                    alt="w8">
                            </div>
                            <div class="col-8">
                                <p class="single-job-heading" style="margin: 0;padding: 0;"><b> Lorem Ipsum </b></p>
                                <p class="job-posted" style="margin: 0;padding: 0;">Posted 2 Hours Ago</p>
                            </div>
                            <div class="col-2">
                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                            </div>
                        </div>
                        <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem
                            accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde
                            omnis ie natnatusus error... </p>
                        <div class="jobviewbtns mt-1 mb-1">
                            <button class="buttonfill-apply">Apply Now</button>
                            <button class="buttonunfill-save">Save for Later</button>
                        </div>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-lg-12 pt-3 pb-3 res" style="background-color: #F9F9F9;border-radius: 20px;">
                        <div class="row">
                            <div class="col-2 cardsimg">
                                <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png" class="w-5"
                                    alt="w8">
                            </div>
                            <div class="col-8">
                                <p class="single-job-heading" style="margin: 0;padding: 0;"><b> Lorem Ipsum </b></p>
                                <p class="job-posted" style="margin: 0;padding: 0;">Posted 2 Hours Ago</p>
                            </div>
                            <div class="col-2">
                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                            </div>
                        </div>
                        <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem
                            accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde
                            omnis ie natnatusus error... </p>
                        <div class="jobviewbtns mt-1 mb-1">
                            <button class="buttonfill-apply">Apply Now</button>
                            <button class="buttonunfill-save">Save for Later</button>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-12 pt-3 pb-3  res" style="background-color: #F9F9F9;border-radius: 20px;">
                        <div class="row">
                            <div class="col-2 cardsimg">
                                <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png" class="w-5"
                                    alt="w8">
                            </div>
                            <div class="col-8">
                                <p class="single-job-heading" style="margin: 0;padding: 0;"><b> Lorem Ipsum </b></p>
                                <p class="job-posted" style="margin: 0;padding: 0;">Posted 2 Hours Ago</p>
                            </div>
                            <div class="col-2">
                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                            </div>
                        </div>
                        <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem
                            accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde
                            omnis ie natnatusus error... </p>
                        <div class="jobviewbtns mt-1 mb-1">
                            <button class="buttonfill-apply">Apply Now</button>
                            <button class="buttonunfill-save">Save for Later</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
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
    </script>
@endsection
