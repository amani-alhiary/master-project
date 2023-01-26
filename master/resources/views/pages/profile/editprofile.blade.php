@extends('layouts/master')
@section('content')

<form class="form-horizontal form-label-left" action="{{route('profile12.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="hidden"  name="user_id" value="{{ Auth::user()->id }}">

    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">User name</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="text" value="{{ Auth::user()->name }}" class="form-control" placeholder="book name" name="name">
        </div>
    </div>
    @error('name')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror


    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Email</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="email" class="form-control" placeholder="email" name="email" value="{{ Auth::user()->email }}">
        </div>
    </div>
    @error('email')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <div class="form-group row ">
        <label class="control-label col-md-3 col-sm-3 ">Image</label>
        <div class="col-md-9 col-sm-9 ">
            <input type="file" name="image" value="{{ Auth::user()->image }}" id="fileupload"> <label for="fileupload"> Select a file to upload</label> <br>

            
</div>
    </div>
    @error('image')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
<img src="usersimg/image/{{ Auth::user()->image }}"/>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-9 col-sm-9  offset-md-3">
            <button type="submit" name="submit" class="btn btn-success">Add</button>
        </div>
    </div>

</form>
    
@endsection
