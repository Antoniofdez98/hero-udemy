@extends('layouts.app')

@section('content')

    <h1>Crear Nuevo Heroes</h1>

    <form action="{{ route('admin.heroes.store') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese un nombre" required>
        </div>

        <div class="form-group mb-3">
            <label for="hp">HP</label>
            <input type="number" class="form-control" id="hp" name="hp" placeholder="Ingrese los puntos de vida" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="atq">Ataque</label>
            <input type="number" class="form-control" id="atq" name="atq" placeholder="Ingrese los puntos de ataque" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" name="def" placeholder="Ingrese los puntos de defensa" required>
        </div>
        
        <div class="form-group mb-3">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" name="luck" placeholder="Ingrese los puntos de suerte" required>
        </div>

        <div class="form-group mb-3">
            <label for="coins">Monedas</label>
            <input type="number" class="form-control" id="coins" name="coins" placeholder="Ingrese la cantidad de monedas" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>


@endsection