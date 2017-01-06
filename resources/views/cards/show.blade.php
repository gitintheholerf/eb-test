@extends('layout')

@section('content')

    <h1>{{ $card->id }} {{ $card->title }}</h1>

    {{ $card->created_at }}

    <ul class="list-group">
    @foreach($card->notes as $note)
        <li class="list-group-item"><a href="/notes/{{ $note->id }}/edit">
            {{ $note->body }}
            <a href="#" class="pull-right">{{ $note->user->username }}</a>
        </a></li>
    @endforeach
    </ul>

    <hr>

    <h3>Add a New Note</h3>

    <form method="post" action="/cards/{{ $card->id }}/notes">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group">
            <textarea name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Add Note</button>
        </div>
    </form>
@stop
