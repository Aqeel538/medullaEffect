@extends('userNew.singleUser.layouts.main')
@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!----- ---------2nd--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionares">


                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="#aboutUs">About us</a>
                        </li>
                        <li><a class="navbar-link" href="#ourServices">Services</a></li>
                        <li><a class="navbar-link" href="#faqs">FAQ's</a></li>
                        <li><a class="navbar-link" href="#contactUs">Contact</a></li>

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
            <div class="col-lg-12 col-md-10 col-12 ">
                <h1>
                    The Home Of Business Opportunities.
                </h1>
                <p class="text-phara-respns  hero-sec-paragrph pt-4">
                    Where Business Professionals Meet Other Business Professionals.
                </p>
            </div>

        </div>

    </div>
    <!-- cards row -->
    <div class="container-fluid mt-lg-3 mt-md-4 mt-1">
        <div class="row justify-content-center index-page-card-row text-center poppins p-4">
            <div class="col-lg-4 col-md-6 col-8 mt-lg-2 mt-md-3 mt-4">
                <div class="card-figure">
                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-1.png"
                            class="img-fluid img-siz-1" alt="no img" srcset="" />
                    </div>
                    <div class="card-iner-body">
                        <h2 class="cards-heading">Company</h2>
                        <p class="cards-text-para">
                            sanasllo Post job Hire people through Medulla...nis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab ritatis.
                        </p>
                        <a href="{{ route('companay') }}">
                            <button class="buttonfilled go-btn">Let’s Go</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-8 mt-lg-2 mt-md-3 mt-4">
                <div class="card-figure-2nd-card">
                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-3.png"
                            class="img-fluid img-siz-2" alt="" srcset="" />
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
            <div class="col-lg-4 col-md-6 col-8 mt-lg-2 mt-md-3 mt-4">
                <div class="card-figure">
                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-2.png"
                            class="img-fluid img-size" alt="" srcset="" />
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

    <!-- about us page -->
    {{-- <div id="aboutUs" class="container-fluid mt-5 pb-5 " style="background-color: #F9F9F9">
        <div class="text-center mt-5">
            <h1 class="herosecion pt-5">About Us </h1>
            <div class="botom-hr">
                <div class="iner-btom"></div>
            </div>

        </div>
        <div class="container">
            <div class="row mt-5  ">

                <div class="col-lg-6 col-md-12 col-12">
                    <div class="abut-crd">
                        <h4 class="abt-heading">What Started The <span class="heading-span-text"> Medulla Effect ?</span>
                        </h4>
                        <p class="abt-para">The labor shortage is the leading factor why companies struggle to build and
                            grow their business
                            in
                            today's economy. The Medulla Effect works with companies struggling to hire and builds their
                            workforce
                            with global talent, while reducing cost, increase efficiency, hold accountability, and maximize
                            profits.
                        </p>


                    </div>
                    <div class="abut-crd">
                        <h4 class="abt-heading">How The Medulla Effect is<span class="heading-span-text"> Empowering
                                Employers &
                                Individuals..</span>
                        </h4>
                        <p class="abt-para">With the difficulty of employer's trying to find workers to fill their job
                            openings, employer's
                            have
                            essentially stopped laying off or firing people who don't exactly have the talent they are
                            looking for.
                            This is why companies are struggling to grow, execute their goals, and provide good customer
                            service. Our
                            team of professionals leverages our network of experts and locates the best skilled individuals
                            to fulfill
                            your opening's. Our team does the searching, interviewing, validating, prequalifying, and then
                            we present
                            to you the best candidates that qualify for the position. </p>
                    </div>
                    <div class="abut-crd">
                        <h4 class="abt-heading">The Medulla Effect Has Created <span class="heading-span-text">Industry Wide
                                Success.</span>
                        </h4>
                        <p class="abt-para">The Medulla Effect incorporates their strategic system into 68% of big
                            corporations. The Medulla
                            Effect
                            provides </p>

                        <ul class="abt-uls">
                            <li>Increase Chances Of Landing Your Dream Job
                            </li>


                            <li> Streamline The Job Search Process
                            </li>
                            <li> Access To Our Network Of Employers And Jobs
                            </li>
                            <li>Save You Time And Aggravation</li>
                        </ul>
                    </div>
                    <div class="abut-crd">
                        <h4 class="abt-heading">The The Medulla Effect Has Given Individuals A <span
                                class="heading-span-text">World Of
                                Opportunity</span> </h4>
                        <p class="abt-para">The Medulla Effect Will </p>
                        <ul class="abt-uls">
                            <li>Increase Chances Of Landing Your Dream Job
                            </li>


                            <li> Streamline The Job Search Process
                            </li>
                            <li> Access To Our Network Of Employers And Jobs
                            </li>
                            <li>Save You Time And Aggravation</li>
                        </ul>
                    </div>


                </div>

                <div class="col-lg-6 col-md-12 col-12">
                    <div>
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/group 39.png" class="w-100"
                            alt="" srcset="">
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <div class="mt-5 ">
                                <img src="{{ asset('user') }}/assets/images/landing-page-img/group 40.png" class="w-75"
                                    alt="" srcset="">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-start">
                            <div class="mt-5 ">
                                <img src="{{ asset('user') }}/assets/images/landing-page-img/group 41.png" class="w-75"
                                    alt="" srcset="">
                            </div>

                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div> --}}
    <!-- about us page -->


    <!-- sservice page -->
    <div id="ourServices" class="container-fluid  pb-5 ">

        <div class="text-center  mt-5 herosecion">
            <h3 class="pt-5 services-heading">Our Services</h3>
            <div class="botom-hr">
                <div class="iner-btom"></div>
            </div>

        </div>
        <div class="container mt-3 mb-5">
            <div class="row mt-3 justify-content-center">
                <div class="col-lg-4 col-md-6 col-10 mt-5">
                    <div class="iner-servc-crd">

                        <div class="img-sec">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/combined Shape.png"
                                alt="" srcset="">
                        </div>
                        <div>
                            <h3 class="about-servc-heading ">Creating World Of Opportunities</h3>
                            <p class="servc-detail pt-3">Lorem ipsum dolor sit amet consectetur, adipisig elit. Ipsa sit
                                exercitationem, offic iis placeat, error perspiciatis veniam corrupti voluptatem dolor.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-10 mt-5">
                    <div class="iner-servc-crd">
                        <div class="img-sec">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorredemail.png"
                                alt="" srcset="">
                        </div>
                        <div>
                            <h3 class="about-servc-heading ">Providing Dream
                                <br> Jobs
                            </h3>
                            <p class="servc-detail pt-3">Lorem ipsum dolor sit amet consectetur, adipisig elit. Ipsa sit
                                exercitationem, offic iis placeat, error perspiciatis veniam corrupti voluptatem dolor.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-10 mt-5">
                    <div class="iner-servc-crd">

                        <div class="img-sec">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/path2209.png" alt=""
                                srcset="">
                        </div>
                        <div>
                            <h3 class="about-servc-heading ">Connecting Desired Positions</h3>
                            <p class="servc-detail pt-3">Lorem ipsum dolor sit amet consectetur, adipisig elit. Ipsa sit
                                exercitationem, offic iis placeat, error perspiciatis veniam corrupti voluptatem dolor.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-10 mt-2">
                    <div class="iner-servc-crd">

                        <div class="img-sec">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/net-vector.png" alt=""
                                srcset="">
                        </div>
                        <div>
                            <h3 class="about-servc-heading ">Connecting Desired Positions</h3>
                            <p class="servc-detail pt-3">Lorem ipsum dolor sit amet consectetur, adipisig elit. Ipsa sit
                                exercitationem, offic iis placeat, error perspiciatis veniam corrupti voluptatem dolor.</p>
                        </div>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6 col-10 mt-2">
                    <div class="iner-servc-crd">

                        <div class="img-sec">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/bulb.png" alt=""
                                srcset="">
                        </div>
                        <div>
                            <h3 class="about-servc-heading ">Empowering Employers & Employees</h3>
                            <p class="servc-detail pt-3">Lorem ipsum dolor sit amet consectetur, adipisig elit. Ipsa sit
                                exercitationem, offic iis placeat, error perspiciatis veniam corrupti voluptatem dolor.</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 col-10 mt-2">
                    <div class="iner-servc-crd">

                        <div class="img-sec">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/trophy.png" alt=""
                                srcset="">
                        </div>
                        <div>
                            <h3 class="about-servc-heading ">Succeeding IndustryWise</h3>
                            <p class="servc-detail pt-3">Lorem ipsum dolor sit amet consectetur, adipisig elit. Ipsa sit
                                exercitationem, offic iis placeat, error perspiciatis veniam corrupti voluptatem dolor.</p>
                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
    <!-- serrvice page end-->



    <!-- faqs -->
    <div id="faqs" class="container-fluid faq-red">
        <div class="container pt-5 pb-5">
            <h3 class="text-center faqs-heading">FAQs</h3>
            <p class=" faq-para text-center mx-auto">The labor shortage is the leading factor why companies struggle to
                build and grow their business in today's economy. The Medulla Effect works with companies struggling to hire
                and builds their workforce with global talent.!</p>
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="accourdian">
                        <div class="accordian-item item1">
                            <div class="accordian-link">
                                What Started The Medulla Effect ?
                                <i class="icons ion-md-add"></i>
                            </div>
                            <div class="answer">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas esse odit voluptatem
                                    consectetur debitis vero magni facere. Laudantium quia architecto ratione accusamus ea
                                    dicta incidunt animi recusandae quasi cumque.Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Eum quas esse odit voluptatem consectetur debitis vero magni facere.
                                    Laudantium quia architecto ratione accusamus ea dicta incidunt animi recusandae quasi
                                    cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas esse odit
                                    voluptatem consectetur debitis vero magni facere. Laudantium quia architecto ratione
                                    accusamus ea dicta incidunt animi recusandae quasi cumque.Lorem ipsum dolor sit amet
                                    consectetur adipisicing elit. Eum quas esse odit voluptatem consectetur debitis vero
                                    magni facere. Laudantium quia architecto ratione accusamus ea dicta incidunt animi
                                    recusandae quasi cumque.Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum
                                    quas esse odit voluptatem consectetur debitis vero magni facere. Laudantium quia
                                    architecto ratione accusamus ea dicta incidunt animi recusandae quasi cumque.Lorem ipsum
                                    dolor sit amet consectetur adipisicing elit. Eum quas esse odit voluptatem consectetur
                                    debitis vero magni facere. Laudantium quia architecto ratione accusamus ea dicta
                                    incidunt animi recusandae quasi cumque.Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Eum quas esse odit voluptatem consectetur debitis vero magni facere.
                                    Laudantium quia architecto ratione accusamus ea dicta incidunt animi recusandae quasi
                                    cumque.</p>
                            </div>
                        </div>
                        <div class="accordian-item item2">
                            <div class="accordian-link">
                                How The Medulla Effect is Empowering Employers & Individuals?
                                <i class="icons ion-md-add"></i>
                            </div>
                            <div class="answer">
                                <p>With the difficulty of employer's trying to find workers to fill their job openings,
                                    employer's have essentially stopped laying off or firing people who don't exactly have
                                    the talent they are looking for. This is why companies are struggling to grow, execute
                                    their goals, and provide good customer service. Our team of professionals leverages our
                                    network of experts and locates the best skilled individuals to fulfill your opening's.
                                    Our team does the searching, interviewing, validating, prequalifying, and then we
                                    present to you the best candidates that qualify for the position.</p>
                            </div>
                        </div>
                        <div class="accordian-item item3">
                            <div class="accordian-link">
                                Has Medulla Effect Created Industry Wide Success?
                                <i class="icons ion-md-add"></i>
                            </div>
                            <div class="answer">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas esse odit voluptatem
                                    consectetur debitis vero magni facere. Laudantium quia architecto ratione accusamus ea
                                    dicta incidunt animi recusandae quasi cumque.</p>
                            </div>
                        </div>
                        <div class="accordian-item item4">
                            <div class="accordian-link">
                                Has Medulla Effect Given Individuals A World Of Opportunity ?
                                <i class="icons ion-md-add"></i>
                            </div>
                            <div class="answer">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quas esse odit voluptatem
                                    consectetur debitis vero magni facere. Laudantium quia architecto ratione accusamus ea
                                    dicta incidunt animi recusandae quasi cumque.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- faqs -->

    <!-- contact us section -->
    <div class="conatiner-fluid bg-grey" id="contactUs">
        <div class="container mt-5 mb-5">


            <div class="justify-content-center">
                <h1 class="contct us pt-5">Contact Us</h1>
              

            </div>
            <div class="row justify-content-center p-lg-5 p-md-3 m-3">

                <div class=" col-lg-6 col-md-6 col-12 ps-lg-5 pt-lg-0 pt-5">
                    <div class="form-images">

                        <img src="{{ asset('user') }}/assets/images/landing-page-img/map.png" 
                            alt=""  class="z--ind w-100"/>



                        <div>
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/cont-bg-img.png" 
                                alt="" class="
                                w-100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-5">
                    <div class="contct-frm ">
                        <form>


                            <div class=" mb-3">
                          
                                <input type="text" class="form-control cos" id="inputAddress" placeholder="Full Name">
                              </div>
                            <div class="row ">
                              <div class="col">
                                <input type="text" class="form-control cos" placeholder="Email">
                              </div>
                              <div class="col">
                                <input type="number" class="form-control cos" placeholder="Phone Number">
                              </div>
                            </div>

                            <div class="form-group">
                       
                                <textarea class="mt-3 cos form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="8"></textarea>
                              </div>
                            



                              <div class="submit-area  mt-4">
                                <button class="buttonsend">Send </button>
                            </div>
                          </form>
                        


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us end -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form>
                            <div class="input-subscribe">
                                <br>
                                <input type="text" placeholder="Your-Email">
                                <button>Subscribe now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row res-footer-575">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <div class="d-flex">
                            <img src="{{ asset('user') }}/assets/images/profile-imges/job-search-company.png"
                                alt="w8" class="logo-img">
                            <h4 class="Logo-text">Medulla
                                Effects</h4>
                        </div>
                        <p class="mt-2">
                            A108 Adam Street
                            New <br> York, NY 535022
                            United States

                        <div class="email-phone">

                            <div class="phone-foter">
                                <a href=""><i class="fa-solid fa-phone"></i>&nbsp;(305) 400 - 4033</a>
                            </div>
                            <div class="mt-2">
                                <a href=""><i class="fa-solid fa-envelope"></i>&nbsp;
                                    &nbsp;Sales@medullaeffect.com</a>
                            </div>
                        </div>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4 class="abt-heading">Useful Links</h4>
                        <ul>
                            <li class="footer-nav-links"><i class="fa-solid fa-angle-right"></i> &nbsp;<a
                                    href="{{ route('index') }}">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i> &nbsp; <a href="#aboutUs">About us</a></li>
                            <li><i class="fa-solid fa-angle-right"></i> &nbsp; <a href="#ourServices">Services</a></li>
                            <li><i class="fa-solid fa-angle-right"></i> &nbsp; <a href="#">Terms of service</a></li>
                            <li><i class="fa-solid fa-angle-right"></i> &nbsp; <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4 class="abt-heading">Our Social Networks</h4>
                        <p class="abt-para">Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies
                        </p>
                        <div class="social-links">
                            <a href="" class="social-icon-bg"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="" class="social-icon-bg"><i class="fa-brands fa-instagram"></i></a>
                            <a href="" class="social-icon-bg"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href=" " class="social-icon-bg"><i class="fa-brands fa-twitter"></i></a>
                            <a href="" class="social-icon-bg"><i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Medulla Effect</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="#">CodingSolution24.com</a>
            </div>
        </div>
    </footer><!-- End Footer -->




    <script>
        $(document).ready(function() {
            let cards = document.querySelectorAll(".accordian-item");
            [...cards].forEach((card) => {
                card.addEventListener("click", function() {
                    $(".accordian-item .answer")
                        .not($(this).find(".answer"))
                        .removeClass("open");
                    $(".accordian-item i")
                        .not($(this).find("i"))
                        .removeClass("ion-md-remove");
                    $(this).find(".accordian-link , .answer").toggleClass("open");
                    $(this).find("i").toggleClass("ion-md-remove");
                });
            });
        });
    </script>






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
@endsection
