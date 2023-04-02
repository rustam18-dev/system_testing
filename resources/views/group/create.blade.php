@extends('layout.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            @include('layout.errors')
            <div class="row">
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Создание предметов</h5>
                            <small class="text-muted float-end">Добавление предметов</small>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/subject">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Предмет (Subject)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" placeholder="Введите название предмета" name="name" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Описание (description)</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="basic-default-name" placeholder="Напишите текст" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Язык (lang)</label>
                                    <div class="col-sm-10">
                                        <select id="selectTypeOpt" name="lang_id" class="form-select color-dropdown">
                                            <option value="bg-primary" disabled  selected>Выбрать язык</option>
                                            @foreach($lang as $langs)
                                                <option value="{{$langs->id}}">{{$langs->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Статус (Status)</label>
                                    <div class="col-sm-10">
                                        <select id="selectTypeOpt" name="status" class="form-select color-dropdown">
                                            <option value="bg-primary" disabled  selected>Выбрать статус</option>
                                            @foreach($status as $statuses)
                                                <option value="{{$statuses->id}}">{{$statuses->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" id="showToastPlacement" class="btn btn-primary">Создать</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
