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
                        <li><a href="{{ route('advance.fillter') }}" class="mylist active">View Jobs</a></li>
                        <li><a href="{{ route('applied') }}" class="mylist">View Applications</a></li>
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
            <h1>Advanced Search Filters</h1>
            <p class="mt-4 phara_16">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
        </div>
    </div>
</div>
<!-- --------------INPUT--FIELD----------------- -->
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-md-10 col-12">

            <div class="row justify-content-center p-lg-0 p-md-3 p-sm-4 p-3">
                <div class="col-lg-4 col-md-6 col-12 ps-lg-0 ps-md-1 ps-2 Halvetica">
                    <div class="input-group mb-3">
                        <span class="input-group-text border border-end-0" style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;"><i class="fa-regular fa-user start_16_respons"></i></span>
                        <input type="text" class="form-control ps-0 padd_12_input border border-start-0 border border-end-0" style="padding: 14px 2px 14px 0px; background-color: #FFFFFF; border: 0.4px solid #C9C9C9; border-left: none;" placeholder="Location">
                        <button type="button" class=" dropdown-toggle drop_btn " style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropend</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 ps-lg-0 ps-md-1 ps-2 Halvetica">
                    <div class="input-group mb-3">
                        <span class="input-group-text border border-end-0" style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;"><i class="fa-regular fa-user start_16_respons"></i></span>
                        <input type="text" class="form-control padd_12_input ps-0 border border-start-0 border border-end-0" style="padding: 14px 2px 14px 0px; background-color: #FFFFFF; border: 0.4px solid #C9C9C9; border-left: none;" placeholder="Experience Level">
                        <button type="button" class=" dropdown-toggle drop_btn " style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropend</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 ps-lg-0 ps-md-1 ps-2 Halvetica">
                    <div class="input-group mb-3">
                        <span class="input-group-text border border-end-0" style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;"><i class="fa-regular fa-user start_16_respons"></i></span>
                        <input type="text" class="form-control ps-0 border padd_12_input border-start-0 border border-end-0" style="padding: 14px 2px 14px 0px; background-color: #FFFFFF; border: 0.4px solid #C9C9C9; border-left: none;" placeholder="Job Type">
                        <button type="button" class=" dropdown-toggle drop_btn " style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropend</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-lg-4 col-md-6 col-12 ps-lg-0 ps-md-1 ps-2 Halvetica">
                    <div class="input-group mb-3">
                        <span class="input-group-text border border-end-0" style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;"><i class="fa-regular fa-user start_16_respons"></i></span>
                        <input type="text" class="form-control padd_12_input ps-0 border border-start-0 border border-end-0" style="padding: 14px 2px 14px 0px; background-color: #FFFFFF; border: 0.4px solid #C9C9C9; border-left: none;" placeholder="Industry">
                        <button type="button" class=" dropdown-toggle drop_btn " style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropend</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 ps-lg-0 ps-md-1 ps-2 Halvetica">
                    <div class="input-group mb-3">
                        <span class="input-group-text border border-end-0" style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;"><i class="fa-regular fa-user start_16_respons"></i></span>
                        <input type="text" class="form-control ps-0 border padd_12_input border-start-0 border border-end-0" style="padding: 14px 2px 14px 0px; background-color: #FFFFFF; border: 0.4px solid #C9C9C9; border-left: none;" placeholder="Date Posted">
                        <button type="button" class=" dropdown-toggle drop_btn " style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropend</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 ps-lg-0 ps-md-1 ps-2 Halvetica">
                    <div class="input-group mb-3">
                        <span class="input-group-text border border-end-0" style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;"><i class="fa-regular fa-user start_16_respons"></i></span>
                        <input type="text" class="form-control padd_12_input ps-0 border border-start-0 border border-end-0" style="padding: 14px 2px 14px 0px; background-color: #FFFFFF; border: 0.4px solid #C9C9C9; border-left: none;" placeholder="Salary Range">
                        <button type="button" class=" dropdown-toggle drop_btn " style="background-color: #FFFFFF; border: 0.4px solid #C9C9C9;" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropend</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Action two</a></li>
                            <li><a class="dropdown-item" href="#">Action three</a></li>
                        </ul>
                    </div>
                </div>


            </div>
        </div>
    </div>

</div>
<!-- ----------button------------- -->
<div class="container-fluid text-center mt-5 mb-5">
    <button type="button" class="btn_filter_fill start_16_respons Halvetica">Save</button>

    <button type="button" class="btn_filter_empty start_16_respons Halvetica">Clear all</button>
</div>
<!-- ---------cards-------------- -->
<div class="container-fluid">
    <div class="text-center mt-3">
        <h3 class="other_cls" style="font-weight: 700;">
            Other Jobs
        </h3>
    </div>
    <div class="row justify-content-center mt-2 p-lg-4 p-md-3 p-2">

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
@endsection