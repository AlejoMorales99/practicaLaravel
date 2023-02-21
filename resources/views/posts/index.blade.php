@extends('layouts.app')


@section('title')
    blog
@endsection

@section('contenido')


    @if (session('status'))
        {{session('status')}}
    @endif


    <h1>blog</h1>


    @auth
        <a href="{{route('posts.create')}}">Crear nuevo post</a>
    @endauth



    @dump($posts)

    @foreach ($posts as  $post )

        <div style="display: flex; align-items:baseline" >
            <h2> <a href=" {{route('posts.show' , $post)}}">{{$post->title}}</a> </h2>&nbsp;

            <a href="{{route('posts.edit', $post )}}">Editar</a>&nbsp;

            <form method="POST"  action="{{route('posts.destroy' , $post )}}">
                @csrf
                @method('delete')
                <input type="submit" value="Eliminar" >
            </form>

        </div>

    @endforeach



@endsection


