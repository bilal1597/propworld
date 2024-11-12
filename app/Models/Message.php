<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Message extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'user_name',
        'user_email',
        'user_subject',
        'user_message',
    ];
}
