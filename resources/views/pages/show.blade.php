@extends('layouts.default')
@section('content')
    <div class="card">
        @csrf
        <div class="card-header">
            Book details
        </div>
        <form action="{{route('show_book', ['id'=>$book->id])}}", method="POST">
            <div class="card-body">
                <h5 class="card-title">Book title</h5>
                <p class="card-text">Book author</p>
                <p class="card-text">Book content</p>
               </div>
        </form>

        <form method="GET" action="{{route('edit')}}">
            @method ('GET')
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class=" btn btn-primary" style="margin-bottom: 10px">Edit</button>
                </div>
            </div>

        </form>
        <form method="post" action="{{route('destroy',['id'=>$book->id])}}">
            @method('DELETE')
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" class=" btn btn-primary" style="margin-bottom: 10px">Delete</button>
                </div>
            </div>

        </form>

    </div>
@stop
