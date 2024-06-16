@extends('layouts.app')

@section('content')
<h1>{{ $post->title }}</h1>
@if ($post->image)
<img src="/uploads/{{ $post->image }}" class="img-fluid mb-3" alt="{{ $post->title }}">
@endif
<p>{{ $post->content }}</p>
<a href="{{ route('posts.index') }}" class="btn btn-primary">Back to Posts</a>
@endsection