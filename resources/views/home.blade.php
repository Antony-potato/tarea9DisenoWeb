@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1 class="m-0 text-dark">Inicio</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <h3 class="card-title mb-3">Bienvenido a la Actividad 11 integrada en AdminLTE</h3>
                    <p>
                        Esta pagina principal muestra la adaptacion del contenido original de Blade a
                        un panel administrativo moderno. El menu lateral permite navegar entre las
                        secciones de Inicio, Fotos y Contacto sin repetir estructura HTML.
                    </p>
                    <p class="mb-0">
                        El objetivo es demostrar el uso de Laravel con AdminLTE, manteniendo un
                        contenido claro, ordenado y consistente en todas las vistas.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3>3</h3>
                    <p>Secciones principales</p>
                </div>
                <div class="icon">
                    <i class="fas fa-layer-group"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Blade</h3>
                    <p>Plantillas heredadas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-code"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>AdminLTE</h3>
                    <p>Dashboard visual</p>
                </div>
                <div class="icon">
                    <i class="fas fa-desktop"></i>
                </div>
            </div>
        </div>
    </div>
@stop
