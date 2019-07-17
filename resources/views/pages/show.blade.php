@extends('layouts.default')
@section('content')
    <div class="card">
        @csrf
        <div class="card-header">
            Book details
        </div>
        <form >
            <div class="card-body">
                <h5 class="card-title">{{$book->title}}</h5>
                <p class="card-text">{{$book->author}}</p>
                <p class="card-text">{{$book->isbn}}</p>
               </div>
        </form>

        <form action="{{route('edit',['id'=>$book->id])}}">
            @csrf

            <div class="field">
                <div class="control">
                    <button type="submit" action="{{route('update',['id'=>$book->id])}}" class=" btn btn-primary" style="margin-bottom: 10px" >Edit</button>
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
