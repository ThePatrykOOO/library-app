@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Title: {{ $book->title }}</h1>
        <h2>ID: {{ $book->id }}</h2>
    </div>
@endsection