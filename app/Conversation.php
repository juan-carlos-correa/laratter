<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Conversation extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function privateMessages()
    {
        return $this->hasMany(PrivateMessage::class);
    }
}
