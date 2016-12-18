<?php

namespace App\Http\Controllers\Frontend;

use App\Evento;
use App\Http\Controllers\Controller;
use App\Ley;
use App\Media;

/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		$config = array();
		$config['center'] = 'auto';
		$config['map_width'] = 400;
		$config['map_height'] = 400;
		$config['zoom'] = 10;
		$config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
 
            });
        }
        centreGot = true;';

		\Gmaps::initialize($config);

		// Colocar el marcador
		// Una vez se conozca la posición del usuario
		$marker = array();
		\Gmaps::add_marker($marker);

		$map = \Gmaps::create_map();

		return view('frontend.index')->with(compact('map'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function macros()
	{
		return view('frontend.macros');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function concienciaSocial()
	{
		$testimonios = Media::where('type', '=', 'testimonio')->take(5)->get();
		$barreras = Media::where('type', '=', 'barrera')->take(5)->get();
		
		return view('frontend.pages.conciencia_social')->with(compact('media', 'barreras'));
	}
	
	/**
	 * @return \Illuminate\View\View
	 */
	public function eventos()
	{
		$eventos = Evento::all();
		
		return view('frontend.pages.eventos')->with(compact('eventos'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function legislacion()
	{
		$leyes = Ley::all();
		
		return view('frontend.pages.legislacion')->with(compact('leyes'));
	}
}
