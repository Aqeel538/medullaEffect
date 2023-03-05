@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->
    @php
    $blink = 0;
    @endphp
    @include('userNew.singleUser.pages.company.secondNav')

    <div class="container mb-5 mt-5">
        <div class="container-fluid tagline-1">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 col-sm-10 col-12 text-center ">
                    <h1 class="headings-profile mt-5">Applicants</h1>
                    <p class="mt-4  john-para-afer-ques-heading mb-5">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                        quae ab illo inventore veritatis.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-lg-3 mt-md-3 mt-3 ">
            <div class="col-lg-5 col-12 ">
                <div class="recent-applications p-4" style="height: auto;">
                    <h1 class="profile-text-ques-heading-2 res-768 mb-5">All Jobs Listed</h1>
                    @foreach ($postedJobs as $postedJob)
                        <a href="{{ route('company.allApplicants', $postedJob->id) }}">
                            <div class="pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
                                <div class="row d-flex align-content-center justify-content-start">
                                    <div class="col-lg-3 col-md-3 col-12">
                                        <div class="img-holder"> <img
                                                src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                alt="w8" style="height: 75px;width:75px"></div>
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-12 ">
                                        <h3 class="m-0 p-0 inbox-chat-heading">{!! $postedJob->title ?? '' !!}</h3>
                                        <div class="row text-start">
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <p class="jobcategory"> {!! $postedJob->Categories->category ?? '' !!}</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-12">
                                                <p class="jobpost-time">
                                                    {{ \Carbon\Carbon::parse($postedJob->created_at)->diffForHumans() }}
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    @endforeach

                </div>

            </div>
            <div class="col-lg-7 col-12 mt-lg-0 mt-md-3 mt-3 ">
                <div class="recent-applications p-4" style="height: auto;">
                    <div class="pr-2 pl-2">
                        <h1 class=" profile-text-ques-heading">All Applicants</h1>
                        <p class="john-para-afer-ques-heading-2">Sed ut perspiciatis unde omnis iste natus error sit
                            voluptatem accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis.</p>
                        <!-- cards -->
                        <div class="pt-1 pb-5 flowx">
                            @foreach ($getAllApplicants as $getAllApplicant)
                                <div class="row">
                                    <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 "
                                        style="background: #FFFFFF;;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                    class="w-5" alt="w8">
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                                <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b>
                                                        {!! $getAllApplicant->users->name ?? '' !!}</b></p>
                                                <p class="job-posted" style="margin: 0; padding: 0 20px;">Applied .
                                                    {{ \Carbon\Carbon::parse($getAllApplicant->created_at)->diffForHumans() }}
                                                </p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3">{!! $getAllApplicant->users->description ?? '' !!}</p>
                                        <div class="jobviewbtns mt-1 mb-1">
                                            <a href="{{ route('company.applicantResume', $getAllApplicant->users->id) }}">
                                                <button class="buttonfill-apply ">View Resume</button>
                                            </a>
                                            <a href="{{ route('delete.applicants', $getAllApplicant->users->id) }}">
                                                <button class="buttonunfill-save ">Delete Application</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        </div>
    @endsection
