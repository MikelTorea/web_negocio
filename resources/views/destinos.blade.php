@extends('layouts.app')

@section('title', 'Destinos')

@section('content')

<section class="container section">

    <h1>Destinos destacados</h1>

    <p>
        Andalucía cuenta con numerosos lugares que permiten
        descubrir su patrimonio, sus paisajes y su gastronomía.
    </p>

    <div class="cards">

        <article class="card">

            <img
                src="{{ asset('images/alhambra.jpg') }}"
                alt="Alhambra de Granada"
            >

            <h2>Granada</h2>

            <p>
                Granada destaca por su patrimonio histórico
                y por la Alhambra.
            </p>

            <ul>
                <li>Visitar la Alhambra</li>
                <li>Pasear por el Albaicín</li>
                <li>Conocer el Sacromonte</li>
            </ul>

        </article>

        <article class="card">

            <img
                src="{{ asset('images/cadiz.jpg') }}"
                alt="Costa de Cádiz"
            >

            <h2>Cádiz</h2>

            <p>
                Cádiz combina playas, patrimonio histórico
                y gastronomía.
            </p>

            <ul>
                <li>Visitar el casco histórico</li>
                <li>Disfrutar de sus playas</li>
                <li>Conocer sus pueblos</li>
            </ul>

        </article>

    </div>

</section>

@endsection