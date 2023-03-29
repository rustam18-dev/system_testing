@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
        <form action="/subject" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название предмета</label>
                <input type="text" class="form-control" placeholder="Введите название" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Добавьте Описание</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Напишите язык</label>
                <select name="lang_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option  selected>Выбрать язык</option>
                    @foreach($lang as $langs)
                         <option value="{{$langs->id}}">{{$langs->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Статус</label>
                <input type="number" class="form-control" placeholder="Введите статус" name="status">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
