@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="mb-2 mt-2">
            <a href="{{url('book/create')}}" class="btn btn-success">Add</a>
        </div>
        <table class="table">
            <th>ID</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Delete</th>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td> <a href="{{ url('book/'.$book->id) }}">{{ $book->title }}</a> </td>
                    <td>
                        <a href="{{ url('/book/'.$book->id.'/edit') }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{action('BookController@destroy', $book->id)}}" method="post">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $books->links() }}
    </div>
@endsection