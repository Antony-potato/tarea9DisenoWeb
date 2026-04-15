@extends('adminlte::page')

@section('title', 'Contacto')

@section('content_header')
    <h1 class="m-0 text-dark">Contacto</h1>
@stop

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card card-outline card-warning">
                <div class="card-header">
                    <h3 class="card-title">Formulario de contacto simulado</h3>
                </div>
                <div class="card-body">
                    <p>
                        Esta vista adapta el formulario de contacto de la Actividad 11 al estilo del
                        panel administrativo. El formulario es visual y no envia informacion.
                    </p>

                    <form>
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Escribe tu nombre">
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo electronico</label>
                            <input id="correo" name="correo" type="email" class="form-control" placeholder="nombre@ejemplo.com">
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea id="mensaje" name="mensaje" class="form-control" rows="5" placeholder="Escribe aqui tu mensaje"></textarea>
                        </div>

                        <button type="button" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
