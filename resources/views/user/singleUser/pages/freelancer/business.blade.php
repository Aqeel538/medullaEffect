@extends('user.singleUser.layouts.main')
@section('content')
<!----- ---------2st--Navbar------------- -->
<div
      class="container-fluid"
      style="background-color: rgba(255, 243, 247, 1)"
    >
      <header>
        <nav
          class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light"
        >
          <div class="container-fluid">
            <div>
              <span><i class="ri-search-line start_16_respons"></i></span>
            </div>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul
                class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list Halvetica"
                id="myDIV"
              >
                <li><a href="#" class="mylist active">Businesses</a></li>
                <li><a href="#" class="mylist">Freelancers</a></li>
                <li><a href="#" class="mylist">Settings</a></li>
              </ul>
            </div>
            <div>
                <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                <span
                  ><i class="fa-regular fa-user ms-1 start_16_respons"></i
                ></span>
              </div>
          </div>
        </nav>
      </header>
    </div>

    <!-- -------Heading--------- -->
    <div class="container-fluid tagline-1">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 col-sm-9 col-12 text-center Halvetica">
          <h1 class="headings-profile">Businesses</h1>
          <p class="mt-4 john-para-afer-ques-heading mb-4">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
            quae ab illo inventore veritatis.
          </p>
        </div>
      </div>
    </div>
    <!-- -------------3rd---Navbar---------- -->
    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="p-1 col-lg-10 col-md-12 row-bg-color">
            <div class="row industry-dropdown-input">
              <div class="col-lg-5 col-md-5 col-12">
                <div class="inpus-industry">&nbsp; 
                  <i class="fa-solid fa-briefcase text-dark start_16_respons"></i>
                  &nbsp; Industry 
                  <div class="pos">
                    <input list="browsers" name="myBrowser" class="widths"  />
                  </div>
             
                  <datalist id="browsers">
                    <option value="Chrome"></option>
                    <option value="Firefox"></option>
                    <option value="Internet Explorer"></option>
                    <option value="Opera"></option>
                    <option value="Safari"></option>
                    <option value="Microsoft Edge"></option>
                  </datalist>
                </div>
              </div>
              <div class="col-lg-5 col-md-5 col-12">
                <div class="inpus-industry-2">
                  <i class="fa-solid fa-location-dot text-dark"></i> &nbsp;Location &nbsp;
                  <div class="pos">
                    <input type="search"  class="width"/>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-md-2 respn-btn">
                  <button type="button" class="buttonfill text-center">
                    Search
                  </button>
                  <button type="button" class="non">Filter</button>
              
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-md-12 filter-buton-thrd-nav ">
             <button type="button" class="non2 buttonunfill">
                Filter
              </button>
          </div>
        </div>
      </div>
    </div>

    <!-- -----------Tabs------------- -->
    <div class="container-fluid mt-5 p-lg-5 p-md-4 p-sm-3 p-1">
      <!-- ------------row--1---Tab------------- -->
      <div class="row text-center ps-lg-5 pe-lg-5 pl-md-5 pr-md-5 crd-row-one">
        <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4">
          <div
            style="background-color: #f9f9f9; border-radius: 20px"
            class="p-5 single-crd-row"
          >
            <div class="img-holder">
              <img
                src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                alt=""
                srcset=""
              />
            </div>
            <div class="text-center">
              <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
              <p class="john-para-afer-ques-heading">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium loru.
              </p>
            </div>

            <button class="buttonfill mt-4 mb-4">Contact</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4">
          <div
            style="background-color: #f9f9f9; border-radius: 20px"
            class="p-5"
          >
            <div class="img-holder">
              <img
                src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                alt=""
                srcset=""
              />
            </div>

            <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
            <p class="john-para-afer-ques-heading">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium loru.
            </p>

            <button class="buttonfill mt-4 mb-4">Contact</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4">
          <div
            style="background-color: #f9f9f9; border-radius: 20px"
            class="p-5"
          >
            <div class="img-holder">
              <img
                src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                alt=""
                srcset=""
              />
            </div>

            <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
            <p class="john-para-afer-ques-heading">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium loru.
            </p>

            <button class="buttonfill mt-4 mb-4">Contact</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mb-lg-3 mb-md-3 mt-4">
          <div
            style="background-color: #f9f9f9; border-radius: 20px"
            class="p-5"
          >
            <div class="img-holder">
              <img
                src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                alt=""
                srcset=""
              />
            </div>

            <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
            <p class="john-para-afer-ques-heading">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium loru.
            </p>

            <button class="buttonfill mt-4 mb-4">Contact</button>
          </div>
        </div>
      </div>
      <!-- ------------row 2---Tab------------- -->
      <div class="row text-center ps-lg-5 pe-lg-5 pl-md-5 pr-md-5 crd-row-one">
        <div class="col-lg-3 col-md-6 col-12 mt-lg-3 mt-md-3 mt-4">
          <div
            style="background-color: #f9f9f9; border-radius: 20px"
            class="p-5 single-crd-row"
          >
            <div class="img-holder">
              <img
                src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                alt=""
                srcset=""
              />
            </div>
            <div class="text-center">
              <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
              <p class="john-para-afer-ques-heading">
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                accusantium loru.
              </p>
            </div>

            <button class="buttonfill mt-4 mb-4">Contact</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-lg-3 mt-md-3 mt-4">
          <div
            style="background-color: #f9f9f9; border-radius: 20px"
            class="p-5"
          >
            <div class="img-holder">
              <img
                src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                alt=""
                srcset=""
              />
            </div>

            <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
            <p class="john-para-afer-ques-heading">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium loru.
            </p>

            <button class="buttonfill mt-4 mb-4">Contact</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-lg-3 mt-md-3 mt-4">
          <div
            style="background-color: #f9f9f9; border-radius: 20px"
            class="p-5"
          >
            <div class="img-holder">
              <img
                src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                alt=""
                srcset=""
              />
            </div>

            <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
            <p class="john-para-afer-ques-heading">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium loru.
            </p>

            <button class="buttonfill mt-4 mb-4">Contact</button>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12 mt-lg-3 mt-md-3 mt-4">
          <div
            style="background-color: #f9f9f9; border-radius: 20px"
            class="p-5"
          >
            <div class="img-holder">
              <img
                src="{{ asset('user') }}/assets/Images/profile-imges/jobview-img.png"
                alt=""
                srcset=""
              />
            </div>

            <h3 class="bus-heading mt-3 mb-3">Business Name</h3>
            <p class="john-para-afer-ques-heading">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem
              accusantium loru.
            </p>

            <button class="buttonfill mt-4 mb-4">Contact</button>
          </div>
        </div>
      </div>
    </div>
@endsection