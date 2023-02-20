@extends('userNew.singleUser.layouts.main')
@section('content')
    <!-- 2nd nav -->
    @include('userNew.singleUser.pages.company.secondNav')
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <h1 class="headings-profile mb-4">Inbox</h1>
        <div class="row mt-lg-3 mt-md-3 mt-3 crd-row-one">
            <div class="col-lg-5 col-12 text-center" style="max-height: 513px;
            overflow: auto;">
                <div class=" p-4" style="background-color: #F9F9F9; border-radius: 21.0305px;">
                    <h1 class="profile-text-ques-heading mb-5">All Users</h1>
                    @if (count($user_messages) > 0)
                        @foreach ($user_messages as $single_message)
                            <div class="d-flex  align-content-center pb-3 mt-5" style="border-bottom: 1px solid #e7e4e4;">
                                <div class="img-holder">
                                    {{-- <img src="{{ asset('user') }}/assets/images/profile-imges/user.png"
                                        style="width: 60px;" class="" alt=""> --}}
                                    <?php $image = isset($single_message->image) && !empty($single_message->image) ? $single_message->image : ''; ?>

                                    <img src="<?= $image ?>" style="height: 70px;width: 70px;" alt=""
                                        srcset="" />
                                </div>
                                <div class="text-start ps-2">
                                    @if ($single_message->receiver_id == Auth::user()->id)
                                        <h3 class="m-0 p-0 inbox-chat-heading">
                                            <a href="/company/messages/{{ $single_message->id }}"
                                                style=" text-decoration: none;">
                                                <p> {{ $single_message->name }}</p>
                                            </a>
                                        </h3>
                                    @else
                                        <h3 class="m-0 p-0 inbox-chat-heading">
                                            <a href="/company/messages/{{ $single_message->id }}"
                                                style=" text-decoration: none;">
                                                <p> {{ $single_message->name }}</p>
                                            </a>
                                        </h3>
                                    @endif
                                    <p class="pt-1 m-0 john-para-afer-ques-heading">Sed ut perspiciatis unde omnis ise
                                        na....</p>
                                </div>
                                <div class="d-flex align-items-end justify-content-end">
                                    <p class=" john-para-afer-ques-heading">
                                        {{ \Carbon\Carbon::parse($single_message->created_at)->diffForHumans() }}</p>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No conversation so far...</p>
                    @endif
                </div>
            </div>


            <div class="col-lg-7 col-12 mt-lg-0 mt-md-3 mt-3 "
                style="background-color: #F9F9F9;  border-radius: 21.0305px; ">

                <div class="p-4 fixed-top chat-header">
                    <div class="d-flex">
                        <div class="img-holder">
                            <?php $image = isset($user->image) && !empty($user->image) ? $user->image : ''; ?>

                            <img src="<?= $image ?>" style="height: 70px;width: 70px;" alt="" srcset="" />
                        </div>
                        <div class="ps-2">
                            <p class="m-0  inbox-chat-heading">{!! $user->name ?? '' !!}</p>
                            <p class="p-0 m-0 ">Online</p>
                        </div>

                    </div>
                </div>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="container mesages-row" id="dataContainer">
                    <div class="mid-div-top-margin">
                    </div>

                </div>

                <form id="myForm" class="form-group" style="margin-top: 20px">
                    @csrf
                    <input type="hidden" id="message_id" name="message_id" value="{{ $message_info->id }}">
                    <div class="input-text d-flex justify-content-end">
                        <input type="text" id="empty" name="message" autocomplete="off" chat-box
                            style="width: 100%;">
                        <span class="text-danger error-text message_error"></span>

                        {{-- <button type="submit" id="getData" data-id="{{ $message_info->id }}"
                            class="input-group-text">send</button> --}}

                        <button type="submit" id="getData" data-id="{{ $message_info->id }}"
                            class="input-group-text">Send</button>
                    </div>
                </form>

            </div>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $("#myForm").on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "/company/storeConversations",
                    method: "post",
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    beforeSend: function() {
                        $(document).find('span.error-text').text('');
                    },
                    success: function(data) {
                        if (data.status == 0) {
                            $('.message_error').html(data.message.message);
                            // alert("not ok");
                            // toastr.error(data.message, data.title);
                        } else {
                            $("#empty").val("");
                            var id = $('#message_id').val();
                            getmessage(id)
                            // alert("ok")
                            // toastr.success(data.message, data.title);
                        }
                    }
                });
            });

            function getmessage(id) {
                // var id = $(this).data('id');
                $.ajax({
                    url: "/company/getConversations",
                    type: "GET",
                    data: {
                        id: id
                    },
                    success: function(data) {
                        // console.log(data.data);
                        // $.each(data, function(index, value) {

                        //     $('#dataContainer').append('<p>' + value +
                        //         '</p>');
                        // });
                        $('#dataContainer').empty();
                        data.data.map((value, index) => {
                            console.log(value.message, index)
                            if (value.user_id == <?= Auth::user()->id ?>) {
                                $('#dataContainer').append(
                                    '<div class="row" >' +
                                    '<div class="col-5 offset-7">' +
                                    '<p class="chat-ms-rec">' +
                                    value.message +
                                    '</p>' +
                                    '</div>' +
                                    '</div>');
                            } else {
                                $('#dataContainer').append(
                                    '<div class="row w-50" style="text-align:right">' +
                                    ' <div class="row" style="text-align:right">' +
                                    ' <p class="chat-msg" style="text-align:right">' +
                                    value.message +
                                    '</p>' +
                                    '</div>' +
                                    '</div>');
                            }

                        })
                    }
                });

                setTimeout(() => {
                    var id = $('#message_id').val();
                    getmessage(id)
                }, 1000);
            }

            var id = $('#message_id').val();
            getmessage(id)
        });
    </script>
    <script
    type="module"
    src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
  ></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('user') }}/Assets/allNavScript.js"></script>
@endsection
