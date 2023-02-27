@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionares">


                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="{{ route('index') }}">About us</a>
                        </li>
                        <li><a class="navbar-link" href="{{ route('index') }}">Services</a></li>
                        <li><a class="navbar-link" href="#">FAQ's</a></li>
                        <li><a class="navbar-link" href="{{ route('index') }}">Contact</a></li>

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

    <div class="container-fluid">
        <div class="container mt-5 mb-5">
            <h3 class="text-center faqs-heading">Frequently Asked Question</h3>
            <p class="text-center mx-auto">Have Questions?
                We Have Answers!</p>
            <div class="row justify-content-center">

                <div class="col-lg-10 col-md-10 col-12 mt-3 mb-5 p-5">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Why we shouldn't we trust atoms?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                                    body.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Why do you call someone with no body and no nose?
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                                    body. Let's imagine this being filled with some actual content.</div>
                            </div>
                        </div>
                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    What's the object oriented way to become wealthy?
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                    body. Nothing more exciting happening here in terms of content, but just filling up the
                                    space to make it look, at least at first glance, a bit more representative of how this
                                    would look in a real-world application.</div>
                            </div>
                        </div>

                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    HOw many tickles it takes to tickle an actopus?
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                                    body. Nothing more exciting happening here in terms of content, but just filling up the
                                    space to make it look, at least at first glance, a bit more representative of how this
                                    would look in a real-world application.</div>
                            </div>
                        </div>


                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    What is 1 + 1?
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Quisquam dolores consequuntur accusantium. Mollitia nisi et ipsa nobis vero
                                    exercitationem ad dolorum minus, saepe optio doloribus illo quia praesentium molestiae
                                    illum! Placeholder content for this accordion, which is intended to demonstrate the
                                    <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing
                                    more exciting happening here in terms of content, but just filling up the space to make
                                    it look, at least at first glance, a bit more representative of how this would look in a
                                    real-world application.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
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
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/job-search-company.png"
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
                                <a href=""><i class="fa-solid fa-phone">&nbsp;</i>(305) 400 - 4033</a>
                            </div>
                            <div>
                                <a href=""><i class="fa-solid fa-envelope"></i>&nbsp;(305) 400 - 4033</a>
                            </div>
                        </div>
                        </p>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>



                    <div class="col-lg-4 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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

    </div>
@endsection
