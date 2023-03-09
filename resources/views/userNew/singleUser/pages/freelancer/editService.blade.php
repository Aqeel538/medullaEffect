@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2st--Navbar------------- -->
    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.freelancer.secondNav')
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
                        <div class="col-lg-6 col-md-6 col-12">
                            <select class="form-select form-select-sm greyColor" name="category_id" id="category"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;"
                                aria-label=".form-select-sm example">

                                <?php
                                if(isset($service->category_id ) && !empty($service->category_id ) ? $service->category_id  : '' ){
                                    ?>
                                <script>
                                    $('#category').removeClass('greyColor')
                                    $('#category').addClass('black')
                                </script>
                                <?php
                                }else {

                                }

                                ?>
                                {{-- <option value="" disabled selected hidden>Category</option> --}}
                                <option value="{!! $service->category_id ?? '' !!}" selected hidden>{!! $service->Categories->category ?? 'Category' !!}
                                </option>
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
