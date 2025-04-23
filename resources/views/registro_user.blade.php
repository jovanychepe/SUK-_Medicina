@extends('layout.app')

@section('content')
<!-- Contenido principal de la sección -->
<div class="container mt-4">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header text-white text-center" style="background-color: #90ee90;">
                        <h4>Registro de Usuario</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
    
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" name="name" class="form-control" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>
    
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
    
                            <button type="submit" class="btn w-100 text-white" style="background-color: #90ee90;">Registrar</button>
                            <a href="{{ route('home') }}" class="btn btn-secondary mt-3 w-100">Volver a la página principal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection