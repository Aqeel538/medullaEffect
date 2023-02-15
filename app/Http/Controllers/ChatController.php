<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatRoom;
use App\Models\Message;
use App\Models\MessageComment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    public function chat_room($id)
    {
        // SELECT * FROM `chats` WHERE (sender = 11 AND  receiver = 3 ) OR (sender = 3 AND  receiver = 11 )

        // dd('ok');
        $user_to_send = $id;
        $title = "Chat Room";
        $sender = auth()->user()->id;
        $user_ids = Chat::where('sender', $sender)->orWhere('receiver', $sender)->get();
        // dd($user_ids->toArray());
        if (!empty($user_ids->toArray())) {
            foreach ($user_ids as $user_id) {
                if ($user_id->sender == $sender || $user_id->receiver == $sender) {
                    // dd("ok if1");
                    if (($user_id->receiver == $user_to_send && $sender == $user_id->sender)  || ($user_id->receiver == $sender && $user_id->sender == $user_to_send)) {
                        dd('ok if 2');
                        return view('user.singleUser.pages.freelancer.chatbot', get_defined_vars());
                    } else {
                        dd('annder wala else');
                        $user = new Chat();
                        $user->sender = $sender;
                        $user->receiver = $user_to_send;
                        $user->save();
                        return view('user.singleUser.pages.freelancer.chatbot', get_defined_vars());
                    }
                } else {
                    dd('else wala ok');
                    $user = new Chat();
                    $user->sender = $sender;
                    $user->receiver = $user_to_send;
                    $user->save();
                    return view('user.singleUser.pages.freelancer.chatbot', get_defined_vars());
                }
            }
        } else {
            dd('is k phly se koi data ni hai ');
        }
    }

    public function index()
    {
        return view('user.singleUser.pages.freelancer.chatbot');
    }

    // CHAT NEW
    public function store(Request $request)
    {
        // dd('ok');
        $validator = Validator::make($request->all(), [
            "message" => "required",
        ]);
        $conversation = new MessageComment();
        $conversation->user_id = auth()->user()->id;
        $conversation->message = $request->message;
        $conversation->message_id = $request->message_id;
        $store = $conversation->save();
        if ($store) {
            return response()->json(['status' => 1, 'message' => 'message send']);
        } else {
            return response()->json(['status' => 0, 'message' => 'You cant send Empty message']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {
        $title = 'All Chats';
        $auth_user = auth()->user()->id;

        // check if user and auth already have a message if not create
        if (Message::where(['sender_id' => $auth_user, 'receiver_id' => $user])->first()) {

            $message_info = Message::where(['sender_id' => $auth_user, 'receiver_id' => $user])->first();
        } else if (Message::where(['sender_id' => $user, 'receiver_id' => $auth_user])->first()) {

            $message_info = Message::where(['sender_id' => $user, 'receiver_id' => $auth_user])->first();
        } else {
            $message_info = Message::create(
                [
                    'sender_id' => auth()->user()->id,
                    'receiver_id' => $user
                ]
            );
        }

        $user_messages = User::where('id', '!=', auth()->user()->id)->get();

        $user = User::where('id', $user)->with('messagecomments')->first();

        $conversations =  MessageComment::where(['message_id' => $message_info->id])->get();

        return view('userNew.singleUser.pages.freelancer.chatbot', get_defined_vars());
    }

    public function getConversations(Request $request)
    {
        $id = $request->input('id');
        $conversations =  MessageComment::where(['message_id' => $id])->with('user')->get();
        // dd($conversations->toArray());
        // return response('data', $conversations);
        return response()->json(['status' => 1, 'data' => $conversations->toArray()], 200);
    }

    // COMPANY CHAT
    public function company_index()
    {
        return view('userNew.singleUser.pages.company.chatbot');
    }

    public function company_store(Request $request)
    {
        // dd('ok');
        $validator = Validator::make($request->all(), [
            "message" => "required",
        ]);
        $conversation = new MessageComment();
        $conversation->user_id = auth()->user()->id;
        $conversation->message = $request->message;
        $conversation->message_id = $request->message_id;
        $store = $conversation->save();
        if ($store) {
            return response()->json(['status' => 1, 'message' => 'message send']);
        } else {
            return response()->json(['status' => 0, 'message' => 'You cant send Empty message']);
        }
    }

    public function company_show($user)
    {
        $title = 'All company Chats';
        $auth_user = auth()->user()->id;

        // check if user and auth already have a message if not create
        if (Message::where(['sender_id' => $auth_user, 'receiver_id' => $user])->first()) {

            $message_info = Message::where(['sender_id' => $auth_user, 'receiver_id' => $user])->first();
        } else if (Message::where(['sender_id' => $user, 'receiver_id' => $auth_user])->first()) {

            $message_info = Message::where(['sender_id' => $user, 'receiver_id' => $auth_user])->first();
        } else {
            $message_info = Message::create(
                [
                    'sender_id' => auth()->user()->id,
                    'receiver_id' => $user
                ]
            );
        }

        $user_messages = User::where('id', '!=', auth()->user()->id)->get();

        $user = User::where('id', $user)->with('messagecomments')->first();

        $conversations =  MessageComment::where(['message_id' => $message_info->id])->get();

        return view('userNew.singleUser.pages.company.chatbot', get_defined_vars());
    }

    public function company_getConversations(Request $request)
    {
        $id = $request->input('id');
        $conversations =  MessageComment::where(['message_id' => $id])->with('user')->get();
        // dd($conversations->toArray());
        // return response('data', $conversations);
        return response()->json(['status' => 1, 'data' => $conversations->toArray()], 200);
    }
}
