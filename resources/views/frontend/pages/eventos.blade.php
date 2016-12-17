@extends('frontend.layouts.app')

@section('content')
    <div class="row">

        <div class="col-xs-12">

            @if(!empty($eventos))
                @foreach($evento in $eventos)
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text">...</p>
                        </a>
                    </div>
                @endforeach
            @else
                <p>No hay eventos próximos en este momento</p>
            @endif

        </div><!-- col-md-10 -->

    </div><!--row-->
@endsection