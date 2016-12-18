@extends('frontend.layouts.app')

@section('title')
    Crear evento
@endsection

@section('content')
    <h1>Crear evento</h1>

    <div class="row">

        <form class="form" role="form">
            <div class="form-group">
                <label for="nombre">Nombre del evento</label>
                <input id="nombre" name="nombre" type="text" class="form-control" required="" aria-required="true"/>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" required="" aria-required="true"></textarea>
            </div>
            <div class="form-group">
                <label for="imagen">URL imagen</label>
                <input id="imagen" name="imagen" type="url" class="form-control" required="" aria-required="true"/>
            </div>
            <div class="form-group">
                <label for="inicio">Fecha inicio</label>
                <input id="inicio" name="inicio" type="date" class="form-control" required="" aria-required="true"/>
            </div>
            <div class="form-group">
                <label for="fin">Fecha fin</label>
                <input id="fin" name="fin" type="date" class="form-control" required="" aria-required="true"/>
            </div>
            <input class="btn btn-lg btn-primary" type="submit" value="Enviar" />
        </form>

    </div><!--row-->
@endsection