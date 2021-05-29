@extends('layouts.app')

@section('content')
    @php
    $array = ['banane', 'pomme', 'poire', 'cerise'];
    @endphp

    <ul>
        @foreach ($array as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>
@stop
