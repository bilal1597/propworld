<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{

    public function showProject()
    {
        $project = Project::all();
        return view('frontend.project_show', compact('project'));
    }

    public function listProject()
    {
        $data = Project::all();
        return view('admin.list_project', compact('data'));
    }

    public function addProject()
    {
        return view('admin.project_add');
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'builder_name' => 'required',
            'project_name' => 'required',
            'project_description' => 'required',
            'prj_point1' => 'required',
            'prj_point2' => 'required',
            'prj_point3' => 'required',

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
        $project->builder_name = $request->builder_name;
        $project->project_name = $request->project_name;
        $project->project_description = $request->project_description;
        $project->prj_point1 = $request->prj_point1;
        $project->prj_point2 = $request->prj_point2;
        $project->prj_point3 = $request->prj_point3;

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
            $path = 'uploads/category/projects/';
            $file->move($path, $filename);
            $project->main_image = $path . $filename;
        }

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/projects/';
            $file->move(public_path($path), $filename);
            $project->pdf = $path . $filename;
        }

        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/projects/';
            $file->move($path, $filename);
            $project->video = $path . $filename;
        }

        $project->save();


        $imagePath = []; // Initialize the array to store image paths

        if ($request->hasFile('multi_image')) {
            foreach ($request->file('multi_image') as $image) {
                // Generate a unique filename
                $multi = time() . '_' . uniqid() . '.' . $image->extension();
                $path = 'uploads/category/multi/'; // Use public_path

                // Move the image to the specified path
                $image->move(public_path($path), $multi);

                // Store the relative path in the database
                $project->projectImages()->create(['multi_image' => $path . $multi]);

                // Add the full path to the array (optional)
                $imagePath[] = $path . $multi;
            }
        }

        return redirect()->route('add.project')->with('success', 'Project has been Added');
    }

    public function getProject($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project', compact('project'));
    }

    public function editProject(Request $request)
    {

        $request->validate([
            'builder_name' => 'required',
            'project_name' => 'required',
            'project_description' => 'required',
            'prj_point1' => 'required',
            'prj_point2' => 'required',
            'prj_point3' => 'required',

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

        $project = Project::findOrFail($request->id);

        $project->builder_name = $request->builder_name;
        $project->project_name = $request->project_name;
        $project->project_description = $request->project_description;
        $project->prj_point1 = $request->prj_point1;
        $project->prj_point2 = $request->prj_point2;
        $project->prj_point3 = $request->prj_point3;

        $project->main_heading = $request->main_heading;
        $project->main_description = $request->main_description;
        $project->first_heading = $request->first_heading;
        $project->first_description = $request->first_description;
        $project->point1 = $request->point1;
        $project->point2 = $request->point2;
        $project->point3 = $request->point3;
        $project->image_heading = $request->image_heading;
        $project->vid_heading = $request->vid_heading;


        if ($request->has('main_image')) {

            if (File::exists($project->main_image)) {
                (File::delete($project->main_image));
            }
            $file = $request->file('main_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/projects/';
            $file->move($path, $filename);
            $project->main_image = $path . $filename;
        }

        if ($request->has('pdf')) {

            if (File::exists($project->pdf)) {
                (File::delete($project->pdf));
            }
            $file = $request->file('pdf');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/projects/';
            $file->move($path, $filename);
            $project->pdf = $path . $filename;
        }

        if ($request->has('video')) {

            if (File::exists($project->video)) {
                (File::delete($project->video));
            }
            $file = $request->file('video');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/projects/';
            $file->move($path, $filename);
            $project->video = $path . $filename;
        }

        $project->save();



        if ($request->hasFile('multi_image')) {
            // Delete existing product images
            foreach ($project->projectImages as $image) {
                if (File::exists($image->multi_image)) {
                    (File::delete($image->multi_image));
                }
                $image->delete();
            }
            $imagePath = [];
            foreach ($request->file('multi_image') as $image) {

                $multi = time() . '_' . uniqid() . '.' . $image->extension();
                $path = 'uploads/category/multi/';


                $image->move($path, $multi);


                $project->projectImages()->create(['multi_image' => $path . $multi]);

                $imagePath[] = $path . $multi;
            }
        }

        return redirect()->route('list.project')->with('success', 'Project Page updated successfully.');
    }

    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        if (File::exists(public_path($project->main_image))) {
            File::delete(public_path($project->main_image));
        }
        if (File::exists(public_path($project->pdf))) {
            File::delete(public_path($project->pdf));
        }
        if (File::exists(public_path($project->video))) {
            File::delete(public_path($project->video));
        }

        foreach ($project->projectImages as $image) {
            if (File::exists(public_path($project->multi_image))) {
                File::delete(public_path($project->multi_image));
            }
            $image->delete();
        }

        $project->delete();

        return redirect()->route('list.project')->with('Successfully Deleted');
    }
}
