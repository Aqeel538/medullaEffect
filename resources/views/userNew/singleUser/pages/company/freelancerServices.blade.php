@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- 2nd nav end -->
    @php
        $blink = 0;
    @endphp
    @include('userNew.singleUser.pages.company.secondNav')

    <?php
    $toasterSaveforlater = session()->get('savedForLater');
    
    ?>
    {{-- JOB TOASTERS --}}
    @if ($toasterSaveforlater == 1)
        <script>
            toastr.info('already saved');
        </script>
        {{ session()->put('savedForLater', 0) }}
    @elseif ($toasterSaveforlater == 2)
        <script>
            toastr.success('saved successfuly');
        </script>
        {{ session()->put('savedForLater', 0) }}
    @elseif ($toasterSaveforlater == 3)
        <script>
            toastr.success('job updated successfully');
        </script>
        {{ session()->put('savedForLater', 0) }}
    @endif


    <div class="container   mt-4">
        <div class="row crd-row-one">
            <div class="col-12  ">
                <a href="">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorarrow.png" alt=""
                        srcset=""></a>
            </div>
            <br />
            <br />
            <div class="col-lg-8 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">{{ $freelancerServices->name }}</h2>
                    <p class="job-view-para-2">145 Reviews</p>
                </div>

                <div class="tabsrow d-flex justify-content-between">
                    <div class="allitems d-flex">
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;Top Rated</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;{{ $count }}
                                    Services</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                        <div class="icon-text">
                            <p class="job-view-para">
                                <span> <i class="fas-bag fa fa-briefcase"
                                        aria-hidden="true"></i>&nbsp;{!! $freelancerServices->job_type ?? 'Job Type' !!}</span>
                            </p>
                        </div> &nbsp; &nbsp; &nbsp;
                    </div>
                    <div class="time">
                        <p class="">Online
                        </p>

                    </div>
                </div>

                <!-- tabs of nav -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="job-details">
                            {!! $freelancerServices->description ?? 'There is no description' !!}
                        </p>
                    </div>
                </div>

                <div class="jobviewbtns mt-5 mb-4">
                    <a href="{{ route('company.show.chat', $freelancerServices->id) }}">
                        <button class="buttonfill-apply pl-4 pr-4">Contact</button>
                    </a>

                    {{-- <?php
                    if (isset($freelancerServices->save_freelancer_service) && !empty($freelancerServices->save_freelancer_service)) {
                        $check = $freelancerServices->save_freelancer_service->where('user_id', auth()->user()->id)->first();
                    } else {
                        $check = null;
                    }
                    ?>
                    @if (isset($check) && !empty($check))
                        <a href="#">
                            <button class="buttonunfill-save">Saved</button>
                        </a>
                    @else
                        <a href="{{ route('save_service', $freelancerServices->id) }}">
                            <button class="buttonunfill-save">Save for Later</button>
                        </a>
                    @endif --}}

                </div>
            </div>
            <!-- right side of view job page -->
            <div class="col-lg-4 col-12">
                <h4 class="mb-5 ml-0 other-job-txt">Services</h4>
                {{-- @foreach ($freelancerServices as $freelancers) --}}
                @foreach ($freelancerServices->services as $service)
                    @if ($service->status == 1)
                        <a href="{{ route('service.detail', $service->id) }}">
                            <div class="row">
                                <div class="col-lg-12 pt-3 pb-3  " style="background-color: #F9F9F9;border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-2 cardsimg">
                                            <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                class="w-5" alt="w8">
                                        </div>
                                        <div class="col-8">
                                            <p class="single-job-heading" style="margin: 0;padding: 0;">
                                                <b>{{ $service->title }}</b>
                                            </p>
                                            <p class="job-posted" style="margin: 0;padding: 0;">Most Liked</p>
                                        </div>
                                        <div class="col-2">
                                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <p class="abutnexa-text pt-4 pb-3">
                                        {!! $service->discription ?? 'There is no description' !!}
                                    </p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <a href="{{ route('company.show.chat', $freelancerServices->id) }}">
                                            <button class="buttonfill-apply pl-4 pr-4">Contact</button>
                                        </a>

                                        <?php
                                        if (isset($service->CompanySaveForLater) && !empty($service->CompanySaveForLater)) {
                                            $check = $service->CompanySaveForLater->where('user_id', auth()->user()->id)->first();
                                        } else {
                                            $check = null;
                                        }
                                        ?>
                                        @if (isset($check) && !empty($check))
                                            <a href="#">
                                                <button class="buttonunfill-save">Saved</button>
                                            </a>
                                        @else
                                            <a href="{{ route('company.saveForLater', $service->id) }}">
                                                <button class="buttonunfill-save">Save for Later</button>
                                            </a>
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </a>
                    @endif
                @endforeach
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
    </div>
@endsection
