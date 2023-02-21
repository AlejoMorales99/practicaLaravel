@extends('layouts.app')


@section('title')
    show
@endsection

@section('contenido')

<h1>{{$post->title}}</h1>

    <a href=" {{route('posts.index')}} ">Regresar</a>

@endsection

