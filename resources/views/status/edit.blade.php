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
                            <h5 class="mb-0">Изменение статусов</h5>
                            <small class="text-muted float-end">Редактирование статусов</small>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/status/{{$status->id}}">
                                @csrf
                                @method('PATCH')
                                <div class="row mb-3">
                                    <label class="col-sm-2 col-form-label" for="basic-default-name">Статус (Status)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="basic-default-name" placeholder="Название языка" name="name" value="{{old('name', $status->name)}}"/>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="basic-default-message">Описание</label>
                                    <textarea id="basic-default-message" class="form-control" placeholder="Напишите текст" style="height: 17px;" name="description">{{old('description', $status->description)}}</textarea>
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
