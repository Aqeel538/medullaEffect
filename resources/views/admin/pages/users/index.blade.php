@extends('admin.main')
@section('content')
    <!-- partial -->

    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Users</h4>
                        <p class="card-description">
                            Add class <code>.table-hover</code>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>
                                            Profile
                                        </th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>Sale</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($userLists as $userList)
                                        <tr>
                                            <td class="py-1">
                                                <img src="{{ asset('user') }}/Assets/Images/profile-imges/user-profile-default-image.png" height="50" width="50"
                                                    class="img-fluid img-thumbnail" alt="">
                                            </td>
                                            <td>{{ $userList->name }}</td>
                                            <td>{{ $userList->email }}</td>
                                            <td class="text-danger">{{ $userList->status }}<i class="ti-arrow-down"></i>
                                            </td>
                                            @if ($userList->status == 1)
                                                <td><label class="badge badge-success">{{ $userList->status }}</label></td>
                                            @else
                                                <td><label class="badge badge-danger">{{ $userList->status }}</label></td>
                                            @endif

                                            <td>
                                                <a href="{{ route('users_detail', $userList->id) }}"><i
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
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->

    <!-- partial -->
@endsection
<!-- main-panel ends -->
