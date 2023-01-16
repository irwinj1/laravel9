@extends('layouts.app')


@section('title', 'Blog')
@section('contenido')
    <h1>Blog</h1>
    @foreach ($posts as $item)
        <h2>{{ $item->title }} </h2>
    @endforeach
@endsection
