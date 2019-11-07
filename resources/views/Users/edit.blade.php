@extends('layouts.app')
@section('content')

<div class="card card-default">
    <div class="card-header">
        User info
    </div>
    <div class="card-body">
    <form action="" method="">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" value="">
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
        <input type="text" id="bio" class="form-control" name="bio" value="">
        </div>
        <div class="form-group">
            <button class="btn btn-success float-right">save</button>
        </div>
    </form>
    </div>
</div>

@endsection
