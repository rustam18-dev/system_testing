@extends('layout.master')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            @include('layout.message')
            <div class="card">
                <h5 class="card-header">Responsive Table</h5>
                <div class="table-responsive text-nowrap">
                    <table class="table">
                        <thead>
                        <tr class="text-nowrap">
                            <th>#</th>
                            <th>Тип теста</th>
                            <th>Описание</th>
                            <th>Статус</th>
                            <th>Параметр</th>
                        </tr>
                        </thead>
                             @foreach($testType as $testTypes)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$testTypes->id}}</th>
                                        <td>{{$testTypes->name}}</td>
                                        <td>{{$testTypes->description}}</td>
                                        <td>{{$testTypes->statuses->name}}</td>
                                        <td><a href="/testType/{{$testTypes->id}}" class="btn btn-primary">Детальнее</a></td>
                                    </tr>
                                </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="buy-now">
        <a
                href="/testType/create"
                target="_self"
                class="btn btn-danger btn-buy-now"
        >Добавить статус</a
        >
    </div>
@endsection
