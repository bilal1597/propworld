<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'main_heading',
        'first_heading',
        'first_description',
        'service1_heading',
        'service1_description',
        'service2_heading',
        'service2_description',
        'service3_heading',
        'service3_description',
        'service4_heading',
        'service4_description',
        'second_heading',
        'second_description',
        'special1_heading',
        'special1_description',
        'special2_heading',
        'special2_description',
        'special3_heading',
        'special3_description',
        'special4_heading',
        'special4_description',
        'special5_heading',
        'special5_description',
        'special6sa_heading',
        'special6_description',
    ];
}
