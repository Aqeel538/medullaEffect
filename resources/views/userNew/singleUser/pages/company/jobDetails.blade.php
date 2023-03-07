@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- -----1st--Navbar--------- -->
    @php
    $blink = 0;
    @endphp
    @include('userNew.singleUser.pages.company.secondNav')


    <div class="container mt-4">
        <div class="row crd-row-one">
            <div class="col-12 arrow ">
                <a href="{{ route('company.jobPost') }}">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorarrow.png" alt=""
                        srcset=""></a>
            </div>
            <br />
            <br />
            <div class="col-lg-12 col-12">
                <div class="col-12" style="padding: 0;">
                    <h2 class="job-headings">{!! $jobDetail->title ?? '' !!}</h2>
                    <p class="job-view-para-2">{!! $jobDetail->industry ?? '' !!}</p>
                </div>
                <div class="col-lg-12 col-12 ps-0">
                    <div class="tabsrow d-flex justify-content-between">
                        <div class="allitems d-flex">
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span> <i class="fa-solid fa-money-bill-1-wave"></i>&nbsp;{!! $jobDetail->rate ?? '' !!}
                                        Salary</span>
                                </p>
                            </div> &nbsp; &nbsp; &nbsp;
                            <div class="icon-text">
                                <p class="job-view-para">
                                    <span><i class="fa-solid fa-clock"></i>&nbsp;{!! $jobDetail->work_type ?? '' !!}</span>
                                </p>
                            </div>


                        </div>

                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="job-details">
                            {!! $jobDetail->description ?? 'There is no description for this job...' !!}
                        </p>
                    </div>
                </div>

                <div class="jobviewbtns mt-3 mb-4">
                    @if (isset($jobDetail->id) && !empty($jobDetail->id))
                        <a href="{{ route('company_jobs_form', $jobDetail->id) }}">
                            <button class="buttonfill-apply pl-4 pr-4">Edit Job</button>
                        </a>
                        <a href="{{ route('company.archiveJob', $jobDetail->id) }}">
                            <button class="buttonunfill-save">Archive</button>
                        </a>
                        <a href="#">
                            <button class="buttonunfill-save"
                                onclick="deleteConfirmation({{ $jobDetail->id }})">Delete</button>
                        </a>
                    @endif
                </div>
            </div>
            <!-- right side of view job page -->

        </div>
    </div>

    <script>
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
