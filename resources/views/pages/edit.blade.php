@extends('layouts.default')
@section('content')
    <form method="post" action="{{route('update',['id'=>$book->id])}})}}">
        @csrf
        @method ('PATCH')

    <div class="field">
        <label class="label" for="title">Title</label>

        <div class="control">
           <input type="text" class="input" name="title" placeholder="Title" value="{{$book->title}}">   </input>
        </div>
        </div>

        <div class="field">
            <label class="label" for ="author">Author</label>
            <div class="control">
                <input type="text" name="author" value="{{$book->author}}"></div>

        </div>
        </div>
        <div class="field">
            <label class="label" for ="isbn">ISBN</label>
            <div class="control">
                <input type="text" name="isbn" value="{{$book->isbn}}"></div>

        </div>
        </div>
<div class="field" >
    <div class="control">
        <button href="#"type="submit" class="btn btn-primary" >Save</button>
    </div>

        </div>

    </form>
@stop
