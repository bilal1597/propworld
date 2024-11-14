<!DOCTYPE html>
<html lang="en">

@extends('layouts.main_admin')

@section('main_admin-section')

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>Project Content</h1>
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
                                            <label>Main Title*</label>
                                            <input type="text" class="form-control" name="main_title" value="{{ old('main_title', $project ->main_title) }}">
                                            @error('main_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Image</label>
                                            <div><img src="{{asset($project ->main_image)}}" width="100px" alt="image"></div>

                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Main Image*</label>
                                            <input type="file" class="form-control" name="main_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Main Heading*</label>
                                            <input type="text" class="form-control" name="main_heading" value="{{old('main_heading',$project ->main_heading)}}">
                                            @error('main_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Main Description*</label>
                                            <input type="text" class="form-control" name="main_description" value="{{old('main_description',$project ->main_description)}}">
                                            @error('main_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Project*</label>
                                            <input type="text" class="form-control" name="first_project" value="{{old('first_project', $project ->first_project)}}">
                                            @error('first_project')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Heading*</label>
                                            <input type="text" class="form-control" name="first_heading" value="{{old('first_heading',$project ->first_heading)}}">
                                            @error('first_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Description*</label>
                                            <input type="text" class="form-control" name="first_description" value="{{old('first_description',$project ->first_description)}}">
                                            @error('first_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Project Image</label>
                                            <div><img src="{{asset($project ->first_image)}}" alt="image" width="100px"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change First Image* </label>
                                            <input type="file" class="form-control" name="first_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Project*</label>
                                            <input type="text" class="form-control" name="second_project" value="{{old('second_project',$project ->second_project)}}">
                                            @error('second_project')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Heading*</label>
                                            <input type="text" class="form-control" name="second_heading" value="{{old('second_heading', $project ->second_heading)}}">
                                            @error('second_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Description*</label>
                                            <input type="text" class="form-control" name="second_description" value="{{old('second_description',$project ->second_description)}}">
                                            @error('second_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Project Image</label>
                                            <div><img src="{{asset($project ->second_image)}}" alt="image" width="100px"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Second Image* </label>
                                            <input type="file" class="form-control" name="second_image" value="">
                                        </div>



                                        <div class="form-group mb-3">
                                            <label>Third Project*</label>
                                            <input type="text" class="form-control" name="third_project" value="{{old('third_project',$project ->third_project)}}">
                                            @error('third_project')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Heading*</label>
                                            <input type="text" class="form-control" name="third_heading" value="{{old('third_heading', $project ->third_heading)}}">
                                            @error('third_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Description*</label>
                                            <input type="text" class="form-control" name="third_description" value="{{old('third_description',$project ->third_description)}}">
                                            @error('third_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Project Image</label>
                                            <div><img src="{{asset($project ->third_image)}}" alt="image" width="100px"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Third Image* </label>
                                            <input type="file" class="form-control" name="third_image" value="">
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
