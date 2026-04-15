@extends('adminlte::page')

@section('title', 'Fotos')

@section('content_header')
    <h1 class="m-0 text-dark">Fotos</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Galeria de ejemplo</h3>
                </div>
                <div class="card-body">
                    <p>
                        Esta seccion representa la galeria del proyecto. Su contenido es diferente al
                        de Inicio y Contacto para cumplir con la actividad y demostrar la separacion
                        de vistas dentro del panel.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Galeria 1</h3>
                </div>
                <div class="card-body">
                    <p>Imagen destacada de muestra para la actividad.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Galeria 2</h3>
                </div>
                <div class="card-body">
                    <p>Espacio reservado para una segunda fotografia o descripcion.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 class="card-title">Galeria 3</h3>
                </div>
                <div class="card-body">
                    <p>Ejemplo de tarjeta adicional para contenido visual del panel.</p>
                </div>
            </div>
        </div>
    </div>
@stop
