@extends('layout')

@section('content')
    <h1>{{$card->title}}</h1>
    <ul>
        @foreach ($card -> notes as $note)
            <li>{{$note -> body}}</li>
        @endforeach
    </ul>
    <h2>Add a new note</h2>
    <form method="POST" action = "/cards/{{$card->id}}/notes">
        @csrf
        <textarea name ="body"></textarea>
        <button type = "submit"> Add note </button>

    </form>
@stop