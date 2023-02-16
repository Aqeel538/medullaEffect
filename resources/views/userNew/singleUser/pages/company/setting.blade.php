@extends('userNew.singleUser.layouts.main')
@section('content')
    {{-- TOASTER LINKS HERE --}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{-- TOASTER LINKS END --}}

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
                    </div>
                </nav>

                <div class="mobile-navbar-btns">
                    <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                    <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
                </div>
            </div>
        </div>
    </div>

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
                                <form action="{{ route('update.company.profile') }}" method="POST">
                                    @csrf
                                    <div class="row mt-4">
                                        <div class="col-12  col-lg-6 col-md-6">
                                            <div class="input-container  ">
                                                <ion-icon name="person-outline"></ion-icon>
                                                <input value="{!! $user->name ?? '' !!}" class="input-fields" type="text"
                                                    placeholder="Full Name" name="name">
                                            </div>

                                        </div>
                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                            <div class="input-container ">
                                                <ion-icon name="mail-outline"></ion-icon>
                                                <input value="{!! $user->email ?? '' !!}" class="input-fields" type="email"
                                                    placeholder="Email ID" name="email">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mt-3">

                                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                                            <div class="input-container ">
                                                <ion-icon name="call-outline"></ion-icon>
                                                <input value="{!! $user->phone ?? '' !!}" class="input-fields" type="text"
                                                    placeholder="Phone Number" name="phone">
                                            </div>

                                        </div>
                                        <div class="col-12  col-lg-6 col-md-6 ">
                                            <div class="inputfield">
                                                <i class="fa-regular fa-user"></i>
                                                <select name="gender" required style="width: 100%;">
                                                    <option value="" disabled selected hidden>{!! $user->gender ?? 'Gender' !!}
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
                                                <img src="../Assets/Images/profile-imges/Color.png" alt=""
                                                    srcset="">
                                                <select name="job_type" required style="width: 100%;">
                                                    <option value="" disabled selected hidden>{!! $user->job_type ?? 'Are you interested in full time or part time work?' !!}
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
                                                <img src="../Assets/Images/profile-imges/loction.png" alt=""
                                                    srcset="">
                                                <input class="input-field" type="text" name="located_in"
                                                    value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                                    placeholder="In which city are you located?" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 form-group">
                                            <div class="inputfield mt-3">
                                                <img src="../Assets/Images/profile-imges/relocate.png" alt=""
                                                    srcset="">
                                                <select name="work_type" required style="width: 100%;">
                                                    <option value="" disabled selected hidden>{!! $user->work_type ?? 'Are you interested to work In-person, remote or hybrid?' !!}
                                                    </option>
                                                    <option value="In-person">In-person</option>
                                                    <option value="Remote">Remote</option>
                                                    <option value="Hybird">Hybird</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12  mt-3">
                                            <div class="inputfield">
                                                <img src="../Assets/Images/profile-imges/work.png" alt=""
                                                    srcset="">
                                                <input class="input-field" type="text" name="industry_and_position"
                                                    placeholder="{!! $user->industry_and_position ?? 'State your desired industry and position' !!}" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-12 form-group mt-3">
                                            <div class="inputfield">
                                                <img src="../Assets/Images/profile-imges/industry.png" alt=""
                                                    srcset="">
                                                <select name="pay_range" required style="width: 100%;">
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

                                        <div class="col-12 form-group mt-3">
                                            <div class="inputfield">
                                                <img src="../Assets/Images/profile-imges/payrange.png" alt=""
                                                    srcset="">
                                                <input class="input-field" type="text" name="nationality"
                                                    placeholder="{!! $user->nationality ?? 'State your nationality' !!}" />
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
                        <h5 class="card-title">Password</h5>
                        <div class="" id="password" role="tabpanel">
                            <form method="POST" action="{{ route('change.password') }}">
                                @csrf
                                <div class="form-group ">

                                    <div class="input-container  ">
                                        <i class="fa-solid fa-lock"></i>
                                        <input class="input-fields" type="password" placeholder="Current Password"
                                            name="current_password" id="current_password">
                                        @error('current_password')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <small><a href="#" class="forgot-psw">Forgot your password?</a></small>
                                </div>
                                <div class="form-group">
                                    <div class="input-container  ">
                                        <i class="fa-solid fa-lock"></i>
                                        <input class="input-fields" type="password" placeholder="NewPassword"
                                            name="new_password" id="new_password">
                                        @error('new_password')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <div class="input-container  ">
                                        <i class="fa-solid fa-lock"></i>
                                        <input class="input-fields" type="password" placeholder="Verify Password"
                                            name="new_confirm_password" id="new_confirm_password">
                                        @error('new_confirm_password')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
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
                                <input type="checkbox" onchange="myFunction()">
                                <span class="slider round"></span>
                            </label>
                            <div class="" id="activeStatusContent" style="display: none;">
                                <p class="mt-3 text-success"><b> You are active now!</b></p>
                            </div>
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
                                        <button type="button" class="deletebtn" data-dismiss="modal"><i
                                                class="fa-solid fa-trash"></i> Deactivate</button>

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
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif

        @if (Session::has('error'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif

        @if (Session::has('info'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif

        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
@endsection
