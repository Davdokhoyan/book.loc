<form action="/book/{{$book->id}}" method="post">
    @csrf
    @method('put')

</form>
