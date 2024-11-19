<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use Illuminate\Http\Request;

class detailProjController extends Controller
{
    public function projectDetails($id)
    {
        $project = Project::findOrFail($id);
        $images = ProjectImage::where('product_id', $id)->get();
        return view('frontend.details_project', compact('project', 'images'));
    }
}
