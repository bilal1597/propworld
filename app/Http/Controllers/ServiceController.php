<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function getService()
    {
        $service = Service::first();
        return view('admin.service', compact('service'));
    }


    public function postService(Request $request)
    {

        $request->validate([
            'main_heading' => 'required|string|max:255',
            'first_heading' => 'required|string|max:255',

            'first_description' => 'required',
            'service1_heading' => 'required',
            'service1_description' => 'required',
            'service2_heading' => 'required',
            'service2_description' => 'required',
            'service3_heading' => 'required',
            'service3_description' => 'required',
            'service4_heading' => 'required',
            'service4_description' => 'required',
            'second_heading' => 'required',
            'second_description' => 'required',
            'special1_heading' => 'required',
            'special1_description' => 'required',
            'special2_heading' => 'required',
            'special2_description' => 'required',
            'special3_heading' => 'required',
            'special3_description' => 'required',
            'special4_heading' => 'required',
            'special4_description' => 'required',
            'special5_heading' => 'required',
            'special5_description' => 'required',
            'special6sa_heading' => 'required',
            'special6_description' => 'required',

            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);


        $service = Service::findOrFail($request->id);

        $service->main_heading = $request->main_heading;
        $service->first_heading = $request->first_heading;
        $service->first_description = $request->first_description;
        $service->service1_heading = $request->service1_heading;
        $service->service1_description = $request->service1_description;
        $service->service2_heading = $request->service2_heading;
        $service->service2_description = $request->service2_description;
        $service->service3_heading = $request->service3_heading;
        $service->service3_description = $request->service3_description;
        $service->service4_heading = $request->service4_heading;
        $service->service4_description = $request->service4_description;
        $service->second_heading = $request->second_heading;
        $service->second_description = $request->second_description;
        $service->special1_heading = $request->special1_heading;
        $service->special1_description = $request->special1_description;
        $service->special2_heading = $request->special2_heading;
        $service->special2_description = $request->special2_description;
        $service->special3_heading = $request->special3_heading;
        $service->special3_description = $request->special3_description;
        $service->special4_heading = $request->special4_heading;
        $service->special4_description = $request->special4_description;
        $service->special5_heading = $request->special5_heading;
        $service->special5_description = $request->special5_description;
        $service->special6_heading = $request->special6_heading;
        $service->special6_description = $request->special6_description;

        if ($request->has('main_image')) {

            if (File::exists($service->main_image)) {
                (File::delete($service->main_image));
            }
            $file = $request->file('main_image');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/service/';
            $file->move(public_path($path), $filename);
            $service->main_image = $path . $filename;
        }
        if ($request->has('image1')) {

            if (File::exists($service->image1)) {
                (File::delete($service->image1));
            }
            $file = $request->file('image1');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/service/';
            $file->move(public_path($path), $filename);
            $service->image1 = $path . $filename;
        }
        if ($request->has('image2')) {

            if (File::exists($service->image2)) {
                (File::delete($service->image2));
            }
            $file = $request->file('image2');
            $filename = time() . '.' . $file->extension();
            $path = 'uploads/category/service/';
            $file->move(public_path($path), $filename);
            $service->image2 = $path . $filename;
        }

        $service->save();

        return redirect()->route('view.service')->with('success', 'Services Page updated successfully.');
    }
}
