@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->

    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.individual.secondNav')
    <!-- 2nd nav end -->
    <div class="container mt-4">
        <div class="row crd-row-one">
            <div class="col-12 arrow ">
                <a href="../Tagline.html">
                    <img src="../Assets/Images/landing-page-img/Vectorarrow.png" alt="" srcset=""></a>
            </div>
            <br />
            <br />
            <div class="col-lg-12 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings"> {!! $resume->name ?? '' !!}</h2>
                    <p class="job-view-para-2">{!! $resume->email ?? '' !!}</p>
                </div>
                <div class="col-lg-12 col-12 ps-0">
                    <div class="tabsrow d-flex justify-content-between">
                        <div class="allitems d-flex">
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp; &nbsp;Applied
                                        {{ \Carbon\Carbon::parse($resume->created_at)->diffForHumans() }}</span>
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
                    <p>{!! $resume->description ?? 'There is no description provided by the user yet!!!' !!}</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-12 ">
                <div class="questionare-job-respond">
                    <h4 class="mb-4 resume-heading">Resume</h4>
                    <div class="">
                        <h6>Are you interested in full time or part time work?</h6>
                        <p>{!! $resume->work_type ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your desired pay range?</h6>
                        <p>{!! $resume->pay_range ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your nationality?</h6>
                        <p>{!! $resume->nationality ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>Where are you located??</h5>
                            <p>{!! $resume->located_in ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>State your desired industry and position?</h5>
                            <p>{!! $resume->industry ?? '' !!}</p>
                    </div>
                    <div class="">
                        <h6>Are you interested to work In-person, remote or hybrid?</h5>
                            <p>{!! $resume->job_type ?? '' !!}</p>
                    </div>



                    <a href="{{ asset('uploads') }}/user/resumes/{{ $resume->resume }}" class="text-danger"
                        target="_blank">view
                        resume</a>
                </div>
            </div>
        </div>
    </div>


    <!-- navbar res js end -->
@endsection
