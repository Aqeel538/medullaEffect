@extends('admin.main')
@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Detail</h4>
                <p class="card-description">
                    Add class <code>.table-striped</code>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    image
                                </th>
                                <th>
                                    name
                                </th>
                                <th>
                                    email
                                </th>
                                <th>
                                    role
                                </th>
                                <th>
                                    phone
                                </th>
                                <th>
                                    address
                                </th>
                                <th>
                                    status
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-1">
                                    <?php $image = isset($obj->image) && !empty($obj->image) ? $obj->image : ''; ?>

                                    <img src="<?= $image ?>" class="img-fluid" alt="">
                                </td>
                                <td>
                                    <?= isset($obj->name) && !empty($obj->name) ? $obj->name : '' ?>
                                </td>
                                {{-- <td>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                                            aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td> --}}
                                <td>
                                    <?= isset($obj->email) && !empty($obj->email) ? $obj->email : '' ?>
                                </td>
                                <td>
                                    <?= isset($obj->role) && !empty($obj->role) ? $obj->role : '' ?>
                                </td>
                                <td>
                                    <?= isset($obj->phone) && !empty($obj->phone) ? $obj->phone : '' ?>
                                </td>
                                <td>
                                    <?= isset($obj->address) && !empty($obj->address) ? $obj->address : '' ?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-danger btn-sm dropdown-toggle" type="button"
                                            id="dropdownMenuSizeButton3" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Dropdown
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton3">
                                            <a class="dropdown-item" href="/admin/user/status/1/{{ $obj->id }}"
                                                class="btn btn-danger">Active
                                            </a>

                                            <a class="dropdown-item" href="/admin/user/status/0/{{ $obj->id }}"
                                                class="btn btn-danger">Inactive</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- main-panel ends -->
