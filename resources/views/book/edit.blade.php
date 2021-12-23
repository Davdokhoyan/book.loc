@extends('welcome')
@section('title','Edit a book')
@section('content')
    <form action="/book/{{$book->id}}" method="post">
        @csrf
        @method('put')

    </form>
