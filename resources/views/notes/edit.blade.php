@extends('layout')

@section('content')
    <h1> Edit note</h1>
    
    <form method="POST" action = "/notes/{{$note->id}}">
        @csrf
        @method('PATCH')
        
        <textarea name ="body" class = "form-control">{{$note->body}}</textarea>
        <button type = "submit"> Update note </button>

    </form>
@stop