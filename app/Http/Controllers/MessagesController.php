<?php

namespace App\Http\Controllers;

use App\Message;
use App\Http\Requests\CreateMessageRequest;
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

  public function create(CreateMessageRequest $request)
  {
    $message = Message::create([
      'content' => $request->input('message'),
      'image' => 'http://lorempixel.com/600/338?' . mt_rand(1, 1000)
    ]);

    return redirect('/messages/' . $message->id);
  }
}
