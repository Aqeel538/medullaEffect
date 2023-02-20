@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- 2nd nav -->
    @include('userNew.singleUser.pages.freelancer.secondNav')



    <!----- ---------2st--Navbar end------------- -->


    <div class="container mt-4">
        <div class="row crd-row-one">
            <div class="col-12 arrow ">
                <a href="../Tagline.html">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorarrow.png" alt=""
                        srcset=""></a>
            </div>
            <br />
            <br />
            <div class="col-lg-12 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">{{ $aboutService->title }}</h2>
                    <p class="job-view-para-2">{{ $aboutService->Categories->category }}</p>
                </div>
                <div class="col-lg-8 col-12 ps-0">
                    <div class="tabsrow d-flex justify-content-between">
                        <div class="allitems d-flex">
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase"
                                            aria-hidden="true"></i>&nbsp;${!! $aboutService->rate ?? '' !!}</span>
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
                            {!! $aboutService->discription ?? 'There is no detail provided!' !!}
                        </p>
                    </div>
                </div>

                <div class="jobviewbtns mt-5 mb-4">
                    <a href="{{ route('edit.service', $aboutService->id) }}">
                        <button class="buttonfill-apply pl-4 pr-4">Edit Service</button>
                    </a>
                    @if ($aboutService->status == 1)
                        <a href="{{ route('pouse.service', $aboutService->id) }}">
                            <button class="buttonunfill-save">Pause for now</button>
                        </a>
                    @else
                        <a href="{{ route('pouse.service', $aboutService->id) }}"><button
                                class="buttonunfill-save">Enable</button></a>
                    @endif
                </div>
            </div>
            <!-- right side of view job page -->
        </div>
    </div>
    </div>
@endsection
