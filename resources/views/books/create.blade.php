@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{url('book')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
        </div>
        @if(count($errors) > 0)
            <div class="alert-danger alert">
                @foreach ($errors->all() as $value):
                <p>{{$value}}</p>
                @endforeach
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection