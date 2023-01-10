@extends('admin.main')
@section('content')

<div class="col-md-8 grid-margin stretch-card ml-5">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">User's Tag form</h4>
            <form class="forms-sample" action="{{ route('users_tag_store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputUsername1">User Tags</label>
                    <input required type="text" name="tag" class="form-control" id="exampleInputUsername1" placeholder="Fill for tag">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection