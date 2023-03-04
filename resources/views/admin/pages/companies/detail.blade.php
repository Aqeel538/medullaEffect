@extends('admin.main')
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" style="border-radius: 15px;">
                    <div class="card-body p-4">
                        <div class="d-flex text-black">
                            <div class="row w-100">
                                <div class="col-lg-3 col-md-3 col-sm-12">

                                    <div class="flex-shrink-0 profileDisplay">
                                        <?php $image = isset($obj->image) && !empty($obj->image) ? $obj->image : ''; ?>

                                        <img src="{!! $obj->image ?? '' !!}" alt="please upload image"
                                            class="img-fluid profile"
                                            style="width: 180px; border-radius: 10px; margin-inline: 10px;">
                                    </div>

                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <div class="flex-grow-1 ms-3 ">
                                        <h5 class="mb-1 profileText pt-1">
                                            <?= isset($obj->name) && !empty($obj->name) ? $obj->name : '' ?>
                                        </h5>
                                        <p class="mb-2 pb-1 profileText" style="color: #2b2a2a;">{!! $obj->email ?? '' !!}</p>
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Address
                                                        </th>
                                                        <th>
                                                            Role
                                                        </th>
                                                        <th>
                                                            Phone
                                                        </th>
                                                        <th>
                                                            Status
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <?= isset($obj->address) && !empty($obj->address) ? $obj->address : '' ?>
                                                        </td>
                                                        <td>
                                                            <?= isset($obj->role) && !empty($obj->role) ? $obj->role : '' ?>
                                                        </td>
                                                        <td>
                                                            <?= isset($obj->phone) && !empty($obj->phone) ? $obj->phone : '' ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                @if ($obj->status == 1)
                                                                    <button class="btn btn-success btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuSizeButton3"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Active
                                                                    </button>
                                                                @else
                                                                    <button class="btn btn-danger btn-sm dropdown-toggle"
                                                                        type="button" id="dropdownMenuSizeButton3"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        Inactive
                                                                    </button>
                                                                @endif
                                                                <div class="dropdown-menu"
                                                                    aria-labelledby="dropdownMenuSizeButton3">
                                                                    <a class="dropdown-item"
                                                                        href="/admin/user/status/1/{{ $obj->id }}"
                                                                        class="btn btn-danger">Active
                                                                    </a>

                                                                    <a class="dropdown-item"
                                                                        href="/admin/user/status/0/{{ $obj->id }}"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- main-panel ends -->
