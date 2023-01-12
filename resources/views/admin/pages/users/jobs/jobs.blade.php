@extends('admin.main')
@section('content')

<!-- <div class="col-lg-11 ml-5 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row" style="justify-content: right;">
                <a href="{{ route('jobs_form') }}" class="btn btn-primary">Add New</a>
            </div>
            <h4 class="card-title">Jobs Table</h4>


            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jobs as $job)
                        <tr>
                            <td>{!! $job->Users->name ?? '' !!}</td>
                            <td>{!! $job->Categories->category ?? '' !!}</td>
                            <td>{!! $job->title ?? '' !!}</td>
                            <td class="py-1">
                                <img src="{{ asset('uploads/ServiceImages') . '/' . $job->image}}" alt="image" />
                            </td>
                            <td>{!! $job->created_at ?? '' !!}</td>
                            <td>
                                <a href="{{ route('jobs_edit', $job->id) }}" class="btn btn-outline-dark btn-sm">Edit
                                    <i class="ti-file btn-icon-append"></i>
                                </a>
                                <a href="{{ route('job_delete', $job->id) }}" class="btn btn-outline-danger btn-sm">Delete
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
                    <h4 class="card-title">All Jobs</h4>
                    <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                        <a href="{{ route('jobs_form') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <p class="card-description">
                        <!-- Add class <code>.table-hover</code> -->
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Category</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobs as $job)
                                <tr>
                                    <td>{!! $job->Users->name ?? '' !!}</td>
                                    <td>{!! $job->Categories->category ?? '' !!}</td>
                                    <td>{!! $job->title ?? '' !!}</td>
                                    <td class="py-1">
                                        <img src="{{ asset('uploads/ServiceImages') . '/' . $job->image}}" alt="image" />
                                    </td>
                                    <td>{!! $job->created_at ?? '' !!}</td>
                                    <td>
                                        <a href="{{ route('jobs_edit', $job->id) }}">
                                        <i style="margin-right: 5px; color: darkblue; font-size: 17px;" class="mdi mdi-tooltip-edit"></i>
                                        </a>
                                        <a href="{{ route('job_delete', $job->id) }}">
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
</div>
@endsection