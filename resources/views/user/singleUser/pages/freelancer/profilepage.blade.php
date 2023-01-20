@extends('user.singleUser.layouts.main')
@section('content')
<!----- ---------2st--Navbar------------- -->
<div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
    <header>

      <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
        <div class="container-fluid p-0">
          <div>
            <span><i class="ri-search-line start_16_respons"></i></span>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list">
              <li><a href="../Tagline.html">Businesses</a></li>
              <li><a href="#">Freelancers</a></li>
              <li><a href="#">Settings</a></li>
           
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
        </div>
      </div>
      <div class="col-lg-6 ps-4 pe-4 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
        style="background-color: #F9F9F9;  border-radius: 21.0305px;">
        <div class="pr-2 pl-2">
          <h1 class="pt-4 profile-text-ques-heading">All Services</h1>
          <p class="john-para-afer-ques-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
          <div class="pt-3 pb-5">
            <div class="row">
                <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res" style="background: #FFFFFF;;border-radius: 20px;">
                    <div class="row">
                        <div class="col-2 cardsimg">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" class="w-5" alt="w8">
                        </div>
                        <div class="col-8">
                             <p class="single-job-heading" style="margin: 0;"><b> Lorem Ipsum </b></p>
                             <p class="job-posted"  style="margin: 0;">Posted 2 Hours Ago</p>
                    </div>
                    <div class="col-2">
                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                    </div>
                    </div>
                     <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde omnis ie natnatusus error... </p>
                     <div class="jobviewbtns mt-1 mb-1">
                        <button class="buttonfill-apply">Edit Service</button>
                        <button class="buttonunfill-save">Pause for now</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res" style="background: #FFFFFF;;border-radius: 20px;">
                    <div class="row">
                        <div class="col-2 cardsimg">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" class="w-5" alt="w8">
                        </div>
                        <div class="col-8">
                             <p class="single-job-heading" style="margin: 0;"><b> Lorem Ipsum </b></p>
                             <p class="job-posted"  style="margin: 0;">Posted 2 Hours Ago</p>
                    </div>
                    <div class="col-2">
                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                    </div>
                    </div>
                     <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde omnis ie natnatusus error... </p>
                     <div class="jobviewbtns mt-1 mb-1">
                        <button class="buttonfill-apply">Edit Service</button>
                        <button class="buttonunfill-save">Pause for now</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res" style="background: #FFFFFF;;border-radius: 20px;">
                    <div class="row">
                        <div class="col-2 cardsimg">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" class="w-5" alt="w8">
                        </div>
                        <div class="col-8">
                             <p class="single-job-heading" style="margin: 0;"><b> Lorem Ipsum </b></p>
                             <p class="job-posted"  style="margin: 0;">Posted 2 Hours Ago</p>
                    </div>
                    <div class="col-2">
                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                    </div>
                    </div>
                     <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde omnis ie natnatusus error... </p>
                     <div class="jobviewbtns mt-1 mb-1">
                        <button class="buttonfill-apply">Edit Service</button>
                        <button class="buttonunfill-save">Pause for now</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res" style="background: #FFFFFF;;border-radius: 20px;">
                    <div class="row">
                        <div class="col-2 cardsimg">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" class="w-5" alt="w8">
                        </div>
                        <div class="col-8">
                             <p class="single-job-heading" style="margin: 0;"><b> Lorem Ipsum </b></p>
                             <p class="job-posted"  style="margin: 0;">Posted 2 Hours Ago</p>
                    </div>
                    <div class="col-2">
                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                    </div>
                    </div>
                     <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut perspiciatis unde omnis ie natnatusus error... </p>
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
            <button class="buttonunfill-create">Create</button>
        </a>
        </div>


      </div>
    </div>
  </div>
@endsection
