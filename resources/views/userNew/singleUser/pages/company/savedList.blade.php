@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- -----1st--Navbar--------- -->
    @php
        $blink = 0;
    @endphp
    @include('userNew.singleUser.pages.company.secondNav')


    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7 col-sm-9 col-12 text-center Halvetica">
                <h1 class="headings-profile mt-5">Saved List</h1>
                <p class="mt-4 john-para-afer-ques-heading-filter mb-4">
                    Sed ut per vbbv spiciatis unde omnis iste natus error sit voluptatem
                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                    quae ab illo inventore veritatis.
                </p>
            </div>
        </div>
    </div>
    <!-- -------------3rd---Navbar---------- -->


    <!-- -----------Freelancer cards------------- -->
    <div class="container-fluid mt-5 p-lg-1 p-md-1 p-sm-3 p-1">

        <!-- ------------row--1---Tab------------- -->
        <div class="row text-center ps-lg-5 pe-lg-5 pl-md-5 pr-md-5 crd-row-onec ">
            @foreach ($freelancers as $freelancer)
                <div class="col-lg-3 col-md-6 col-10 col-lg-3 col-md-6 col-10 mb-lg-3 mb-md-3 mx-lg-0 mx-md-0 mx-5  mt-4">
                    <a href="{{ route('company.freelancer.services', $freelancer->services->users->id) }}"
                        style=" text-decoration: none !important;color: #141313;">
                        <div style="background-color: #F9F9F9; border-radius: 21.0305px;" class="">
                            <div class="freelancer-page pt-3">
                                <div class="img-holder-frelancer pt-4">
                                    <?php $image = isset($freelancer->services->users->image) && !empty($freelancer->services->users->image) ? $freelancer->services->users->image : ''; ?>

                                    <img src="<?= $image ?>" style="height: 90px;width: 90px;" alt=""
                                        srcset="" />
                                </div>
                            </div>
                            <div class="p-3">

                                <h3 class="bus-heading mt-5 mb-3" style="overflow:hidden">
                                    {!! $freelancer->services->users->name ?? '' !!}
                                </h3>
                                <h6 class="location-heading">Service: <span class="place">{!! $freelancer->services->title ?? '' !!}</span>
                                </h6>
                                <h6 class="location-heading">Range: <span class="place">{!! $freelancer->services->rate ?? '' !!}</span>
                                </h6>
                                <h6 class="location-heading">Description: <span
                                        class="place">{!! $freelancer->services->description ?? '' !!}</span>
                                </h6>
                                <h6 class="location-heading">Located in: <span class="place">{!! $freelancer->services->users->located_in ?? '' !!}</span>
                                </h6>
                                <h6 class="location-heading">Experience: <span class="place">{!! $freelancer->services->users->experience ?? '' !!}</span>
                                </h6>

                                <a href="{{ route('company.show.chat', $freelancer->services->users->id) }}">
                                    <button class="buttonfill mt-4 mb-4">
                                        Contact
                                    </button>
                                </a>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- -------------javascript--inner-link------------- -->
    <!-- ---------TABS--------- -->
    </div>
    <script
type="module"
src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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

        //mbil toggle
    </script>
@endsection
