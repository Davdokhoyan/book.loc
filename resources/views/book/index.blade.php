@extends('welcome')
@section('title', 'Books')
@section('content')
    <a href="/book_create">Add a book</a>
    <table>
        <thead>
        <tr>
            <td>Poster</td>
            <td>Title</td>
            <td>Description</td>
            <td>Publish year</td>
        </tr>
        </thead>
        <tbody>
        @forelse($books as $book)
            <tr>
                <td>
                    <img src="{{asset('images')}}/{{$book->poster}}" alt="">
                </td>
                <td>{{$book->title}}</td>
                <td>{{$book->description}}</td>
                <td>{{$book->publish_year}}</td>
            </tr>
        @empty
            <tr>
                <td>No data</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection