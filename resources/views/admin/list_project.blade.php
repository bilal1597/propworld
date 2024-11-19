<!DOCTYPE html>
<html lang="en">

@extends('layouts.main_admin')

@section('main_admin-section')

        <div class="main-content">
            <section class="section">
                <div class="section-header justify-content-between">
                    <h1>All Projects</h1>
                </div>

                <div class="section-body">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <a href="{{ route('add.project') }}" class="btn btn-success p-2 m-2 float-end "><i class="fas fa-plus me-1"></i>Add New Project</a>
                                    </div>
                                    <table class="table table-bordered table-striped table-hover" id="example1">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>No.</th>
                                                <th>Builders Name</th>
                                                <th>Project Name</th>
                                                <th>Project View</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data as $project)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $project->builder_name }}</td>
                                                    <td>{{ $project->project_name }}</td>
                                                    <td>
                                                        <div>
                                                        <a href="{{ route('view.project', $project->id) }}" class="btn btn-info btn-sm">
                                                            View</a>
                                                        </div>
                                                    </td>
                                                    <td class="d-flex">
                                                        <div>
                                                            <a class="btn btn-warning btn-sm me-3"
                                                            href="{{ route('view.project', $project->id) }}">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        </div>

                                                        <form action="{{ route('delete.project', $project->id) }}" method="POST">
                                                            {{-- @method('DELETE') --}}
                                                            @csrf
                                                            <button
                                                                onClick="return confirm('Are you sure you want to delete this project?');"
                                                                type="submit" class="btn btn-danger btn-sm">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                @empty
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


<script src="dist/js/scripts.js"></script>
<script src="dist/js/custom.js"></script>

@endsection
</body>
</html>
