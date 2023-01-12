@extends('admin.main')
@section('content')




<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Service form</h4>
            <form class="forms-sample" action="{{ route('service_editstore') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" value="{{  $service->id }}" name="id">
                    <label for="exampleInputUsername1">Select User</label>
                    <select type="text" name="user_id" class="form-control" id="exampleInputUsername1" placeholder="Fill for tag">
                        <option value="">Users</option>
                        @foreach($users as $user)
                        <option value="{{$user->id}}">{!! $user->name ?? '' !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Select Category</label>
                    <select type="text" name="category_id" class="form-control" id="exampleInputUsername1" placeholder="Fill for tag">
                        <option value="">Categories</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{!! $category->category ?? '' !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Service Title</label>
                    <input value="{{$service->title}}" required type="text" name="title" class="form-control" id="exampleInputUsername1" placeholder="Fill for tag">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Service Discription</label>
                    <input value="{{$service->discription}}" required type="text" name="discription" class="form-control" id="exampleInputUsername1" placeholder="Fill for tag">
                </div>
                <div class="form-group">
                    <label for="exampleInputUsername1">Service Image</label>
                    <img src="{{$service->image}}" alt="image" style='height: 200px; width: auto;' />
                    <input type="file" name="image" class="form-control" id="exampleInputUsername1" placeholder="Fill for tag">
                </div>
                {{--<div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input">
                        Remember me
                    </label>
                </div>--}}
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <a href="" class="btn btn-light">Cancel</a>
            </form>
        </div>
    </div>
        </div>
    </div>
</div>
@endsection