@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
                <h4 class="font-weight-bold">{{$theme->name}}</h4>
            <hr>
    </div>
    <form action="/theme/{{$theme->id}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Удалить" class="btn btn-danger">
    </form>
@endsection
