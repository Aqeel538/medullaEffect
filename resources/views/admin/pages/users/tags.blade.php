@extends('admin.main')
@section('content')

<div class="col-lg-10 ml-5 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tag's Table</h4>
            <!-- <p class="card-description">
                Add class <code>.table</code>
            </p> -->
            <div class="table-responsive">
                <table class="table">
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
                                <a href="{{ route('users_tag_edit', $tag->id) }}" class="btn btn-outline-dark btn-sm">Edit
                                    <i class="ti-file btn-icon-append"></i>
                                </a>
                                <a href="{{ route('users_tag_delete', $tag->id) }}" class="btn btn-outline-danger btn-sm">Delete
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
</div>
@endsection