@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
                            class="search-icon-index" alt="" srcset="">
                    </div>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="{{ route('individual.jobs') }}">View Jobs</a></li>
                        <li><a class="navbar-link" href="{{ route('individual.appliedJobs') }}">View Applications</a>
                        </li>
                        <li><a class="navbar-link" href="#">Saved Jobs</a></li>
                        <li><a class="navbar-link" href="#">Resume</a></li>

                    </ul>
                    <div>
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                            alt="" srcset="">
                        &nbsp;
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" class="bell"
                            alt="" srcset="">
                        <i style="cursor:pointer;" class="ri-logout-circle-line"
                            onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
                        </i>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </nav>

                <div class="mobile-navbar-btns">
                    <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                    <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
                </div>
            </div>
        </div>
    </div>
    <!---------------- -Navend--------------- -->

    <div class="container-fluid mt-5">
        <h1 class="headings-profile">Profile</h1>
        <div class="row mt-3  p-4 ">
            <div class="col-lg-3 mt-md-5 mb-lg-0 mb-sm-4 mt-lg-0 mb-xs-4  col-12 text-center">
                <div class=" pt-5 pb-5 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="avatar-upload">
                        <form id="edit_image_form">
                            <div class="avatar-edit">
                                <?php $image = isset($user->image) && !empty($user->image) ? $user->image : ''; ?>
                                <input type='file' name="image" id="imageUpload" data-default-file="<?= $image ?>"
                                    accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url({!! $user->image !!});">
                                </div>
                            </div>
                        </form>
                    </div>
                    <h6 class="justify-content-center pt-2 john-text">{{ $user->name }}</h6>
                    <div class="ps-3 pe-3 pt-3">
                        <p class="pr-4 john-para">{{ $user->address }}</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="">
                    <h1 class="pt-4 profile-text-ques-heading">Fill out the questionnaire</h1>
                    <h6 class="john-para-afer-ques-heading-2">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem
                        accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis..
                    </h6>
                    <form action="{{ route('update.user.profile') }}" method="POST" class="pt-3 pb-5">
                        @csrf
                        <div class="row">
                            <div class="col-12  col-lg-6 col-md-6  ">
                                <div class="input-icons">

                                    <input class="input-field-profile" type="text" name="name"
                                        value="<?= isset($user->name) && !empty($user->name) ? $user->name : '' ?>"
                                        placeholder="Full Name">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                <div class="input-icons">
                                    <ion-icon name="mail-outline"></ion-icon>
                                    <input class="input-field-profile" type="email" name="email"
                                        value="<?= isset($user->email) && !empty($user->email) ? $user->email : '' ?>"
                                        placeholder="Email ID" />
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12  col-lg-6 col-md-6">
                                <div class="input-icons">
                                    <ion-icon name="call-outline"></ion-icon>

                                    <input class="input-field-profile" type="text" name="phone"
                                        value="<?= isset($user->phone) && !empty($user->phone) ? $user->phone : '' ?>"
                                        placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                <div class="inputfield-profile">
                                    <ion-icon name="person-outline"></ion-icon>
                                    <select name="gender" style="width: 100%;">

                                        <option value="" disabled selected hidden>{!! $user->gender ?? 'Gender' !!}</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="other">Other</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 ">
                                <div class="inputfield-profile">
                                    <img src="{{ asset('user') }}/assets/images/profile-imges/Color.png" alt=""
                                        srcset="">
                                    <select name="job_type" style="width: 100%;">

                                        <option value="" disabled selected hidden>{!! $user->job_type ?? 'Are you interested in full time or part time work?' !!}</option>
                                        <option value="Full Time">Full Time</option>
                                        <option value="Part Time">Part Time</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 mt-2">
                                <div class="inputfield-profile">
                                    <img src="{{ asset('user') }}/assets/images/profile-imges/loction.png" alt=""
                                        srcset="">
                                    <input class="input-field-profile" type="text" name="located_in"
                                        value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                        placeholder="In which city are you located?" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  mt-2">
                                <div class="inputfield-profile">
                                    <img src="{{ asset('user') }}/assets/images/profile-imges/work.png" alt=""
                                        srcset="">
                                    <select name="work_type" style="width: 100%;">

                                        <option value="" disabled selected hidden>{!! $user->work_type ?? 'Are you interested to work In-person, remote or hybrid?' !!}</option>
                                        <option value="In-Person">In-Person</option>
                                        <option value="Remote">Remote</option>
                                        <option value="Hybrid">Hybrid</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  mt-2">
                                <div class="inputfield-profile">
                                    <img src="{{ asset('user') }}/assets/images/profile-imges/industry.png"
                                        alt="" srcset="">
                                    <input class="input-field-profile" type="text" name="industry_and_position"
                                        placeholder="{!! $user->industry_and_position ?? 'State your desired industry and position' !!}" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  mt-2">
                                <div class="inputfield-profile">
                                    <img src="{{ asset('user') }}/assets/images/profile-imges/payrange.png"
                                        alt="" srcset="">
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
                            <div class="col-12  mt-2">
                                <div class="inputfield-profile">
                                    <img src="{{ asset('user') }}/assets/images/profile-imges/state.png" alt=""
                                        srcset="">
                                    <input class="input-field-profile" type="text" name="nationality"
                                        placeholder="{!! $user->nationality ?? 'State your nationality' !!}" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                placeholder="{!! $user->description ?? 'Description' !!}"
                                value="<?= isset($user->description) && !empty($user->description) ? $user->description : 'Description' ?>"
                                rows="6" style="background-color: #f4f4f4; border: none"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-12  d-flex justify-content-end text-lg-right mt-4">
                                <button type="submit" class="buttonfill">Update</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-3 mt-md-5 mt-lg-0 col-12 mb-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center">
                <div class="pt-5 pb-5 pr-3 pl-3 right-card" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                    <h6 class="john-text justify-content-center">Resume</h6>
                    <p class="john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit voluptatem accn.
                    </p>
                    {{--
                    <label for="files" class="buttonunfillborder">Upload</label>
                    <input id="files" style="visibility:hidden;" type="file"> --}}




                    <form id="resumeUpload">
                        <label for="resume" class="buttonunfillborder">Upload</label>
                        <input type='file' name="resume" id="resume" style="visibility:hidden;">
                    </form>


                </div>
                <!-- 2nd col -->
                <div class="">
                    <div class="mt-5 pt-2 pb-2 pr-3 pl-3" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                        <p class="aplied-jobs-para pt-4 pb-2">
                            Jobs Applied<span style="color: #9A1029;">&nbsp;{{ $jobsApplied }}</span> <br> <br>
                            Resumes <br> Downloaded by Company <span style="color: #9A1029">10</span> <br><br>
                            Profile Views <span style="color: #9A1029;
                              ;">20</span>
                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
