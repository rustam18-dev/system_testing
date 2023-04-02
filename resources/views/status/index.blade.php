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
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($status as $statuses)
                            <tbody>
                            <tr>
                                <th scope="row">{{$statuses->id}}</th>
                                <td>{{$statuses->name}}</td>
                                <td>{{$statuses->description}}</td>
                                <td><a href="/lang/{{$statuses->id}}" class="btn btn-primary">Детальнее</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="buy-now">
        <a
                href="/lang/create"
                target="_self"
                class="btn btn-danger btn-buy-now"
        >Добавить язык</a
        >
    </div>
	update for rustam
@endsection
