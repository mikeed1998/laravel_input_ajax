@extends('layout.app')

@section('title', 'Home')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col text-center">
                <h1>Configuraciones</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-12 mt-3">
                <label for="texto">AJAX TEXTO</label>
                <input type="text" id="texto" class="form-control editarajax" data-model="Configuracion" data-field="texto" data-id="{{ $configuracion->id }}" value="{{ $configuracion->texto }}">
            </div>
            <div class="col-md-6 col-12 mt-3">
                <label for="numero">AJAX NUMERO</label>
                <input type="number" id="numero" class="form-control editarajax" data-model="Configuracion" data-field="numero" data-id="{{ $configuracion->id }}" value="{{ $configuracion->numero }}">
            </div>
            <div class="col-md-6 col-12 mt-3">
                <label for="fecha">AJAX FECHA</label>
                <input type="date" id="fecha" class="form-control editarajax" data-model="Configuracion" data-field="fecha" data-id="{{ $configuracion->id }}" value="{{ $configuracion->fecha }}">
            </div>
            <div class="col-md-6 col-12 mt-3">
                <label for="color">AJAX COLOR</label>
                <input type="color" id="color" class="form-control form-control-color editarajax" data-model="Configuracion" data-field="color" data-id="{{ $configuracion->id }}" value="{{ $configuracion->color }}">
            </div>
        </div>    
        <div class="row mt-5">
            <div class="col-6">
                <form action="{{ route('subir_imagen') }}" method="POST" id="form-imagen" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="form-control" id="imagenInput" name="imagen">
                </form>
            </div>
        </div>
    </div>
@endsection

