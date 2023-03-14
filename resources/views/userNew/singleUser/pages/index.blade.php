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
                    Home Of Business Opportunities.
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
            <div class="col-lg-4 col-md-10 col-12 mt-lg-2 mt-md-5 mt-4">
                <div class="card-figure">
                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-1.png"
                            class="img-fluid img-siz-1" alt="no img" srcset="" />
                    </div>
                    <div class="card-iner-body">
                        <h2 class="cards-heading">Employers</h2>
                        <p class="cards-text-para">

                            Hire Best Candidates For Your Bussiness
                        </p>
                        <a href="{{ route('companay') }}">
                            <button class="buttonfilled go-btn">Let’s Go</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-10 col-12 mt-lg-2 mt-md-5 mt-4">
                <div class="card-figure-2nd-card">
                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-3.png"
                            class="img-fluid img-siz-2" alt="" srcset="" />
                    </div>
                    <div class="card-iner-body">
                        <h2 class="cards-headig-midle-card">Freelancer</h2>
                        <p class="text-para-midle-card">
                            Upload Your Services And Grow Your Business
                        </p>
                        <a href="{{ route('freelancer') }}">
                            <button class="buttonunfill go-btn">Let’s Go</button></a>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-10 col-12 mt-lg-2 mt-md-5 mt-4">
                <div class="card-figure">
                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/card-img-2.png"
                            class="img-fluid img-size" alt="" srcset="" />
                    </div>
                    <div class="card-iner-body">
                        <h2 class="cards-heading">Individuals</h2>
                        <p class="cards-text-para">
                            We Turn a Job Seeker Into a Job Secured
                        </p>
                        <a href="{{ route('individual') }}">
                            <button class="buttonfilled go-btn">Let’s Go</button></a>
                    </div>
                </div>

            </div>

        </div>
    </div>



    <!-- sservice page -->
    {{-- <div id="ourServices" class="container-fluid  pb-5 ">

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
    </div> --}}
    <!-- serrvice page end-->


    {{-- update dservices section --}}

    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center text-center  mt-5 ">
                <div class="col-lg-7 col-12">
                    <h3 class="pt-5 services-heading">Our Services</h3>
                    <p class="servc-detail">The labor shortage is the leading factor why companies struggle to build and
                        grow their business in today's economy. The Medulla Effect works with companies struggling to hire
                        and builds their workforce with global talent, while reducing cost, increase efficiency, hold
                        accountability, and maximize profits.</p>
                </div>
            </div>
            <div class="row mt-5 pt-5">
                <div class="col-lg-4">
                    <img src="{{ asset('user') }}/assets/images/landing-page-img/w-of-opportunities.png" alt=""
                        srcset="" class="w-100">
                    <div class="mt-5">
                        <h3 class="about-servc-heading ">Showcase Your Skills & Experience</h3>
                        <p class="servc-detail">If you’re an individual or freelancer, Medulla Effect allows you to not only
                            reach out to potential companies to work with; but also allows you to create a profile for
                            companies to look at, and reach out to you for potential business opportunities. </p>
                    </div>
                </div>
                <div class="col-lg-5 coled-md align-self-center">
                    <img class="w-100" src="{{ asset('user') }}/assets/images/landing-page-img/vectordesinarrow.png"
                        alt="no img" srcset="">

                </div>

            </div>
            <div class="row justify-content-end mt-lg-0 mt-md-0 mt-5">

                <div class="col-lg-4">
                    <img class="w-100" src="{{ asset('user') }}/assets/images/landing-page-img/net-emp-job.png"
                        alt="" srcset="">
                    <div class="mt-5">
                        <h3 class="about-servc-heading ">Find The Right Qualified Help For You <br>
                        </h3>
                        <p>If you’re a company, Medulla Effect allows you to find good qualified candidates for your
                            business. Our platform also allows you to have access to a variety of individual and freelancer
                            profiles to reach out for work.</p>

                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-lg-4">
                    <img class="w-100" src="{{ asset('user') }}/assets/images/landing-page-img/emp-emp-eply.png"
                        alt="" srcset="">
                    <div class="mt-5">
                        <h3 class="about-servc-heading ">Networking Opportunities <br> </h3>

                        <p class="servc-detail">Medulla Effect matches employers with individuals and businesses with
                            freelancers. Our platform creates business opportunities by allowing the user to network with
                            their desired party and fulfill their desired need.</p>
                    </div>
                </div>
                <div class="col-lg-5 coled-md">
                    <img class="w-100" src="{{ asset('user') }}/assets/images/landing-page-img/vec-des-arrow.png"
                        alt="" srcset="">
                </div>


            </div>

        </div>
    </div>
    {{-- updated services section --}}

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


    <!-- faqs -->
    <div id="faqs" class="container-fluid faq-red">
        <div class="container pt-5 pb-5">
            <h3 class="text-center faqs-heading">FAQs</h3>
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-10 col-12">
                    <p class=" faq-para text-center mx-auto">The labor shortage is the leading factor why companies
                        struggle to
                        build and grow their business in today's economy. The Medulla Effect works with companies struggling
                        to hire
                        and builds their workforce with global talent.!</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-12 col-11">
                    <div class="accourdian">
                        <div class="accordian-item item1">
                            <div class="accordian-link">
                                What Started The Medulla Effect?
                                <i class="icons ion-md-add"></i>
                            </div>
                            <div class="answer">
                                <p>The labor shortage is the leading factor why companies struggle to build and grow their
                                    business in today’s economy. Companies can’t find the right help they need which leads
                                    to a tough time growing. There are also a surplus of people who have been laid-off due
                                    to the economy, who are struggling to find a new job. The Medulla Effect team wants to
                                    get rid of those problems by creating a solution to help businesses and individuals.</p>
                            </div>
                        </div>
                        <div class="accordian-item item2">
                            <div class="accordian-link">
                                How the Medulla Effect is Empowering Employers & Individuals?
                                <i class="icons ion-md-add"></i>
                            </div>
                            <div class="answer">
                                <p>The Medulla Effect is a platform that allows individuals and freelancers to showcase
                                    their skills and experience to give them more power in landing their desired business
                                    opportunity. With the ability to create their own profile for businesses to view, this
                                    saves time on the individual and freelancer side by having companies reach out to them.
                                    <br>
                                    On the flip side, The Medulla Effect platform creates opportunities for businesses to
                                    find the right help they need to grow. Rather than relying on the hope of qualified
                                    individuals or freelancers to apply for a position, businesses can now reach out to our
                                    pool of individuals or freelancers on our platform and pick out who the best fit is by
                                    looking at the individual or freelancer profile. There is also a chat feature on our
                                    platform for businesses to reach out and network with the individual or freelancer
                                    before having to meet with them!
                                </p>
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
    <div class="container-fluid bg-grey" id="contactUs">
        <div class="container mt-5 mb-5">


            <div class="justify-content-center">
                <h1 class="contct us pt-5">Contact Us</h1>


            </div>
            <div class="row justify-content-center p-lg-5 p-md-3 m-3">

                <div class=" col-lg-6 col-md-6 col-12 ps-lg-5 pt-lg-0 pt-5">
                    <div class="form-images">

                        <img src="{{ asset('user') }}/assets/images/landing-page-img/map.png" alt=""
                            class="z--ind w-100" />



                        <div>
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/cont-bg-img.png" alt=""
                                class="
                                w-100" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-5">
                    <div class="contct-frm ">
                        <form id="submitLeadForm">
                            @csrf
                            <div class="row mb-lg-3 mb-0">
                                <div class="col-12">
                                    <input type="text" name="name" class="form-control cos" id="inputAddress"
                                        placeholder="Full Name">
                                    <span class="text-danger error-text name_error"></span>
                                </div>

                            </div>
                            <div class="row ">
                                <div class="col-lg-6 col-md-12 col-12">
                                    <input type="email" name="email" class="form-control cos" placeholder="Email">
                                    <span class="text-danger error-text email_error"></span>
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <input type="number" name="phone" class="form-control cos"
                                        placeholder="Phone Number">
                                    <span class="text-danger error-text phone_error"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="mt-3 cos form-control" name="message" id="exampleFormControlTextarea1" placeholder="Message"
                                    rows="8"></textarea>
                                <span class="text-danger error-text message_error"></span>
                            </div>
                            <div class="submit-area  mt-4">
                                <button type="submit" class="buttonsend">Send </button>
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

        {{-- <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form id="submitSubscriberForm">
                            @csrf
                            <div class="input-subscribe">
                                <br>
                                <input type="email" name="email" placeholder="Your-Email">

                                <button type="submit">Subscribe now</button>

                            </div>
                            <span class="text-danger error-text email_error"></span>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="footer-top">
            <div class="container">
                <div class="row res-footer-575">

                    <div class="col-lg-4 col-md-6 footer-contact">
                        <div class="d-flex">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/updatedlogo.svg" alt="">
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





    {{-- submit lead form --}}
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
                            $('.name_error').html(data.error.name);
                            $('.email_error').html(data.error.email);
                            $('.phone_error').html(data.error.phone);
                            $('.message_error').html(data.error.message);
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

    {{-- Subscriber form --}}
    <script>
        $(function() {
            $("#submitSubscriberForm").on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: "/submit/subscriber/form",
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
                            $('.email_error').html(data.error.email);
                        } else if (data.status == 1) {
                            toastr.success(data.message, data.title);
                            $('#submitSubscriberForm').each(function() {
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
