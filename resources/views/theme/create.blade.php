@extends('layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">

            <!-- Basic Layout & Basic with Icons -->
            <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                    <div class="card mb-4">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">Создание тематики</h5>
                            <small class="text-muted float-end">Добавление тематики</small>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/theme">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Тематика (Theme)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" placeholder="Название тематики" name="name" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Описание (description)</label>
                                    <div class="col-sm-10">
                                        <textarea type="text" class="form-control" id="basic-default-name" placeholder="Напишите текст" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Предмет (Subject)</label>
                                    <div class="col-sm-10">
                                        <select id="selectTypeOpt" name="subject_id" class="form-select color-dropdown">
                                            <option value="bg-primary" disabled  selected>Выбрать предмет</option>
                                             @foreach($subject as $subjects)
                                                <option value="{{$subjects->id}}">{{$subjects->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Создать</button>
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
