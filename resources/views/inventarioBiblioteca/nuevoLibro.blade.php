@extends('adminlte::layouts.app')



@section('htmlheader_title')
    Libro Nuevo
@endsection
@section('contentheader_title')
Ingresar Libro
@endsection
@section('main-content')

    <div class="content">
<div class="row">
    <div class="input-group input-group-lg col-md-6" style="margin-left: auto; margin-right: auto;">
        <input type="text" class="form-control" id="examplebook" aria-describedby="emailHelp" placeholder="Nombre del libro a buscar">
        <span class="input-group-btn">
                      <button type="button" id="button" class="btn btn-info btn-flat">Buscar!</button>
                    </span>
    </div>
</div>
<br/><br/>
        <!-- Este DIV es para LAS BUSQUEDAS-->
        <div id="results" class="container card-deck">

        </div>
    </div>

    <!--Este DIV es para el MODAL-->
    <div class="modal fade" id="modal-default"></div>
</div>
@endsection

@section('misscripts')

    <!--Script para buscar libro escrito en el input-->
    <script src="/js/BuscarLibroGoogle.js"></script>

    <!--Script para mandar la card seleccionada al formulario-->
    <script src="/js/EscogerLibroGoogle.js" ></script>

<script src="/js/nuevoLibro2Controller.js"></script>
@endsection
