@extends('user.singleUser.layouts.main')
@section('content')
<div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
    <header>

        <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <div>
                    <span><i class="ri-search-line start_16_respons"></i></span>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list Halvetica " id="myDIV">
                        <li><a href="#" class="mylist active">View Jobs</a></li>
                        <li><a href="./Applied.html" class="mylist">View Applications</a></li>
                        <li><a href="#" class="mylist">Resume</a></li>
                    </ul>

                </div>
                <div>
                    <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                    <span><i class="fa-regular fa-user ms-1 start_16_respons"></i></span>
                </div>
            </div>
        </nav>
    </header>
</div>
<!-- -------Heading--------- -->
<div class="container-fluid tagline-1">
    <div class="row justify-content-center">

        <div class="col-lg-7 col-md-7 col-sm-9 col-12 text-center Halvetica">
            <h1>This is going to be the tagline</h1>
            <p class="mt-4 phara_16">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
        </div>
    </div>
</div>
<!-- -------------3rd---Navbar---------- -->
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-lg-8 col-md-8 col-sm-9 col-11 d-flex vr_nav">
            <div>
                <!-- <p><i class="ri-briefcase-line me-2"></i>Industry</p> -->
                <span class="nav-3rd-tag Halvetica"> <span><i class="fa-solid fa-briefcase text-dark start_16_respons"></i></span>
                    Industry</span>
            </div>

            <div class="mx-auto d-flex">

                <div class="vr"></div>
                <div>

                    <span class="nav-3rd-tag Halvetica"><span><i class="fa-solid fa-location-dot me-2 start_16_respons text-dark"></i>Location</span></span>
                </div>

            </div>
            <div>
                <button type="button" class="btn_fill Poppins">Search</button>

            </div>

        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-3">
            <a href="{{ route('advance.fillter') }}">
                <button type="button" class="btn_empty Halvetica">Filter</button></a>
        </div>

    </div>
</div>
<!-- -----------Tabs------------- -->
<div class="container-fluid mt-5 plg-4 p-md-4 p-sm-3 p-1">

    <div class="tab-wrapper">
        <ul class="tabs Halvetica">


            <label class="tab-link active option_radio" data-tab="1" for="jobs">
                <input type="radio" id="jobs" name="tabechange" checked> <span></span>
                Recent Jobs</label>


            <label class="tab-link option_radio" data-tab="2" for="sav">
                <input type="radio" id="sav" name="tabechange"> <span></span>
                Saved</label>

        </ul>


    </div>

    <div class="content-wrapper ">
        <!-- ------------step--1---Tab------------- -->
        <div id="tab-1" class="tab-content active">
            <div class="row justify-content-center mt-5 p-lg-4 p-md-3 p-2">

                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>
                        <a href="{{ route('viewJob') }}">
                            <button type="button" class="btn_fill_2">Apply Now</button></a>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <a href="{{ route('viewJob') }}">
                            <button type="button" class="btn_fill_2">Apply Now</button></a>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <a href="{{ route('viewJob') }}">
                            <button type="button" class="btn_fill_2">Apply Now</button></a>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <a href="{{ route('viewJob') }}">
                            <button type="button" class="btn_fill_2">Apply Now</button></a>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <a href="{{ route('viewJob') }}">
                            <button type="button" class="btn_fill_2">Apply Now</button></a>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <a href="{{ route('viewJob') }}">
                            <button type="button" class="btn_fill_2">Apply Now</button></a>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>
                        <button type="button" class="btn_empty_2">Save for later</button>
                    </div>
                </div>


            </div>
        </div>
        <!-- ------------step--2---Tab------------- -->
        <div id="tab-2" class="tab-content">
            <div class="row justify-content-center mt-5 p-lg-4 p-md-3 p-2">


                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12 mt-3 Halvetica">

                    <div class="inner_tag">

                        <div class="d-flex">
                            <div>
                                <img src="{{ asset('user') }}/images/posted-img.png" class="w-100" alt="w8">

                            </div>
                            <div class="me-auto ms-2">
                                <h5 class="posted-tag">Lorem Ipsum</h5>
                                <p class="posted_phara">Posted 2hr ago</p>

                            </div>
                            <div>
                                <i class="fa-solid fa-ellipsis start_16_respons"></i>

                            </div>

                        </div>
                        <p class="posted_phara">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                            Sed ut perspiciatis unde otis ie natus erro...</p>

                        <button type="button" class="btn_fill_2">Apply Now</button>

                    </div>
                </div>



            </div>
        </div>



    </div>

</div>


<!-- -------------javascript--inner-link------------- -->
<!-- ---------TABS--------- -->
<script>
    // --------Tabes-----------
    $('.tab-link').click(function() {

        var tabID = $(this).attr('data-tab');

        $(this).addClass('active').siblings().removeClass('active');

        $('#tab-' + tabID).addClass('active').siblings().removeClass('active');
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

@endsection