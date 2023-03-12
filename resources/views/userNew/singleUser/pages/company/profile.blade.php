@extends('userNew.singleUser.layouts.main')
@section('content')
@php
$blink = 2;
@endphp

    @include('userNew.singleUser.pages.company.secondNav')


    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-12 text-center justify-content-center">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="headings">Profile</h1>
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
        <div class="row mt-3 crd-row-one">
            <div class="col-lg-3 mt-5 mt-lg-0  mb-lg-0 mb-md-0 mb-4 col-12 p-0 text-center">
                <div class=" pt-5 pb-5 pl-3 pr-3 " style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="avatar-upload">
                        <form id="edit_image_form">
                            <div class="avatar-edit">
                                <?php $image = isset($user->image) && !empty($user->image) ? $user->image : ''; ?>
                                <input type='file' name="image" id="imageUpload" data-default-file="{{<?= $user->image ?>}}"
                                    accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                    style="background-image: url({!! $user->image !!});">
                                </div>
                            </div>
                        </form>
                    </div>
                    <h6 class="justify-content-center pt-2 pb-2 john-text">{!! $user->name ?? '' !!}</h6>
                    <p class="john-para">{!! $user->address ?? '' !!}</p>
                </div>
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
                                    <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 "
                                        style="background: #FFFFFF;;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-1 cardsimg">
                                                <img src="{{ asset('user') }}/assets/images/profile-imges/jobview-img.png"
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
                                        <p class="abutnexa-text pt-4 pb-3">{!! $job->short_description??"" !!} </p>
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
            <div class="col-lg-3 mt-md-5 mt-lg-0 col-12 mb-sm-4 mt-4 mt-xs-4 p-0 text-center">
                <div class="pt-5 pb-5 pe-3 ps-3 " style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                    <h6 class="john-text justify-content-center">New Job</h6>
                    <p class="john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn..</p>
                    <a href="{{ route('company_jobs_form', 0) }}">
                        <button class="buttonunfill-create">Post Job</button>
                    </a>
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
