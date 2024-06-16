<!-- resources/views/posts/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">Edit Post</div>

                <div class="card-body">
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" id="content" rows="5" class="form-control"
                                required>{{ $post->content }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="image">Current Image</label><br>
                            @if ($post->image)
                            <img src="/uploads/{{ $post->image }}" style="max-width: 200px;">
                            @else
                            <p>No image uploaded</p>
                            @endif
                            <br><br>
                            <label for="image">Update Image</label>
                            <input type="file" name="image" id="image" class="form-control-file">
                        </div>

                        <button type="submit" class="btn btn-primary">Update Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection