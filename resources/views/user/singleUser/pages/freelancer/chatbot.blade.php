@extends('user.singleUser.layouts.main')
@section('content')
<div class="container-fluid" style="background-color: rgba(255, 243, 247, 1);">
    <header>
      <nav class="ps-lg-5 pe-lg-5 ps-md-5 pe-md-5 pt-3 pb-3 navbar navbar-expand-lg navbar-light">
        <div class="container-fluid p-0">
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
              <li><a href="../Tagline.html">Businesses</a></li>
              <li><a href="#">Freelancers</a></li>
              <li><a href="#">Settings</a></li>
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
  <!---------------- -Navend--------------- -->
  <div class="container mb-5 mt-5">
    <h1 class="headings-profile mb-4">Inbox</h1>
    <div class="row mt-3 ">
      <div class="col-lg-5 col-12 text-center">
        <div class=" p-4" style="background-color: #F9F9F9; border-radius: 21.0305px;">
            <h1 class="profile-text-ques-heading mb-5">All Messages</h1>
           
            <div class="d-flex align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
              <div class="img-holder">
                  <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;" class="" alt="">
              </div>
              <div class="text-start ps-2">
                  <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
                  <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
              </div>
              <div class="d-flex align-items-end justify-content-end">
                  <p class="mb-0 john-para-afer-ques-heading">14m</p>
              </div>
          </div>
          <div class="d-flex align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
            <div class="img-holder">
                <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;" class="" alt="">
            </div>
            <div class="text-start ps-2">
                <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
                <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
            </div>
            <div class="d-flex align-items-end justify-content-end">
                <p class="mb-0 john-para-afer-ques-heading">14m</p>
            </div>
        </div>
        <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
          <div class="img-holder">
              <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;" class="" alt="">
          </div>
          <div class="text-start ps-2">
              <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
              <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
          </div>
          <div class="d-flex align-items-end justify-content-end">
              <p class="mb-0 john-para-afer-ques-heading">14m</p>
          </div>
      </div>
      <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
        <div class="img-holder">
            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;" class="" alt="">
        </div>
        <div class="text-start ps-2">
            <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
            <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
        </div>
        <div class="d-flex align-items-end justify-content-end">
            <p class="mb-0 john-para-afer-ques-heading">14m</p>
        </div>
    </div>
    <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
      <div class="img-holder">
          <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;" class="" alt="">
      </div>
      <div class="text-start ps-2">
          <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
          <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
      </div>
      <div class="d-flex align-items-end justify-content-end">
          <p class="mb-0 john-para-afer-ques-heading">14m</p>
      </div>
  </div>
           
       
        </div>
      </div>
      <div class="col-lg-7 col-12 "
        style="background-color: #F9F9F9;  border-radius: 21.0305px; ">
       <div class="row p-4">
        <div class="col-12">
            <div  class="col-2">
              <div  class="img-holder">
                <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;" class="" alt="">
            </div>
          </div>
                <div class="img-holder">
                    <p class="m-0 inbox-chat-heading">John Doe</p>
                    <p class="p-0 m-0">Online</p>
                </div>
         
        </div>
       </div>
<!--   
            <div class="flex-chat-row d-flex my-auto align-content-end">
          
                <div class="">
                    <p class="m-0 inbox-chat-heading">John Doe</p>
                    <p class="p-0 m-0">Online</p>
                </div>
            </div> -->
            <!-- <div class="text-field">
                <div class="send-icon-plus-field">
                    <input type="text" name="" id="">
                </div>
              
            </div> -->
        </div>
       </div>
      </div>
@endsection