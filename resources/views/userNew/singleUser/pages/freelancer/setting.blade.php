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
                    <div>
                        <button class="acount-btn settinglist"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i
                                class="fa-solid fa-arrow-right-from-bracket"></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form> Logout
                        </button>
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
                                    <div class="row mt-lg-4">
                                        <div class="col-12  col-lg-6 col-md-6 mb-lg-0 mb-md-3 mb-3">
                                            <div class="input-container  ">
                                                {{-- <ion-icon name="person-outline"></ion-icon> --}}
                                                <input value="{!! $nameParts[0] ?? '' !!}" class="input-fields" type="text"
                                                    placeholder="First name" name="first_name">
                                            </div>

                                        </div>
                                        <div class="col-12  col-lg-6 col-md-6">
                                            <div class="input-container  ">
                                                {{-- <ion-icon name="person-outline"></ion-icon> --}}
                                                <input value="{!! $nameParts[1] ?? '' !!}" class="input-fields" type="text"
                                                    placeholder="Last name" name="last_name">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row mt-lg-3 mt-0">
                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3 mb-lg-0 mb-md-3 mb-3">
                                            <div class="input-container ">
                                                {{-- <ion-icon name="mail-outline"></ion-icon> --}}
                                                <input value="{!! $user->email ?? '' !!}" class="input-fields" type="email"
                                                    placeholder="Email" name="email">
                                            </div>

                                        </div>
                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mb-3">
                                            <div class="input-container ">
                                                {{-- <ion-icon name="call-outline"></ion-icon> --}}
                                                <input value="{!! $user->phone ?? '' !!}" class="input-fields int"
                                                    type="text" name="phone" id="mobile_code">

                                                <input type="hidden" name="dial_code" class="dial">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mb-3">
                                            <div class="inputfield">
                                                <input value="{!! $user->company_name ?? '' !!}" class="input-fields int"
                                                    type="text" name="company_name">

                                                {{-- <select class="greyColor" name="company_name" style="width: 100%;"
                                                    id="workTypeSelect">
                                                    <?php
                                                    if($user->company_name){
                                                        ?>
                                                    <script>
                                                        $('#workTypeSelect').removeClass('greyColor')
                                                        $('#workTypeSelect').addClass('black')
                                                    </script>
                                                    <?php
                                                    }

                                                    ?>
                                                    <option value="{!! $user->company_name ?? '' !!}" selected hidden>
                                                        {!! $user->company_name ?? 'Are you interested in full time or part time work?' !!}
                                                    </option>
                                                    <option value="Full Time">Full time</option>
                                                    <option value="Part Time">Part Time</option>
                                                </select> --}}
                                            </div>
                                        </div>
                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mb-3">
                                            <div class="inputfield ">

                                                <input class="input-container" type="text" name="located_in"
                                                    value="<?= isset($user->website) && !empty($user->website) ? $user->website : '' ?>"
                                                    placeholder="Website(Optional)" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mb-3">
                                            <div class="inputfield ">

                                                <input class="input-container" type="text" name="industry"
                                                    value="<?= isset($user->industry) && !empty($user->industry) ? $user->industry : '' ?>"
                                                    placeholder="Industry" />
                                            </div>
                                        </div>

                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mb-3">
                                            <div class="inputfield ">

                                                <input class="input-container" type="text" name="address"
                                                    value="<?= isset($user->address) && !empty($user->address) ? $user->address : '' ?>"
                                                    placeholder="Street" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">

                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mb-3">
                                            <div class="inputfield ">

                                                <input class="input-container" type="text" name="city"
                                                    value="<?= isset($user->city) && !empty($user->city) ? $user->city : '' ?>"
                                                    placeholder="City(Optional)" />
                                            </div>
                                        </div>
                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mb-3">
                                            <div class="inputfield ">

                                                <input class="input-container" type="text" name="located_in"
                                                    value="<?= isset($user->state) && !empty($user->state) ? $user->state : '' ?>"
                                                    placeholder="State(Optional)" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 ">
                                            <div class="inputfield">
                                                <input class="input-container" type="text" name="zip_code"
                                                    placeholder="Zip code(Optional)" value="{!! $user->zip_code ?? '' !!}" />
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
                                    <form id="freelancerDeactivate">
                                        @csrf
                                        <div class="modal-body">
                                            {{-- We are <b>Sorry</b> to hear that you would like to deactivate your account,
                                        please give us suggestion if you are deleting by any reason,or if you are looking to
                                        take a break you can delete it. <b>Thanks.!</b> --}}

                                            <input type="hidden" name="user_id" value="{{ $user->id }}"
                                                id="">
                                            <select name="feed_back" class="form-select form-select-sm"
                                                aria-label=".form-select-sm example" required>
                                                <option selected Disabled select>Please give us Feedback</option>
                                                <option required value="1">I found what I was looking for</option>
                                                <option required value="2">No longer need this Service </option>
                                                <option required value="3">I was unhappy with the service </option>
                                                <option required value="4">I was not able to find what I was looking
                                                    for
                                                </option>
                                                <option required value="5">Problems with the technology</option>

                                                <option required value="6">Problems with the technology</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#"><button type="submit" class="deletebtn"><i
                                                        class="fa-solid fa-trash"></i>
                                                    Deactivate</button></a>
                                        </div>
                                    </form>
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

    <script>
        $(function() {
            $("#freelancerDeactivate").on('submit', function(e) {
                e.preventDefault();
                var loader = document.getElementById("loader-container");
                loader.style.display = "flex";
                $(".se-pre-con").fadeOut();

                //alert("on submit ajax")
                $.ajax({
                    url: "/freelancer/deactivate-account",
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
                            toastr.error(data.error.feed_back);
                            loader.style.display = "none";

                        } else {

                            window.location.href = "/login";
                            toastr.success(data.message, data.title);
                        }
                    }
                });
            });
        });
    </script>
@endsection
