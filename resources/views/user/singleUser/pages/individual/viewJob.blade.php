@extends('user.singleUser.layouts.main')
@section('content')
<style>
    .cardsimg img {
        border: 2px solid #7C2342;
        border-radius: 50%;
        width: 40px;
        height: 35px !important;
    }
</style>
<div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
    <header>

        <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div>
                    <span><i class="ri-search-line start_16_respons"></i></span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list Halvetica " id="myDIV">
                        <li><a href="#" class="mylist active">View Jobs</a></li>
                        <li><a href="#" class="mylist">View Applications</a></li>
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
        <div class="col-12 arrow">
            <a href="{{ route('tagline') }}">
                <i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        </div>
        <br>
        <br>
        <div class="col-lg-8 col-12">
            <div class="col-12" style="padding: 0;">
                <h2 class="job-headings">Web Designer</h2>
                <p class="job-view-para">Nexa - Digital Marketing</p>
            </div>
            <div class="tabsrow d-flex justify-content-between">
                <div class="allitems d-flex">
                    <div class="icon-text">
                        <p class="job-view-para">
                            <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Full Time</span>
                        </p>
                    </div> &nbsp; &nbsp; &nbsp;
                    <div class="icon-text">
                        <p class="job-view-para">
                            <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Remote</span>
                        </p>
                    </div> &nbsp; &nbsp; &nbsp;
                    <div class="icon-text">
                        <p class="job-view-para">
                            <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Urgent
                                Hiring</span>
                        </p>
                    </div>
                </div>
                <div class="time">
                    <p class="">Posted 2 Hours Ago
                    </p>

                </div>
            </div>
            <p class="pt-3 job-details">Nexa is looking for a highly creative and experienced UI Designer to join our team. If you have a
                proven track record in designing websites for clients using tools like Figma, Adobe XD and
                Photoshop then apply now!
                <br>
                <br>
                You are someone who has an eye for detail and a knack for converting briefs using brand
                guidelines into beautiful designs. You have a strong portfolio and have designed a minimum of
                100 websites in your career. You are comfortable in presenting your designs and creative vision
                in front of the management and to clients.
                <br><br>

                You are someone who: <br>
            <ul class="pl-4">
                <li> Has a high performing / design laptop</li>
                <li>You have a stable wifi connection</li>
                <li> You are willing to do a full-time remote role from 9am - 6pm (GST)</li>
                <li> You have a portfolio link on your CV</li>
            </ul>

            As a part of Nexa, you will have the opportunity to work on diverse projects from different
            industries. You will work alongside highly experienced people in a fun and rewarding environment.
            <br><br>
            About Nexa: <br>
            Award winning Growth Agency established in 2005 with offices in the UAE, USA, UK & AUS. Founding
            member of the Digital Transformation Group (DXG) a strategic global alliance of 4 experienced
            HubSpot Solutions Partners with over 200 in-house experts
            <br><br>

            At Nexa, we design and develop any website for business including: <br>
            <ul class="pl-4">
                <li> Corporate / Informational based</li>
                <li> Corporate / Lead generation based</li>
                <li> eCommerce</li>
                <li>
                    Portals / Directories</li>
                <li> Portfolio</li>


                <li> Blogs / Landing Pages</li>
            </ul>



            </p>
            <div class="jobviewbtns mt-5 mb-4">
                <button class="buttonfill-apply">Apply Now</button>
                <button class="buttonunfill-save">Save for Later</button>
            </div>
        </div>
        <!-- right side of view job page -->
        <div class="col-lg-4 col-12">
            <div class="row">
                <div class="col-lg-12 col-md-12  pt-3 pb-3 res" style="background-color: #F9F9F9;border-radius: 20px;">
                    <div class="abutnexa d-flex justify-content-between">
                        <h4 class="about-nexa-heading">About Nexa</h4>
                        <button class="buttonunfill-save-follow
                                    ">Follow</button>
                    </div>
                    <div class="icon-text d-flex justify-content-between">
                        <p class="me-2 job-view-paras">
                            <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Marketing & Advertising</span>
                        </p>

                        <p>
                            <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;51-200 employees</span>
                        </p>
                    </div>

                    <p class="abutnexa-text">Since 2005; we have been driving growth for hundreds of high profile clients throughout the region, and have since expanded our business on a global scale. Through digital marketing and growth marketing strategies, we help companies realize their true potential in a frictionless and innovative environment, where Sales, Marketing & Customer Service work together to increase sales and retain customers... <span class="fw-bolder" style="color: #7C2342;">Learn More</span> </p>
                </div>
            </div>
            <h4 class="pt-4 ml-0 other-job-txt">Others Jobs</h4>
            <div class="row">
                <div class="col-lg-12 pt-3 pb-3  res" style="background-color: #F9F9F9;border-radius: 20px;">
                    <div class="row">
                        <div class="col-2 cardsimg">
                            <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png" class="w-5" alt="w8">
                        </div>
                        <div class="col-8">
                            <p class="single-job-heading" style="margin: 0;padding: 0;"><b> Lorem Ipsum </b></p>
                            <p class="job-posted" style="margin: 0;padding: 0;">Posted 2 Hours Ago</p>
                        </div>
                        <div class="col-2">
                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                        </div>
                    </div>
                    <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde omnis ie natnatusus error... </p>
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
                            <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png" class="w-5" alt="w8">
                        </div>
                        <div class="col-8">
                            <p class="single-job-heading" style="margin: 0;padding: 0;"><b> Lorem Ipsum </b></p>
                            <p class="job-posted" style="margin: 0;padding: 0;">Posted 2 Hours Ago</p>
                        </div>
                        <div class="col-2">
                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                        </div>
                    </div>
                    <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde omnis ie natnatusus error... </p>
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
                            <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png" class="w-5" alt="w8">
                        </div>
                        <div class="col-8">
                            <p class="single-job-heading" style="margin: 0;padding: 0;"><b> Lorem Ipsum </b></p>
                            <p class="job-posted" style="margin: 0;padding: 0;">Posted 2 Hours Ago</p>
                        </div>
                        <div class="col-2">
                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                        </div>
                    </div>
                    <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde omnis ie natnatusus error... </p>
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