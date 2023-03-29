@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
        <form action="/theme/{{$theme->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInputEmail1">Название предмета</label>
                <input type="text" class="form-control" placeholder="Введите название" name="name" value="{{old('name', $theme->name)}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Напишите предмет</label>
                <select name="subject_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option  disabled >Выбрать предмет</option>
                    @foreach($subject as $subjects)
                        <option value="{{$subjects->id}}">{{$subjects->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
        </form>
    </div>
@endsection
