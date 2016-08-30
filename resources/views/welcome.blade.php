@extends('layout')
@section('content')
            @foreach ($people as $p)
               <li>{{ $p }}</li>
             @endforeach
@stop
