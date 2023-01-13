@extends('admin.main')
@section('content')

<!-- <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Services</h4>
                    <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                        <a href="{{ route('service_form') }}" class="btn btn-primary">Add New</a>
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
                                    <th>image</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($services as $service)
                                <tr>
                                    <td>{!! $service->Users->name ?? '' !!}</td>
                                    <td>{!! $service->Categories->category ?? '' !!}</td>
                                    <td>{!! $service->title ?? '' !!}</td>
                                    <td class="py-1">
                                        <img src="{{$service->image}}" alt="image" />
                                    </td>
                                    <td>{!! $service->created_at ?? '' !!}</td>
                                    <td>
                                        <a href="{{ route('service_edit', $service->id) }}">
                                            <i style="margin-right: 5px; color: darkblue; font-size: 17px;" class="mdi mdi-tooltip-edit"></i>
                                        </a>
                                        <a href="{{ route('service_delete', $service->id) }}">
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
                    <p class="card-title">All Services</p>
                    <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                        <a href="{{ route('service_form') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>

                                            <th>image</th>
                                            <th>User</th>
                                            <th>Category</th>
                                            <th>Title</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $service)
                                        <tr>
                                            <td class="py-1">
                                                <img style="height: 50px; width: 100px;" src="{{$service->image}}" alt="image" />
                                            </td>
                                            <td>{!! $service->Users->name ?? '' !!}</td>
                                            <td>{!! $service->Categories->category ?? '' !!}</td>
                                            <td>{!! $service->title ?? '' !!}</td>

                                            <td>{!! $service->created_at ?? '' !!}</td>
                                            <td>
                                                <a href="{{ route('service_edit', $service->id) }}">
                                                    <i style="margin-right: 5px; color: darkblue; font-size: 17px;" class="mdi mdi-tooltip-edit"></i>
                                                </a>
                                                <a href="{{ route('service_delete', $service->id) }}">
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