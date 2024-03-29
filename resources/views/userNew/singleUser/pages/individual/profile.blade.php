@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->

    <?php
    $blink = 2;
    ?>
    @include('userNew.singleUser.pages.individual.secondNav')
    <!---------------- -Navend--------------- -->
    <div class="container-fluid mt-5">
        <h1 class="headings-profile">Profile</h1>
        <div class="row mt-3 justify-content-center p-4 ">
            <div class="col-lg-3 mt-md-5 mb-lg-0 mb-sm-4 mt-lg-0 mb-xs-4  col-10 text-center">
                <div class=" pt-2 pb-2 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
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
                        <p class="pr-4 john-para">{{ $user->located_in }} <br>
                            {{ $user->experience }} Experience</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6 mt-md-4 mt-lg-0 mb-sm-4 mt-lg-0 mt-xs-4 col-10"
                style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                <div class="">
                    <h1 class="pt-4 profile-text-ques-heading">Fill out the questionnaire</h1>
                    <h6 class="john-para-afer-ques-heading-2">These selected answers will be used to showcase your profile
                        to companies looking to hire!</h6>
                    <form action="{{ route('update.user.profile') }}" method="POST">
                        @csrf
                        <div class="row mt-4">
                            <div class="col-12  col-lg-6 col-md-6">
                                <div class="input-container-2">
                                    {{-- <img src="{{ asset('user') }}/assets/images/landing-page-img/vector.png" alt=""
                                        srcset=""> --}}
                                    <input value="{!! $user->name ?? '' !!}" class="input-fields-2" type="text"
                                        placeholder="Full Name" name="name">
                                </div>
                                <span class="text-danger d-flex">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                            <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                <div class="input-container-2">
                                    {{-- <img src="{{ asset('user') }}/assets/images/landing-page-img/vectoremailblack.png"
                                        alt="" srcset=""> --}}
                                    <input value="{!! $user->email ?? '' !!}" class="input-fields-2" type="email"
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
                                <div class="input-container-2">
                                    {{-- <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorphoneblack.png"
                                        alt="" srcset=""> --}}
                                    <input value="{!! $user->phone ?? '' !!}" class="input-fields-2 int" type="text"
                                        name="phone" id="mobile_code">
                                    {{-- <input type="hidden" name="dial_code" class="dial"> --}}
                                </div>
                                <span class="text-danger d-flex">
                                    @error('phone')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                            <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                <div class="inputfield-2">
                                    {{-- <i class="fa-regular fa-user"></i> --}}
                                    <select name="gender" style="width: 100%;">
                                        <option value="{!! $user->gender ?? '' !!} " selected hidden>{!! $user->gender ?? 'Gender' !!}
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
                                <div class="inputfield-2">
                                    {{-- <img src="{{ asset('user') }}/assets/images/profile-imges/color.png" alt=""
                                        srcset=""> --}}
                                    {{-- <select name="work_type" style="width: 100%;">
                                        <option value="{!! $user->work_type ?? '' !!}">{!! $user->work_type ?? 'Are you interested in full time or part time work?' !!}
                                        </option>
                                        <option value="Full Time">Full time</option>
                                        <option value="Part Time">Part Time</option>
                                    </select> --}}

                                    <select class="greyColor" name="work_type" style="width: 100%;" id="workTypeSelect">
                                        <?php
                                        if($user->work_type){
                                            ?>
                                        <script>
                                            $('#workTypeSelect').removeClass('greyColor')
                                            $('#workTypeSelect').addClass('black')
                                        </script>
                                        <?php
                                        }

                                        ?>
                                        <option value="{!! $user->work_type ?? '' !!}" selected hidden>{!! $user->work_type ?? 'Are you interested in full time or part time work?' !!}
                                        </option>
                                        <option value="Full Time">Full time</option>
                                        <option value="Part Time">Part Time</option>
                                    </select>
                                </div>
                                <span class="text-danger d-flex">
                                    @error('work_type')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield-2 mt-3">
                                    {{-- <img src="{{ asset('user') }}/assets/images/profile-imges/loction.png" alt=""
                                        srcset=""> --}}
                                    <input class="input-fields-2" type="text" name="located_in"
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
                                <div class="inputfield-2 mt-3">
                                    {{-- <img src="{{ asset('user') }}/assets/images/profile-imges/relocate.png" alt=""
                                        srcset=""> --}}
                                    <select class="w-100 greyColor" name="relocate" id="relocateSelect">
                                        <?php
                                                if($user->relocate){
                                                    ?>
                                        <script>
                                            $('#relocateSelect').removeClass('greyColor')
                                            $('#relocateSelect').addClass('black')
                                        </script>
                                        <?php
                                                }

                                                ?>

                                        <option style="color:blue !important" value="{!! $user->relocate ?? '' !!}" selected
                                            hidden>
                                            {!! $user->relocate ?? 'Are you willing to relocate?' !!}
                                        </option>
                                        <option style="color:black;" value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>

                                </div>
                                <span class="text-danger d-flex">
                                    @error('relocate')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield-2 mt-3">
                                    {{-- <img src="{{ asset('user') }}/assets/images/profile-imges/work.png" alt=""
                                        srcset=""> --}}
                                    <select class="w-100 greyColor" name="job_type" style="width: 100%;"
                                        id="workingCapitalLoan">
                                        <?php
                                        if($user->job_type){
                                            ?>
                                        <script>
                                            $('#workingCapitalLoan').removeClass('greyColor')
                                            $('#workingCapitalLoan').addClass('black')
                                        </script>
                                        <?php
                                        }

                                        ?>
                                        <option value="{!! $user->job_type ?? '' !!}" selected hidden>{!! $user->job_type ?? 'Are you interested to work In-person, remote or Hybrid?' !!}
                                        </option>
                                        <option value="In-person">In-person</option>
                                        <option value="Remote">Remote</option>
                                        <option value="Hybrid">Hybrid</option>
                                        <option value="No-preference">No-preference</option>
                                    </select>

                                </div>
                                <span class="text-danger d-flex">
                                    @error('job_type')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="col-12 col-lg-4 col-md-4 form-group" id="city">
                                <div class="inputfield-2 mt-3">

                                    <input value="{!! $user->city ?? '' !!}" class="input-fields-2" type="text"
                                        placeholder="City" name="city" id="city">

                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-4 form-group" id="state">
                                <div class="inputfield-2 mt-3">

                                    <input value="{!! $user->state ?? '' !!}" class="input-fields-2" type="text"
                                        placeholder="State" name="state" id="state">

                                </div>
                            </div>
                            <div class="col-12 col-lg-4 col-md-4 form-group" id="zipCode">
                                <div class="inputfield-2 mt-3">

                                    <input value="{!! $user->zip_code ?? '' !!}" class="input-fields-2" type="number"
                                        placeholder="Zip code" name="zip_code" id="zopCode">

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12  mt-3">
                                <div class="inputfield-2">
                                    {{-- <img src="{{ asset('user') }}/assets/images/profile-imges/industry.png"
                                        alt="" srcset=""> --}}
                                    <input value="{!! $user->industry_and_position ?? '' !!}" class="input-fields-2" type="text"
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
                                <div class="inputfield-2">
                                    {{-- <img src="{{ asset('user') }}/assets/images/profile-imges/payrange.png"
                                        alt="" srcset=""> --}}
                                    <select class="w-100 greyColor" name="pay_range" style="width: 100%;"
                                        id="payRange">
                                        <?php
                                            if($user->pay_range){
                                                ?>
                                        <script>
                                            $('#payRange').removeClass('greyColor')
                                            $('#payRange').addClass('black')
                                        </script>
                                        <?php
                                            }

                                            ?>
                                        <option value="{!! $user->pay_range ?? '' !!}" selected hidden>
                                            {!! $user->pay_range ?? 'State your desired pay range' !!}
                                        </option>
                                        <option value="0-50k">0-50k</option>
                                        <option value="50k-100k">50k-100k</option>
                                        <option value="100k-150k">100k-150k</option>
                                        <option value="150k-200k">150k-200k</option>
                                        <option value="200k-2500k">200k-250k</option>
                                        <option value="250k-300k">250k-300k</option>
                                        <option value="300k-350k">300k-350k</option>
                                        <option value="350k-400k">350k-400k</option>
                                        <option value="400k-450k">400k-450k</option>
                                        <option value="450k-500k">450k-500k</option>
                                    </select>

                                </div>
                                <span class="text-danger d-flex">
                                    @error('pay_range')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield-2">
                                    <select class="w-100 greyColor" name="experience" style="width: 100%;"
                                        id="experience">
                                        <?php
                                            if($user->experience){
                                                ?>
                                        <script>
                                            $('#experience').removeClass('greyColor')
                                            $('#experience').addClass('black')
                                        </script>
                                        <?php
                                            }

                                            ?>
                                        <option value="{!! $user->experience ?? '' !!}" selected hidden>
                                            {!! $user->experience ?? 'Experience' !!}
                                        </option>
                                        <option value="Fresher">Beginner</option>
                                        <option value="Begginer">Intermediate</option>
                                        <option value="Professional">Advanced</option>
                                    </select>

                                </div>
                                <span class="text-danger d-flex">
                                    @error('experience')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield-2">
                                    {{-- <img src="{{ asset('user') }}/assets/images/profile-imges/state.png" alt=""
                                        srcset=""> --}}
                                    <input value="{!! $user->nationality ?? '' !!}" class="input-fields-2" type="text"
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
            <div class="col-lg-3 mt-md-5 mt-lg-0 col-10 mt-sm-4 mt-lg-0 mt-xs-4 mt-lg-0 text-center res-top-margin">
                <div class=" pt-2 pb-2 pl-3 pr-3 left-card" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <div class="pt-5 pb-5 pr-3 pl-3 right-card"
                        style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                        <h6 class="john-text justify-content-center">Resume</h6>
                        <div class="ps-3 pe-3">
                            <p class="pr-4 john-para pt-4 pb-3">Upload your resume for <br> employers to view</p>
                        </div>
                        <form id="resumeUpload">
                            <label for="resume" class="buttonunfillborder">Upload</label>
                            <input type='file' name="resume" id="resume" style="visibility:hidden;">
                        </form>
                    </div>

                </div>
                <div class="mt-lg-5 mt-md-3 mt-2">
                    <div class="mt-2 pt-2 pb-2 pr-3 pl-3" style="background-color: #F9F9F9;  border-radius: 21.0305px;">
                        <p class="aplied-jobs-para pt-4 pb-2">
                            Jobs Applied<span style="color: #9A1029;">&nbsp;{{ $jobsApplied }}</span> <br> <br>
                            Resumes <br> Downloaded by Companies <span style="color: #9A1029">0</span> <br><br>
                            Profile Views <span style="color: #9A1029;
                              ;">0</span>
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        $("#workingCapitalLoan").on("change", function() {
            if ($('#workingCapitalLoan').val() == "In-person") {
                // $("#tax").val('');

                $("#city").show(1000);
                $("#state").show(1000);
                $("#zipCode").show(1000);
            } else {

                $("#city").hide(1000);
                $("#state").hide(1000);
                $("#zipCode").hide(1000);
            }
        })

        $('#relocateSelect').on('change', () => {
            // alert("ok")
            $('#relocateSelect').removeClass('greyColor')
            $('#relocateSelect').addClass('black')

        })
        $('#workTypeSelect').on('change', () => {
            // alert("ok")
            $('#workTypeSelect').removeClass('greyColor')
            $('#workTypeSelect').addClass('black')

        })
        $('#workingCapitalLoan').on('change', () => {
            // alert("ok")
            $('#workingCapitalLoan').removeClass('greyColor')
            $('#workingCapitalLoan').addClass('black')

        })

        $('#payRange').on('change', () => {
            // alert("ok")
            $('#payRange').removeClass('greyColor')
            $('#payRange').addClass('black')

        })

        $('#experience').on('change', () => {
            // alert("ok")
            $('#experience').removeClass('greyColor')
            $('#experience').addClass('black')

        })
    </script>
@endsection
