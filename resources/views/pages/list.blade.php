@extends('layouts.default')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">ISBN</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @include('pages.message')
        @foreach($books as $book)
            <tr>
                <th scope="row">{{ $book->id }}</th>
                <td><a href="{{route('show_book', ['id'=>$book->id]) }}">{{ $book->title }}</a></td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->isbn }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
     </nav>
    {{-- {{ $books->links('vendor.pagination.bootstrap-4') }}--}}

@stop
