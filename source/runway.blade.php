@extends('_layouts.master')

@section('title', 'Runway')

@section('content')
    <h1>Top stories</h1>

    <ul>
        @forelse ($runway->sortBy('title') as $post)
            <li>
                <a href="{{ $post->getPath() }}">{{ $post->image }}{{$post->title}}</a>
                <small>{{ $poat->prettyDate() }}</small>
            </li>
        
            <p>No posts to show.</p>
        
    </ul>
@endsection
