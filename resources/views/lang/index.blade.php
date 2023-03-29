@extends('layout.master')

@section('content')
    <div class="mt-2 ml-2">
        @forelse($lang as $langs)
            <a href="/lang/{{$langs->id}}"><h4>{{$langs->name}}</h4></a>
            <hr>
        @empty
            <p> Нету записей..</p>
        @endforelse
    </div>
@endsection