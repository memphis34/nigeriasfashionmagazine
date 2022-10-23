@extends('_layouts.master')

@section('title', 'Runway')

@section('content')
    <h1>Top stories</h1>

    <ul>
        @forelse ($runway->sortBy('title') as $runway)
            <li>
                <a href="{{ $runway->getPath() }}">{{ $runway->image }}{{$runway->title}}</a>
                <small>{{ $runway->prettyDate() }}</small>
            </li>
        @empty
            <p>No posts to show.</p>
        @endforelse
    </ul>
@endsection
