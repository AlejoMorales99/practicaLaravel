@extends('layouts.app')


@section('title')
    show
@endsection

@section('contenido')

    <h1>crear nuevo post</h1>


    <form method="post"  action="{{route('posts.store')}} ">
        @csrf
        <label for="titulo">Titulo</label><br>
        <input class="form-control" type="text" name="titulo" value="{{old('titulo')}}" ><br><br>
        @error('titulo')
            <small style="color: red" >{{$message}}</small><br>
        @enderror

        <input type="submit" value="enviar" >

    </form>


    <a href=" {{route('posts.index')}} ">Regresar</a>

@endsection
