@extends('layouts.app')

@section('content')
    <h1>Edit Link</h1>
    <form method="POST" action="{{ route('home.update', $link->id) }}">
        @csrf
        @method('PUT')
        <label for="href">URL:</label>
        <input type="text" name="href" value="{{ $link->href }}" required>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('home.index') }}">Back to Links</a>
@endsection