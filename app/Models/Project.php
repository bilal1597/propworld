<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'builder_name',
        'project_name',
        'project_description',
        'prj_point1',
        'prj_point2',
        'prj_point3',
        'main_heading',
        'main_description',
        'main_image',
        'first_heading',
        'first_description',
        'point1',
        'point2',
        'point3',
        'image_heading',
        'multi_image.*',
        'vid_heading',
        'video',
    ];

    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class, 'product_id');
    }
}
