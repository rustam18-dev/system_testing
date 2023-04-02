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
                            <th>Предмет</th>
                            <th>Описание</th>
                            <th>Язык</th>
                            <th>Статус</th>
                            <th>Параметр</th>
                        </tr>
                        </thead>
                             @foreach($subject as $subjects)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$subjects->id}}</th>
                                        <td>{{$subjects->name}}</td>
                                        <td>{{$subjects->description}}</td>
                                        <td>{{$subjects->lang->name}}</td>
                                        <td>{{$subjects->statuses->name}}</td>
                                        <td><a href="/subject/{{$subjects->id}}" class="btn btn-primary">Детальнее</a></td>
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
                href="/subject/create"
                target="_self"
                class="btn btn-danger btn-buy-now"
        >Добавить предмет</a
        >
    </div>

@endsection
