@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2st--Navbar------------- -->
    <?php
    $blink = 2;
    ?>
    @include('userNew.singleUser.pages.freelancer.secondNav')
    <!---------------- -Navend--------------- -->

    <div class="container mb-5 mt-5">
        <h1 class="headings-profile mb-4">Profile</h1>
        <div class="row mt-3 ">
            <div class="col-lg-3 mt-5 mt-lg-0   col-12 text-center">
                <div class=" pt-1 pb-5 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
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
            <div class="col-lg-6 ps-4 pe-4 mt-5 mt-lg-0  col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="pr-2 pl-2">
                    <h1 class="pt-4 profile-text-ques-heading">All Services</h1>
                    <p class="john-para-afer-ques-heading-2">Create and post your services for individuals and companies to view your posts so they can reach out!</p>
                        <div class="pt-3 pb-5">
                            @foreach ($services as $service)
                            {{-- <a href="{{route('about.service',$service->id)}}"> --}}
                                <div class="row">
                                    <div class="col-lg-12 mt-3 mb-3 pt-3 pb-3 res"
                                        style="background: #FFFFFF;;border-radius: 20px;">
                                        <div class="row">
                                            <div class="col-2 cardsimg">
                                                <img width="70" src="{!! $user->image ?? '' !!}"
                                                    class="w-5" alt="w8" style="height: 70px">
                                            </div>
                                            <div class="col-9">
                                                <p class="single-job-heading" style="margin: 0;"><b>{!! $service->title ?? '' !!}</b>
                                                </p>
                                                <p class="job-posted" style="margin: 0;">{!! $service->created_at ?? '' !!}</p>
                                            </div>
                                            <div class="col-1">
                                                <i class="fas-elip fa-solid fa-ellipsis fasq" onclick="openmyFunction(<?=$service->id?>)"></i>
                                                <div  style="position: relative;">
                                                    <div class="cliked" id="openmyDIV<?=$service->id?>">
                                                        <div class="stsuts ">
    <button>Delete</button>
                                                        </div>
                                                     
                                                    </div>
                                                  </div>

                                            </div>
                                        </div>
                                        <p class="abutnexa-text pt-4 pb-3">{!! $service->discription ?? 'There is no detail provided!' !!}</p>
                                        <div class="jobviewbtns mt-1 mb-1">
                                            <a href="{{ route('edit.service', $service->id) }}"><button
                                                    class="buttonfill-apply">Edit Service</button></a>

                                            @if ($service->status == 1)
                                                <a href="{{ route('pouse.service', $service->id) }}"><button
                                                        class="buttonunfill-save">Pause for now</button></a>
                                            @else
                                                <a href="{{ route('pouse.service', $service->id) }}"><button
                                                        class="buttonunfill-save">Post</button></a>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            {{-- </a> --}}
                            @endforeach
                        </div>
                </div>

            </div>

            <div class="col-lg-3 mt-5 mt-lg-0  col-12 text-center">
                <div class="pt-5 pb-5 pr-3 pl-3 right-card" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                    <h6 class="john-text justify-content-center">New Service</h6>
                    <p class="john-para pt-4 pb-3">Create a new post to <br> showcase your service!</p>
                    <a href="{{ route('add.service') }}">
                        <button class="buttonunfill-create">Create</button>
                    </a>
                </div>
            </div>
        </div>
    </div>




    <script>        function openmyFunction(id) {
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
