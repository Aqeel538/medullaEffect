@extends('admin.main')
@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">All Freelancers</p>
                        {{-- <div class="row" style="justify-content: right; margin-top: -45px; margin-right: 10px;">
                            <a href="{{ route('jobs_form') }}" class="btn btn-primary">Add New</a>
                        </div> --}}
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table id="example" class="display expandable-table" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                   
                                                    <td class="py-1">
                                                        <img src="{!! $user->image ?? '' !!}" height="50" width="50"
                                                            class="img-fluid img-thumbnail" alt="">
                                                    </td>
                                                    <td>{!! $user->name ?? '' !!}</td>
                                                    <td>{!! $user->email ?? '' !!}</td>
                                                    <td>
                                                        @if ($user->status == 1)
                                                        <label class="badge badge-success">Active</label>
                                                        @else
                                                        <label class="badge badge-danger">Inactive</label>
                                                        @endif
                                                    </td>


                                                    <td>
                                                        <a href="{{ route('admin.freelancer.detail', $user->id) }}"><i
                                                            class="ti-eye"></i></a>
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
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
@endsection
<!-- main-panel ends -->