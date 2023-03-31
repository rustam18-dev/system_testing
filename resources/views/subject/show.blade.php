@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
                <h4 class="font-weight-bold">{{$subject->name}}</h4>
            <hr>
    </div>
    <form action="/subject/{{$subject->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Удалить" class="btn btn-danger">
        <a href="/subject/{{$subject->id}}/edit" class="btn btn-success ml-2">Изменить</a>
    </form>

@endsection
