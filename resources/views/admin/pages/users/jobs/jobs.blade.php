@extends('admin.main')
@section('content')

<!-- 
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
</div> -->


<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">{!! $card_title ?? 'All Jobs' !!}</p>
                    <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                        <a href="{{ route('jobs_form') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>User</th>
                                            <th>Category</th>
                                            <th>Title</th>

                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($jobs as $job)
                                        <tr>
                                            <td class="py-1">
                                                <img style="height: 50px; width: 100px;" src="{{ asset('uploads/ServiceImages') . '/' . $job->image}}" alt="image" />
                                            </td>
                                            <td>{!! $job->Users->name ?? '' !!}</td>
                                            <td>{!! $job->Categories->category ?? '' !!}</td>
                                            <td>{!! $job->title ?? '' !!}</td>

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
    </div>
</div>
@endsection