@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- -----1st--Navbar--------- -->

    <!----- ---------2st--Navbar------------- -->
    @include('userNew.singleUser.pages.freelancer.secondNav')
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <div class="row justify-content-center crd-row-one">
            <div class="col-lg-7 col-md-9 col-12 text-center justify-content-center">
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
                <form action="{{ route('add.new.service') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Service Name"
                                style="background-color: #f4f4f4; border: none; padding: 12px" />
                            <div class="text-danger d-flex">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <select class="form-select form-select-sm" name="category_id"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;;  color: gray;"
                                aria-label=".form-select-sm example">
                                <option value="" disabled selected hidden>Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->category }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="text-danger d-flex">
                                @error('category_id')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-lg-0 mt-md-0 mt-3">
                            <input class="rate-field form-control" type="number" name="rate" placeholder="Rate"
                                style="
                        border: none;
                        background-color: #f4f4f4;
                        width: 100%;
                        padding: 14px 10px;

                      " />
                            <div class="text-danger d-flex">
                                @error('rate')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="form-group mt-3">
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" placeholder="Description"
                                rows="6" style="background-color: #f4f4f4; border: none"></textarea>
                            <div class="text-danger d-flex">
                                @error('description')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="mt-3 text-center">
                            <button type="submit" class="buttonfilled">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
