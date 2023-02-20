@extends('userNew.singleUser.layouts.main')
@section('content')
    @include('userNew.singleUser.pages.company.secondNav')
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
                            <select name="category_id" class="form-select form-select-sm"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;;  color: gray;"
                                aria-label=".form-select-sm example">
                                <option value="{!! $obj->Categories->id ?? '' !!}">{!! $obj->Categories->category ?? 'Category' !!}
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
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <select name="job_type" class="form-select form-select-sm"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;;  color: gray;"
                                aria-label=".form-select-sm example">
                                <option value="{!! $obj->job_type ?? '' !!}" disabled selected hidden>{!! $obj->job_type ?? 'Job Type' !!}
                                </option>
                                <option value="In-person">In-person</option>
                                <option value="Remote">Remote</option>
                                <option value="Hybird">Hybird</option>
                            </select>


                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <select name="work_type" class="form-select form-select-sm"
                                style=" padding: 15px 10px;  outline: none; border: none; background-color: #F4F4F4;;  color: gray;"
                                aria-label=".form-select-sm example">
                                <option value="{!! $obj->work_type ?? '' !!}" disabled selected hidden>{!! $obj->work_type ?? 'Work Type' !!}
                                </option>
                                <option value="Full time">Full time</option>
                                <option value="Half time">Half time</option>
                            </select>


                        </div>
                        <div class="col-12 mb-3 mt-3">
                            <input type="text" class="form-control" name="hiring_type"
                                value="<?= isset($obj->hiring_type) && !empty($obj->hiring_type) ? $obj->hiring_type : '' ?>"id="exampleInputEmail1"aria-describedby="emailHelp"
                                placeholder="Hiring" style="background-color: #f4f4f4; border: none; padding: 12px" />
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
@endsection
