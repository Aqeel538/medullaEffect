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
                        <li><a href="./Tagline.html" class="mylist">View Jobs</a></li>
                        <li><a href="./Applied.html" class="mylist active">View Applications</a></li>
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
            <h1>Applied Jobs</h1>

        </div>
    </div>
</div>
<!-- ---------cards-------------- -->
<div class="container-fluid">
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