@extends('userNew.singleUser.layouts.main')
@section('content')
<!----- ---------2nd--Navbar------------- -->
<div class="container-fluid second-nav">
    <div class="container">
        <div class="headers">
            <nav class="navbar-questionares">

        
                <ul class="navbar-lists" id="myDIV">

                    <li><a class="navbar-link" href="#">Home</a>
                    </li>
                    <li><a class="navbar-link" href="#">Services</a></li>
                    <li><a class="navbar-link" href="#">Find Global Talent</a></li>
                    <li><a class="navbar-link" href="#">Contact</a></li>
                    <li><a class="navbar-link" href="#">FAQs</a>
                    </li>

                </ul>
              
            </nav>

            <div class="mobile-navbar-btns">
                <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
            </div>
        </div>
    </div>
</div>


{{-- 2nd nav end --}}




<!-- hero section -->
<div class="container herosecion mt-lg-5 mt-md-5 mt-2">
    <div class="row text-center justify-content-center">
        <div class="col-lg-8 col-md-12 col-12 ">
            <h1>
                Matching Employers to
                Employees & Individual <span class="heading-span-text">Jobs.</span>
            </h1>
            <p class="text-phara-respns  hero-sec-paragrph pt-4">
                The Medulla Effect values your time, and so should you. let us streamline your job search process and
                help you land your dream job. We spend the time dealing with all the aggravation and problems that come
                with the job search process while giving you the ease of having one less thing to worry about.
            </p>
        </div>

    </div>

</div>
<!-- cards row -->
<div class="container-fluid mt-lg-5 mt-md-4 mt-1">
    <div class="row justify-content-center index-page-card-row text-center poppins p-4">
        <div class="col-lg-4 col-md-6 col-12 mt-lg-2 mt-md-3 mt-4">
            <div class="card-figure">
                <div class="">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-1.png" class="img-fluid img-siz-1" alt="no img" srcset="" />
                </div>
                <div class="card-iner-body">
                    <h2 class="cards-heading">Company</h2>
                    <p class="cards-text-para">
                        Post job Hire people through Medulla...nis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ritatis.
                    </p>
                    <a href="{{ route('companay') }}">
                        <button class="buttonfilled go-btn">Let’s Go</button></a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-lg-2 mt-md-3 mt-4">
            <div class="card-figure-2nd-card">
                <div class="">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-3.png" class="img-fluid img-siz-2" alt="" srcset="" />
                </div>
                <div class="card-iner-body">
                    <h2 class="cards-headig-midle-card">Freelancer</h2>
                    <p class="text-para-midle-card">
                        Post job Hire people through Medulla...nis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ritatis.
                    </p>
                    <a href="{{ route('freelancer') }}">
                        <button class="buttonunfill go-btn">Let’s Go</button></a>
                </div>
            </div>

        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-lg-2 mt-md-3 mt-4">
            <div class="card-figure">
                <div class="">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-2.png" class="img-fluid img-size" alt="" srcset="" />
                </div>
                <div class="card-iner-body">
                    <h2 class="cards-heading">Individuals</h2>
                    <p class="cards-text-para">
                        Post job Hire people through Medulla...nis iste natus error sit voluptatem accusantium
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ritatis.
                    </p>
                    <a href="{{ route('individual') }}">
                        <button class="buttonfilled go-btn">Let’s Go</button></a>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- form section -->

<div class="container-fluid p-lg-5  p-md-5 p-0 modullaeffetsform">
    <div class="row  p-lg-5 p-0 form-main-row justify-content-center">

        <div class=" col-lg-6 col-md-6 col-10 form-left-side modulaeff">
            <h6 class="modula-hash">#MedullaEffects</h6>
            <h4 class="submit-lead-form">Submit lead Form</h4>
            <p class="form-index-submir-para">
                Get Consultation From Medulla Expert and Get your Carrier in Right
                Way ... Sed ut perspiciatis unde omnis iste natus error sit
                voluptatem accusantium loremque laudantium, totam rem aperiam,
                eaque ipsa quae ab illo inventore veritatis.
            </p>
            <form id="submitLeadForm">
                @csrf
                <div class="row mt-4">
                    <div class="col-12  col-lg-6 col-md-6 ">
                        <div class="input-container ">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" alt="">
                            <input class="input-fields" type="text" placeholder="First Name" name="fname">
                        </div>
                        <span style="color:rgb(124, 35, 66);" class=" error-text fname_error"></span>

                    </div>
                    <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                        <div class="input-container">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" alt="">
                            <input class="input-fields" type="text" placeholder="Last Name" name="lname">
                        </div>
                        <span style="color:rgb(124, 35, 66);" class=" error-text lname_error"></span>

                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12  col-lg-6 col-md-6">
                        <div class="input-container">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectoremailblack.png" alt="">
                            <input class="input-fields" type="text" placeholder="Email ID" name="email">
                        </div>
                        <span style="color:rgb(124, 35, 66);" class=" error-text email_error"></span>

                    </div>
                    <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                        <div class="input-container">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorphoneblack.png" alt="">
                            <input class="input-fields" type="text" placeholder="Phone Number" name="phone">
                        </div>
                        <span style="color:rgb(124, 35, 66);" class=" error-text phone_error"></span>

                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="submit-btn mt-3">Submit</button>
                </div>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
                <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
                <script>
                    $(function() {
                        $("#submitLeadForm").on('submit', function(e) {
                            e.preventDefault();
                            $.ajax({
                                url: "/submit/lead/form",
                                method: "post",
                                data: new FormData(this),
                                processData: false,
                                dataType: 'json',
                                contentType: false,
                                beforeSend: function() {
                                    $(document).find('span.error-text').text('');
                                },
                                success: function(data) {
                                    if (data.status == 0) {
                                        $('.fname_error').html(data.error.fname);
                                        $('.lname_error').html(data.error.lname);
                                        $('.email_error').html(data.error.email);
                                        $('.phone_error').html(data.error.phone);
                                    } else if (data.status == 1) {
                                        toastr.success(data.message, data.title);
                                        $('#submitLeadForm').each(function() {
                                            this.reset();
                                        }); 
                                    } else {
                                        toastr.error(data.message, data.title);
                                    }
                                }
                            });
                        });
                    });
                </script>
            </form>



        </div>



        <div class=" col-lg-6 col-md-6 col-10 ps-lg-5 pt-lg-0 pt-5">
            <div class="form-images">

                <img src="{{ asset('user') }}/assets/images/landing-page-img/womenimg.png" width="100%" alt="" />

                <i class="fas fa-solid fa-play playbutton"></i>

                <div>
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/frame.png" width="100%" alt="" />
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer strt-->
<div class="container-fluid p-lg-3 footer">
    <div class="row justify-content-center p-lg-5 p-md-4 p-2 mt-lg-0 mt-md-1 mt-5 foter-row">
        <div class="col-lg-5 col-12 offset-lg-1 left mt-5 mb-4">
            <div class="d-flex">
                <img src="{{ asset('user') }}/assets/images/profile-imges/job-search-company.png" alt="w8" class="logo-img">
                <h4 class="Logo-text">Medulla
                    Effects</h4>
            </div>
            <p class=" mt-4 mb-0 footer_left-para">
                Get Consultation From Medulla Expert and Get your Carrier in Right
                Way.
            </p>
            <p class="footer_left-para">
                Eut perspiciatis unde omnis iste natus error sit voluptatem
                acc.
            </p>
            <ul class="Footer-navbar ps-0">

                <li class="footer_left">Home</li>
                <li class=" footer_left">Services</li>
                <li class=" footer_left">Find Global Talent</li>
                <li class=" footer_left">Contact</li>
                <li class=" footer_left">FAQs</li>

            </ul>
        </div>
        <div class="col-lg-5 col-12 offset-lg-1 right mt-5 mb-2">
            <div class="row no-gutters">
                <div class="col-3 ">
                    <div class="footer-links">
                        <li><a href="#">Link 1 Here</a></li>
                        <li><a href="#">Link 2 Here</a></li>
                        <li><a href="#">Link 3 Here</a></li>
                        <li><a href="#">Link 4 Here</a></li>
                        <li><a href="#">Link 5 Here</a></li>
                    </div>
                </div>
                <div class="col-3 ">
                    <div class="footer-links">
                        <li><a href="#">Link 1 Here</a></li>
                        <li><a href="#">Link 2 Here</a></li>
                        <li><a href="#">Link 3 Here</a></li>
                        <li><a href="#">Link 4 Here</a></li>
                        <li><a href="#">Link 5 Here</a></li>
                    </div>
                </div>
                <div class="col-3">
                    <div class="footer-links">
                        <li><a href="#">Link 1 Here</a></li>
                        <li><a href="#">Link 2 Here</a></li>
                        <li><a href="#">Link 3 Here</a></li>
                        <li><a href="#">Link 4 Here</a></li>
                        <li><a href="#">Link 5 Here</a></li>
                    </div>
                </div>
                <div class="col-3 ">
                    <div class="footer-links">
                        <li><a href="#">Link 1 Here</a></li>
                        <li><a href="#">Link 2 Here</a></li>
                        <li><a href="#">Link 3 Here</a></li>
                        <li><a href="#">Link 4 Here</a></li>
                        <li><a href="#">Link 5 Here</a></li>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>

</div>
@endsection