@extends('userNew.singleUser.layouts.main')
@section('content')
    @php
        $blink = 0;
    @endphp
    @include('userNew.singleUser.pages.company.secondNav')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    {{-- text editor --}}

    <script src="https://cdn.tiny.cloud/1/l4fr5n0r9502oanzrxy4h57ftax19x1nvqbk7oglumw82bhk/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            // height: 300,
            // statusbar: false,
            // toolbar: false,
        });
    </script>
    {{-- text editor end --}}
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
                        <div class="col-12 ">
                            <input type="text" class="form-control" name="company_name" placeholder="Company name"
                                style=" padding: 12px;border: 2px solid #eee;"
                                value="<?= isset($obj->company_name) && !empty($obj->company_name) ? $obj->company_name : '' ?>"
                                required />
                        </div>
                        <div class="col-12 mt-3">
                            <input type="text" class="form-control" name="title"
                                value="<?= isset($obj->title) && !empty($obj->title) ? $obj->title : '' ?>"id="exampleInputEmail1"aria-describedby="emailHelp"
                                placeholder="Job title" style=" padding: 12px;border: 2px solid #eee;" required />
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <select name="category_id" class="form-select form-select-sm greyColor" id="category"
                                style=" padding: 15px 10px;  outline: none; border: 2px solid #eee;  background-color: white;"
                                aria-label=".form-select-sm example">

                                <?php
                                    if(isset( $obj->Categories->id ) && !empty( $obj->Categories->id ) ?  $obj->Categories->id  : '' ){
                                        ?>
                                <script>
                                    $('#category').removeClass('greyColor')
                                    $('#category').addClass('black')
                                </script>
                                <?php
                                    }else {

                                    }

                                    ?>
                                <option value="{!! $obj->Categories->id ?? '' !!}" selected hidden>{!! $obj->Categories->category ?? 'Category' !!}
                                </option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->category }}
                                    </option>
                                @endforeach
                            </select>


                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <select name="experience" class="form-select form-select-sm greyColor" id="experience"
                                style=" padding: 15px 10px;  outline: none;  border: 2px solid #eee;  background-color: white;"
                                aria-label=".form-select-sm example">

                                <?php
                                    if(isset( $obj->experience ) && !empty( $obj->experience ) ?  $obj->experience  : '' ){
                                        ?>
                                <script>
                                    $('#experience').removeClass('greyColor')
                                    $('#experience').addClass('black')
                                </script>
                                <?php
                                    }else {

                                    }

                                    ?>
                                <option value="{!! $obj->experience ?? '' !!}" selected hidden>{!! $obj->experience ?? 'Experience' !!}
                                </option>
                                <option value="Begginer">1 Year</option>
                                <option value="Intermediate">2 Years</option>
                                <option value="Advance">3 Years</option>
                                <option value="Advance">4 Years</option>
                                <option value="Advance">5 Years</option>
                                <option value="Advance">6 Years</option>
                                <option value="Advance">7 Years</option>
                                <option value="Advance">8 Years</option>
                                <option value="Advance">9 Years</option>
                                <option value="Advance">10 Years</option>
                                <option value="Advance">10 Years +</option>
                            </select>


                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <input class="rate-field form-control" name="salaryRangeFrom" type="text"
                                value="<?= isset($salaryRangeFrom) && !empty($salaryRangeFrom) ? $salaryRangeFrom : '' ?>"placeholder="Salary range from"
                                style="  border: 2px solid #eee;  background-color: white;width: 100%;padding: 14px 10px;"
                                required id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12  mt-3">
                            <input class="rate-field form-control" name="salaryRangeTo" type="text"
                                value="<?= isset($salaryRangeTo) && !empty($salaryRangeTo) ? $salaryRangeTo : '' ?>"placeholder="Salary range to"
                                style="  border: 2px solid #eee;  background-color: white;width: 100%;padding: 14px 10px;"
                                required id="currency-field" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" data-type="currency" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <select name="job_type" class="form-select form-select-sm greyColor"
                                style=" padding: 15px 10px;  outline: none; border: 2px solid #eee;  background-color: white;"
                                aria-label=".form-select-sm example" id="inPerson" required>
                                <?php
                                if(isset($obj->job_type ) && !empty($obj->job_type ) ? $obj->job_type  : '' ){
                                    ?>
                                <script>
                                    $('#inPerson').removeClass('greyColor')
                                    $('#inPerson').addClass('black')
                                </script>
                                <?php
                                }else {

                                }

                                ?>
                                <option value="{!! $obj->job_type ?? '' !!}" disabled selected hidden>{!! $obj->job_type ?? 'Job Type' !!}
                                </option>
                                <option value="In-person">In-person</option>
                                <option value="Remote">Remote</option>
                                <option value="Hybird">Hybird</option>
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12 mt-3">
                            <select name="work_type" class="form-select form-select-sm greyColor" id="work_type"
                                style=" padding: 15px 10px;  outline: none;  border: 2px solid #eee;  background-color: white;"
                                aria-label=".form-select-sm example">
                                <?php
                                if(isset($obj->work_type ) && !empty($obj->work_type ) ? $obj->work_type  : '' ){
                                    ?>
                                <script>
                                    $('#work_type').removeClass('greyColor')
                                    $('#work_type').addClass('black')
                                </script>
                                <?php
                                }else {

                                }

                                ?>
                                <option value="{!! $obj->work_type ?? '' !!}" disabled selected hidden>{!! $obj->work_type ?? 'Employment Type' !!}
                                </option>
                                <option value="Full time">Full time</option>
                                <option value="Part time">Part time</option>
                            </select>


                        </div>
                        <div class="col-lg-4 col-md-4 col-12  mt-3" id="city">
                            <input class="rate-field form-control" name="city" type="text"
                                value="<?= isset($obj->city) && !empty($obj->city) ? $obj->city : '' ?>"placeholder="City"
                                style="border: none;  border: 2px solid #eee;  background-color: white;width: 100%;padding: 14px 10px;" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-12  mt-3" id="state">
                            <input class="rate-field form-control" name="state" type="text"
                                value="<?= isset($obj->state) && !empty($obj->state) ? $obj->state : '' ?>"placeholder="State"
                                style=" border: 2px solid #eee;  background-color: white;width: 100%;padding: 14px 10px;" />
                        </div>
                        <div class="col-lg-4 col-md-4 col-12  mt-3" id="zipCode">
                            <input class="rate-field form-control" name="zip_code" type="number"
                                value="<?= isset($obj->zip_code) && !empty($obj->zip_code) ? $obj->zip_code : '' ?>"placeholder="Zip code"
                                style=" border: 2px solid #eee;  background-color: white;width: 100%;padding: 14px 10px;" />
                        </div>
                        {{-- <div class="col-lg-12 col-md-12 col-12  mt-3">
                            <input class="form-control" placeholder="Short description" name="short_description"
                                value="<?= isset($obj->short_description) && !empty($obj->short_description) ? $obj->short_description : '' ?>"
                                rows="6"
                                style=" border: 2px solid #eee;  background-color: white;width: 100%;padding: 14px 10px;">
                        </div> --}}
                        <div class="form-group mt-3">
                            <textarea class="form-control" id="myEditorid" placeholder="Description" name="description"
                                value="<?= isset($obj->description) && !empty($obj->description) ? $obj->description : '' ?>" rows="6"
                                style="background-color: #f4f4f4; border: none">{!! $obj->description ?? '' !!}</textarea>
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
        $('#category').on('change', () => {
            // alert("ok")
            $('#category').removeClass('greyColor')
            $('#category').addClass('black')

        })
        $('#inPerson').on('change', () => {
            // alert("ok")
            $('#inPerson').removeClass('greyColor')
            $('#inPerson').addClass('black')

        })
        $('#work_type').on('change', () => {
            // alert("ok")
            $('#work_type').removeClass('greyColor')
            $('#work_type').addClass('black')

        })
        $('#experience').on('change', () => {
            // alert("ok")
            $('#experience').removeClass('greyColor')
            $('#experience').addClass('black')

        })
    </script>

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
