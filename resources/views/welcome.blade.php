@extends('layout')
@section('contenido')
    <h1>Lista de Post</h1>
        @foreach($publicaciones as $publicacion) 

        <article class="post no-image">
            <div class="content-post">
                <header class="container-flex space-between">
                    <div class="date">
                            <span class="c-gray-1">{{ $publicacion->publicado_el->format('M d')}}</span>                        
                    </div>
                    <div class="post-category">
                        <span class="category text-capitalize">{{ $publicacion->categoria->name}}</span>
                    </div>
                </header>
                <h1>{{$publicacion->titulo}}</h1>
                <div class="divider"></div>
                <p>{{$publicacion->extracto}}</p>
                <footer class="container-flex space-between">
                    <div class="read-more">
                    <a href="blog/{{ $publicacion->url }}" class="text-uppercase c-green">Leer mas</a>
                    </div>
                </footer>
            </div>
        </article>
        
        @endforeach
@endsection