@extends('user.singleUser.layouts.main')
@section('content')
    <!----- ---------2st--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">

            <div class="header">
                <nav class="navbar">
                    <div class="container-fluid p-0">
                        <div>
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/vectorsearch.png" alt=""
                                srcset="">
                        </div>
                        <ul class="navbar-list" id="myDIV">
                            <li><a class="navbar-link  mylist active" href="{{ route('company.dashboard') }}">Dashboard</a>
                            </li>
                            <li><a class="navbar-link" href="{{ route('company.jobs') }}">Jobs</a></li>
                            <li><a class="navbar-link" href="#">Applicants</a></li>
                            <li><a class="navbar-link" href="{{ route('company.individual') }}">Individuals</a></li>
                            <li><a class="navbar-link" href="{{ route('company.freelancer') }}">Freelancers</a></li>
                            <li><a class="navbar-link" href="#">Settings</a></li>
                        </ul>
                        <div>
                            <span>
                                <a class="navbar-link" href="{{ route('see.notifications') }}">
                                    <i class="fa-regular fa-bell start_16_respons"></i>
                                </a>
                            </span>
                            <span>
                                <a class="navbar-link" href="{{ route('company.jobPost') }}">
                                    <i class="fa-regular fa-user ms-1 start_16_respons"></i>
                                </a>
                            </span>
                            <span><i style="cursor:pointer;" class="ri-logout-circle-line"
                                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                </i></span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                </nav>

                <div class="mobile-navbar-btn">
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
                        <h1 class="headings">Dashboard</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-10 pt-2 pb-3 offset-1">
                        <p class="descriptions">Post job Hire people through Medulla...nis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    </div>
                </div>
                <form action="{{ route('update.company.profile') }}" method="POST">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-12  col-lg-6 col-md-6">
                            <div class="input-container">
                                <img src="{{ asset('user') }}/assets/images/landing-page-img/vector.png" alt=""
                                    srcset="">
                                <input value="{!! $user->name ?? '' !!}" class="input-fields" type="text"
                                    placeholder="Full Name" name="name">
                            </div>

                        </div>
                        <div class="col-12  col-lg-6 col-md-6">
                            <div class="input-container">
                                <img src="{{ asset('user') }}/assets/images/landing-page-img/vectoremailblack.png"
                                    alt="" srcset="">
                                <input value="{!! $user->email ?? '' !!}" class="input-fields" type="email"
                                    placeholder="Email ID" name="email">
                            </div>

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

                        </div>
                        <div class="col-12  col-lg-6 col-md-6">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <select name="gender" required style="width: 100%;">
                                    <option value="" disabled selected hidden>{!! $user->gender ?? 'Gender' !!}</option>
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
                                <i class="fa-regular fa-user"></i>
                                <select name="job_type" required style="width: 100%;">
                                    <option value="" disabled selected hidden>{!! $user->job_type ?? 'Are you interested in full time or part time work?' !!}</option>
                                    <option value="Full Time">Full time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group">
                            <div class="inputfield mt-3">

                                <i class="fa-regular fa-user"></i>
                                <input class="input-field" type="text" name="located_in"
                                    value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                    placeholder="In which city are you located?" />

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12  mt-3">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <select name="work_type" required style="width: 100%;">
                                    <option value="" disabled selected hidden>{!! $user->work_type ?? 'Are you interested to work In-person, remote or hybrid?' !!}</option>
                                    <option value="In-person">In-person</option>
                                    <option value="Remote">Remote</option>
                                    <option value="Hybird">Hybird</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-3">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <input class="input-field" type="text" name="industry_and_position"
                                    placeholder="{!! $user->industry_and_position ?? 'State your desired industry and position' !!}" />

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-3">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
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
                                <i class="fa-regular fa-user"></i>
                                <input class="input-field" type="text" name="nationality"
                                    placeholder="{!! $user->nationality ?? 'State your nationality' !!}" />
                            </div>
                        </div>
                    </div>

                    <button type="submit" style="cursor: pointer;" class="buttonfill-update mt-4">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection
