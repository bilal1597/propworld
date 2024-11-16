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

                                    <form action="{{ route('store.project') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- <input type="hidden" value="{{ $project->id }}" name="id"> --}}

                                        <div class="form-group mb-3">
                                            <label>Main Heading*</label>
                                            <input type="text" class="form-control" name="main_heading" value="{{ old('main_heading') }}">
                                            @error('main_heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Main Image</label>
                                            <div><img src="" width="100px" alt="image"></div>

                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Main Image*</label>
                                            <input type="file" class="form-control" name="main_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Heading*</label>
                                            <input type="text" class="form-control" name="first_heading" value="{{old('first_heading')}}">
                                            @error('first_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>First Description*</label>
                                            <input type="text" class="form-control" name="first_description" value="{{old('first_description')}}">
                                            @error('first_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Point 1*</label>
                                            <input type="text" class="form-control" name="point1" value="{{old('point1')}}">
                                            @error('point1')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Point 2*</label>
                                            <input type="text" class="form-control" name="point2" value="{{old('point2')}}">
                                            @error('point2')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Point 3*</label>
                                            <input type="text" class="form-control" name="point3" value="{{old('point3')}}">
                                            @error('point3')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Project Image</label>
                                            <div><img src="" alt="image" width="100px"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change First Image* </label>
                                            <input type="file" class="form-control" name="first_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Project*</label>
                                            <input type="text" class="form-control" name="second_project" value="{{old('second_project')}}">
                                            @error('second_project')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Heading*</label>
                                            <input type="text" class="form-control" name="second_heading" value="{{old('second_heading')}}">
                                            @error('second_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Description*</label>
                                            <input type="text" class="form-control" name="second_description" value="{{old('second_description')}}">
                                            @error('second_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Project Image</label>
                                            <div><img src="" alt="image" width="100px"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Second Image* </label>
                                            <input type="file" class="form-control" name="second_image" value="">
                                        </div>



                                        <div class="form-group mb-3">
                                            <label>Third Project*</label>
                                            <input type="text" class="form-control" name="third_project" value="{{old('third_project')}}">
                                            @error('third_project')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Heading*</label>
                                            <input type="text" class="form-control" name="third_heading" value="{{old('third_heading')}}">
                                            @error('third_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Description*</label>
                                            <input type="text" class="form-control" name="third_description" value="{{old('third_description')}}">
                                            @error('third_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Project Image</label>
                                            <div><img src="" alt="image" width="100px"></div>
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
