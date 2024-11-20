<!DOCTYPE html>
<html lang="en">

@extends('layouts.main_admin')


@section('main_admin-section')

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>Home Content</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('post.home') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $home->id }}" name="id">

                                        <div class="form-group mb-3">
                                            <label>Main Heading*</label>
                                            <input type="text" class="form-control" name="main_heading"
                                            value="{{(empty($home->main_heading)) ? old('main_heading') : $home->main_heading }}">
                                            @error('main_heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Main Description*</label>
                                            <input type="text" class="form-control" name="main_description"
                                            value="{{(empty($home->main_description)) ? old('main_description') : $home->main_description }}">
                                            @error('main_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Image</label>
                                            <div><img src="{{asset($home ->main_image)}}" width="100px" alt="image"></div>

                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Main Image*</label>
                                            <input type="file" class="form-control" name="main_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Last Heading*</label>
                                            <input type="text" class="form-control" name="last_heading"
                                            value="{{(empty($home->last_heading)) ? old('last_heading') : $home->last_heading}}">
                                            @error('last_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>First Description*</label>
                                            <input type="text" class="form-control" name="last_description"
                                            value="{{(empty($home->last_description)) ? old('last_description') : $home->last_description}}">
                                            @error('last_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Last Button*</label>
                                            <input type="text" class="form-control" name="last_button"
                                            value="{{(empty($home->last_button)) ? old('last_button') : $home->last_button}}">
                                            @error('last_button')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
