@extends('userNew.singleUser.layouts.main')
@section('content')
    <style>
        /* Dropdown Button */
        .dropbtn {
            background-color: transparent;
            color: rgb(20, 20, 20);

            border: none;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover,
        .dropbtn:focus {
            background-color: transparent;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            /* position: relative;
                                                                                                                                                                                                                                                                                                                                                                        display: inline-block; */
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display: block;
        }
    </style>
    @php
        $blink = 0;
    @endphp
    @include('userNew.singleUser.pages.company.secondNav')
    <!---------------- -Navend--------------- -->
    <?php
    $toasterValue = session()->get('toasterValue');
    $toasterArchive = session()->get('toasterArchive');
    ?>
    {{-- JOB TOASTERS --}}
    @if ($toasterValue == 1)
        <script>
            toastr.success('new job created successfully');
        </script>
        {{ session()->put('toasterValue', 0) }}
    @elseif ($toasterValue == 2)
        <script>
            toastr.error('failed to create new job');
        </script>
        {{ session()->put('toasterValue', 0) }}
    @elseif ($toasterValue == 3)
        <script>
            toastr.success('job updated successfully');
        </script>
        {{ session()->put('toasterValue', 0) }}
    @endif

    {{-- Archive toasters --}}
    @if ($toasterArchive == 1)
        <script>
            toastr.info('already archived');
        </script>
        {{ session()->put('toasterArchive', 0) }}
    @elseif ($toasterArchive == 2)
        <script>
            toastr.success('archived successfully');
        </script>
        {{ session()->put('toasterArchive', 0) }}
    @elseif ($toasterArchive == 3)
        <script>
            toastr.error('failed to archieve');
        </script>
        {{ session()->put('toasterArchive', 0) }}
    @elseif ($toasterArchive == 4)
        <script>
            toastr.success('unarchived successefully');
        </script>
        {{ session()->put('toasterArchive', 0) }}
    @endif
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
                        @if ($job->status == 1)
                            <div class="col-lg-4 col-md-6 col-12  mt-lg-0 mt-md-0 mt-3 ">
                                {{-- <a href="{{ route('company.jodDetails', $job->id) }}"> --}}
                                <div class=" job-posted-radius">
                                    <div class="cards-scroll p-3 mt-3 ">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                    class="w-5" alt="w8">
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                                <p class="single-job-heading " style="margin: 0; padding-left:35px;"><b>
                                                        {!! $job->title ?? '' !!}
                                                    </b>
                                                </p>
                                                <p class="job-posted" style="margin: 0; padding-left:35px;">
                                                    {!! $job->located_in ?? '' !!} <span
                                                        class="text-reds">({!! $job->job_type ?? '' !!})</span></p>
                                                <p class="job-posted" style="margin: 0; padding: 0 35px;">
                                                    {!! $job->work_type ?? '' !!}</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                                <i class="fas-elip fa-solid fa-ellipsis fasq"
                                                    onclick="openmyFunction(<?= $job->id ?>)"></i>

                                                <div style="position: relative;">
                                                    <div class="cliked" id="openmyDIV<?= $job->id ?>">
                                                        <div class="stsuts ">

                                                            <a class=""
                                                                href="/company/job/status/1/{{ $job->id }}">Active</a>
                                                            <a class=""
                                                                href="/company/job/status/2/{{ $job->id }}">Inactive</a>
                                                            <a class=""
                                                                href="/company/job/status/3/{{ $job->id }}">Pause</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <p class="job-posted">
                                                    {!! $job->rate ?? '' !!}

                                                </p>
                                            </div>
                                            <div>
                                                <p class="job-posted">
                                                    {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>

                                        <div style="height: 76px;;overflow:hidden;">
                                            <p class="abutnexa-text  pb-3">

                                                {!! $job->description ?? 'There is no short description yet...' !!} </p>

                                        </div>
                                        <a href="{{ route('company.jodDetails', $job->id) }}"
                                            class="crds-read-more mt-3 mb-3">read more...</a>
                                        <div class="jobviewbtns mb-4">
                                            <a href="{{ route('company_jobs_form', $job->id) }}" class="me-2">
                                                <button class="buttonfill-apply pl-4 pr-4">Edit Job</button>
                                            </a>

                                            <button class="buttonunfill-save"
                                                onclick="deleteConfirmation({{ $job->id }})">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <!-- ------------step--2---Tab------------- -->
            <div id="tab-2" class="tab-content ">
                <div class="row mt-5 mb-3">
                    @foreach ($jobsPosted as $job)
                        @if ($job->status == 2)
                            <div class="col-lg-4 col-md-6 col-12  mt-lg-0 mt-md-0 mt-3 ">
                                {{-- <a href="{{ route('company.jodDetails', $job->id) }}"> --}}
                                <div class=" job-posted-radius">
                                    <div class="cards-scroll p-3 mt-3 ">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                    class="w-5" alt="w8">
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                                <p class="single-job-heading " style="margin: 0; padding-left:35px;"><b>
                                                        {!! $job->title ?? '' !!}
                                                    </b>
                                                </p>
                                                <p class="job-posted" style="margin: 0; padding-left:35px;">
                                                    {!! $job->located_in ?? '' !!} <span
                                                        class="text-reds">({!! $job->job_type ?? '' !!})</span></p>
                                                <p class="job-posted" style="margin: 0; padding: 0 35px;">
                                                    {!! $job->work_type ?? '' !!}</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                                <i class="fas-elip fa-solid fa-ellipsis fasq"
                                                    onclick="openmyFunction(<?= $job->id ?>)"></i>

                                                <div style="position: relative;">
                                                    <div class="cliked" id="openmyDIV<?= $job->id ?>">
                                                        <div class="stsuts ">

                                                            <a class=""
                                                                href="/company/job/status/1/{{ $job->id }}">Active</a>
                                                            <a class=""
                                                                href="/company/job/status/2/{{ $job->id }}">Inactive</a>
                                                            <a class=""
                                                                href="/company/job/status/3/{{ $job->id }}">Pause</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <p class="job-posted">
                                                    {!! $job->rate ?? '' !!}

                                                </p>
                                            </div>
                                            <div>
                                                <p class="job-posted">
                                                    {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>

                                        <div style="height: 76px;;overflow:hidden;">
                                            <p class="abutnexa-text  pb-3">

                                                {!! $job->description ?? 'There is no short description yet...' !!} </p>

                                        </div>
                                        <a href="{{ route('company.jodDetails', $job->id) }}"
                                            class="crds-read-more mt-3 mb-3">read more...</a>
                                        <div class="jobviewbtns mb-4">
                                            <a href="{{ route('company_jobs_form', $job->id) }}" class="me-2">
                                                <button class="buttonfill-apply pl-4 pr-4">Edit Job</button>
                                            </a>

                                            <button class="buttonunfill-save"
                                                onclick="deleteConfirmation({{ $job->id }})">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- <div id="tab-2" class="tab-content ">
                <div class="row  mt-5 mb-3">
                    @foreach ($jobsPosted as $job)
                        @if ($job->status == 2)
                            <div class="col-lg-4 col-md-4 col-12  mt-lg-0 mt-md-0 mt-3 ">
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
                                            <i class="fas-elip fa-solid fa-ellipsis dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></i>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="/company/job/status/1/{{ $job->id }}">Active</a>
                                                <a class="dropdown-item"
                                                    href="/company/job/status/2/{{ $job->id }}">Inactive</a>
                                                <a class="dropdown-item"
                                                    href="/company/job/status/3/{{ $job->id }}">Pause</a>
                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3" style="height: 70px"> {!! $job->short_description ?? '' !!}
                                        </p>
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
                                                <a href="{{ route('company.unArchiveJob', $archiveJob->id) }}">
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
                        @endif
                    @endforeach
                </div>
            </div> --}}


            <div id="tab-3" class="tab-content ">
                <div class="row mt-5 mb-3">
                    @foreach ($jobsPosted as $job)
                        @if ($job->status == 3)
                            <div class="col-lg-4 col-md-6 col-12  mt-lg-0 mt-md-0 mt-3 ">
                                {{-- <a href="{{ route('company.jodDetails', $job->id) }}"> --}}
                                <div class=" job-posted-radius">
                                    <div class="cards-scroll p-3 mt-3 ">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
                                                    class="w-5" alt="w8">
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                                <p class="single-job-heading " style="margin: 0; padding-left:35px;"><b>
                                                        {!! $job->title ?? '' !!}
                                                    </b>
                                                </p>
                                                <p class="job-posted" style="margin: 0; padding-left:35px;">
                                                    {!! $job->located_in ?? '' !!} <span
                                                        class="text-reds">({!! $job->job_type ?? '' !!})</span></p>
                                                <p class="job-posted" style="margin: 0; padding: 0 35px;">
                                                    {!! $job->work_type ?? '' !!}</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                                <i class="fas-elip fa-solid fa-ellipsis fasq"
                                                    onclick="openmyFunction(<?= $job->id ?>)"></i>

                                                <div style="position: relative;">
                                                    <div class="cliked" id="openmyDIV<?= $job->id ?>">
                                                        <div class="stsuts ">

                                                            <a class=""
                                                                href="/company/job/status/1/{{ $job->id }}">Active</a>
                                                            <a class=""
                                                                href="/company/job/status/2/{{ $job->id }}">Inactive</a>
                                                            <a class=""
                                                                href="/company/job/status/3/{{ $job->id }}">Pause</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mt-3">
                                            <div>
                                                <p class="job-posted">
                                                    {!! $job->rate ?? '' !!}

                                                </p>
                                            </div>
                                            <div>
                                                <p class="job-posted">
                                                    {{ \Carbon\Carbon::parse($job->created_at)->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>

                                        <div style="height: 76px;;overflow:hidden;">
                                            <p class="abutnexa-text  pb-3">

                                                {!! $job->description ?? 'There is no short description yet...' !!} </p>

                                        </div>
                                        <a href="{{ route('company.jodDetails', $job->id) }}"
                                            class="crds-read-more mt-3 mb-3">read more...</a>
                                        <div class="jobviewbtns mb-4">
                                            <a href="{{ route('company_jobs_form', $job->id) }}" class="me-2">
                                                <button class="buttonfill-apply pl-4 pr-4">Edit Job</button>
                                            </a>

                                            <button class="buttonunfill-save"
                                                onclick="deleteConfirmation({{ $job->id }})">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            {{-- <div id="tab-3" class="tab-content ">
                <div class="row  mt-5 mb-3">
                    @foreach ($jobsPosted as $job)
                        @if ($job->status == 3)
                            <div class="col-lg-4 col-md-4 col-12  mt-lg-0 mt-md-0 mt-3 ">
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
                                            <i class="fas-elip fa-solid fa-ellipsis dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"></i>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item"
                                                    href="/company/job/status/1/{{ $job->id }}">Active</a>
                                                <a class="dropdown-item"
                                                    href="/company/job/status/2/{{ $job->id }}">Inactive</a>
                                                <a class="dropdown-item"
                                                    href="/company/job/status/3/{{ $job->id }}">Pause</a>
                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3" style="height: 70px"> {!! $job->description ?? '' !!}
                                        </p>
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
                        @endif
                    @endforeach
                </div>
            </div> --}}

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

    {{-- drop down js --}}
    <script>
        /* When the user clicks on the button,
                                                                                                                                                                                                                                                                                                                                                                                    toggle between hiding and showing the dropdown content */
        function dropDownFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }




        // div open


        function openmyFunction(id) {
            // Get all the "openmyDIV" divs
            var divs = document.querySelectorAll('[id^="openmyDIV"]');
            // Hide all previously opened "openmyDIV" divs
            divs.forEach(function(div) {
                if (div.id !== "openmyDIV" + id) {
                    div.style.display = "none";
                }
            });
            // Toggle the display of the clicked "openmyDIV" div
            var x = document.getElementById("openmyDIV" + id);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
@endsection
