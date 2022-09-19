<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\MessageChat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function messages()
    {
        dd("Hello");
        $id = Auth::user()->id;
        $receiver = User::where("user_secid", $coming_rec_id)->first();
        $messages =  MessageChat::where("receiver_id", $receiver->id)->where("sender_id", $id)
            ->orWhere("receiver_id", $id)->where("sender_id", $receiver->id)
            ->orderBy("created_at", "asc")->get();
        return view('users.messages', compact("messages", "receiver"));
    }
    public function message_user(Request $request, $coming_rec_id)
    {
        $id = Auth::user()->id;
        $receiver = User::where("user_secid", $coming_rec_id)->first();
        $messages =  MessageChat::where("receiver_id", $receiver->id)->where("sender_id", $id)
            ->orWhere("receiver_id", $id)->where("sender_id", $receiver->id)
            ->orderBy("created_at", "asc")->get();
        return view('users.message', compact("messages", "receiver"));
    }
    public function oneUserMessage(Request $request, $coming_rec_id)
    {
        $id = Auth::user()->id;
        $receiver = User::where("user_secid", $coming_rec_id)->first();
        $messages =  MessageChat::where("receiver_id", $receiver->id)->where("sender_id", $id)
            ->orWhere("receiver_id", $id)->where("sender_id", $receiver->id)
            ->orderBy("created_at", "asc")->get();
        return view('users.messages', compact("messages", "receiver"));
    }
    // public function messages()
    // {
    //     $id = Auth::user()->id;
    //     $messages = Message::with('chats')->with('receiver')->with('sender')
    //         ->where("status", "notpinned")->where(function($query) use ($id) {
    //             $query->where("sender_id", $id)->orWhere("receiver_id", $id);
    //         })->get();
    //         // dd($messages);
    //     $pinned_messages = Message::with('chats')->with('receiver')->with('sender')
    //         ->where("status", "pinned")->where(function($query) use ($id) {
    //             $query->where("sender_id", $id)->orWhere("receiver_id", $id);
    //         })->get();

    //     return view("vendors.messages", compact("messages", "pinned_messages"));
    // }
    public function singleMsgPage()
    {
        return response()->json("success");
    }
    public function getMessage(Request $i, $coming_rec_id)
    {
        $id = Auth::user()->id;
        $receiver = User::where("user_secid", $coming_rec_id)->first();
        $messages =  MessageChat::where("receiver_id", $receiver->id)->where("sender_id", $id)
            ->orWhere("receiver_id", $id)->where("sender_id", $receiver->id)
            ->orderBy("created_at", "asc")->get();
        return view("vendors.message", compact("messages", "receiver"));
    }
    public function newMessage(Request $coming_rec_id)
    {
        $id = Auth::user()->id;
        $receiver = User::where("user_secid", $coming_rec_id)->first();

        return view("vendors.new_message", compact("receiver"));
    }
    public function sendMessage(Request $request, $coming_rec_id)
    {
        // dd($coming_rec_id);
        $id = Auth::user()->id;
        $message = request()->message;
        if($message == null){
            return response()->json(["status" => "failed", "message" => "Message field is required"]);
        }else{
            $rec_id = User::where("user_secid", $coming_rec_id)->first();
            $data['sender_id']  = $id;
            $data['receiver_id']  = $rec_id->id;
            $data['message_secid']  = rand();
            $data['messages']  = $message;
            if ($request->hasFile('file_uploaded')) {
                $request->validate([
                    'file_uploaded' => 'image|mimes:jpeg,png,jpg',
                ]);
                $file = request()->file('file_uploaded');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('/vendor/img/messages/', $filename);
                $data['file_uploaded']  = $filename;
            }
            $success = MessageChat::create($data);
            MessageChat::where('id', $success->id)->update(["message_id" => $success->id]);
            return response()->json(["status" => "success", "data" => $success]);
        }
    }
}
