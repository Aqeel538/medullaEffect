@extends('admin.main')
@section('content')

<!-- <div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Tags</h4>
                    <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                        <a href="{{ route('users_tag_form') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <p class="card-description">
                    </p>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Tag Id</th>
                                    <th>Tags</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tags as $tag)
                                <tr>
                                    <td>{!! $tag->id ?? '' !!}</td>
                                    <td>{{$tag->tag}}</td>
                                    <td>{{$tag->created_at}}</td>
                                    <td>
                                        <a href="{{ route('users_tag_edit', $tag->id) }}">
                                            <i style="margin-right: 5px; color: darkblue; font-size: 17px;" class="mdi mdi-tooltip-edit"></i>
                                        </a>
                                        <a href="{{ route('users_tag_delete', $tag->id) }}">
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
                    <p class="card-title">All Category</p>
                    <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                        <a href="{{ route('users_tag_form') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Tag Id</th>
                                            <th>Tags</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tags as $tag)
                                        <tr>
                                            <td>{!! $tag->id ?? '' !!}</td>
                                            <td>{{$tag->tag}}</td>
                                            <td>{{$tag->created_at}}</td>
                                            <td>
                                                <a href="{{ route('users_tag_edit', $tag->id) }}">
                                                    <i style="margin-right: 5px; color: darkblue; font-size: 17px;" class="mdi mdi-tooltip-edit"></i>
                                                </a>
                                                <a href="{{ route('users_tag_delete', $tag->id) }}">
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