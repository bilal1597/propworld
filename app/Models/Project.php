<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Project extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'main_heading',
        'main_description',
        'first_heading',
        'first_description',
        'point1',
        'point2',
        'point3',
        'image_heading',
        'vid_heading',
    ];

    public function productImages()
    {
        return $this->hasMany(ProjectImage::class, 'product_id');
    }
}
