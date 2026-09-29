@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<section class="hero">
    <div class="container">

        <h1>Descubre Andalucía</h1>

        <p>
            Andalucía es una comunidad llena de historia,
            naturaleza, gastronomía y ciudades con una gran
            variedad cultural.
        </p>

        <img
            src="{{ asset('images/portada.jpg') }}"
            alt="Paisaje de Andalucía"
            class="main-image"
        >

    </div>
</section>

@endsection