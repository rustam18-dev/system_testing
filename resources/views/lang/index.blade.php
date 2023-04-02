@extends('layout.master')

@section('content')
    @role('web-developer')
    Project Manager Panel
    @endrole

    @role('teacher')
    Web Developer Panel
    @endrole
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
                            <th>Action</th>
                        </tr>
                        </thead>
                        @foreach($lang as $langs)
                            <tbody>
                            <tr>
                                <th scope="row">{{$langs->id}}</th>
                                <td>{{$langs->name}}</td>
                                <td><a href="/lang/{{$langs->id}}" class="btn btn-primary">Детальнее</a></td>
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

@endsection
