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
                            <li><a class="navbar-link" href="{{ route('company.dashboard') }}">Dashboard</a>
                            </li>
                            <li><a class="navbar-link mylist active" href="{{ route('company.jobs') }}">Jobs</a></li>
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
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9 col-12 text-center justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <h1 class="headings">New Job</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 pt-2 pb-3">
                        <p class="descriptions">
                            Loremis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa qua.
                        </p>
                    </div>
                </div>

                <?php
                $update_id = 0;
                
                if (isset($obj->id) && !empty($obj->id)) {
                    $update_id = $obj->id;
                }
                ?>
                <form action="{{ route('company_jobs_store', $update_id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" name="title"
                                value="<?= isset($obj->title) && !empty($obj->title) ? $obj->title : '' ?>"id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Job Name"
                                style="background-color: #f4f4f4; border: none; padding: 10px" />
                        </div>

                        <div class="col-6">
                            <div class="">
                                <select required name="category_id"
                                    style="color: gray;width: 100%;padding: 13px;border-radius: 8px;border: none;background-color: #f4f4f4;">
                                    <option value="{!! $obj->Categories->id ?? '' !!}" disabled selected hidden>{!! $obj->Categories->category ?? 'Category' !!}
                                    </option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">
                                            {{ $category->category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div></div>
                        </div>
                        <div class="col-6">
                            <input class="rate-field form-control" name="rate" type="text"
                                value="<?= isset($obj->rate) && !empty($obj->rate) ? $obj->rate : '' ?>"placeholder="Salary"
                                style="border: none;background-color: #f4f4f4;width: 100%;padding: 14px 10px;border-radius: 8px;" />
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="description"
                                value="<?= isset($obj->title) && !empty($obj->title) ? $obj->title : '' ?>"id="exampleFormControlTextarea1"
                                placeholder="Description" rows="6" style="background-color: #f4f4f4; border: none"></textarea>
                        </div>
                        <div class="mt-3 text-center">
                            <button type="submit" class="buttonfilled">Post job</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--  nav -->
@endsection
