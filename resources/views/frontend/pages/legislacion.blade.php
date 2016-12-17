@extends('frontend.layouts.app')

@section('content')
    <h1>Legislación</h1>

    <div class="row">

        <div class="col-xs-12">

            @if(!empty($leyes) && count($leyes)>0)
                @foreach($leyes as $ley)
                    <div class="list-group">
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">{{ $ley->title }}</h4>
                            <p class="list-group-item-text">{{ $ley->description }}</p>
                            <a href="{{ $ley->download_url }}" target="_blank" class="btn btn-success">Descargar</a>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No hay leyes en este momento</p>
            @endif

        </div><!-- col-md-10 -->

    </div><!--row-->
@endsection