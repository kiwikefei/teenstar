@extends('layout')
@section('content')
    <hr>
    <form action="{{route('notes.store')}}" method="POST">
        {{csrf_field()}}
        <input type="text" name="title">
        <button>Subimt</button>
    </form>
@stop
