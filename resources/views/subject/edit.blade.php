@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
        <form action="/subject/{{$subject->id}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="exampleInputEmail1">Название предмета</label>
                <input type="text" class="form-control" placeholder="Введите название" name="name" value="{{old('name', $subject->name)}}">
            </div>
            <select name="lang_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option  selected disabled >Выбрать предмет</option>
                @foreach($lang as $langs)

                    <option value="{{$langs->id}}">{{$langs->name}}</option>
                @endforeach
            </select>
            <div class="form-group">
                <label for="exampleInputEmail1">Статус</label>
                <input type="number" class="form-control" placeholder="Введите статус" name="status" {{old('status', $subject->status)}}>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
