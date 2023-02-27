@extends('userNew.singleUser.layouts.main')
@section('content')
    @include('userNew.singleUser.pages.company.secondNav')

    <!-- 2nd nav end -->
    <div class="container mt-4">
        <div class="row crd-row-one">
            <div class="col-12 arrow ">
                <a href="{{ url()->previous() }}">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorarrow.png" alt=""
                        srcset=""></a>
            </div>
            <br />
            <br />
            <div class="col-lg-12 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings"> {!! $applicantResume->name ?? '' !!}</h2>
                    <p class="job-view-para-2">{!! $applicantResume->email ?? '' !!}</p>
                </div>
                <div class="col-lg-12 col-12 ps-0">
                    <div class="tabsrow d-flex justify-content-between">
                        <div class="allitems d-flex">
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp; &nbsp;Applied
                                        {!! \Carbon\Carbon::parse($applicantResume->created_at)->diffForHumans() ?? '' !!}</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <!-- right side of view job page -->

        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-7 col-md-7 col-12">
                <div class="questionare-job-respond">
                    <p>{!! $applicantResume->description ?? 'There is no description provided by the user yet!!!' !!}</p>
                </div>
                <div class="jobviewbtns mt-3 mb-1">
                    <?php
                    if (isset($applicant) && !empty($applicant)) {
                        $check = $applicant
                            ->where('applicant_id', $applicant->users->id)
                            ->where('status', 1)
                            ->first();
                    } else {
                        $check = null;
                    }
                    ?>
                    @if (isset($check) && !empty($check))
                        <a href="#">
                            <button class="buttonunfill-save">Accepted</button>
                        </a>
                    @else
                        <a href="{{ route('accept.applicants', $applicantResume->id) }}">
                            <button class="buttonfill-apply pl-4 pr-4">Accept</button>
                        </a>
                    @endif

                    {{-- <a href="">
                        <button class="buttonunfill-save">Archive</button>
                    </a> --}}

                    <?php
                    if (isset($applicant->archivedApplication) && !empty($applicant->archivedApplication)) {
                        $check = $applicant->archivedApplication->where('user_id', auth()->user()->id)->first();
                    } else {
                        $check = null;
                    }
                    ?>
                    @if (isset($check) && !empty($check))
                        <a href="#">
                            <button class="buttonunfill-save">Archived</button>
                        </a>
                    @else
                        <a href="{{ route('company.archiveJob', $applicantResume->id) }}">
                            <button class="buttonunfill-save">Archive</button>
                        </a>
                    @endif
                    <a href="{{ route('delete.applicants', $applicantResume->id) }}">
                        <button class="buttonunfill-save">Delete</button>
                    </a>
                </div>
            </div>

            <div class="col-lg-5 col-md-5 col-12 ">
                <div class="questionare-job-respond">
                    <h4 class="mb-4 resume-heading">Resume</h4>
                    <div class="">
                        <h6>Are you interested in full time or part time work?</h6>
                        <p>{!! $applicantResume->work_type ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your desired pay range?</h6>
                        <p>{!! $applicantResume->pay_range ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your nationality?</h6>
                        <p>{!! $applicantResume->nationality ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>Where are you located??</h5>
                            <p>{!! $applicantResume->located_in ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your desired industry and position?</h5>
                            <p>{!! $applicantResume->industry ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>Are you interested to work In-person, remote or hybrid?</h5>
                            <p>{!! $applicantResume->job_type ?? '' !!}</p>
                    </div>

                    <a href="{{ asset('uploads') }}/user/resumes/{{ $applicantResume->resume }}" class=""
                        target="_blank" style="color: #7C2342;
                        ">View uploaded resume</a>
                </div>
            </div>
        </div>
    </div>


    <!-- navbar res js end -->
@endsection
