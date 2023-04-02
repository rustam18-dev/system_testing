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
                            <th>Язык</th>
                            <th>Описание</th>
                            <th>Предмет</th>
                            <th>Параметр</th>
                        </tr>
                        </thead>
                             @foreach($theme as $themes)
                                <tbody>
                                    <tr>
                                        <th scope="row">{{$themes->id}}</th>
                                        <td>{{$themes->name}}</td>
                                        <td>{{$themes->description}}</td>
                                        <td>{{$themes->subject->name}}</td>
                                        <td><a href="/theme/{{$themes->id}}" class="btn btn-primary">Детальнее</a></td>
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
                href="/theme/create"
                target="_self"
                class="btn btn-danger btn-buy-now"
        >Добавить статус</a
        >
    </div>
@endsection
