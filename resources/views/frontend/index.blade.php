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

    <script async defer src="https://maps.googleapis.com/maps/api/js?callback=initMap"></script>
    <script>
        function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>

@endsection