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
                    </div>
                </div>
            </nav>
        </header>
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
                    <div class="col-12 pt-2 pb-3">
                        <p class="descriptions">Post job Hire people through Medulla...nis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    </div>
                </div>
               
                <form action="{{ route('submit.questionair', $user->id) }}" method="POST" enctype="multipart/form-data">
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
                        <div class="col-12  col-lg-6 col-md-6 ">
                            <div class="input-icons">
                                <i class="fa-regular fa-envelope icon"></i>
                                <input class="input-field" type="email" name="email"
                                    value="<?= isset($user->email) && !empty($user->email) ? $user->email : '' ?>"
                                    placeholder="Email ID" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  col-lg-6 col-md-6 ">
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
                                <select required style="width: 100%;" name="gender">
                                    <option disabled selected hidden> Gender...</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <select required style="width: 100%" name="job_type">
                                    <option value="" disabled selected hidden>Are you interested in full time or part
                                        time work?</option>
                                    <option>Full Time</option>
                                    <option>Part Time</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <input class="input-field" type="text" name="located_in"
                                    placeholder="In which city are you located?" required />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <select name="work_type" required style="width: 100%;">
                                    <option value="" disabled selected hidden>Are you interested to work In-person,
                                        remote or hybrid?</option>
                                    <option>In-Person</option>
                                    <option>Remote</option>
                                    <option>Hybrid</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 form-group">
                            <div class="inputfield">
                                <i class="fa-regular fa-user"></i>
                                <input class="input-field" type="text" name="industry_and_position"
                                    placeholder="State your desired industry and position" required />
                            </div>
                        </div>
                       
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <select name="pay_range" required style="width: 100%;">
                                        <option value="" disabled selected hidden>State your desired pay range
                                        </option>
                                        <option>0-5</option>
                                        <option>5-10</option>
                                        <option>10-15</option>
                                        <option>15-20</option>
                                        <option>20-25</option>
                                        <option>25-30</option>
                                        <option>30-35</option>
                                        <option>35-40</option>
                                        <option>40-45</option>
                                        <option>45-50</option>
                                    </select>
                                </div>
                            </div>
                       
                      
                            <div class="col-12 form-group">
                                <div class="inputfield">
                                    <i class="fa-regular fa-user"></i>
                                    <input class="input-field" type="text" name="nationality"
                                        placeholder="State your nationality" required />
                                </div>
                            </div>
                            <button type="submit" style="cursor: pointer;" class="buttonfill">Update</button>
                </form>

            </div>
        </div>
    </div>
@endsection
