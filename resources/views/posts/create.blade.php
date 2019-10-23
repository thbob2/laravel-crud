@extends('layouts.app')

@section('content')
    {{-- the view --}}

    <div class="card card-default">
        <div class="card-header">
                {{ isset($post)? 'Edit post':'Create post'}}
        </div>
        <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item text-danger">
                            {{$error}}
                        </li>

                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">title</label>
                <input type="text" id="title" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="5" rows="3" class="form-control">

                </textarea>
            </div>


            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="5" rows="8" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="published_at">published at </label>
                <input type="text" id="publised_at" class="form-control" name="published_at">
            </div>

            <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control" name="image">
                </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success float-right">{{ isset($post)  ? 'Update Post':'Create Post'}}</button>
            </div>

        </form>
        </div>
    </div>
@endsection
