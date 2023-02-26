@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- 2nd nav end -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    @include('userNew.singleUser.pages.company.secondNav')
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
                        <p class="descriptions">Post job Hire people through Medulla...nis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    </div>
                </div>
                <form action="{{ route('update.company.profile') }}" method="POST">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-12  col-lg-6 col-md-6">
                            <div class="input-container">

                                <input value="{!! $user->name ?? '' !!}" class="input-fields" type="text"
                                    placeholder="Full Name" name="name">
                            </div>
                            <span class="text-danger d-flex">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                            <div class="input-container">

                                <input value="{!! $user->email ?? '' !!}" class="input-fields" type="email"
                                    placeholder="Email ID" name="email">
                            </div>
                            <span class="text-danger d-flex">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12  col-lg-12 col-md-12">
                            <div class="input-container">

                                <input value="{!! $user->phone ?? '' !!}" class="input-fields" type="number"
                                    placeholder="Phone Number" name="phone"  id="mobile_code">
                            </div>
                            <span class="text-danger d-flex">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>

                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-3">
                            <div class="inputfield">


                                <select class="greyColor" name="work_type" style="width: 100%;" id="workTypeSelect">
                                    <?php
                                    if($user->work_type){
                                        ?>
                                    <script>
                                        $('#workTypeSelect').removeClass('greyColor')
                                        $('#workTypeSelect').addClass('black')
                                    </script>
                                    <?php
                                    }

                                    ?>
                                    <option value="{!! $user->work_type ?? '' !!}" selected hidden>{!! $user->work_type ?? 'Are you interested in full time or part time work?' !!}
                                    </option>
                                    <option value="Full Time">Full time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                            <span class="text-danger d-flex">
                                @error('work_type')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group">
                            <div class="inputfield mt-3">

                                <input class="input-fields" type="text" name="located_in"
                                    value="<?= isset($user->located_in) && !empty($user->located_in) ? $user->located_in : '' ?>"
                                    placeholder="In which city are you located?" />
                            </div>
                            <span class="text-danger d-flex">
                                @error('located_in')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group">
                            <div class="inputfield mt-3 ">

                                <select class="w-100 greyColor" name="relocate" id="relocateSelect">
                                    <?php
                                        if($user->relocate){
                                            ?>
                                    <script>
                                        $('#relocateSelect').removeClass('greyColor')
                                        $('#relocateSelect').addClass('black')
                                    </script>
                                    <?php
                                        }

                                        ?>

                                    <option style="color:blue !important" value="{!! $user->relocate ?? '' !!}" selected hidden>
                                        {!! $user->relocate ?? 'Are you willing to relocate?' !!}
                                    </option>
                                    <option style="color:black;" value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                                <span class="text-danger d-flex">
                                    @error('relocate')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group">
                            <div class="inputfield mt-3">

                                <select class="w-100 greyColor" name="job_type" style="width: 100%;"
                                    id="workingCapitalLoan">
                                    <?php
                                    if($user->job_type){
                                        ?>
                                    <script>
                                        $('#workingCapitalLoan').removeClass('greyColor')
                                        $('#workingCapitalLoan').addClass('black')
                                    </script>
                                    <?php
                                    }

                                    ?>
                                    <option value="{!! $user->job_type ?? '' !!}" selected hidden>{!! $user->job_type ?? 'Are you interested to work In-person, remote or Hybrid?' !!}
                                    </option>
                                    <option value="In-person">In-person</option>
                                    <option value="Remote">Remote</option>
                                    <option value="Hybrid">Hybrid</option>
                                    <option value="No-preference">No-preference</option>
                                </select>

                            </div>
                            <span class="text-danger d-flex">
                                @error('job_type')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 form-group" id="city">
                            <div class="inputfield mt-3">

                                <input value="{!! $user->city ?? '' !!}" class="input-fields" type="text"
                                    placeholder="City" name="city" id="city">

                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 form-group" id="state">
                            <div class="inputfield mt-3">

                                <input value="{!! $user->state ?? '' !!}" class="input-fields" type="text"
                                    placeholder="State" name="state" id="state">

                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-4 form-group" id="zipCode">
                            <div class="inputfield mt-3">

                                <input value="{!! $user->zip_code ?? '' !!}" class="input-fields" type="number"
                                    placeholder="Zip code" name="zip_code" id="zopCode">

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12  mt-3">
                            <div class="inputfield">

                                <input value="{!! $user->industry_and_position ?? '' !!}" class="input-fields" type="text"
                                    name="industry_and_position" placeholder="{!! $user->industry_and_position ?? 'State your desired industry and position' !!}" />
                            </div>
                            <span class="text-danger d-flex">
                                @error('industry_and_position')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-3">
                            <div class="inputfield">

                                <select class="w-100 greyColor" name="pay_range" style="width: 100%;" id="payRange">
                                    <?php
                                    if($user->pay_range){
                                        ?>
                                    <script>
                                        $('#payRange').removeClass('greyColor')
                                        $('#payRange').addClass('black')
                                    </script>
                                    <?php
                                    }

                                    ?>
                                    <option value="{!! $user->pay_range ?? '' !!}" selected hidden>
                                        {!! $user->pay_range ?? 'State your desired pay range' !!}
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
                                <span class="text-danger d-flex">
                                    @error('pay_range')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-3">
                            <div class="inputfield">

                                <input value="{!! $user->nationality ?? '' !!}" class="input-fields" type="text"
                                    name="nationality" placeholder="{!! $user->nationality ?? 'State your nationality' !!}" />
                            </div>
                            <span class="text-danger d-flex">
                                @error('nationality')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-3">
                            <div class="inputfield">

                                <input value="{!! $user->employees ?? '' !!}" class="input-fields" type="text"
                                    name="employees" placeholder="{!! $user->employees ?? 'Total Employees' !!}" />
                            </div>
                        </div>
                        <span class="text-danger d-flex">
                            @error('employees')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-3">
                            <div class="inputfield">

                                <input value="{!! $user->employees_limit ?? '' !!}" class="input-fields" type="text"
                                    name="employees_limit" placeholder="{!! $user->employees_limit ?? 'Employees limit' !!}" />
                            </div>
                            <span class="text-danger d-flex">
                                @error('employees_limit')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="description"
                            placeholder="{!! $user->description ?? 'Description' !!}"
                            value="<?= isset($user->description) && !empty($user->description) ? $user->description : 'Description' ?>"
                            rows="6" style="background-color: #f4f4f4; border: none">{!! $user->description ?? '' !!}</textarea>
                    </div>

                    <button type="submit" style="cursor: pointer;" class="buttonfill-update mt-4">Update</button>
                </form>

            </div>
        </div>
    </div>

    <script>
        $("#workingCapitalLoan").on("change", function() {
            if ($('#workingCapitalLoan').val() == "In-person") {
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

        $('#relocateSelect').on('change', () => {
            // alert("ok")
            $('#relocateSelect').removeClass('greyColor')
            $('#relocateSelect').addClass('black')

        })
        $('#workTypeSelect').on('change', () => {
            // alert("ok")
            $('#workTypeSelect').removeClass('greyColor')
            $('#workTypeSelect').addClass('black')

        })
        $('#workingCapitalLoan').on('change', () => {
            // alert("ok")
            $('#workingCapitalLoan').removeClass('greyColor')
            $('#workingCapitalLoan').addClass('black')

        })

        $('#payRange').on('change', () => {
            // alert("ok")
            $('#payRange').removeClass('greyColor')
            $('#payRange').addClass('black')

        })
    </script>
    <!-- navbar res js end -->
@endsection
