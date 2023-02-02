@extends('user.singleUser.layouts.main')
@section('content')


        
        <!----- ---------2st--Navbar------------- -->
        <div class="container-fluid second-nav">
            <div class="container">

                <div class="header">
                    <nav class="navbar">
                        <div class="container-fluid p-0">
                            <div>
                                <img src="{{asset('user')}}/assets/images/landing-page-img/vectorsearch.png" alt="" srcset="">
                            </div>
                            <ul class="navbar-list" id="myDIV">
                                <li><a class="navbar-link mylist active" href="{{ route('company.dashboard')}}">Dashboard</a></li>
                                <li><a class="navbar-link" href="#">Jobs</a></li>
                                <li><a class="navbar-link" href="#">Applicants</a></li>
                                <li><a class="navbar-link" href="#">Individuals</a></li>
                                <li><a class="navbar-link" href="{{ route('company.freelancer') }}">Freelancers</a></li>
                                <li><a class="navbar-link" href="#">Settings</a></li>
                            </ul>
                            <div>
                                <img src="{{asset('user')}}/assets/images/landing-page-img/Vectorbell.png" alt="" srcset="">
                                &nbsp;
                                <img src="{{asset('user')}}/assets/images/landing-page-img/Vector.png" alt="" srcset="">
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
                    <form action="">
                        <div class="row mt-4">
                            <div class="col-12  col-lg-6 col-md-6">
                                <div class="input-container">
                                    <img src="{{asset('user')}}/assets/images/landing-page-img/vector.png" alt="" srcset="">
                                    <input value="{!! $user->name ?? '' !!}" class="input-fields" type="text" placeholder="Full Name" name="name">
                                </div>

                            </div>
                            <div class="col-12  col-lg-6 col-md-6">
                                <div class="input-container">
                                    <img src="{{asset('user')}}/assets/images/landing-page-img/vectoremailblack.png" alt=""
                                        srcset="">
                                    <input value="{!! $user->email ?? '' !!}" class="input-fields" type="email" placeholder="Email ID" name="email">
                                </div>
    
                            </div>
                            
                        </div>
                        
                        <div class="row mt-3">
                            
                            <div class="col-12  col-lg-6 col-md-6">
                                <div class="input-container">
                                    <img src="{{asset('user')}}/assets/images/landing-page-img/vectorphoneblack.png" alt=""
                                        srcset="">
                                    <input value="{!! $user->phone ?? '' !!}" class="input-fields" type="text" placeholder="Phone Number"
                                        name="phoneNumber">
                                </div>

                            </div>
                            <div class="col-12  col-lg-6 col-md-6">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>{!! $user->gender ?? 'Gender' !!}</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>

                                </div>

                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>{!! $user->job_type ?? 'Are you interested in full time or
                                            part time work?' !!}</option>
                                        <option value="Full Time" >Full time</option>
                                        <option value="Part Time" >Part Time</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group">
                                <div class="inputfield mt-3">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>Where are you located?</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12  mt-3">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>{!! $user->work_type ?? 'Are you interested to work
                                            In-person, remote or hybrid?' !!}</option>
                                        <option value="In-person" >In-person</option>
                                        <option value="Remote">Remote</option>
                                        <option value="Hybird" >Hybird</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your desired industry and
                                            position</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your desired pay range
                                        </option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-12 form-group mt-3">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your nationality</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <a href="../Sana/Profile.html ">
                            <button type="button" style="cursor: pointer;"
                                class="buttonfill-update mt-4">Update</button></a>
                    </form>

                </div>
            </div>
        </div>

    @endsection
