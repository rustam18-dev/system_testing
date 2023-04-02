@extends('layout.master')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

            <!-- Basic Bootstrap Table -->
            <div class="card">
                <h5 class="card-header">Table Basic</h5>
                <div class="">
                    <table class="table">
                        <thead>

                        <tr>
                            <th>№</th>
                            <th>Тематика</th>
                            <th>Описание</th>
                            <th>Предмета</th>
                            <th>Параметр</th>
                        </tr>
                        </thead>
                            <tbody class="table-border-bottom-0">
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$theme->id}}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$theme->name}}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$theme->description}}</strong></td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$theme->subject->name}}</strong></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="/theme/{{$theme->id}}/edit"
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                            >
                                            <a class="dropdown-item" href="/theme/{{$theme->id}}"
                                               onclick="event.preventDefault();
                                               document.getElementById('delete-form').submit()"
                                            ><i class="bx bx-trash me-1"></i> Delete</a
                                            >
                                            <form method="POST" action="/theme/{{$theme->id}}" id="delete-form" class="d-none">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
