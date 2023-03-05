<!-- -----1st--Navbar--------- -->
<div class="container-fluid">
    <header>
      <nav class="d-flex ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 ps-2 pe-2 p pt-4 pb-4 align-items-center">
        <div>
          <span><i class="ri-instagram-line just_colorhead start_16_respons"></i></span>
          <span>

            <i class="ri-youtube-line ms-1 just_colorhead start_16_respons"></i>
          </span>
        </div>
        <div class="mx-auto land_page_head d-flex">
          <img src="{{ asset('user') }}/assets/images/updatedlogo.svg" alt="w8" >
       
        </div>
        <div>
          <span><i class="fa-solid fa-phone just_colorhead start_16_respons"></i></span>
          <span><i class="fa-regular fa-envelope ms-1 just_colorhead start_16_respons"></i></span>
        </div>
      </nav>
    </header>
  </div>
  <!----- ---------2st--Navbar------------- -->
  <div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
    <header>

      <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <div>
            <span><i class="ri-search-line start_16_respons"></i></span>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 profile_list">
              <li><a href="{{route('tagline')}}">View Jobs</a></li>
              <li><a href="{{route('applied')}}">View Applications</a></li>
              <li><a href="#">Saved Jobs</a></li>
              <li><a href="#">Resume</a></li>
            </ul>
            <div>
              <span><i class="fa-regular fa-bell start_16_respons"></i></span>
              <span><i class="fa-regular fa-user ms-1 start_16_respons"></i></span>
            </div>
          </div>
        </div>
      </nav>
    </header>
  </div>