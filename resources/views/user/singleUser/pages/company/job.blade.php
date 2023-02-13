@extends('user.singleUser.layouts.main')
@section('content')
    <!----- ---------2st--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">

            <div class="header">
                <nav class="navbar">
                    <div class="container-fluid p-0">
                        <div>
                            <div>
                                <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorsearch.png" alt=""
                                    srcset="">
                            </div>
                        </div>
                        <ul class="navbar-list" id="myDIV">
                            <li><a class="navbar-link" href="{{ route('company.dashboard') }}">Dashboard</a>
                            </li>
                            <li><a class="navbar-link mylist active" href="{{ route('company.jobs') }}">Jobs</a></li>
                            <li><a class="navbar-link" href="#">Applicants</a></li>
                            <li><a class="navbar-link" href="{{ route('company.individual') }}">Individuals</a></li>
                            <li><a class="navbar-link" href="{{ route('company.freelancer') }}">Freelancers</a></li>
                            <li><a class="navbar-link" href="#">Settings</a></li>
                        </ul>
                        <div>
                            <span>
                                <a class="navbar-link" href="{{ route('see.notifications') }}">
                                    <i class="fa-regular fa-bell start_16_respons"></i>
                                </a>
                            </span>
                            <span>
                                <a class="navbar-link" href="{{ route('company.jobPost') }}">
                                    <i class="fa-regular fa-user ms-1 start_16_respons"></i>
                                </a>
                            </span>
                            <span><i style="cursor:pointer;" class="ri-logout-circle-line"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                </i></span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                </nav>

                <div class="mobile-navbar-btn">
                    <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>

                    <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
                </div>
            </div>

        </div>
    </div>
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-12 text-center justify-content-center">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="headings">Jobs</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-10 pt-2 pb-3 offset-1">
                        <p class="descriptions">Post job Hire people through Medulla...nis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row mt-3 ">
            <div class="col-lg-3">

            </div>
            <div class="col-lg-6 ps-4 pe-4 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="pr-2 pl-2">
                    <h1 class="pt-4 profile-text-ques-heading">All Jobs</h1>
                    <p class="john-para-afer-ques-heading-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                    <!-- cards -->
                    <div class="pt-3 pb-5">
                        <div class="row">
                            @foreach ($allJobs as $job)
                                <a href="{{ route('company.jodDetails', $job->id) }}">
                                    <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                        style="background: #FFFFFF;;border-radius: 20px;">

                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                <img src="{{ asset('user') }}/Assets/Images/profile-imges/jobview-img.png"
                                                    class="w-5" alt="w8">
                                            </div>
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-7">
                                                <p class="single-job-heading" style="margin: 0; padding: 0 20px;"><b>
                                                        {{ $job->title }}
                                                    </b></p>
                                                <p class="job-posted" style="margin: 0; padding: 0 20px;">Most Popular</p>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-3 text-end">
                                                <i class="fas-elip fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3">{{ $job->description }}</p>
                                        <div class="jobviewbtns mt-1 mb-1">
                                            <a href="{{ route('company_jobs_form', $job->id) }}">
                                                <button class="buttonfill-apply">Edit Job</button>
                                            </a>
                                            <button class="buttonunfill-save"
                                                onclick="deleteConfirmation({{ $job->id }})">Delete</button>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mt-md-5 mt-lg-0 col-12 mb-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center">
                <div class="pt-5 pb-5 pr-3 pl-3 right-card" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                    <h6 class="john-text justify-content-center">New Job</h6>
                    <p class="john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn..</p>
                    <a href="{{ route('company_jobs_form', 0) }}">
                        <button class="buttonunfill-create">Post Job</button></a>
                </div>
            </div>
        </div>
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
    </div>
@endsection
