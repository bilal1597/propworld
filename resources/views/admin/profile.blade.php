<!DOCTYPE html>
<html lang="en">

@extends('layouts.main_admin')

@section('main_admin-section')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Edit Profile</h1>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @if(session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                    @endif
                                    @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @endif


                                    <form action="{{route('edit.profile')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$user ->id}}" name="id">
                                        <div class="row">
                                            <div class="col-md-3">

                                                <img src="{{asset($user ->image)}}" alt="" class="profile-photo w_100_p">
                                                <input type="file" class="form-control mt_10" name="image">
                                                @error('image')
                                                <span class="text-danger" >{{$message}}</span>
                                            @enderror
                                            </div>
                                            <div class="col-md-9">
                                                <div class="mb-4">
                                                    <label class="form-label">Name *</label>
                                                    <input type="text" value="{{old('name',$user ->name)}}" class="form-control" name="name">
                                                    @error('name')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Email *</label>
                                                    <input type="email" value="{{old('email', $user ->email)}}" class="form-control" name="email" value="john@gmail.com">
                                                    @error('email')
                                                    <span class="text-danger" >{{$message}}</span>
                                                @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Password</label>
                                                    <input type="password"  class="form-control" name="password">
                                                    @error('password')
                                                    <span class="text-danger" >{{$message}}</span>
                                                @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label">Retype Password</label>
                                                    <input type="password" class="form-control" name="retype_password">
                                                    @error('retype_password')
                                        <span class="text-danger" >{{$message}}</span>
                                    @enderror
                                                </div>
                                                <div class="mb-4">
                                                    <label class="form-label"></label>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
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
