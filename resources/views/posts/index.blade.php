@extends('layouts.app')

@section('content')

        <div class="d-flex justify-content-end mb-2 ">
                <a href=" {{ route('posts.create') }}" class="btn btn-success ">Add Post</a>
        </div>
        <div class="card card-default">
        <div class="card-header">
            Posts
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th></th>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <img src="{{asset( $post->image)}}" width="60px" height="60px" alt="">

                                </td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->description}}</td>
                                <td class="float-right">
                                    <a href="" class="btn btn-info btn-sm ">more</a>
                                    <a href="" class="btn btn-danger btn-sm ">Trash</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
@endsection
