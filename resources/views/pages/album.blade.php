@extends('layout.base-layout')

@section('content')
    @foreach ($cds as $cd)
        <div class="cd">
            <img src="{{ $cd['poster'] }}" />
            <h3>{{ $cd['title'] }}</h3>
            <small>{{ $cd['author'] }}</small>
            <strong>{{ $cd['year'] }}</strong>
        </div>
    @endforeach
@endsection
