@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2st--Navbar------------- -->
    <div class="container-fluid second-nav">
        <div class="container">
            <div class="headers">
                <nav class="navbar-questionare">

                    <div class="">
                        <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorsearch.png"
                            class="search-icon-index" alt="" srcset="">
                    </div>
                    <ul class="navbar-lists" id="myDIV">

                        <li><a class="navbar-link" href="{{ route('businesses.list') }}">Businesses</a></li>
                        <li><a class="navbar-link  mylist active"
                                href="{{ route('freelancer.listing.frontend') }}">Freelancers</a></li>
                        <li><a class="navbar-link" href="#">Settings</a></li>

                    </ul>
                    <div>
                        <a class="navbar-link" href="{{ route('see.notifications') }}">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vectorbell.png" class="bells"
                                alt="" srcset="">
                        </a>
                        &nbsp;
                        <a class="navbar-link" href="">
                            <img src="{{ asset('user') }}/assets/images/landing-page-img/Vector.png" class="bell"
                                alt="" srcset="">
                        </a>
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
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9 col-12 text-center justify-content-center">
                <div class="row">
                    <div class="col-12">
                        <h1 class="headings">New Service</h1>
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

                {{-- {{dd($categories)}} --}}
                <form action="{{ route('update.service') }}" method="POST">
                    @csrf
                    <input value="{!! $service->id ?? '' !!}" name="id" type="hidden">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input type="text" name="title" class="form-control" value="{!! $service->title ?? '' !!}"
                                placeholder="Service Name" style="background-color: #f4f4f4; border: none; padding: 10px" />
                        </div>

                        <div class="col-6">
                            <div class="">
                                <select required name="category_id"
                                    style="
                      color: gray;
                      width: 100%;
                      padding: 13px;
                      border-radius: 8px;
                      border: none;
                      background-color: #f4f4f4;
                    ">
                                    <option value="{!! $service->category_id ?? '' !!}">{!! $service->Categories->category ?? '' !!}
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
                            <input value="{!! $service->rate ?? '' !!}" class="rate-field form-control" type="number"
                                placeholder="Rate" name="rate"
                                style="
                    border: none;
                    background-color: #f4f4f4;
                    width: 100%;
                    padding: 14px 10px;
                    border-radius: 8px;
                  " />
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control w-100" name="description" id="exampleFormControlTextarea1" placeholder="Description"
                                rows="6" style="background-color: #f4f4f4; border: none">{!! $service->discription ?? '' !!}</textarea>
                        </div>
                    </div>
                    <div class="mt-3 text-center">
                        <button type="submit" class="buttonfilled">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
