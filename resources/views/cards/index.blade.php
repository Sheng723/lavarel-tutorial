@extends('layout')

@section('content')
    <h1>Cards </h1>

    @foreach($cards as $card)
        <div>
        <a href = "{{$card -> path()}}">{{$card -> title}}</a>
             
        </div>
    @endforeach


@stop