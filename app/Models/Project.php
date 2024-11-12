<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'main_title',
        'main_heading',
        'main_description',
        'first_project',
        'first_heading',
        'first_description',
        'second_project',
        'second_heading',
        'second_description',
        'third_project',
        'third_heading',
        'third_description',
    ];
}
