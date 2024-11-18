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
        $request->validate([
            'main_heading' => 'required',
            'main_description' => 'required',
            'first_heading' => 'required',
            'first_description' => 'required',
            'point1' => 'required',
            'point2' => 'required',
            'point3' => 'required',
            'image_heading' => 'required',
            'vid_heading' => 'required',
            'main_image' => 'nullable|image|mimes:png,jpg,jpeg,webp',
            'multi_image.*' => 'nullable|image|mimes:png,jpg,jpeg,webp',
            'pdf' => 'nullable',
            'video' => 'nullable',
        ]);

        $project = new Project();
        $project->main_heading = $request->main_heading;
        $project->main_description = $request->main_description;
        $project->first_heading = $request->first_heading;
        $project->first_description = $request->first_description;
        $project->point1 = $request->point1;
        $project->point2 = $request->point2;
        $project->point3 = $request->point3;
        $project->image_heading = $request->image_heading;
        $project->vid_heading = $request->vid_heading;

        if ($request->hasFile('main_image')) {
            $file = $request->file('main_image');
            $filename = time() . '.' . $file->extension();
            $path = public_path('uploads/category/projects/');
            $file->move($path, $filename);
            $project->main_image = $path . $filename;
        }

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $filename = time() . '.' . $file->extension();
            $path = public_path('uploads/category/projects/');
            $file->move($path, $filename);
            $project->pdf = $path . $filename;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '.' . $file->extension();
            $path = public_path('uploads/category/projects/');
            $file->move($path, $filename);
            $project->video = $path . $filename;
        }

        $project->save();


        $imagePath = []; // Initialize the array to store image paths

        if ($request->hasFile('multi_image')) {
            foreach ($request->file('multi_image') as $image) {
                // Generate a unique filename
                $multi = time() . '_' . uniqid() . '.' . $image->extension();
                $path = public_path('uploads/category/multi/'); // Use public_path

                // Move the image to the specified path
                $image->move($path, $multi);

                // Store the relative path in the database
                $project->projectImages()->create(['multi_image' => $path . $multi]);

                // Add the full path to the array (optional)
                $imagePath[] = $path . $multi;
            }
        }

        return redirect()->route('add.project')->with('success', 'Project has been Added');
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
