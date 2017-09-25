@extends('layout')
@section('content')
    <p>
        <a href="{{route('notes.create')}}">Create</a>

    </p>
<hr>
    <ul>
        @foreach($notes as $note)
            <li>{{$note->title}}</li>
            <hr>
        @endforeach
    </ul>

@stop