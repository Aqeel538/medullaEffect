@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->

    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.individual.secondNav')

    {{-- NEW --}}


    <div class="container mb-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9 col-12 text-center justify-content-center">
                <div class="row ">
                    <div class="col-12">
                        <h1 class="headings mb-3">Fill Out Questionnaire</h1>
                    </div>

                </div>
                <div class="row">
                    <div class="col-10 pt-2 pb-3 offset-1">
                        <p class="descriptions">These selected answers will be used to showcase your profile to companies
                            looking to hire!</p>
                    </div>
                </div>
                <form action="{{ route('submit.questionair', $user->id) }}" method="POST" enctype="multipart/form-data">
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
                                    placeholder="Email" name="email">
                            </div>
                            <span class="text-danger d-flex">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12  col-lg-6 col-md-6">
                            <div class="input-container">

                                {{-- <input value="{!! $user->phone ?? '' !!}" class="input-fields" type="number"
                                    placeholder="Phone Number" name="phone"  id="mobile_code"> --}}

                                <input value="{!! $user->phone ?? '' !!}" class="input-fields int" type="text"
                                    name="phone" id="mobile_code">
                                <input type="hidden" name="dial_code" class="dial">

                            </div>
                            <span class="text-danger d-flex">
                                @error('phone')
                                    {{ $message }}
                                @enderror
                            </span>

                        </div>
                        <div class="col-12  col-lg-6 col-md-6 mt-lg-0 mt-md-0 mt-3">
                            <div class="inputfield">

                                <select name="gender" style="width: 100%;" id="gender">
                                    <?php
                                        if($user->gender){
                                            ?>
                                    <script>
                                        $('#gender').removeClass('greyColor')
                                        $('#gender').addClass('black')
                                    </script>
                                    <?php
                                        }

                                        ?>

                                    <option value="{!! $user->gender ?? '' !!}" selected hidden>{!! $user->gender ?? 'Gender' !!}
                                    </option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <span class="text-danger d-flex">
                                @error('gender')
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
                                <span class="text-danger d-flex">
                                    @error('work_type')
                                        {{ $message }}
                                    @enderror
                                </span>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group">
                            <div class="inputfield mt-3">

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
                        <div class="col-12 col-lg-6 col-md-6 form-group" id="mileRangeFrom">
                            <div class="inputfield mt-3">

                                <input value="{!! $user->mileRangeFrom ?? '' !!}" class="input-fields" type="text"
                                    placeholder="Mile range from" name="mileRangeFrom" id="mileRangeFrom">

                            </div>
                        </div>
                        <div class="col-12 col-lg-6 col-md-6 form-group" id="mileRangeTo">
                            <div class="inputfield mt-3">
                                <input value="{!! $user->mile_range_to ?? '' !!}" class="input-fields" type="text"
                                    placeholder="Mile range to" name="mileRangeTo" id="mileRangeTo">

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
                                <span class="text-danger d-flex">
                                    @error('job_type')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
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
                        <div class="col-12 col-lg-6 col-md-6 form-group" id="state">
                            <div class="inputfield mt-3">

                                <input class="input-fields" name="salaryRangeFrom" type="text"
                                    value="<?= isset($salaryRangeFrom) && !empty($salaryRangeFrom) ? $salaryRangeFrom : '' ?>"placeholder="Salary range from"
                                    id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" />

                            </div>
                        </div>
                        {{-- <div class="col-lg-6 col-md-6 col-12 mt-3">

                            <input class="input-fields" name="salaryRangeFrom" type="text"
                                value="<?= isset($salaryRangeFrom) && !empty($salaryRangeFrom) ? $salaryRangeFrom : '' ?>"placeholder="Salary range from"
                                required id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$"
                                data-type="currency" />
                        </div> --}}
                        <div class="col-12 col-lg-6 col-md-6 form-group" id="state">
                            <div class="inputfield mt-3">
                                <input class="input-fields" name="salaryRangeTo" type="text"
                                    value="<?= isset($salaryRangeTo) && !empty($salaryRangeTo) ? $salaryRangeTo : '' ?>"placeholder="Salary range to"
                                    id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" />
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 form-group mt-3">
                            <div class="inputfield">

                                <select class="w-100 greyColor" name="`nce" style="width: 100%;" id="experience">
                                    <?php
                                    if($user->experience){
                                        ?>
                                    <script>
                                        $('#experience').removeClass('greyColor')
                                        $('#experience').addClass('black')
                                    </script>
                                    <?php
                                    }

                                    ?>
                                    <option value="{!! $user->experience ?? '' !!}" selected hidden>{!! $user->experience ?? 'Experience' !!}
                                    </option>
                                    <option value="Fresher">Beginner</option>
                                    <option value="Intermediate">Intermediate</option>
                                    <option value="Professional">Professional</option>
                                </select>
                                <span class="text-danger d-flex">
                                    @error('experience')
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
                    <button type="submit" style="cursor: pointer;" class="buttonfill-update mt-4">Update</button>
                </form>

            </div>
        </div>
    </div>

    <script>
        $("#relocateSelect").on("change", function() {
            if ($('#relocateSelect').val() == "yes") {
                // $("#tax").val('');

                $("#mileRangeFrom").show(1000);
                $("#mileRangeTo").show(1000);

            } else {

                $("#mileRangeFrom").hide(1000);
                $("#mileRangeTo").hide(1000);

            }
        })


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

        $('#gender').on('change', () => {
            // alert("ok")
            $('#gender').removeClass('greyColor')
            $('#gender').addClass('black')

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
        $('#experience').on('change', () => {
            // alert("ok")
            $('#experience').removeClass('greyColor')
            $('#experience').addClass('black')

        })
    </script>
    <!-- navbar res js end -->

    {{-- Currency --}}
    <script>
        // Jquery Dependency

        $("input[data-type='currency']").on({
            keyup: function() {
                formatCurrency($(this));
            },
            blur: function() {
                formatCurrency($(this), "blur");
            }
        });


        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // original length
            var original_len = input_val.length;

            // initial caret position
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side += "00";
                }

                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = "$" + left_side + "." + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = "$" + input_val;

                // final formatting
                if (blur === "blur") {
                    input_val += ".00";
                }
            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>
@endsection
