@extends('frontend.layouts.app')

@section('title')
    Conciencia social
@endsection

@section('content')
<header role="banner" aria-label="Título"><h1>Conciencia social</h1></header>
    <div class="row">

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Testimonios con nombre y apellidos</h2>
                </div>

                <div class="panel-body">
                    @if(!empty($testimonios) && count($testimonios)>0)
                        @foreach($testimonios as $testimonio)
                            <div class="list-group">
                                <div class="list-group-item">
                                    <img src="{{ $testimonio->thumbnail_url }}" alt="{{ $testimonio->title }}" />
                                    <h3 class="list-group-item-heading">{{ $testimonio->title }}</h3>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No hay testimonios en este momento</p>
                    @endif
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

        <div class="col-xs-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Las barreras arquitectónicas en fotos y vídeos</h2>
                </div>

                <div class="panel-body">
                    @if(!empty($barreras) && count($barreras)>0)
                        @foreach($barreras as $barrera)
                            <div class="list-group">
                                <div class="list-group-item">
                                    <img src="{{ $barrera->thumbnail_url }}" alt="{{ $barrera->title }}" />
                                    <h3 class="list-group-item-heading">{{ $barrera->title }}</h3>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No hay testimonios en este momento</p>
                    @endif
                </div>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!--row-->
@endsection