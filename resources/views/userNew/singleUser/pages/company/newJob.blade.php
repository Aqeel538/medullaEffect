@extends('userNew.singleUser.layouts.main')
@section('content')
    @include('userNew.singleUser.pages.company.secondNav')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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
                                placeholder="Job title" style="background-color: #f4f4f4; border: none; padding: 12px" />
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <select name="category_id" class="form-select form-select-sm"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;"
                                aria-label=".form-select-sm example" >
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
                            <input class="rate-field form-control" name="rate" type="number"
                                value="<?= isset($obj->rate) && !empty($obj->rate) ? $obj->rate : '' ?>"placeholder="Salary"
                                style="
                      border: none;
                      background-color: #f4f4f4;
                      width: 100%;
                      padding: 14px 10px;

                    " />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <select name="job_type" class="form-select form-select-sm"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;"
                                aria-label=".form-select-sm example" id="inPerson">
                                <option value="{!! $obj->job_type ?? '' !!}" disabled selected hidden>{!! $obj->job_type ?? 'Job Type' !!}
                                </option>
                                <option value="In-person">In-person</option>
                                <option value="Remote">Remote</option>
                                <option value="Hybird">Hybird</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <select name="work_type" class="form-select form-select-sm"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;"
                                aria-label=".form-select-sm example">
                                <option value="{!! $obj->work_type ?? '' !!}" disabled selected hidden>{!! $obj->work_type ?? 'Work Type' !!}
                                </option>
                                <option value="Full time">Full time</option>
                                <option value="Part time">Part time</option>
                            </select>


                        </div>
                        <div class="col-lg-4 col-md-4 col-12  mt-3" id="city">
                            <input class="rate-field form-control" name="city" type="text"
                                value="<?= isset($obj->city) && !empty($obj->city) ? $obj->city : '' ?>"placeholder="City"
                                style="border: none; background-color: #f4f4f4;width: 100%;padding: 14px 10px;" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-12  mt-3" id="state">
                            <input class="rate-field form-control" name="state" type="text"
                                value="<?= isset($obj->state) && !empty($obj->state) ? $obj->state : '' ?>"placeholder="State"
                                style="border: none; background-color: #f4f4f4;width: 100%;padding: 14px 10px;" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-12  mt-3" id="zipCode">
                            <input class="rate-field form-control" name="zip_code" type="number"
                                value="<?= isset($obj->zip_code) && !empty($obj->zip_code) ? $obj->zip_code : '' ?>"placeholder="Zip code"
                                style="border: none; background-color: #f4f4f4;width: 100%;padding: 14px 10px;" />
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                                value="<?= isset($obj->description) && !empty($obj->description) ? $obj->description : '' ?>" rows="6"
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
    <script>
        $("#inPerson").on("change", function() {
            if ($('#inPerson').val() == "In-person") {
                // $("#tax").val('');

                $("#city").show(1000);
                $("#state").show(1000);
                $("#zipCode").show(1000);
            } else {

                $("#city").hide(1000);
                $("#state").hide(1000);
                $("#zipCode").hide(1000);
            }
        })
    </script>
@endsection
