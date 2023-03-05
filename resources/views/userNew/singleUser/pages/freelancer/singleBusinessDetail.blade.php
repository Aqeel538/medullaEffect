@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- -----1st--Navbar--------- -->

    <!-- 2nd nav -->
    <!----- ---------2st--Navbar------------- -->
    @include('userNew.singleUser.pages.freelancer.secondNav')

    <div class="container mt-4 crd-row-one">
        <div class="row ">
            <div class="col-12  ">
                <a href="#">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorarrow.png" alt=""
                        srcset="">
            </div>
            <br />
            <br />
            <div class="row">
                <div class="col-lg-8  col-12 ">
                    <div class="col-12" style="padding: 0;">
                        <h2 class="job-headings">{{ $company->company_name }}</h2>
                        <p class="job-view-para-2">Digital Marketing</p>
                    </div>

                    <div class="tabsrow d-flex justify-content-between">
                        <div class="allitems d-flex">
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase" aria-hidden="true"></i>&nbsp;12
                                        Employees</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fas-bag fa fa-briefcase"
                                            aria-hidden="true"></i>&nbsp;{{ $company->email }}</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;

                        </div>
                        <div class="time">
                            <p class="">Active User
                            </p>

                        </div>
                    </div>


                    <!-- tabs of nav -->
                    <div class="row mt-4">
                        <div class="col-12">
                            <p class="job-details">
                                Since 2005; we have been driving growth for hundreds of high
                                profile clients throughout the region, and have since
                                expanded our business on a global scale. Through digital
                                marketing and growth marketing strategies, we help companies
                                realize their true potential in a frictionless and
                                innovative environment, where Sales, Marketing & Customer
                                Service work together to increase sales and retain
                                customers.
                                <br> <br> We also know that in the world of business, no
                                word is more important than GROWTH and standing still should
                                never be an option. As a growth agency, we are always moving
                                forward as the digital space continues to evolve. With this
                                in mind, we understand and appreciate the magnitude of the
                                digital evolution and have our finger on the pulse of all
                                things Web3. <br> <br> Since Web3 came onto our radar, we have
                                invested our time and resources in studying the space and
                                learning about the enormous opportunities that exist within
                                this arena, and how these opportunities can benefit our
                                clients and their business goals. We are at the forefront of
                                Web 3.0 commercial opportunities and provide a variety of
                                services for leading brands as they make this new-age
                                transition. Through digital marketing, growth marketing and
                                Web3 solutions, Nexa offers fast, sustainable and efficient
                                growth for all our clients.
                            </p>
                        </div>
                    </div>

                    <div class="jobviewbtns mt-5 mb-4">
                        <a href="{{ route('show_chat', $company->id) }}">
                            <button class="buttonfill-apply pl-4 pr-4">Contact</button>
                        </a>
                        {{-- <a href="{{ route('save_service', $company->id) }}">
                            <button class="buttonunfill-save">Save for Later</button>
                        </a> --}}


                        <?php
                        if (isset($company->save_freelancer_service) && !empty($company->save_freelancer_service)) {
                            $check = $company->save_freelancer_service->where('user_id', auth()->user()->id)->first();
                        } else {
                            $check = null;
                        }
                        ?>
                        @if (isset($check) && !empty($check))
                            <a href="#">
                                <button class="buttonunfill-save">Saved</button>
                            </a>
                        @else
                            <a href="{{ route('save_service', $company->id) }}">
                                <button class="buttonunfill-save">Save for Later</button>
                            </a>
                        @endif


                        <a href=""> <button class="buttonunfill-saves">Share</button></a>
                    </div>
                </div>
                <!-- right side of view job page -->
                <div class="col-lg-4  col-12 ">
                    <h4 class="mb-5 ml-0 other-job-txt">Other Businesses</h4>
                    @foreach ($companies as $companies)
                        @if ($companies->id != $company->id)
                            <a href="{{ route('business.details', $companies->id) }}">
                                <div class="row">
                                    <div class="col-lg-12 pt-3 pb-3  mt-3  res"
                                        style="background-color: #F9F9F9;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-2 cardsimg">

                                                <?php $image = isset($companies->image) && !empty($companies->image) ? $companies->image : ''; ?>

                                                <img src="<?= $image ?>" style="height: 50px; width: 50px" alt=""
                                                    srcset="" />
                                            </div>
                                            <div class="col-8">
                                                <p class="single-job-heading" style="margin: 0;padding: 0;">
                                                    <b>{{ $companies->company_name }}</b>
                                                </p>
                                                <p class="job-posted" style="margin: 0;padding: 0;">Active User</p>
                                            </div>
                                            <div class="col-2">
                                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                            voluptatem
                                            accn. Sed ut perspiciatis unde otis ie natus error sit voluptatem accn. Sed ut
                                            perspiciatis
                                            unde omnis ie natnatusus error... </p>
                                        <div class="jobviewbtns mt-1 mb-1">
                                            <a href="{{ route('show_chat', $company->id) }}">
                                                <button class="buttonfill-apply pl-4 pr-4">Contact</button>
                                            </a>

                                            <?php
                                            if (isset($companies->save_freelancer_service) && !empty($companies->save_freelancer_service)) {
                                                $check = $companies->save_freelancer_service->where('user_id', auth()->user()->id)->first();
                                            } else {
                                                $check = null;
                                            }
                                            ?>
                                            @if (isset($check) && !empty($check))
                                                <a href="#">
                                                    <button class="buttonunfill-save">Saved</button>
                                                </a>
                                            @else
                                                <a href="{{ route('save_service', $companies->id) }}">
                                                    <button class="buttonunfill-save">Save for Later</button>
                                                </a>
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
