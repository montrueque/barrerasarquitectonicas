@extends('frontend.layouts.app')

@section('title')
    Crear elemento multimedia
@endsection

@section('content')
    <h1>Crear elemento multimedia</h1>

    <div class="row">

        <form class="form" role="form">
            <div class="form-group">
                <label for="titulo">Título</label>
                <input id="titulo" name="titulo" type="text" class="form-control" required="" aria-required="true"/>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" required="" aria-required="true"></textarea>
            </div>
            <div class="form-group">
                <label for="recurso">URL del recurso</label>
                <input id="recurso" name="recurso" type="url" class="form-control" required="" aria-required="true"/>
            </div>
            <div class="form-group">
                <label for="imagen">URL imagen de vista previa</label>
                <input id="imagen" name="imagen" type="url" class="form-control" required="" aria-required="true"/>
            </div>
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <select id="tipo" name="tipo" class="form-control" required="" aria-required="true">
                    <option value="1">Testimonio</option>
                    <option value="2">Barreras</option>
                </select>
            </div>
            <input class="btn btn-lg btn-primary" type="submit" value="Enviar" />
        </form>

    </div><!--row-->
@endsection