@extends('_layouts.master')

@section('title', 'Runway')

@section('content')
    <h1>Top stories</h1>

    <ul>
        @forelse ($runway->sortBy('title') as $Runway)
            <li>
                <a href="{{ $Runway->getPath() }}">{{ $Runway->image }}{{$Runway->title}}</a>
                <small>{{ $Runway->prettyDate() }}</small>
            </li>
        
            <p>No posts to show.</p>
        
    </ul>
@endsection
