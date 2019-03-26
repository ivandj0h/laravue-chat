<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Message;

class ContactsController extends Controller
{
    public function get()
    {
        $contacts = User::All();

        return response()->json($contacts);
    }

    public function getMessagesFor($id)
    {
        $messages = Message::Where('from', $id)->orWhere('to', $id)->get();

        return response()->json($messages);
    }
}
