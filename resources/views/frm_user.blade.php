@extends('layout.app')

@section('content')
<!-- Contenido principal de la sección -->
<div class="container mt-4">
    <form action="{{ route('user.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm">
        @csrf
        <h2 class="text-center mb-4">Inicio sesion</h2>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Correo Electrónico" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Iniciar</button>
        <a href="{{ route('home') }}" class="btn btn-secondary mt-3 w-100">Volver a la página principal</a>






    @endsection