@extends('layouts.app')


@section('title')
    show
@endsection

@section('contenido')

    <h1>editar nuevo post</h1>

    <form method="post"  action="{{route('posts.update' , $post->id )}} ">

        @csrf @method('PATCH')

        <label for="titulo">Titulo</label><br>
        <input type="text" name="titulo" value="{{$post->title}}" ><br><br>

        @error('titulo')
            <small style="color: red" >{{$message}}</small><br>
        @enderror

        <input type="submit" value="enviar" >

    </form>



    <a href=" {{route('posts.index')}} ">Regresar</a>

@endsection
