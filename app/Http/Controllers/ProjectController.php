<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{

    public function showProject()
    {
        $show = Project::all();
        return view('frontend.project_show', compact('show'));
    }

    public function addProject()
    {
        return view('admin.project_add');
    }

    public function storeProject(Request $request)
    {
        $project = Project::create($request->all());
        $project->save();
        return redirect()->route('view.project')->with('success', 'Project has been Added');
    }

    public function getProject()
    {
        $project = Project::first();
        return view('admin.project', compact('project'));
    }

    public function postProject(Request $request)
    {

        $request->validate([
            'main_title' => 'required|string|max:255',
            'main_heading' => 'required|string|max:255',
            'main_description' => 'required',
            'first_project' => 'required',
            'first_heading' => 'required',
            'first_description' => 'required',
            'second_project' => 'required',
            'second_heading' => 'required',
            'second_description' => 'required',
            'third_project' => 'required',
            'third_heading' => 'required',
            'third_description' => 'required',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'first_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'second_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'third_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);


        $project = Project::findOrFail($request->id);

        $project->main_title = $request->main_title;
        $project->main_heading = $request->main_heading;
        $project->main_description = $request->main_description;

        $project->first_project = $request->first_project;
        $project->first_heading = $request->first_heading;
        $project->first_description = $request->first_description;

        $project->second_project = $request->second_project;
        $project->second_heading = $request->second_heading;
        $project->second_description = $request->second_description;

        $project->third_project = $request->third_project;
        $project->third_heading = $request->third_heading;
        $project->third_description = $request->third_description;


        if ($request->has('main_image')) {

            if (File::exists($project->main_image)) {
                (File::delete($project->main_image));
            }
            $file = $request->file('main_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/project/';
            $file->move(public_path($path), $filename);
            $project->main_image = $path . $filename;
        }

        if ($request->has('first_image')) {

            if (File::exists($project->first_image)) {
                (File::delete($project->first_image));
            }
            $file = $request->file('first_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/project/';
            $file->move(public_path($path), $filename);
            $project->first_image = $path . $filename;
        }

        if ($request->has('second_image')) {

            if (File::exists($project->second_image)) {
                (File::delete($project->second_image));
            }
            $file = $request->file('second_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/project/';
            $file->move(public_path($path), $filename);
            $project->second_image = $path . $filename;
        }

        if ($request->has('third_image')) {

            if (File::exists($project->third_image)) {
                (File::delete($project->third_image));
            }
            $file = $request->file('third_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/project/';
            $file->move(public_path($path), $filename);
            $project->third_image = $path . $filename;
        }

        $project->save();

        return redirect()->route('view.project')->with('success', 'Project Page updated successfully.');
    }
}
