@extends('welcome')
@section('title','Create a book')
@section('content')
    <form action="/book" method="post">
        @csrf
        <p class="make">Make Your Own Book </p>
        <p style="font-family: 'Sitka Subheading';font-size: 25px">Please write title</p>
        <input type="text" name="title"style="height: 32px;width: 150px;background-color: darkgray;border: 1px solid black; border-radius: 13px" >
        <p style="font-family: 'Sitka Subheading';font-size: 25px">Choose File</p>
        <input type="file"name="poster"style="background-color: lightsteelblue;border-radius: 10px;width: 185px">
        <p style="font-family: 'Sitka Subheading';font-size: 25px">Write year</p>
        <input type="text"name="publish_year"style="height: 32px;width: 150px;background-color: darkgray;border: 1px solid black; border-radius: 13px">
        <p style="font-family: 'Sitka Subheading';font-size: 25px">Write anything about book</p>
        <textarea name="description"style="background-color: darkgrey;border: 1px solid black"></textarea>
        <p style="font-family: 'Sitka Subheading';font-size: 25px">The types of book</p>
        @forelse($types as $type)
            <label for="">{{$type->name}}</label>
            <input type="checkbox"name="types[]" value="{{$type->id}}" style="background-color: darkgray;border: 1px solid black; border-radius: 13px">
        @empty
            <p>No data</p>
        @endforelse
        <input type="submit" value="Create" style="height: 32px;width: 150px;background-color: darkgray;border: 1px solid black; border-radius: 13px">
    </form>
@endsection
