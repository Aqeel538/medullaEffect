@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- -----1st--Navbar--------- -->
    @php
        $blink = 1;
    @endphp

    @include('userNew.singleUser.pages.company.secondNav')
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <div class="container-fluid tagline-1">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-7 col-sm-9 col-12 text-center Halvetica">
                    <h1 class="headings-profile mt-5">Notification</h1>
                    <p class="ps-4 mt-4 john-para-afer-ques-heading mb-4">
                        Loremis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                        ipsa qua.
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-3 justify-content-center">

            <div class="col-lg-7  mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-md-10 col-10">
                <div class="pr-2 pl-2">

                    <!-- cards -->
                    <div class="pt-3 pb-5">
                        @foreach ($notifications as $notification)
                            <a href="{{ route('company.jodDetails', $notification->jobId) }}" style="text-decoration: none">
                                <div class="row">
                                    <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 "
                                        style="background: #F9F9F9;;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                <img style="width: 54px;height: 54px;"
                                                    src="{{ $notification->companyGet->image }}" class="w-5"
                                                    alt="w8">
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                                <p class="single-job-heading" style="margin: 0; padding: 0 20px;">
                                                    <b>{!! $notification->title ?? '' !!}
                                                    </b>
                                                </p>
                                                <p class="job-posted" style="margin: 0; padding: 0 20px;">
                                                    {!! $notification->companyGet->company_name ?? '' !!}</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <div style="height:70px;overflow:hidden;">
                                            {{-- <p class="abutnexa-text
                                            pt-3"
                                                style="overflow: hidden;">
                                                {!! $job->description ?? '' !!}</p> --}}
                                            <p class="abutnexa-text pb-3" style="overflow: hidden;">
                                                {!! $notification->subject ?? '' !!} </p>
                                        </div>
                                        {{-- <p class="abutnexa-text pt-4 pb-3">{!! $notification->subject ?? '' !!} </p> --}}
                                        <div class="jobviewbtns mt-1 mb-1">
                                            <form method="POST" action="{{ route('dismiss.notification') }}">
                                                @csrf
                                                <input type="hidden" name="notification_id"
                                                    value="{{ $notification->id }}">
                                                <button type="submit" class="buttonfill-apply">Dismiss</button>
                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- scrpt -->
@endsection
