@extends('layout.master')

@section('content')
    <div class="ml-2 mt-1">
        @forelse($theme as $themes)
            <a href="/theme/{{$themes->id}}"><h4 class="font-weight-bold">{{$themes->name}}</h4></a>
                 <p>{{$themes->subject->name}}</p>
            <hr>
        @empty
           <p>Записей нету, для того, чтобы добавить запись нажмите  <a class="badge badge-success border" href="/theme/create">сюда</a></p>
        @endforelse

    </div>

@endsection
