
@extends('user.singleUser.layouts.main')
@section('content')
<div class="container-fluid"  style="background-color: rgba(255, 243, 247, 1);">
    <header>

      <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
         <div>
    
         </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list">
              <li><a href="#">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Find Global Tilent</a></li>
              <li><a href="#">FAQs</a></li>
            </ul>
         <div>
    
         </div>
          </div>
        </div>
      </nav>
    </header>
  </div>

    <!-- hero section -->
    <div class="container herosecion mt-lg-5 mt-md-5 mt-2">
      <div class="hero-section-content row justify-content-center">
        <div class="col-lg-9 col-12">
          <h1>
            Matching Employers to
            Employees & Individual <span class="heading-span-text">Jobs.</span>
          </h1>
          <p class="text-phara-respns Halvetica text-dark">
            The Medulla Effect values your time, and so should you. let us
            streamline your job search process and help you land your dream job.
            We spend the time dealing with all the aggravation and problems that
            come with the job search process while giving you the ease of having
            one less thing to worry about.
          </p>
        </div>

      </div>

    </div>
    <!-- cards row -->
    <div class="container-fluid  mt-5  ">
      <div class="row justify-content-center text-center poppins p-4">
        <div class="col-lg-4 col-md-6 col-12 mt-lg-2 mt-md-3 mt-4">
          <div class="card card_phara" style="background: #F9F9F9; border-radius:21px;">
            <div class="card-body">
              <div class="cardsimg">
                <img src="{{ asset('user') }}//Assets/Images/landing-page-img/card-img-1.png" width="180px" alt="no img" srcset="" />
              </div>
              <h2 class="cardsheading ">Company</h2>
              <p class="text-phara-respns">
                Post job Hire people through Medulla...nis iste natus error sit
                voluptatem accusantium doloremque laudantium, totam rem aperiam,
                eaque ipsa quae ab ritatis.
              </p>
              <a href="{{ route('companay') }}">
              <button class="buttonfill poppins">Let’s Go</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-lg-2 mt-md-3 mt-4">
          <div class="card card_phara" style="background-color:  #7C2342;  border-radius:21px;">
            <div class="card-body">
              <div class="cardsimg">
                <img src="{{ asset('user') }}//Assets/Images/landing-page-img/card-img--3.png" alt="" srcset="" />
              </div>
              <h4 class="cardsheading text-white">Freelancer</h4>
              <p class="text-phara-respns text-white">
                Post your work and show your talent worldwideLooking to hire
                Freelancers for your project, Let Medulla help you to find right
                talent for your right project.
              </p>
              <a href="{{ route('freelancer') }}">
              <button class="buttonunfill poppins">Let’s Go</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-12 mt-lg-2 mt-md-3 mt-4">
          <div class="card card_phara" style="background: #F9F9F9; border-radius:21px; ">
            <div class="card-body">
              <div class="cardsimg">
                <img src="{{ asset('user') }}//Assets/Images/landing-page-img/card-img-2.png" alt="" srcset="" />
              </div>
              <h4 class="cardsheading">Individuals</h4>
              <p class="text-phara-respns">
                Looking for job/switch , Find your talent a right spot, use your
                skills in right place,let Medulla a place for you...ventore vre
                veritre veriteritatis..
              </p>
              <a href="{{ route('individual') }}">
              <button class="buttonfill poppins">Let’s Go</button></a>
            </div>
          </div>

        </div>




      </div>
    </div>
    <!-- form section -->
    <div class="container-fluid p-lg-5 p-md-5 p-0 modullaeffetsform">
      <div class="row  p-lg-5 p-0 form-main-row justify-content-center">
        <div class=" col-lg-6 col-md-6 col-12 form-left-side poppins modulaeff">
          <h6>#MedullaEffects</h6>
          <h4>Submit lead Form</h4>
          <p>
            Get Consultation From Medulla Expert and Get your Carrier in Right
            Way ... Sed ut perspiciatis unde omnis iste natus error sit
            voluptatem accusantium loremque laudantium, totam rem aperiam,
            eaque ipsa quae ab illo inventore veritatis.
          </p>
          <div class="row">
            <div class="col-6 form-group">
              <div class="input-group form_innerr mb-3">
                <span class="input-group-text border border-0"><i class="fa-regular fa-user start_16_respons"></i></span>
                <input type="text" class="form-control ps-0 border border-0" placeholder="First Name">
              </div>
            </div>
            <div class="col-6 form-group">
              <div class="input-group form_innerr mb-3">
                <span class="input-group-text border border-0">
                  <i class="fa-regular fa-user start_16_respons"></i>

                </span>
                <input type="text" class="form-control ps-0  border border-0" placeholder="Last Name">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-6 form-group">

              <div class="input-group form_innerr mb-3">
                <span class="input-group-text border border-0">
                  <i class="fa-regular fa-envelope start_16_respons"></i>


                </span>
                <input type="text" class="form-control ps-0  border border-0" placeholder="Email ID">
              </div>
            </div>

            <div class="col-6">


              <div class="input-group form_innerr mb-3">
                <span class="input-group-text border border-0">
                  <i class="fa-sharp fa-solid fa-phone start_16_respons"></i>



                </span>
                <input type="text" class="form-control ps-0  border border-0" placeholder="Phone Number">
              </div>
            </div>
          </div>
      

        <div class="d-flex justify-content-end">
          <button class="submit-btn">Submit</button>
        </div>
      </div>


      <div class=" col-lg-6 col-md-6 col-12 ps-lg-5 pt-lg-0 pt-5  mt-lg-0 mt-md-1 mt-5 mb-lg-0 mb-md-1 mb-5">
        <div class="form-images">

          <img src="{{ asset('user') }}//Assets/Images/landing-page-img/womenimg.png" width="100%" alt="" srcset="" />

          <i class="fas fa-solid fa-play playbutton"></i>

          <div>
            <img src="{{ asset('user') }}//Assets/Images/landing-page-img/frame.png" width="100%" alt="" srcset="" />
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer strt-->
      <div class="container-fluid p-lg-3 footer pt-lg-0 pt-3 mt-lg-0 mt-md-1 mt-5">
        <div class="row justify-content-center p-lg-5 p-md-4 p-2 mt-lg-0 mt-md-1 mt-5 poppins">
          <div class="col-md-6 col-lg-6 col-12 ps-lg-3  pe-lg-5">
            <div class=" land_page_head d-flex ps-lg-3 ps-md-2 p-1">
              <img src="{{ asset('user') }}//images/job-search-company.png" alt="w8" style="font-weight: 700;">
              <h4 class="just_colorhead">Medulla
                Effects</h4>
            </div>
            <p class=" mt-4 mb-0 footer_left">
              Get Consultation From Medulla Expert and Get your Carrier in Right
              Way.
            </p>
            <p class="footer_left">
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
          <div class="col-md-6 col-lg-6  col-12 align-self-center footer-right-row mt-5">
            <div class="row no-gutters">
              <div class="col-3">
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
              <div class="col-3">
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
            </div>
           
          
         
         
          </div>
        </div>
      </div>

  </div>
  @endsection
