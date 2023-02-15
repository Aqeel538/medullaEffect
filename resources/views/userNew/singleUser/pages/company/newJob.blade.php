@extends('userNew.singleUser.layouts.main')
@section('content')
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
                            class="search-icon-index" alt="" srcset="">
                    </div>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="{{ route('company.dashboard') }}">Dashboard</a>
                        </li>
                        <li><a class="navbar-link" href="{{ route('company.jobs') }}">Jobs</a></li>
                        <li><a class="navbar-link" href="{{ route('company.allApplicants') }}">Applicants</a></li>
                        <li><a class="navbar-link" href="{{ route('company.individual') }}">Individuals</a></li>
                        <li><a class="navbar-link " href="{{ route('company.freelancer') }}">Freelancers</a>
                        </li>
                        <li><a class="navbar-link" href="#">Settings</a></li>

                    </ul>
                    <div>
                        <a class="navbar-link" href="{{ route('see.notifications') }}">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                                alt="" srcset="">
                        </a>
                        &nbsp;
                        <a class="navbar-link" href="{{ route('company.jobPost') }}">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" class="bell"
                                alt="" srcset="">
                        </a>
                        <i style="cursor:pointer;" class="ri-logout-circle-line"
                            onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                        </i>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </nav>

                <div class="mobile-navbar-btns">
                    <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                    <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
                </div>
            </div>
        </div>
    </div>
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center crd-row-one">
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
                                value="<?= isset($obj->title) && !empty($obj->title) ? $obj->title : '' ?>"id="exampleInputEmail1"aria-describedby="emailHelp"
                                placeholder="Job Name" style="background-color: #f4f4f4; border: none; padding: 12px" />
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <select class="form-select form-select-sm"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;;  color: gray;"
                                aria-label=".form-select-sm example">
                                <option value="{!! $obj->Categories->id ?? '' !!}" disabled selected hidden>{!! $obj->Categories->category ?? 'Category' !!}
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->category }}
                                    </option>
                                @endforeach
                            </select>


                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-3">
                            <input class="rate-field form-control" name="rate" type="text"
                                value="<?= isset($obj->rate) && !empty($obj->rate) ? $obj->rate : '' ?>"placeholder="Salary"
                                style="
                      border: none;
                      background-color: #f4f4f4;
                      width: 100%;
                      padding: 14px 10px;

                    " />
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                value="<?= isset($obj->title) && !empty($obj->title) ? $obj->title : '' ?>" rows="6"
                                style="background-color: #f4f4f4; border: none"></textarea>
                        </div>
                        <div class="mt-3 text-center">
                            <button type="submit" class="buttonfilled">Post job</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
