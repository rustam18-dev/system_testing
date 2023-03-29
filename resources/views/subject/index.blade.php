@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
        @forelse($subject as $subjects)
            <a href="/subject/{{$subjects->id}}"><h4 class="font-weight-bold">{{$subjects->name}}</h4></a>
            <p>{{$subjects->lang->name}}</p>
            <hr>
        @empty
           <p>Записей нету, для того, чтобы добавить запись нажмите  <a class="badge badge-success border" href="/subject/create">сюда</a></p>
        @endforelse

    </div>

@endsection
