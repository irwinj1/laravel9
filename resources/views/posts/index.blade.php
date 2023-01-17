@extends('layouts.app')


@section('title', 'Blog')
@section('contenido')
    <h1>Blog</h1>
    <a href="{{route('posts.add')}}">Agregar post</a>
    @foreach ($posts as $item)
       <h2>
        <a href="{{route('posts.show',$item)}}">{{$item->title}}</a>
       </h2>
    @endforeach
@endsection
