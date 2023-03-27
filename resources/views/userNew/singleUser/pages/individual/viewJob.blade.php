@extends('userNew.singleUser.layouts.main')
@section('content')
    <style>
        .cardsimg img {
            border: 2px solid #7C2342;
            border-radius: 50%;
            width: 40px;
            height: 35px !important;
        }
    </style>


    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.individual.secondNav')

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 job-view-crd-res-575">
                <a href="{{ url()->previous() }}">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorarrow.png" alt=""
                        srcset=""></a>
            </div>
            <br>
            <br>
            <div class="col-lg-8 col-12 job-view-crd-res-575">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">{!! $jobDetail->title ?? '' !!}</h2>
                    <p class="job-view-para">{!! $jobDetail->Users->company_name ?? '' !!} - {!! $jobDetail->Users->industry ?? '' !!}</p>
                </div>
                <div class="tabsrow">
                    <div class="allitems d-flex">
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-user"
                                        aria-hidden="true"></i>&nbsp;{!! $jobDetail->Users->job_type ?? '' !!}</span>
                            </p>
                        </div>
                        <div class="icon-text">
                            <p class="job-view-para ">
                                <span> <i class="fas-bag fa fa-clock"
                                        aria-hidden="true"></i>&nbsp;{!! $jobDetail->Users->work_type ?? '' !!}</span>
                            </p>
                        </div>
                        <div class="icon-text">
                            <p class="job-view-para ">
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $jobDetail->hiring_type ?? 'Hiring type' !!}</span>
                            </p>
                        </div>
                    </div>
                    <div class="time">
                        <p class="mb-0">{!! \Carbon\Carbon::parse($jobDetail->created_at)->diffForHumans() ?? '' !!}
                        </p>

                    </div>
                </div>
                <p class="pt-3 job-details"> {!! $jobDetail->description ?? '' !!}
                </p>
                <div class="jobviewbtns mt-5 mb-4">
                    <?php
                    if (isset($jobDetail->applied_jobs) && !empty($jobDetail->applied_jobs)) {
                        $check = $jobDetail->applied_jobs->where('applicant_id', auth()->user()->id)->first();
                    } else {
                        $check = null;
                    }
                    ?>
                    @if (isset($check) && !empty($check))
                        <a href="#">
                            <button class="buttonfill-apply">Applied</button>
                        </a>
                    @else
                        <a href="{{ route('individual.apply.now', $jobDetail->id) }}">
                            <button class="buttonfill-apply">Apply Now</button>
                        </a>
                    @endif
                    {{-- CHECK IF JOB IS SAVED --}}
                    <?php
                    if (isset($jobDetail->saved_jobs) && !empty($jobDetail->saved_jobs)) {
                        $check = $jobDetail->saved_jobs->where('user_id', auth()->user()->id)->first();
                    } else {
                        $check = null;
                    }
                    ?>
                    @if (isset($check) && !empty($check))
                        <a href="#">
                            <button class="buttonunfill-save">Saved</button>
                        </a>
                    @else
                        <a href="{{ route('individual.saveForLater', $jobDetail->id) }}"><button
                                class="buttonunfill-save">Save for Later</button></a>
                    @endif
                </div>
            </div>
            <!-- right side of view job page -->
            <div class="col-lg-4 col-12 job-view-crd-res-575">
                <div class="row">
                    <div class="col-lg-12 col-md-12  pt-3 pb-3 res" style="background-color: #F9F9F9;border-radius: 20px;">

                        <div class="abutnexa d-flex justify-content-between">
                            <h4 class="about-nexa-heading">About{!! $jobDetail->Users->company_name ?? '' !!}</h4>

                            {{-- <a href="{{ route('follow.company', $jobDetail->Users->id) }}"><button
                                    class="buttonunfill-save-follow
                                        ">Follow</button>
                            </a> --}}
                            {{-- {{ dd($jobDetail->Users->followers) }} --}}
                            <?php
                            if (isset($jobDetail->Users->followers) && !empty($jobDetail->Users->followers)) {
                                $check = $jobDetail->Users->followers->where('user_id', auth()->user()->id)->first();
                            } else {
                                $check = null;
                            }
                            ?>
                            @if (isset($check) && !empty($check))
                                <a href="{{ route('follow.company', $jobDetail->Users->id) }}">
                                    <button class="buttonunfill-save-follow">Unfollow</button>
                                </a>
                            @else
                                <a href="{{ route('follow.company', $jobDetail->Users->id) }}">
                                    <button class="buttonunfill-save-follow">Follow</button>
                                </a>
                            @endif
                        </div>

                        <div class="icon-text d-flex justify-content-between">
                            <p class="me-2 job-view-paras">
                                <span> <i class="fas-bag fa fa-industry"
                                        aria-hidden="true"></i>&nbsp;{!! $jobDetail->Users->industry ?? '' !!}</span>
                            </p>

                            <p class="res-p-1200">
                                <span> <i class="fas-bag fa fa-user" aria-hidden="true"></i>&nbsp;{!! $jobDetail->Users->employees ?? '' !!}
                                    employees</span>
                            </p>
                        </div>

                        <p class="abutnexa-text">{!! $jobDetail->Users->description ?? '' !!}
                            <a href="{{ route('individual.companyDetails', $jobDetail->Users->id) }}">
                                <span class="fw-bolder" style="color: #7C2342;">Learn More</span>
                            </a>
                        </p>
                    </div>
                </div>
                <h4 class="pt-4 ml-0 other-job-txt">Others Jobs</h4>
                <div class="row">
                    @foreach ($otherJobs as $otherJob)
                        @foreach ($otherJob->jobs as $getjobs)
                            @if ($jobDetail->id != $getjobs->id)
                                <a href="{{ route('individual.jodDetails', $getjobs->id) }}">
                                    <div class="col-lg-12 pt-3 pb-3 mt-3"
                                        style="background-color: #F9F9F9;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-2 cardsimg">
                                                <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                    class="w-5" alt="w8">
                                            </div>
                                            <div class="col-8">
                                                <p class="single-job-heading res-scr-1200" style="margin: 0;padding: 0;">
                                                    <b>
                                                        {{ $getjobs->title }}
                                                    </b>
                                                </p>
                                                <p class="job-posted res-scr-1200" style="margin: 0;padding: 0;">
                                                    {!! \Carbon\Carbon::parse($getjobs->created_at)->diffForHumans() ?? '' !!}</p>
                                            </div>
                                            <div class="col-2">
                                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3" style="height: 70px;overflow: hidden;">
                                            {!! $getjobs->description ?? '' !!} </p>
                                        <div class="jobviewbtns mt-1 mb-1">
                                            <?php
                                            if (isset($getjobs->applied_jobs) && !empty($getjobs->applied_jobs)) {
                                                $check = $getjobs->applied_jobs->where('applicant_id', auth()->user()->id)->first();
                                            } else {
                                                $check = null;
                                            }
                                            ?>
                                            @if (isset($check) && !empty($check))
                                                <a href="#">
                                                    <button class="buttonfill-apply">Applied</button>
                                                </a>
                                            @else
                                                <a href="{{ route('individual.apply.now', $getjobs->id) }}">
                                                    <button class="buttonfill-apply">Apply Now</button>
                                                </a>
                                            @endif
                                            {{-- CHECK IF JOB IS SAVED --}}
                                            <?php
                                            if (isset($getjobs->saved_jobs) && !empty($getjobs->saved_jobs)) {
                                                $check = $getjobs->saved_jobs->where('user_id', auth()->user()->id)->first();
                                            } else {
                                                $check = null;
                                            }
                                            ?>
                                            @if (isset($check) && !empty($check))
                                                <a href="#">
                                                    <button class="buttonunfill-save">Saved</button>
                                                </a>
                                            @else
                                                <a href="{{ route('individual.saveForLater', $getjobs->id) }}"><button
                                                        class="buttonunfill-save">Save for Later</button></a>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            @endif
                        @endforeach
                    @endforeach

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
