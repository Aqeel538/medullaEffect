@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorsearch.png"
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
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vectorbell.png" class="bells"
                            alt="" srcset="">
                        &nbsp;
                        <img src="{{ asset('user') }}/Assets/Images/landing-page-img/Vector.png" class="bell"
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

    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-12 text-center justify-content-center">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="headings">Fill Out Questionnaire</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-10 pt-2 pb-3 offset-1">
                        <p class="descriptions">Post job Hire people through Medulla...nis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    </div>
                </div>
                <form action="{{ route('submit.questionair', $user->id) }}" method="POST" enctype="multipart/form-data">
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
                                <img src="../Assets/Images/profile-imges/Color.png" alt="" srcset="">
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
                                <img src="../Assets/Images/profile-imges/loction.png" alt="" srcset="">
                                <input class="input-field-profile" type="text" name="located_in"
                                    value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                    placeholder="In which city are you located?" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  mt-2">
                            <div class="inputfield-profile">
                                <img src="../Assets/Images/profile-imges/work.png" alt="" srcset="">
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
                                <img src="../Assets/Images/profile-imges/industry.png" alt="" srcset="">
                                <input class="input-field-profile" type="text" name="industry_and_position"
                                    placeholder="{!! $user->industry_and_position ?? 'State your desired industry and position' !!}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  mt-2">
                            <div class="inputfield-profile">
                                <img src="../Assets/Images/profile-imges/payrange.png" alt="" srcset="">
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
                                <img src="../Assets/Images/profile-imges/state.png" alt="" srcset="">
                                <input class="input-field-profile" type="text" name="nationality"
                                    placeholder="{!! $user->nationality ?? 'State your nationality' !!}" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  d-flex justify-content-end text-lg-right mt-4">
                            <button type="submit" class="buttonfill">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- navbar res js end -->
@endsection
