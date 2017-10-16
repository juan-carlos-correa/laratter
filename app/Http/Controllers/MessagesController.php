<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function show($id)
    {
        $message = Message::findOrFail($id);

        return view('messages.show', [
            'message' => $message
        ]);
    }
}