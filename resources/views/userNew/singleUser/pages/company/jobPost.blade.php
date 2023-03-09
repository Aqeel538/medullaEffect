@extends('userNew.singleUser.layouts.main')
@section('content')
    @php
        $blink = 0;
    @endphp
    @include('userNew.singleUser.pages.company.secondNav')
    <!---------------- -Navend--------------- -->
    <div class="container-fluid mt-5 plg-4 p-md-4 p-sm-3 p-1">

        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-12 text-center justify-content-center">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="headings">Jobs</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-10 pt-2 pb-3 offset-1">
                        <p class="descriptions">PoSt job Hire people through Medulla...nis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 pt-2 pb-3 offset-1">
                        <a href="{{ route('company_jobs_form', 0) }}">
                            <button class="buttonfill-apply pl-4 pr-4">Post job</button>
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="tab-wrapper mt-3">
            <ul class="tabs Halvetica">


                <label class="tab-link active option_radio" data-tab="1" for="jobs">
                    <input type="radio" id="jobs" name=" Jobs" checked> <span></span>
                    Active Jobs</label>


                <label class="tab-link option_radio" data-tab="2" for="sav">
                    <input type="radio" id="sav" name=" Jobs"> <span></span>
                    Inactive Job</label>

                    <label class="tab-link option_radio" data-tab="3" for="s">
                        <input type="radio" id="s" name=" Jobs"> <span></span>
                       Paused Job</label>
            </ul>
        </div>

        <div class="content-wrapper crd-row-one">
            <!-- ------------step--1---Tab------------- -->
            <div id="tab-1" class="tab-content active">
                <div class="row mt-5 mb-3">
                    @foreach ($jobsPosted as $job)
                        <div class="col-lg-4 col-md-6 col-12  mt-lg-0 mt-md-0 mt-3 ">
                            <a href="{{ route('company.jodDetails', $job->id) }}">
                                <div class="p-3 mt-3" style="background: #F4F4F4;border-radius: 20px;">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                            <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                class="w-5" alt="w8">
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                            <p class="single-job-heading" style="margin: 0; padding: 0 35px;"><b>
                                                    {!! $job->title ?? '' !!}
                                                </b>
                                            </p>
                                            <p class="job-posted" style="margin: 0; padding: 0 35px;">Most Popular</p>
                                        </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                            <i class="fas-elip fa-solid fa-ellipsis"></i>
                                        </div>
                                    </div>
                                    <p class="abutnexa-text pt-4 pb-3" maxlength="40"
                                        style="height: 70px;overflow: hidden;">
                                        {!! $job->short_description ?? 'There is no short description yet...' !!}</p>
                                    <div class="jobviewbtns mt-1 mb-1">
                                        <a href="{{ route('company_jobs_form', $job->id) }}">
                                            <button class="buttonfill-apply pl-4 pr-4">Edit Job</button>
                                        </a>
                                        {{-- <a href="{{ route('company.archiveJob', $job->id) }}">
                                            <button class="buttonunfill-creates">Archive Job</button>
                                        </a> --}}



                                        <?php
                                        if (isset($job->archived_jobs) && !empty($job->archived_jobs)) {
                                            $check = $job->archived_jobs->where('user_id', auth()->user()->id)->first();
                                        } else {
                                            $check = null;
                                        }
                                        ?>
                                        @if (isset($check) && !empty($check))
                                            <a href="#">
                                                <button class="buttonunfill-save">Archived</button>
                                            </a>
                                        @else
                                            <a href="{{ route('company.archiveJob', $job->id) }}">
                                                <button class="buttonunfill-save">Archive job</button>
                                            </a>
                                        @endif



                                        <button class="buttonunfill-save"
                                            onclick="deleteConfirmation({{ $job->id }})">Delete</button>
                                    </div>
                                </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <!-- ------------step--2---Tab------------- -->
            <div id="tab-2" class="tab-content ">
                <div class="row  mt-5 mb-3">
                    @foreach ($archiveJobs as $archiveJob)
                        <div class="col-lg-4 col-md-4 col-12  mt-lg-0 mt-md-0 mt-3 ">
                            <div class="p-3 mt-3" style="background: #F4F4F4;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 35px;"><b>
                                                {!! $archiveJob->getjob->title ?? '' !!}
                                            </b>
                                        </p>
                                        <p class="job-posted" style="margin: 0; padding: 0 35px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3" style="height: 70px"> {!! $archiveJob->getjob->description ?? '' !!}</p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <a href="{{ route('company_jobs_form', $job->id) }}">
                                        <button class="buttonfill-apply pl-4 pr-4">Edit Job</button>
                                    </a>

                                    <?php
                                    if (isset($archiveJob) && !empty($archiveJob)) {
                                        $check = $archiveJob->where('user_id', auth()->user()->id)->first();
                                    } else {
                                        $check = null;
                                    }
                                    ?>
                                    @if (isset($check) && !empty($check))
                                        <a href="#">
                                            <button class="buttonunfill-save">Unarchive</button>
                                        </a>
                                    @else
                                        <a href="{{ route('company.archiveJob', $job->id) }}">
                                            <button class="buttonunfill-save">Archive job</button>
                                        </a>
                                    @endif
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div id="tab-3" class="tab-content ">
                <div class="row  mt-5 mb-3">
                    @foreach ($archiveJobs as $archiveJob)
                        <div class="col-lg-4 col-md-4 col-12  mt-lg-0 mt-md-0 mt-3 ">
                            <div class="p-3 mt-3" style="background: #F4F4F4;border-radius: 20px;">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                        <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                            class="w-5" alt="w8">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                        <p class="single-job-heading" style="margin: 0; padding: 0 35px;"><b>
                                                {!! $archiveJob->getjob->title ?? '' !!}
                                            </b>
                                        </p>
                                        <p class="job-posted" style="margin: 0; padding: 0 35px;">Most Popular</p>
                                    </div>
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                        <i class="fas-elip fa-solid fa-ellipsis"></i>
                                    </div>
                                </div>
                                <p class="abutnexa-text pt-4 pb-3" style="height: 70px"> {!! $archiveJob->getjob->description ?? '' !!}</p>
                                <div class="jobviewbtns mt-1 mb-1">
                                    <a href="{{ route('company_jobs_form', $job->id) }}">
                                        <button class="buttonfill-apply pl-4 pr-4">Edit Job</button>
                                    </a>

                                    <?php
                                    if (isset($archiveJob) && !empty($archiveJob)) {
                                        $check = $archiveJob->where('user_id', auth()->user()->id)->first();
                                    } else {
                                        $check = null;
                                    }
                                    ?>
                                    @if (isset($check) && !empty($check))
                                        <a href="#">
                                            <button class="buttonunfill-save">Unarchive</button>
                                        </a>
                                    @else
                                        <a href="{{ route('company.archiveJob', $job->id) }}">
                                            <button class="buttonunfill-save">Archive job</button>
                                        </a>
                                    @endif
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </div>

    <script>
        // --------Tabes-----------
        $(".tab-link").click(function() {
            var tabID = $(this).attr("data-tab");

            $(this).addClass("active").siblings().removeClass("active");

            $("#tab-" + tabID)
                .addClass("active")
                .siblings()
                .removeClass("active");
        });
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
    <script type="text/javascript">
        function deleteConfirmation(id) {
            swal.fire({
                title: "Delete?",
                icon: 'question',
                text: "Please ensure and then confirm!",
                type: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: !0
            }).then(function(e) {

                if (e.value === true) {
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                    $.ajax({
                        type: 'POST',
                        url: "{{ url('/company/jobs/delete') }}/" + id,
                        data: {
                            _token: CSRF_TOKEN
                        },
                        dataType: 'JSON',
                        success: function(results) {
                            if (results.success === true) {
                                swal.fire("Done!", results.message, "success");
                                // refresh page after 2 seconds
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
                            } else {
                                swal.fire("Error!", results.message, "error");
                            }
                        }
                    });

                } else {
                    e.dismiss;
                }

            }, function(dismiss) {
                return false;
            })
        }
    </script>
@endsection
