@extends('userNew.singleUser.layouts.main')
@section('content')
    <!----- ---------2nd--Navbar------------- -->

    <?php
    $blink = 0;
    ?>
    @include('userNew.singleUser.pages.individual.secondNav')
    <!---------------- -Navend--------------- -->
    <div class="container mb-5 mt-5">
        <h1 class="headings-profile mb-4">Inbox</h1>
        <div class="row mt-lg-3 mt-md-3 mt-3 crd-row-one">
            <div class="col-lg-5 col-12">
                <div class=" p-4" style="background-color: #FFF3F7; border-radius: 21.0305px;">
                    <div class="search-bar-inbx d-flex align-items-center justify-content-between">
                        <div class="input-field-white-bg">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" value="" placeholder="Search">
                        </div>
                        <div class="filter-img">
                            <img src="{{ asset('user') }}/assets/images/configure.png" class="" alt="">
                        </div>

                    </div>
                    <div class="overflow-of-inbx" style="height:500px; overflow:auto; ">
                        @if (count($user_messages) > 0)
                            @foreach ($user_messages as $single_message)
                                <a href="/individual/messages/{{ $single_message->id }}">
                                    <div class="d-flex mb-3 mt-3 " style="border-bottom: 1px solid #e7e4e4;">

                                        <div class="img-holder">
                                            <a href="/individual/messages/{{ $single_message->id }}"
                                                style=" text-decoration: none;">
                                                <img src="{{ asset('user') }}/assets/images/profile-imges/user.png"
                                                    style="width: 60px;" class="" alt="">
                                            </a>
                                        </div>

                                        <div class="ms-3">
                                            <div class="d-flex justify-content-between align-item-center">
                                                <div>
                                                    @if ($single_message->receiver_id == Auth::user()->id)
                                                        <h3 class="inbox-chat-heading">
                                                            <a href="/individual/messages/{{ $single_message->id }}"
                                                                style=" text-decoration: none;">
                                                                <p> {{ $single_message->name }}</p>
                                                            </a>
                                                        </h3>
                                                    @else
                                                        <h3 class="m-0 p-0 inbox-chat-heading">
                                                            <a href="/individual/messages/{{ $single_message->id }}"
                                                                style=" text-decoration: none;">
                                                                <p> {{ $single_message->name }}</p>
                                                            </a>
                                                        </h3>
                                                    @endif
                                                </div>
                                                <div>
                                                    <a href="/individual/messages/{{ $single_message->id }}"
                                                        style=" text-decoration: none;">
                                                        <p>14 min ago</p>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between align-item-center">
                                                <div>
                                                    <a href="/individual/messages/{{ $single_message->id }}"
                                                        style=" text-decoration: none;">
                                                        <p class=""style="width:280px">
                                                            Lorem.lorem lorem lorem <span>...</span>
                                                        </p>
                                                    </a>
                                                </div>
                                                <div class="count-mesg-inbox-chats">
                                                    <a href="/individual/messages/{{ $single_message->id }}"
                                                        style=" text-decoration: none;">
                                                        <p>0</p>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @else
                            <p>No conversation so far...</p>
                        @endif
                    </div>
                </div>
            </div>


            @if ($user_messages_show == 1)
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
                        <input type="hidden" id="message_id" name="message_id" value="{!! $message_info->id ?? '' !!}">
                        <div class="input-text ">

                            <textarea type="text" name="message" autocomplete="off" chat-box id="empty" placeholder="Type here..."></textarea>
                            <span class="text-danger error-text message_error"></span>

                            {{-- <button type="submit" id="getData" data-id="{{ $message_info->id }}"
                            class="input-group-text">send</button> --}}

                            <button type="submit" id="getData" data-id="{!! $message_info->id ?? '' !!}"
                                class="input-group-text"><i class="fa-solid fa-paper-plane"></i></button>
                        </div>
                    </form>

                </div>
            @else
                <div class="col-lg-7 col-12 mt-lg-0 mt-md-3 mt-3 "
                    style="background-color: #F9F9F9;  border-radius: 21.0305px; height: 100px;">

                    <div class="p-4 fixed-top chat-header" style="height: auto!important">
                        <p>No conversation so far...</p>
                    </div>
                </div>
            @endif

        </div>
    </div>


    <script>
        $(document).ready(function() {
            $("#myForm").on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    url: "/individual/storeConversations",
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
                    url: "/individual/getConversations",
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
                                    '<div class="chat-bubble outgoing" style="text-align:right">' +
                                    '<p class="message">' + value.message + '</p>' +
                                    '</div>');
                            } else {
                                $('#dataContainer').append(
                                    '<div class="chat-bubble-inc incoming">' +
                                    '<p class="message-sending">' + value.message + '</p>' +
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('user') }}/Assets/allNavScript.js"></script>
@endsection
