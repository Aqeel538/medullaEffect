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
                    <ul class="navbar-list" id="myDIV">
                        <li><a class="navbar-link" href="{{ route('businesses.list') }}">Businesses</a></li>
                        <li><a class="navbar-link" href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
                        <li><a class="navbar-link" href="#">Settings</a></li>

                    </ul>
                    <div>
                        <span>
                            <a class="navbar-link" href="{{ route('see.notifications') }}">
                                <i class="fa-regular fa-bell start_16_respons"></i>
                            </a>
                        </span>
                        <span>
                            <a class="navbar-link  mylist active" href="{{ route('chatbot') }}">
                                <i class="fa-regular fa-user ms-1 start_16_respons"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="container mb-5 mt-5">
        <h1 class="headings-profile mb-4">Inbox</h1>
        <div class="row mt-3 ">
            <div class="col-lg-5 col-12 text-center">
                <div class=" p-4" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <h1 class="profile-text-ques-heading mb-5" style="text-align: left!important">All Messages</h1>
                    <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
                        <div class="img-holder">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
                        </div>
                        <div class="text-start ps-2">
                            <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
                            <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
                        </div>
                        <div class="d-flex align-items-end justify-content-end">
                            <p class=" john-para-afer-ques-heading">14m</p>
                        </div>
                    </div>
                    <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
                        <div class="img-holder">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
                        </div>
                        <div class="text-start ps-2">
                            <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
                            <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
                        </div>
                        <div class="d-flex align-items-end justify-content-end">
                            <p class=" john-para-afer-ques-heading">14m</p>
                        </div>
                    </div>
                    <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
                        <div class="img-holder">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
                        </div>
                        <div class="text-start ps-2">
                            <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
                            <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
                        </div>
                        <div class="d-flex align-items-end justify-content-end">
                            <p class=" john-para-afer-ques-heading">14m</p>
                        </div>
                    </div>
                    <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
                        <div class="img-holder">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
                        </div>
                        <div class="text-start ps-2">
                            <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
                            <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
                        </div>
                        <div class="d-flex align-items-end justify-content-end">
                            <p class=" john-para-afer-ques-heading">14m</p>
                        </div>
                    </div>
                    <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
                        <div class="img-holder">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
                        </div>
                        <div class="text-start ps-2">
                            <h3 class="m-0 p-0 inbox-chat-heading">John Doe</h3>
                            <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise na....</p>
                        </div>
                        <div class="d-flex align-items-end justify-content-end">
                            <p class=" john-para-afer-ques-heading">14m</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12 " style="background-color: #F9F9F9;  border-radius: 21.0305px; ">
                <div class="p-4 fixed-top chat-header">
                    <div class="d-flex">
                        <div class="img-holder">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
                        </div>
                        <div class="ps-2">
                            <p class="m-0  inbox-chat-heading">John Doe</p>
                            <p class="p-0 m-0 ">Online</p>
                        </div>

                    </div>
                </div>
                <div class="container mesages-row">
                    <div class="mid-div-top-margin">
                    </div>
                    <div class="row">
                        <div class="col-5 offset-7">
                            <p class="chat-ms-rec">Hey There I need a help</p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-5">
                            <p class="chat-msg">Hey There I need a help</p>
                        </div>
                    </div>
                </div>
                <div class="input-text d-flex justify-content-end">
                    <input type="text" value="" placeholder="Type Here...." style="width: 100%;">
                    <i class="ri-send-plane-fill"></i>
                </div>
            </div>
        </div>
    </div>

    <!---------------- -Navend OLD--------------- -->
    {{-- <div class="container mb-5 mt-5">
        <h1 class="headings-profile mb-4">Inbox</h1>
        <div class="row mt-3 ">
            <div class="col-lg-5 col-12 text-center">
                <div class=" p-4" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <h1 class="profile-text-ques-heading mb-5">All Messages</h1>

                    <div class="d-flex align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
                        <div class="img-holder">
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
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
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
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
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
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
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
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
                            <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                class="" alt="">
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
            <div class="col-lg-7 col-12 " style="background-color: #F9F9F9;  border-radius: 21.0305px; ">
                <div class="row p-4">
                    <div class="col-12">
                        <div class="col-2">
                            <div class="img-holder">
                                <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" style="width: 60px;"
                                    class="" alt="">
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
    </div> --}}
@endsection
