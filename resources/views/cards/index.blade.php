@extends('layout')
@section('content')
<h1>All Cards</h1>

@foreach ($cards as $card)
   <div>
      {{ $card->title . ' :=  '  . $card->description }}
   </div>
@endforeach

@stop
