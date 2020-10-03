@extends('admin.layouts.app')

@section('title', 'Course Create')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('common.page_header', [
        'page_title' => 'Create Course',
        'breadcrumbLinks' => [
                ['label' => 'Courses', 'link' => '/Courses']
            ]
    ])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card p-2">
                            <form action="{{ route('courses.store') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Title:</label>
                                            <input type="text" class="form-control"
                                                   id="title"
                                                   name="title" value="{{ old('title') }}">
                                            <span class="text-danger">
                                                @error('title')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="description">Description:</label>
                                            <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                                            <span class="text-danger">
                                                @error('description')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category">Category:</label>
                                            <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}">
                                            <span class="text-danger">
                                                @error('category')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price">Price:</label>
                                            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
                                            <span class="text-danger">
                                                @error('price')
                                                {{ $message }}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
