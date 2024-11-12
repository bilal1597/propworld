<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function getProject()
    {
        // $project = Project::first();
        return view('admin.project');
    }
}
