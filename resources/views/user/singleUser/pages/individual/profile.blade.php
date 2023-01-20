@extends('user.singleUser.layouts.main')
@section('content')

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
                            <li><a href="../Tagline.html">View Jobs</a></li>
                            <li><a href="#">View Applications</a></li>
                            <li><a href="#">Saved Jobs</a></li>
                            <li><a href="#">Resume</a></li>
                        </ul>
                    </div>
                    <div>
                        <span><i class="fa-regular fa-bell start_16_respons"></i></span>
                        <span><i class="fa-regular fa-user ms-1 start_16_respons"></i></span>

                        <i style="cursor:pointer;" class="ri-logout-circle-line"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{-- <a class="dropdown-item" href="{{ route('logout') }}"
                            >
                        </a> --}}
                        </i>
                        {{-- </a> --}}
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div class="container-fluid mt-5">
        <h1 class="headings-profile">Profile</h1>
        <div class="row mt-3 justify-content-center p-4 ">
            <div class="col-lg-3 mt-md-5 mb-lg-0 mb-sm-4 mt-lg-0 mb-xs-4   col-10 text-center">
                <div class=" pt-5 pb-5 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">

                    {{-- <div class="img-holder profile_image">
                        <img src="{{ asset('user') }}/assets/Images/profile-imges/user.png" alt="" srcset="">
                    </div> --}}
                    <div class="avatar-upload">
                        <form id="edit_image_form">
                            <div class="avatar-edit">
                                <?php $image = isset($user->image) && !empty($user->image) ? $user->image : ''; ?>
                                <input type='file' name="image" id="imageUpload" data-default-file="<?= $image ?>"
                                    accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview"
                                    style="background-image: url({!! $user->image !!});">
                                </div>
                            </div>
                        </form>
                    </div>

              
                    <h6 class="justify-content-center pt-2 john-text">{{ $user->name }}</h6>
                    <p class="john-para">{{ $user->address }}</p>
                </div>
            </div>
            <div class="col-lg-6 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="pr-2 pl-2">
                    <h1 class="pt-4 profile-text-ques-heading">Fill out the questionnaire</h1>
                    <p class="john-para-afer-ques-heading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
                    <form action="{{ route('update.user.profile') }}" method="POST" class="pt-3 pb-5">
                        @csrf
                        <div class="row">
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input class="input-field" type="text" name="name"
                                        value="<?= isset($user->name) && !empty($user->name) ? $user->name : '' ?>"
                                        placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-envelope icon"></i>
                                    <input class="input-field" type="email" name="email"
                                        value="<?= isset($user->email) && !empty($user->email) ? $user->email : '' ?>"
                                        placeholder="Email ID" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="input-icons">
                                    <i class="fa-regular fa-user icon"></i>
                                    <input class="input-field" type="text" name="phone"
                                        value="<?= isset($user->phone) && !empty($user->phone) ? $user->phone : '' ?>"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="gender" style="width: 100%;">

                                        <option value="" disabled selected hidden>{!! $user->gender ?? 'Gender' !!}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="other">Other</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="job_type" style="width: 100%;">

                                        <option value="" disabled selected hidden>{!! $user->job_type ??
                                            'Are you interested in full time or
                                                                                    part time work?' !!}</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <input class="input-field" type="text" name="located_in"
                                        value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                        placeholder="In which city are you located?" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="work_type" style="width: 100%;">

                                        <option value="" disabled selected hidden>{!! $user->work_type ??
                                            'Are you interested to work
                                                                                    In-person, remote or hybrid?' !!}</option>
                                        <option value="In-Person">In-Person</option>
                                        <option value="Remote">Remote</option>
                                        <option value="Hybrid">Hybrid</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <input class="input-field" type="text" name="industry_and_position"

                                        placeholder="{!! $user->industry_and_position ?? 'State your desired industry and position' !!}" />

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="pay_range" style="width: 100%;">


                                        <option value="" disabled selected hidden>{!! $user->pay_range ?? 'State your desired pay range' !!}

                                        </option>
                                        <option value="0-50">0-50</option>
                                        <option value="50-100">50-100</option>
                                        <option value="100-1500">100-1500</option>
                                        <option value="1500-2000">1500-2000</option>
                                        <option value="2000-2500">2000-2500</option>
                                        <option value="2500-3000">2500-3000</option>
                                        <option value="3000-3500">3000-3500</option>
                                        <option value="3500-4000">3500-4000</option>
                                        <option value="4000-4500">4000-4500</option>
                                        <option value="4500-5000">4500-5000</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>

                                    <input class="input-field" type="text" name="nationality"
                                        placeholder="{!! $user->nationality ?? 'State your nationality' !!}" />

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-lg-right">
                                <button type="submit" class="buttonfill">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-3 mt-md-5 mt-lg-0 col-10 mt-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center res-top-margin">
                <div class=" pt-2 pb-2 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="pt-5 pb-5 pr-3 pl-3 right-card"
                        style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                        <h6 class="john-text justify-content-center">Resume</h6>
                        <p class="john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                        </p>
                        <button type="" class="buttonunfillborder">Upload</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
