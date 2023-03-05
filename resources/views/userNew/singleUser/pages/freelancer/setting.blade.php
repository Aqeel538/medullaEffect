@extends('userNew.singleUser.layouts.main')
@section('content')
    <link rel="stylesheet" href="{{ asset('user') }}/assets/styles/loader.css" />
    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.freelancer.secondNav')

    <div class="container  mt-5 pt-5 pb-4 mb-5">
        <div class="row mt-4 pt-4 pb-4">
            <div class="col-lg-4 col-md-4 col-12">
                <div class="setting-tabs" id="setting-tab">
                    <h4 class="pro-sett-heading ">Profile Setting</h4>
                    <div>
                        <button class="acount-btn settinglist " onclick="openCity('London')"><i
                                class="fa-solid fa-business-time"></i> Account</button>
                    </div>
                    <div>
                        <button class="acount-btn settinglist" onclick="openCity('Paris')"><i class="fa-solid fa-lock"></i>
                            Password</button>
                    </div>

                    <div>
                        <button class="acount-btn settinglist" onclick="openCity('Tokyo')"><i
                                class="fa-solid fa-check-double"></i> Active Status</button>
                    </div>


                    <div>
                        <button class="acount-btn settinglist" onclick="openCity('acount')"><i
                                class="fa-solid fa-toggle-on"></i> Deactivate Account</button>
                    </div>

                </div>

            </div>
            <div class="col-lg-8 col-md-8 col-12">
                <div class="setting-tabs">
                    <div id="London" class=" city">
                        <h2>Profile Info</h2>
                        <div class="row">
                            <div class="col-12">
                                <form action="{{ route('update.freelancer.profile') }}" method="POST">
                                    @csrf
                                    <div class="row mt-4">
                                        <div class="col-12  col-lg-6 col-md-6">
                                            <div class="input-container  ">
                                                {{-- <ion-icon name="person-outline"></ion-icon> --}}
                                                <input value="{!! $user->name ?? '' !!}" class="input-fields" type="text"
                                                    placeholder="Full Name" name="name">
                                            </div>

                                        </div>
                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                            <div class="input-container ">
                                                {{-- <ion-icon name="mail-outline"></ion-icon> --}}
                                                <input value="{!! $user->email ?? '' !!}" class="input-fields" type="email"
                                                    placeholder="Email" name="email">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mt-3">

                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mb-3">
                                            <div class="input-container ">
                                                {{-- <ion-icon name="call-outline"></ion-icon> --}}
                                                <input value="{!! $user->phone ?? '' !!}" class="input-fields int"
                                                    type="text" name="phone" id="mobile_code">

                                                <input type="hidden" name="dial_code" class="dial">
                                            </div>

                                        </div>
                                        <div class="col-12  col-lg-6 col-md-6 ">
                                            <div class="inputfield">
                                                {{-- <i class="fa-regular fa-user"></i> --}}
                                                <select name="gender" required style="width: 100%;">
                                                    <option value="">{!! $user->gender ?? 'Gender' !!}
                                                    </option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 form-group mt-3">
                                            <div class="inputfield">
                                                <select class="greyColor" name="work_type" style="width: 100%;"
                                                    id="workTypeSelect">
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
                                                    <option value="{!! $user->work_type ?? '' !!}" selected hidden>
                                                        {!! $user->work_type ?? 'Are you interested in full time or part time work?' !!}
                                                    </option>
                                                    <option value="Full Time">Full time</option>
                                                    <option value="Part Time">Part Time</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 form-group">
                                            <div class="inputfield mt-3">

                                                <input class="input-container" type="text" name="located_in"
                                                    value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                                    placeholder="In which city are you located?" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 form-group">
                                            <div class="inputfield mt-3">
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
                                                    <option value="{!! $user->job_type ?? '' !!}" selected hidden>
                                                        {!! $user->job_type ?? 'Are you interested to work In-person, remote or Hybrid?' !!}
                                                    </option>
                                                    <option value="In-person">In-person</option>
                                                    <option value="Remote">Remote</option>
                                                    <option value="Hybrid">Hybrid</option>
                                                    <option value="No-preference">No-preference</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12  mt-3">
                                            <div class="inputfield">
                                                <input class="input-container" type="text" name="industry_and_position"
                                                    placeholder="State your desired industry and position"
                                                    value="{!! $user->industry_and_position ?? '' !!}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 form-group mt-3">
                                            <div class="inputfield">
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
                                                    <option value="100k-1500k">100k-1500k</option>
                                                    <option value="1500k-2000k">1500k-2000k</option>
                                                    <option value="2000k-2500k">2000k-2500k</option>
                                                    <option value="2500k-3000k">2500k-3000k</option>
                                                    <option value="3000k-3500k">3000k-3500k</option>
                                                    <option value="3500k-4000k">3500k-4000k</option>
                                                    <option value="4000k-4500k">4000k-4500k</option>
                                                    <option value="4500k-5000k">4500k-5000k</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 form-group mt-3">
                                            <div class="inputfield">

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
                                                    <option value="Fresher">Fresher</option>
                                                    <option value="Begginer">Begginer</option>
                                                    <option value="Professional">Professional</option>
                                                </select>
                                                <span class="text-danger d-flex">
                                                    @error('experience')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 form-group mt-3">
                                            <div class="inputfield">
                                                <input class="input-container" type="text" name="nationality"
                                                    placeholder="State your nationality"
                                                    value="{!! $user->nationality ?? '' !!}" />
                                            </div>
                                        </div>
                                    </div>
                                    <a href="">
                                        <button type="submit" style="cursor: pointer;"
                                            class="buttonfill-update mt-4">Update</button></a>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div id="Paris" class=" city" style="display:none">
                        <div id="loader-container">
                            <div class="loader"></div>
                        </div>
                        <h5 class="card-title">Password</h5>
                        <div class="" id="password" role="tabpanel">
                            <form id="freelancerUpdatePassword">
                                @csrf
                                <div class="form-group ">

                                    <div class="input-container  ">
                                        <input class="input-fields" type="password" placeholder="Current Password"
                                            name="current_password" id="current_password">

                                    </div>
                                    <span class="text-danger error-text current_password"></span>
                                    {{-- <small><a href="#" class="forgot-psw">Forgot your password?</a></small> --}}
                                </div>
                                <div class="form-group mt-3">
                                    <div class="input-container  ">

                                        <input class="input-fields" type="password" placeholder="NewPassword"
                                            name="new_password" id="new_password">

                                    </div>
                                    <span class="text-danger error-text new_password"></span>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="input-container  ">

                                        <input class="input-fields" type="password" placeholder="Verify Password"
                                            name="new_confirm_password" id="new_confirm_password">

                                    </div>
                                    <span class="text-danger error-text new_confirm_password"></span>
                                </div>
                                <button type="submit" class="buttonfill-apply mt-3">Save changes</button>

                            </form>


                        </div>
                    </div>

                    <div id="Tokyo" class="city" style="display:none;">

                        <div>
                            <h4 class="p-0 m-0">Show when You Are Active</h4>
                        </div>
                        <div class="activestatus"></div>
                        <div>
                            <label type="button" class="switch mt-3">
                                <input type="checkbox" data-id="{{ $user->id }}" class="toggle-class"
                                    type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle"
                                    data-on="Active" data-off="InActive" {{ $user->is_active ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                            @if ($user->is_active == 1)
                                <div class="" id="activeStatusContent" style="display: none;">

                                    <p class="mt-3 text-success"><b> You are active now!</b></p>


                                </div>
                            @else
                                <div class="activestatus"></div>
                            @endif
                        </div>



                    </div>

                    <div id="acount" class="city" style="display:none">
                        <!-- Button trigger modal -->
                        <button type="button" class="deletebtnwarning">
                            Are You Sure to Delete Account???
                        </button>
                        <div class="mt-4">
                            <p>If you want to delete or deactivate your account you ll be permanently removig your data from
                                our system ,you cant undo it</p>
                            <h5 data-toggle="modal" data-target="#exampleModalCenter" class="deletebtn"> yes I want To
                                delete</h5>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title deletebtn" id="exampleModalLongTitle">Deactivate Account
                                        </h5>

                                    </div>
                                    <div class="modal-body">
                                        We are <b>Sorry</b> to hear that you would like to deactivate your account,
                                        please give us suggestion if you are deleting by any reason,or if you are looking to
                                        take a break you can delete it. <b>Thanks.!</b>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="{{ route('deactivate', $user->id) }}"><button type="button"
                                                class="deletebtn"><i class="fa-solid fa-trash"></i>
                                                Deactivate</button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <script>
        $(function() {
            $("#freelancerUpdatePassword").on('submit', function(e) {
                e.preventDefault();
                var loader = document.getElementById("loader-container");
                loader.style.display = "flex";
                $(".se-pre-con").fadeOut();

                //alert("on submit ajax")
                $.ajax({
                    url: "/change-password",
                    method: "post",
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            jQuery('#loader').fadeOut();
                            $('.current_password').html(data.error.current_password);
                            $('.new_password').html(data.error.new_password);
                            $('.new_confirm_password').html(data.error.new_confirm_password);
                            toastr.error(data.message);
                            loader.style.display = "none";


                        } else {

                            window.location.href = "/freelancer/setting";
                            toastr.success(data.message, data.title);
                        }
                    }
                });
            });
        });
    </script>
@endsection
