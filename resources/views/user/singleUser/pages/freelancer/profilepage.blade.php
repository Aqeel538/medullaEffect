@extends('user.singleUser.layouts.main')
@section('content')
    <!----- ---------2st--Navbar------------- -->
    {{-- <div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
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
                            <li><a href="{{ route('businesses.list') }}">Businesses</a></li>
                            <li><a href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
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
    </div> --}}

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
    <!---------------- -Navend--------------- -->

    <div class="container mb-5 mt-5">
        <h1 class="headings-profile mb-4">Profile</h1>
        <div class="row mt-3 ">
            <div class="col-lg-3 mt-md-5 mb-lg-0 mb-sm-4 mt-lg-0 mb-xs-4   col-12 text-center">
                <div class=" pt-5 pb-5 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="avatar-upload">
                        <form id="edit_image_form">
                            <div class="avatar-edit">
                                <?php $image = isset($user->image) && !empty($user->image) ? $user->image : ''; ?>
                                <input type='file' name="image" id="imageUpload" data-default-file="{{<?= $user->image ?>}}"
                                    accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                    style="background-image: url({!! $user->image !!});">
                                </div>
                            </div>
                        </form>
                    </div>
                    <h6 class="justify-content-center pt-2 pb-2 john-text">{!! $user->name ?? '' !!}</h6>
                    <p class="john-para">{!! $user->address ?? '' !!}</p>
                </div>
            </div>
            <div class="col-lg-6 ps-4 pe-4 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="pr-2 pl-2">
                    <h1 class="pt-4 profile-text-ques-heading">All Services</h1>
                    <p class="john-para-afer-ques-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                    <div class="pt-3 pb-5">
                        @foreach ($services as $service)
                            <div class="row">
                                <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                    style="background: #FFFFFF;;border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-2 cardsimg">
                                            <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                                                class="w-5" alt="w8">
                                        </div>
                                        <div class="col-8">
                                            <p class="single-job-heading" style="margin: 0;"><b>{!! $service->title ?? '' !!}</b>
                                            </p>
                                            <p class="job-posted" style="margin: 0;">{!! $service->created_at ?? '' !!}</p>
                                        </div>
                                        <div class="col-2">
                                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <p class="abutnexa-text pt-4 pb-3">{!! $service->discription ?? '' !!}</p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <a href="{{ route('edit.service', $service->id) }}"><button
                                                class="buttonfill-apply">Edit Service</button></a>

                                        @if ($service->status == 1)
                                            <a href="{{ route('pouse.service', $service->id) }}"><button
                                                    class="buttonunfill-save">Pause for now</button></a>
                                        @else
                                            <a href="{{ route('pouse.service', $service->id) }}"><button
                                                    class="buttonunfill-save">Enable</button></a>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="row">
                <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res" style="background: #FFFFFF;;border-radius: 20px;">
                    <div class="row">
                        <div class="col-2 cardsimg">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png" class="w-5" alt="w8">
                </div>
                <div class="col-8">
                    <p class="single-job-heading" style="margin: 0;"><b> Lorem Ipsum </b></p>
                    <p class="job-posted" style="margin: 0;">Posted 2 Hours Ago</p>
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
                    <p class="job-posted" style="margin: 0;">Posted 2 Hours Ago</p>
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
                    <p class="job-posted" style="margin: 0;">Posted 2 Hours Ago</p>
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
    </div> --}}

                    </div>
                </div>

            </div>

            <div class="col-lg-3 mt-md-5 mt-lg-0 col-12 mb-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center">
                <div class="pt-5 pb-5 pr-3 pl-3 right-card" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                    <h6 class="john-text justify-content-center">New Service</h6>
                    <p class="john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn..</p>
                    <a href="{{ route('add.service') }}">
                        <button class="buttonunfill-create">Create</button>
                    </a>
                </div>


            </div>
        </div>
    </div>
@endsection
