@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
        <form action="/lang/{{$lang->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInputEmail1">Язык</label>
                <input type="text" class="form-control" placeholder="Введите язык" name="name" value="{{old('name', $lang->name)}}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
