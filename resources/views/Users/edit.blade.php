@extends('layouts.app')
@section('content')

<div class="card card-default">
    <div class="card-header">
        User info
    </div>
    <div class="card-body">
        @include('partials.errors')
    <form action="{{route('users.update-profile')}}" method="POST">
        @csrf
            @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" id="name" class="form-control" name="name" value="{{$user->name}}">
        </div>
        <div class="form-group">
            <label for="bio">Bio</label>
        <textarea type="text" id="about" class="form-control" name="about" >{{$user->about}}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success float-right" type="submit">save</button>
        </div>
    </form>
    </div>
</div>

@endsection
