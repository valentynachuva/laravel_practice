@extends('layouts.default')
@section('content')
    <form method="post" action="{{route('update',['id'=>$book->id])}})}}">
        @csrf
        @method ('PATCH')

        @include('pages.message')
        <div class="form-group">

            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter title" value="{{$book->title}}">
            <small id="titleHelp" class="form-text text-muted">Type some title.</small>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" aria-describedby="authorHelp" placeholder="Enter author name" value="{{$book->author}}">
            <small id="authorHelp" class="form-text text-muted">Type some author name.</small>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" class="form-control" id="isbn" aria-describedby="isbnHelp" placeholder="Enter ISBN" value="{{$book->isbn}}">
            <small id="isbnHelp" class="form-text text-muted">Type some ISBN code.</small>
        </div>

    <button type="submit" class="btn btn-primary" >Save</button>

    </form>
@stop
    </body>
