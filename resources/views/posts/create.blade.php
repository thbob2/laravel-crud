@extends('layouts.app')

@section('content')
    {{-- the view --}}

    <div class="card card-default">
        <div class="card-header">
                {{ isset($post)? 'Edit post':'Create post'}}
        </div>
        <div class="card-body">
            @include('partials.errors')
        <form action="{{isset($post)  ? route('posts.update',$post) : route('posts.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @if (isset($post))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="title">title</label>
            <input type="text" id="title" class="form-control" name="title" value="{{isset($post) ? $post->title: ''}}">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" cols="5" rows="3" class="form-control">{{isset($post) ? $post->description: ''}}</textarea>
            </div>


            <div class="form-group">
                <label for="content">Content</label>
                <input name="content" id="content" cols="5" rows="8" class="form-control" type="hidden" value="{{isset($post) ? $post->content: ''}}"></input>
                <trix-editor input="content" cols="5" rows="8"> </trix-editor>
            </div>

            <div class="form-group">
                <label for="published_at">published at </label>
                <input type="text" id="published_at" class="form-control" name="published_at" value="{{isset($post) ? $post->published_at: ''}}">
            </div>

            @if (isset($post))

            <form-group>
                <img src="{{url('storage/'.$post->image)}}"style="width: 100%" alt="">
            </form-group>

            @endif

            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}"
                            @if (isset($post))
                                @if ($category->id == $post->category_id)
                                    selected
                                @endif
                            @endif
                            >{{$category->name}}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">

                @if ($tags->count()>0)
                <label for="tags">Tags</label>
                    <select name="tags" id="tags" class="form-control" multiple>
                        @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                    </select>
                @endif
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success float-right">{{ isset($post)  ? 'Update Post':'Create Post'}}</button>
            </div>

        </form>

    </div>

</div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        flatpickr('#published_at',{enableTime: true})
    </script>
@endsection
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

@endsection
