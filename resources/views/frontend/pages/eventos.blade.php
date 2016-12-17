@extends('frontend.layouts.app')

@section('content')
    <h1>Eventos</h1>

    <div class="row">

        <div class="col-xs-12">

            @if(!empty($eventos) && count($eventos)>0)
                @foreach($eventos as $evento)
                    <div class="list-group">
                        <div class="list-group-item">
                            <h4 class="list-group-item-heading">{{ $evento->title }}</h4>
                            <p class="list-group-item-text">{{ $evento->description }}</p>
                            <sub class="list-group-item-text">{{ $evento->start_date }} - {{ $evento->end_date }}</sub>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No hay eventos próximos en este momento</p>
            @endif

        </div><!-- col-md-10 -->

    </div><!--row-->
@endsection