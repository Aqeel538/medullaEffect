@extends('admin.main')
@section('content')

<!-- <div class="col-lg-10 ml-5 grid-margin stretch-card">
    <div class="card">
        <div class="row" style="justify-content: right;">
            <a href="{{ route('users_category_form') }}" class="btn btn-primary">Add New</a>
        </div>
        <div class="card-body">
            <h4 class="card-title">category Table</h4>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Category Id</th>
                            <th>Title</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{!! $category->id ?? '' !!}</td>
                            <td>{!! $category->category ?? '' !!}</td>
                            <td>{!! $category->created_at ?? '' !!}</td>
                            <td>
                                <a href="{{ route('users_category_edit', $category->id) }}" class="btn btn-outline-dark btn-sm">Edit
                                    <i class="ti-file btn-icon-append"></i>
                                </a>
                                <a href="{{ route('users_category_delete', $category->id) }}" class="btn btn-outline-danger btn-sm">Delete
                                    <i class="ti-alert btn-icon-prepend"></i>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> -->



<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Categories</h4>
                    <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                        <a href="{{ route('users_category_form') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <p class="card-description">
                        <!-- Add class <code>.table-hover</code> -->
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Category Id</th>
                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr>
                                    <td>{!! $category->id ?? '' !!}</td>
                                    <td>{!! $category->category ?? '' !!}</td>
                                    <td>{!! $category->created_at ?? '' !!}</td>
                                    <td>
                                        <a href="{{ route('users_category_edit', $category->id) }}">
                                        <i style="margin-right: 5px; color: darkblue; font-size: 17px;" class="mdi mdi-tooltip-edit"></i>
                                        </a>
                                        <a href="{{ route('users_category_delete', $category->id) }}" >
                                        <i style="margin-left: 5px; color: brown; font-size: 20px;" class="mdi mdi-delete-sweep"></i>
                                        </a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div @endsection