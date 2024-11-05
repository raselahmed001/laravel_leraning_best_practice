@extends('ui')

@section('title', 'Admin Dashboard')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Category Management</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12 text-end">
                    <a href="#" type="button" class="btn btn-success" data-bs-toggle="modal"
                        data-bs-target="#modelCreate" style="color: white">
                        <span class="icon-on"><i class="ri-add-line align-bottom me-1"></i>Add Category</span>
                    </a>
                </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <table id="datatable" class="table table-bordered dt-responsive align-middle" width="100%">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Category Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Here you would loop through your categories --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Form -->
    @include('Admin.dashboard.category.create')


@endsection
