@extends('_layouts.master')

@section('title', 'Posts')

@section('content')
    <h1>Top stories</h1>

    <ul>
        @forelse ($posts->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->image }}{{$post->title}}</a>
                <small>{{ $post->prettyDate() }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
