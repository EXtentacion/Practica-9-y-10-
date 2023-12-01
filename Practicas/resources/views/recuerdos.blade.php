@extends('Layouts.plantilla')

@section('title', 'Formulario')


@section('contenido')

    <h1>Recuerdos</h1>
    
    @foreach ($consultaRecuerdos as $recuerdo)

        <div class="card w-50 mb-3 mt-5">
            <div class="card-body">
            <h5 class="card-title"> {{ $recuerdo->titulo }} </h5>
            <p class="card-text"> {{ $recuerdo->fecha }}</p>
            <p class="card-text"> {{ $recuerdo->descripcion }}</p>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar">
            Editar
            </button>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eliminar">
            Eliminar
            </button>

            </div>
        </div>
        
    @endforeach
   

@endsection