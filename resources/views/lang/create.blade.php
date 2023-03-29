@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
        <form action="/lang" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название предмета</label>
                <input type="text" class="form-control" placeholder="Введите название" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
