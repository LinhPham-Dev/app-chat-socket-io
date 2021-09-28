<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Events\MessagePosted;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function index()
    {
        return view('chat-app');
    }

    public function getUserLogin()
    {
        return Auth::user();
    }

    public function getAllMessage()
    {
        return Message::with('user')->get();
    }

    public function addNewMessage()
    {
        $user = Auth::user();

        $message = new Message();
        $message->message = request()->get('message', '');
        $message->user_id = $user->id;
        $message->save();

        return ['message' => $message->load('user')];
    }
}
