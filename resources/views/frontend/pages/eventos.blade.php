@extends('frontend.layouts.app')

@section('title')
    Eventos
@endsection

@section('content')
    <header role="banner" aria-label="Título"><h1>Eventos</h1></header>

    <div class="row">

        <div class="col-xs-12">

            @if(!empty($eventos) && count($eventos)>0)
                @foreach($eventos as $evento)
                    <div class="list-group">
                        <div class="list-group-item">
                            <h2 class="list-group-item-heading">{{ $evento->title }}</h2>
                            <p class="list-group-item-text">{{ $evento->description }}</p>
                            <sub class="list-group-item-text">{{ $evento->start_date }}</sub>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No hay eventos próximos en este momento</p>
            @endif

        </div><!-- col-md-10 -->

    </div><!--row-->
@endsection