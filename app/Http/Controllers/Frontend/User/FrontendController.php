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
	public function nuevoEvento()
	{
		return view('frontend.pages.nuevo_evento');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function nuevoMedia()
	{
		return view('frontend.pages.nuevo_media');
	}
}
