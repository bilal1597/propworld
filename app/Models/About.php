<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class About extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'main_heading',
        'first_heading',
        'first_description',
        'second_heading',
        'second_description',
        'third_heading',
        'third_description',
        'title',
    ];
}
