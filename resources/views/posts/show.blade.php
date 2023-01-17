@extends('layouts.app')

@section('contenido')
    <h1>ejemplo {{$post->title}}</h1>
    <p>{{$post->body}}</p>

    <a href="{{route('posts.index')}}">Regresar</a>
@endsection