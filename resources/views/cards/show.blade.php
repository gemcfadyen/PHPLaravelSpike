@extends('layout')
@section('content')

   <div>
     {{ $card->title . '::' . $card->description}}
   </div>
@stop
