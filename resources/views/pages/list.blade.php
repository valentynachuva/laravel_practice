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
        <tr>
            <th scope="row"><a href="#">1</a></th>
            <td>PHP for dummies</td>
            <td>Dummy</td>
            <td>NB-123-321</td>
        </tr>
        <tr>
            <th scope="row"><a href="#">2</a></th>
            <td>Super book</td>
            <td>Superman</td>
            <td>SB-321-543</td>
        </tr>
        <tr>
            <th scope="row"><a href="#">3</a></th>
            <td>MySQL for students</td>
            <td>B. Teacher</td>
            <td>MS-541-631</td>
        </tr>
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
    {{--{{ $users->links('vendor.pagination.bootstrap-4') }}--}}

@stop
