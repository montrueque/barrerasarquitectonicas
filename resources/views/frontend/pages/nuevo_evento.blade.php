@extends('frontend.layouts.app')

@section('title')
    Eventos
@endsection

@section('content')
    <h1>Crear evento</h1>

    <div class="row">

        <form class="form">
            <div class="form-group">
                <label for="nombre">Nombre del evento</label>
                <input id="nombre" name="nombre" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">URL imagen</label>
                <input id="imagen" name="imagen" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="inicio">Fecha inicio</label>
                <input id="inicio" name="inicio" type="date" class="form-control" />
            </div>
            <div class="form-group">
                <label for="fin">Fecha fin</label>
                <input id="fin" name="fin" type="date" class="form-control" />
            </div>
            <input class="btn btn-lg btn-primary" type="submit" value="Enviar" />
        </form>

    </div><!--row-->
@endsection