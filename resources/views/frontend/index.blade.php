@extends('frontend.layouts.app')

@section('content')
    <div id="map"></div>

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqveAbp5MaCFiQ8bfD72epubvrJOD2jE4&callback=initMap" async defer></script>

    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                scrollwheel: false,
                zoom: 8
            });
        }
    </script>

@endsection