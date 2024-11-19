<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class detailProjController extends Controller
{
    public function projectDetails($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.details_project', compact('project'));
    }
}
