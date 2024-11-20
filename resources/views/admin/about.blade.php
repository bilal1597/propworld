<!DOCTYPE html>
<html lang="en">

@extends('layouts.main_admin')

@section('main_admin-section')

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>About Content</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('post.about') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $about->id }}" name="id">

                                        <div class="form-group mb-3">
                                            <label>Main Heading*</label>
                                            <input type="text" class="form-control" name="main_heading"
                                            value="{{(empty($about->main_heading)) ? old('main_heading') : $about->main_heading}}">
                                            @error('main_heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Image</label>
                                            <div><img src="{{asset($about ->main_image)}}" width="100px" alt="image"></div>

                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image*</label>
                                            <input type="file" class="form-control" name="main_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Heading*</label>
                                            <input type="text" class="form-control" name="first_heading"
                                            value="{{(empty($about->first_heading)) ? old('first_heading') : $about->first_heading}}">
                                            @error('first_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>First Description*</label>
                                            <input type="text" class="form-control" name="first_description"
                                            value="{{(empty($about->first_description)) ? old('first_description') : $about->first_description}}">
                                            @error('first_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Story Image</label>
                                            <div><img src="{{asset($about ->existing_image)}}" alt="image" width="100px"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image* </label>
                                            <input type="file" class="form-control" name="existing_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Heading*</label>
                                            <input type="text" name="second_heading"
                                            value="{{(empty($about->second_heading)) ? old('second_heading') : $about->second_heading}}" class="form-control"></input>
                                            @error('second_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Description*</label>
                                            <input type="text"
                                            value="{{(empty($about->second_description)) ? old('second_description') : $about->second_description}}" name="second_description" class="form-control"></input>
                                            @error('second_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Heading*</label>
                                            <input type="text" name="third_heading"
                                            value="{{(empty($about->third_heading)) ? old('third_heading') : $about->third_heading}}" class="form-control"></input>
                                            @error('third_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Third Description*</label>
                                            <input type="text" name="third_description"
                                            value="{{(empty($about->third_description)) ? old('third_description') : $about->third_description}}" class="form-control"></input>
                                            @error('third_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Ceo Image</label>
                                            <div><img src="{{asset($about ->ceo_image)}}" width="100px" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image*</label>
                                            <input type="file" class="form-control" name="ceo_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Ceo 2 Image</label>
                                            <div><img src="{{asset($about ->ceo2_image)}}" width="100px" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image*</label>
                                            <input type="file" class="form-control" name="ceo2_image" value="">
                                        </div>

                                        {{-- <div class="form-group mb-3">
                                            <label>Title</label>
                                            <input type="text" name="title" value="{{old('title',$about ->title)}}" class="form-control"></input>
                                            @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div> --}}


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
