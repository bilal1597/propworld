<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    protected $fillable = [
        'product_id',
        'multi_image'
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
