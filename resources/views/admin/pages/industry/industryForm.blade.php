@extends('admin.main')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Industry form</h4>
                    <form class="forms-sample" action="{{ route('users_industry_store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputUsername1">Industry Title</label>
                            <input required type="text" name="title" class="form-control" id="exampleInputUsername1" placeholder="Fill for tag">
                        </div>
                    {{--<div class="form-check form-check-flat form-check-primary">
                            <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                                Remember me
                            </label>
                        </div>--}}
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a href="{{ route('users_industry_form') }}" class="btn btn-light">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection