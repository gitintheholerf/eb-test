@extends('layout')

@section('content')

    <h1>{{ $card->id }} {{ $card->title }}</h1>

    {{ $card->created_at }}
@stop
