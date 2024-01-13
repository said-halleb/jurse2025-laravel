@extends('layouts.app')

@section('content')
    <h1>Link Details</h1>
    <p>{{ $link->href }}</p>
    <a href="{{ route('home.index') }}">Back to Links</a>
@endsection