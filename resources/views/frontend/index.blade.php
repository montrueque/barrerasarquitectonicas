@extends('frontend.layouts.app')

@section('title')
    Barreras arquitectónicas
@endsection

@section('content')

    {!!$map['html']!!}

    <div class="row">

        <h1>Empieza a buscar las barreras arquitectónicas que te rodean</h1>
        <div class="col-xs-12">

            <div class="panel panel-default">
                <form>

                    <input type="text" />
                </form>
            </div><!-- panel -->

        </div><!-- col-md-10 -->

    </div><!--row-->
@endsection

@section('after-scripts')

    <script type="text/javascript">var centreGot = false;</script>{!!$map['js']!!}

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 40.45, lng: -3.7},
                scrollwheel: false,
                zoom: 8
            });
        }
    </script>

@endsection