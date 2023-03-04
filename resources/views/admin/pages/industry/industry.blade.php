@extends('admin.main')
@section('content')


<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">All Category</p>
                    <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                        <a href="{{ route('users_industry_form') }}" class="btn btn-primary">Add New</a>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="example" class="display expandable-table" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Title</th>
                                            <th>Created</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($industries as $industry)
                                        <tr>
                                            <td>{!! $industry->id ?? '' !!}</td>
                                            <td>{!! $industry->title ?? '' !!}</td>
                                            <td>{!! $industry->created_at ?? '' !!}</td>
                                            <td>
                                                <a href="{{ route('users_industry_edit', $industry->id) }}">
                                                    <i style="margin-right: 5px; color: darkblue; font-size: 17px;" class="mdi mdi-tooltip-edit"></i>
                                                </a>
                                                <a href="{{ route('users_industry_delete', $industry->id) }}">
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