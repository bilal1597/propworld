<!DOCTYPE html>
<html lang="en">

@extends('layouts.main_admin')

@section('main_admin-section')

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>Services Content</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('post.service') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{ $service->id }}" name="id">

                                        <div class="form-group mb-3">
                                            <label>Main Heading*</label>
                                            <input type="text" class="form-control" name="main_heading"
                                             value="{{ old('main_heading',$service->main_heading) }}">
                                            @error('main_heading')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Main Image</label>
                                            <div><img src="{{asset($service->main_image)}}" width="100px" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Main Image*</label>
                                            <input type="file" class="form-control" name="main_image" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Heading*</label>
                                            <input type="text" class="form-control" name="first_heading"
                                            value="{{old('first_heading',$service->first_heading)}}">
                                            @error('first_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>First Description*</label>
                                            <input type="text" class="form-control" name="first_description"
                                             value="{{old('first_description',$service->first_description)}}">
                                            @error('first_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Service 1 Heading*</label>
                                            <input type="text" class="form-control" name="service1_heading"
                                             value="{{old('service1_heading',$service->service1_heading)}}">
                                            @error('service1_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Service 1 Description*</label>
                                            <input type="text" class="form-control" name="service1_description"
                                             value="{{old('service1_description',$service->service1_description)}}">
                                            @error('service1_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Service 2 Heading*</label>
                                            <input type="text" class="form-control" name="service2_heading"
                                             value="{{old('service2_heading',$service->service2_heading)}}">
                                            @error('service2_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Service 2 Description*</label>
                                            <input type="text" class="form-control" name="service2_description"
                                             value="{{old('service2_description',$service->service2_description)}}">
                                            @error('service2_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Service 3 Heading*</label>
                                            <input type="text" class="form-control" name="service3_heading"
                                             value="{{old('service3_heading',$service->service3_heading)}}">
                                            @error('service3_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Service 3 Description*</label>
                                            <input type="text" class="form-control" name="service3_description"
                                             value="{{old('service3_description',$service ->service3_description)}}">
                                            @error('service3_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                        <div class="form-group mb-3">
                                            <label>Service 4 Heading*</label>
                                            <input type="text" class="form-control" name="service4_heading"
                                             value="{{old('service4_heading',$service->service4_heading)}}">
                                            @error('service4_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Service 4 Description*</label>
                                            <input type="text" class="form-control" name="service4_description"
                                             value="{{old('service4_description',$service->service4_description)}}">
                                            @error('service4_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Image 1</label>
                                            <div><img src="{{asset($service->image1)}}" width="100px" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image 1*</label>
                                            <input type="file" class="form-control" name="image1" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Existing Image 2</label>
                                            <div><img src="{{asset($service->image2)}}" width="100px" alt="image"></div>
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Change Image 2*</label>
                                            <input type="file" class="form-control" name="image2" value="">
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Heading*</label>
                                            <input type="text" class="form-control" name="second_heading"
                                            value="{{old('second_heading',$service->second_heading)}}">
                                            @error('second_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Second Description*</label>
                                            <input type="text" class="form-control" name="second_description"
                                             value="{{old('second_description',$service->second_description)}}">
                                            @error('second_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Special 1 Heading*</label>
                                            <input type="text" class="form-control" name="special1_heading"
                                             value="{{old('special1_heading',$service->special1_heading)}}">
                                            @error('special1_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Special 1 Description*</label>
                                            <input type="text" class="form-control" name="service1_description"
                                             value="{{old('service1_description',$service->service1_description)}}">
                                            @error('service1_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Special 2 Heading*</label>
                                            <input type="text" class="form-control" name="special2_heading"
                                             value="{{old('special2_heading',$service->special2_heading)}}">
                                            @error('special2_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Special 2 Description*</label>
                                            <input type="text" class="form-control" name="special2_description"
                                             value="{{old('special2_description',$service->special2_description)}}">
                                            @error('special2_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Special 3 Heading*</label>
                                            <input type="text" class="form-control" name="special3_heading"
                                             value="{{old('special3_heading',$service->special3_heading)}}">
                                            @error('special3_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Special 3 Description*</label>
                                            <input type="text" class="form-control" name="special3_description"
                                             value="{{old('special3_description',$service->special3_description)}}">
                                            @error('special3_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Special 4 Heading*</label>
                                            <input type="text" class="form-control" name="special4_heading"
                                             value="{{old('special4_heading',$service->special4_heading)}}">
                                            @error('special4_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Special 4 Description*</label>
                                            <input type="text" class="form-control" name="special4_description"
                                             value="{{old('special4_description',$service->special4_description)}}">
                                            @error('special4_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Special 5 Heading*</label>
                                            <input type="text" class="form-control" name="special5_heading"
                                             value="{{old('special5_heading',$service->special5_heading)}}">
                                            @error('special5_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Secial 5 Description*</label>
                                            <input type="text" class="form-control" name="special5_description"
                                             value="{{old('special5_description',$service->special5_description)}}">
                                            @error('special5_description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>

                                        <div class="form-group mb-3">
                                            <label>Special 6 Heading*</label>
                                            <input type="text" class="form-control" name="special6sa_heading"
                                             value="{{old('special6sa_heading',$service->special6sa_heading)}}">
                                            @error('special6sa_heading')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        </div>


                                        <div class="form-group mb-3">
                                            <label>Special 6 Description*</label>
                                            <input type="text" class="form-control" name="special6_description"
                                             value="{{old('special6_description',$service->special6_description)}}">
                                            @error('special6_description')
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
