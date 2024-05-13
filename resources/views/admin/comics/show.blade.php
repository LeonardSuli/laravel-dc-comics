@extends('layouts.app')

@section('content')
    <h2>{{ $comic->title }}</h2>
    <img width="200px" src="{{ $comic->cover_image }}" alt="">
@endsection
