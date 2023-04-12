@extends('templates.index')

@section('title')
La web sorprendete de la vida. Asi son las cosas tal cual!!    
@endsection

@section("content")
    @include('includes.menu')
    <h1>Hola desde el home!</h1>
    <p>Hola mi nombre es {{ $name }}</p>

    @foreach ($datos as $data)
        <h2>Estos son mis datos {{ $data }}</h2>        
    @endforeach
@endsection

<x-formulario method="POST" action="/formulario" :slog="'Contenido del formulario'">
    
    <input type="text" name="nombre">
    <button type="submit">Enviar</button>
</x-formulario>


<div>
    @section('footer_web')
    <span>MosterPractice 1</span>
    @endsection

    @section('footer_age')
    <span>10 años</span>
    @endsection

    @section('footer_address')
    <span>LIma Perú</span>
    @endsection
</div>