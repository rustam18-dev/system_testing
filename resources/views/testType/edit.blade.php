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
                            <h5 class="mb-0">Изменение типов теста</h5>
                            <small class="text-muted float-end">Редактирование типов теста</small>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/testType/{{$testType->id}}">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Тип теста (testType)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" placeholder="Название типа" name="name" value="{{old('name', $testType->name)}}"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Описание (description)</label>
                                    <div class="col-sm-10">
                                        <textarea  class="form-control" id="basic-default-name" placeholder="Название языка" name="description" >{{old('description', $testType->description)}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Язык (Lang)</label>
                                    <div class="col-sm-10">
                                        <select name="status" class="form-select">
                                            <option disabled selected value="{{$testType->statuses->id}}">{{$testType->statuses->name}}</option>
                                            @foreach($status as $statuses)
                                                <option value="{{$statuses->id}}">{{$statuses->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Изменить</button>
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
