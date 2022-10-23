@extends('_layouts.master')

@section('title', 'Runway')

@section('content')
    <h1>Top stories</h1>

    <ul>
        
            <li>
                <a href="{{ $runway->getPath() }}">{{ $runway->image }}{{$runway->title}}</a>
                <small>{{ $runway->prettyDate() }}</small>
            </li>
        
            <p>No posts to show.</p>
        
    </ul>
@endsection
