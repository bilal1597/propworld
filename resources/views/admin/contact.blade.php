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
                                    <form action="{{ route('post.contact') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $contact->id }}" name="id">

                                        <div class="form-group mb-3">
                                            <label>Main Heading*</label>
                                            <input type="text" class="form-control" name="main_heading"
                                            value="{{(empty($contact->main_heading)) ? old('main_heading') : $contact->main_heading}}" >
                                            @error('main_heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Image</label>
                                            <div><img src="{{asset($contact ->main_image)}}" width="100px" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image*</label>
                                            <input type="file" class="form-control" name="main_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Heading*</label>
                                            <input type="text" class="form-control" name="contact_heading"
                                            value="{{(empty($contact->contact_heading)) ? old('contact_heading') : $contact->contact_heading}}" >
                                            @error('contact_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>First Description*</label>
                                            <input type="text" class="form-control" name="contact_description"
                                            value="{{(empty($contact->contact_description)) ? old('contact_description') : $contact->contact_description}}" >
                                            @error('contact_description')
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
