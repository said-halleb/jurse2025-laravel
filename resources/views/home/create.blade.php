@extends('layouts.app')

@section('content')
    <h1>Create Link</h1>
    <form method="POST" action="{{ route('home.store') }}">
        @csrf
        <label for="href">URL:</label>
        <input type="text" name="href" required>
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('home.index') }}">Back to Links</a>
@endsection