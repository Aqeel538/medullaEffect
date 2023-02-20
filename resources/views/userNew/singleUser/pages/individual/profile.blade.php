@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->
    @include('userNew.singleUser.pages.individual.secondNav')
    <!---------------- -Navend--------------- -->

    {{-- <div class="container-fluid mt-5">
        <h1 class="headings-profile">Profile</h1>
        <div class="row mt-3  p-4 ">
            <div class="col-lg-3 mt-md-5 mb-lg-0 mb-sm-4 mt-lg-0 mb-xs-4  col-12 text-center">
                <div class=" pt-5 pb-5 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="avatar-upload">
                        <form>
                            <div class="avatar-edit">
                                <?php $image = isset($user->image) && !empty($user->image) ? $user->image : ''; ?>
                                <input type='file' name="image" data-default-file="<?= $image ?>"
                                    accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div style="background-image: url({!! $user->image !!});">
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
                                        placeholder="Email ID" />///////
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
                                        <option value="Part Time">Part Time</option> ///////

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
                                    <img src="{{ asset('user') }}/assets/images/profile-imges/industry.png" alt=""
                                        srcset="">
                                    <input class="input-field-profile" type="text" name="industry_and_position"
                                        placeholder="{!! $user->industry_and_position ?? 'State your desired industry and position' !!}" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12  mt-2">
                                <div class="inputfield-profile">
                                    <img src="{{ asset('user') }}/assets/images/profile-imges/payrange.png" alt=""
                                        srcset="">
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

    </div> --}}

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
                    <h6 class="justify-content-center pt-2 john-text">John Doe</h6>
                    <div class="ps-3 pe-3 pt-3">
                        <p class="pr-4 john-para">123 Avenue Park City, Bhurban
                            4 Years Experience</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-12"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="">
                    <h1 class="pt-4 profile-text-ques-heading">Fill out the questionnaire</h1>
                    <h6 class="john-para-afer-ques-heading-2">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium lorue laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                        veritatis..</h6>
                    <form action="{{ route('update.user.profile') }}" method="POST">
                        @csrf
                        <div class="row mt-4">
                            <div class="col-12  col-lg-6 col-md-6">
                                <div class="input-container">
                                    <img src="{{ asset('user') }}/assets/images/landing-page-img/vector.png" alt=""
                                        srcset="">
                                    <input value="{!! $user->name ?? '' !!}" class="input-fields" type="text"
                                        placeholder="Full Name" name="name">
                                </div>
                                <span class="text-danger d-flex">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                            <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                <div class="input-container">
                                    <img src="{{ asset('user') }}/assets/images/landing-page-img/vectoremailblack.png"
                                        alt="" srcset="">
                                    <input value="{!! $user->email ?? '' !!}" class="input-fields" type="email"
                                        placeholder="Email ID" name="email">
                                </div>
                                <span class="text-danger d-flex">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12  col-lg-6 col-md-6">
                                <div class="input-container">
                                    <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorphoneblack.png"
                                        alt="" srcset="">
                                    <input value="{!! $user->phone ?? '' !!}" class="input-fields" type="text"
                                        placeholder="Phone Number" name="phone">
                                </div>
                                <span class="text-danger d-flex">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                            <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="gender" style="width: 100%;">
                                        <option value="{!! $user->gender ?? '' !!}">{!! $user->gender ?? 'Gender' !!}
                                        </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <span class="text-danger d-flex">
                                    @error('gender')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield">
                                    <img src="{{ asset('user') }}/assets/Images/profile-imges/Color.png" alt=""
                                        srcset="">
                                    <select name="job_type" style="width: 100%;">
                                        <option value="{!! $user->job_type ?? '' !!}">{!! $user->job_type ?? 'Are you interested in full time or part time work?' !!}
                                        </option>
                                        <option value="Full Time">Full time</option>
                                        <option value="Part Time">Part Time</option>
                                    </select>
                                    <span class="text-danger d-flex">
                                        @error('job_type')
                                            {{ $message }}
                                        @enderror
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield mt-3">
                                    <img src="{{ asset('user') }}/assets/Images/profile-imges/loction.png" alt=""
                                        srcset="">
                                    <input class="input-field" type="text" name="located_in"
                                        value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                        placeholder="In which city are you located?" />
                                </div>
                                <span class="text-danger d-flex">
                                    @error('located_in')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield mt-3">
                                    <img src="{{ asset('user') }}/assets/Images/profile-imges/relocate.png"
                                        alt="" srcset="">
                                    <select name="relocate" style="width: 100%;">
                                        <option value="{!! $user->relocate ?? '' !!}">{!! $user->relocate ?? 'Are you willing to relocate?' !!}</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                    <span class="text-danger d-flex">
                                        @error('relocate')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield mt-3">
                                    <img src="{{ asset('user') }}/assets/Images/profile-imges/work.png" alt=""
                                        srcset="">
                                    <select name="work_type" style="width: 100%;">
                                        <option value="{!! $user->work_type ?? '' !!}">{!! $user->work_type ?? 'Are you interested to work In-person, remote or hybrid?' !!}
                                        </option>
                                        <option value="In-person">In-person</option>
                                        <option value="Remote">Remote</option>
                                        <option value="Hybird">Hybird</option>
                                    </select>
                                    <span class="text-danger d-flex">
                                        @error('work_type')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12  mt-3">
                                <div class="inputfield">
                                    <img src="{{ asset('user') }}/assets/Images/profile-imges/industry.png"
                                        alt="" srcset="">
                                    <input value="{!! $user->industry_and_position ?? '' !!}" class="input-field" type="text"
                                        name="industry_and_position" placeholder="{!! $user->industry_and_position ?? 'State your desired industry and position' !!}" />
                                </div>
                                <span class="text-danger d-flex">
                                    @error('industry_and_position')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield">
                                    <img src="{{ asset('user') }}/assets/Images/profile-imges/payrange.png"
                                        alt="" srcset="">
                                    <select name="pay_range" style="width: 100%;">
                                        <option value="{!! $user->pay_range ?? '' !!}">
                                            {!! $user->pay_range ?? 'State your desired pay range' !!}
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
                                    <span class="text-danger d-flex">
                                        @error('pay_range')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield">
                                    <img src="{{ asset('user') }}/assets/Images/profile-imges/state.png" alt=""
                                        srcset="">
                                    <input value="{!! $user->nationality ?? '' !!}" class="input-field" type="text"
                                        name="nationality" placeholder="{!! $user->nationality ?? 'State your nationality' !!}" />
                                </div>
                                <span class="text-danger d-flex">
                                    @error('nationality')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <button type="submit" style="cursor: pointer;" class="buttonfill-update mt-4">Update</button>
                    </form>

                </div>

            </div>
            <div class="col-lg-3 mt-md-5 mt-lg-0 col-12 mt-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center res-top-margin">
                <div class=" pt-2 pb-2 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="pt-5 pb-5 pr-3 pl-3 right-card"
                        style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                        <h6 class="john-text justify-content-center">Resume</h6>
                        <div class="ps-3 pe-3">
                            <p class="pr-4 john-para pt-4 pb-3">Sed ut perspiciatis unde omnis ie natus error sit
                                voluptatem accn.</p>
                        </div>
                        <form id="resumeUpload">
                            <label for="resume" class="buttonunfillborder">Upload</label>
                            <input type='file' name="resume" id="resume" style="visibility:hidden;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
