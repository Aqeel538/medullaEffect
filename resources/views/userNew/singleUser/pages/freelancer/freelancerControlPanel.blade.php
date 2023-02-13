@extends('userNew.singleUser.layouts.main')
@section('content')
  <!----- ---------2st--Navbar------------- -->
  <div class="container-fluid second-nav">
    <div class="container">
        <div class="headers">
            <nav class="navbar-questionare">

                <div class="">
                    <img src="{{asset('user')}}/Assets/Images/landing-page-img/Vectorsearch.png" class="search-icon-index" alt=""
                        srcset="">
                </div>
                <ul class="navbar-lists" id="myDIV">

                    <li><a class="navbar-link" href="{{ route('businesses.list') }}">Businesses</a></li>
                    <li><a class="navbar-link  mylist active"
                            href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
                    <li><a class="navbar-link" href="#">Settings</a></li>

                </ul>
                <div>
                    <a class="navbar-link" href="{{ route('see.notifications') }}">
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorbell.png" class="bells"
                            alt="" srcset="">
                    </a>
                    &nbsp;
                    <a class="navbar-link" href="">
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vector.png" class="bell"
                            alt="" srcset="">
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
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <h1 class="headings-profile mb-4">Profile</h1>
        <div class="row mt-3 ">
            <div class="col-lg-3 mt-md-5 mb-lg-0 mb-sm-4 mt-lg-0 mb-xs-4   col-12 text-center">
                <div class=" pt-5 pb-5 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="img-holder">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" alt="" srcset="">
                    </div>
                    <h6 class="justify-content-center pt-2 pb-2 john-text">John Doe</h6>
                    <p class="john-para">123 Avenue Park City, Bhurban
                        4 Years Experience</p>
                    <i class="fa-solid fa-phone"></i> <span style="color:  #7C2342;">123456789</span>
                    <br>
                    <i class="fa-regular fa-envelope"></i> <span style="color:  #7C2342;">abc@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-6 ps-4 pe-4 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="pr-2 pl-2">
                    <h1 class="pt-4 profile-text-ques-heading">All Services</h1>
                    <p class="john-para-afer-ques-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                    <!-- cards -->
                    <div class="pt-3 pb-5">
                        <div class="row">
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                style="background: #FFFFFF;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b> Lorem Ipsum
                                            </b></p>
                                        <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                        <i class="fa-solid fa-share"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                    voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed
                                    ut perspiciatis unde omnis ie natnatusus error... </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Edit Service</button>
                                    <button class="buttonunfill-save">Pause for now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                style="background: #FFFFFF;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b> Lorem Ipsum
                                            </b></p>
                                        <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                        <i class="fa-solid fa-share"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                    voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed
                                    ut perspiciatis unde omnis ie natnatusus error... </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Edit Service</button>
                                    <button class="buttonunfill-save">Pause for now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                style="background: #FFFFFF;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b> Lorem Ipsum
                                            </b></p>
                                        <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                        <i class="fa-solid fa-share"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                    voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed
                                    ut perspiciatis unde omnis ie natnatusus error... </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Edit Service</button>
                                    <button class="buttonunfill-save">Pause for now</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                style="background: #FFFFFF;;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b> Lorem Ipsum
                                            </b></p>
                                        <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fa-sharp fa-solid fa-trash"></i>
                                        <i class="fa-solid fa-share"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                    voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed
                                    ut perspiciatis unde omnis ie natnatusus error... </p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <button class="buttonfill-apply">Edit Service</button>
                                    <button class="buttonunfill-save">Pause for now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-md-5 mt-lg-0 col-12 mb-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center">
                <div class="pt-5 pb-5 pr-3 pl-3 right-card" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                    <h6 class="john-text justify-content-center">New Service</h6>
                    <p class="john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn..</p>
                    <a href="../Sana/Profile.html">
                        <button class="buttonunfill-create">Create</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
