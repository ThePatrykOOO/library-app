@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit book</h2>
    <form action="{{ action('BookController@update', $id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
        </div>
        @if(count($errors) > 0)
            <div class="alert-danger alert">
                @foreach ($errors->all() as $value):
                <p>{{$value}}</p>
                @endforeach
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection