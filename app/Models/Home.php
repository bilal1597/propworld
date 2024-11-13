<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Home extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'main_heading',
        'main_description',
        'main_image',
        'last_heading',
        'last_description',
        'last_button',
    ];
}
