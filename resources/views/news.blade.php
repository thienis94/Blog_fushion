<!DOCTYPE html>
<html>
<head>
    <title>News - Fusion Blog</title>
</head>
<body>
    <h1>News</h1>
    @foreach($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->description }}</p>
            <p>Category: {{ $post->category->name }}</p>
            <p>Created by: {{ $post->created_by }}</p>
        </div>
    @endforeach
    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('about') }}">About Us</a>
    <a href="{{ route('contact') }}">Contact Us</a>
</body>
</html>