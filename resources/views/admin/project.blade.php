<!DOCTYPE html>
<html lang="en">

@extends('layouts.main_admin')

@section('main_admin-section')

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>Edit Project Content</h1>
                    <a href="{{ route('add.project') }}" class="btn btn-success p-2 m-2 float-end "><i class="fas fa-plus me-1"></i>Add New Project</a>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('post.project') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $project->id }}" name="id">

                                        <div class="form-group mb-3">
                                            <label>Builder Name*</label>
                                            <input type="text" class="form-control" name="builder_name"
                                            value="{{(empty($project->builder_name)) ? old('builder_name') : $project->builder_name}}">
                                            @error('builder_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Project Name*</label>
                                            <input type="text" class="form-control" name="project_name"
                                            value="{{(empty($project->project_name)) ? old('project_name') : $project->project_name}}">
                                            @error('project_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Project Description*</label>
                                            <input type="text" class="form-control" name="project_description"
                                            value="{{(empty($project->project_description)) ? old('project_description') : $project->project_description}}">
                                            @error('project_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Project Point 1*</label>
                                            <input type="text" class="form-control" name="prj_point1"
                                            value="{{(empty($project->prj_point1)) ? old('prj_point1') : $project->prj_point1}}">
                                            @error('prj_point1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Project Point 2*</label>
                                            <input type="text" class="form-control" name="prj_point2"
                                            value="{{(empty($project->prj_point2)) ? old('prj_point2') : $project->prj_point2}}">
                                            @error('prj_point2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Project Point 3*</label>
                                            <input type="text" class="form-control" name="prj_point3"
                                            value="{{(empty($project->prj_point3)) ? old('prj_point3') : $project->prj_point3}}">
                                            @error('prj_point3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Main Heading*</label>
                                            <input type="text" class="form-control" name="main_heading"
                                            value="{{(empty($project->main_heading)) ? old('main_heading') : $project->main_heading}}">
                                            @error('main_heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Main Description*</label>
                                            <input type="text" class="form-control" name="main_description"
                                            value="{{(empty($project->main_description)) ? old('main_description') : $project->main_description}}">
                                            @error('main_description')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Main Image</label>
                                            <div><img src="{{asset($project ->main_image)}}" width="100px" alt="image"></div>

                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Main Image*</label>
                                            <input type="file" class="form-control" name="main_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Heading*</label>
                                            <input type="text" class="form-control" name="first_heading"
                                            value="{{(empty($project->first_heading)) ? old('first_heading') : $project->first_heading}}">
                                            @error('first_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>First Description*</label>
                                            <input type="text" class="form-control" name="first_description"
                                            value="{{(empty($project->first_description)) ? old('first_description') : $project->first_description}}">
                                            @error('first_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Point 1*</label>
                                            <input type="text" class="form-control" name="point1"
                                            value="{{(empty($project->point1)) ? old('point1') : $project->point1}}">
                                            @error('point1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Point 2*</label>
                                            <input type="text" class="form-control" name="point2"
                                            value="{{(empty($project->point2)) ? old('point2') : $project->point2}}">
                                            @error('point2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Point 3*</label>
                                            <input type="text" class="form-control" name="point3"
                                            value="{{(empty($project->point3)) ? old('point3') : $project->point3}}">
                                            @error('point3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Change Project PDF* </label>
                                            <input type="file" class="form-control" name="pdf" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Multiple Images Heading*</label>
                                            <input type="text" class="form-control" name="image_heading"
                                            value="{{(empty($project->image_heading)) ? old('image_heading') : $project->image_heading}}">
                                            @error('image_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Multiple Images</label>
                                            <div><img src="{{asset($project ->multi_image)}}" width="100px" alt="image"></div>

                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Multiple Images* </label>
                                            <input type="file" multiple class="form-control" name="multi_image[]" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Video Heading*</label>
                                            <input type="text" class="form-control" name="vid_heading"
                                            value="{{(empty($project->vid_heading)) ? old('vid_heading') : $project->vid_heading}}">
                                            @error('vid_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Project Video* </label>
                                            <input type="file" multiple class="form-control" name="video" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Video</label>
                                            <div><img src="" alt="video" width="100px"></div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<script src="dist/js/scripts.js"></script>
<script src="dist/js/custom.js"></script>

@endsection
</body>
</html>

