

@extends('layouts.app')

@section('content')
    <h1>Links</h1>
    <ul>
        @foreach($links as $link)
            <li><a href="{{ route('home.show', $link->id) }}">{{ $link->href }}</a></li>
        @endforeach
    </ul>
@endsection